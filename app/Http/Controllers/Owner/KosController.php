<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Models\Location;
use App\Models\Properties;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class KosController extends Controller
{
    public function showFillKosForm()
    {
        // lakukan pengecekan apakah user sudah memiliki properti atau belom berdasra user / user id
        $userId = Auth::id();
        $userProperties = Properties::where('user_id', $userId)->exists();
        // Ambil 10 lokasi pertama yang terurut berdasarkan nama dari A - Z
        $locations = Location::all();

        if ($userProperties) {
            return redirect()->route('owner.dashboard')->with('error', 'Anda sudah memiliki properti.');
        }

        return view('owner.property.create', compact('locations'));
    }

    public function store(Request $request)
    {
        // return $request->all();
        $userId = Auth::id();

        // Validasi input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'type' => 'required|string',
            'time_period' => 'required|string',
            'address' => 'required|string',
            'regency' => 'required|string',
            'locations' => 'required|array',
            'distances' => 'array', // Menambahkan validasi untuk jarak
            'distances.*' => 'numeric|min:0.01', // Pastikan setiap jarak yang dikirim adalah angka positif
        ]);


        $validated['user_id'] = $userId;

        // $property = Properties::create($validated);
        // return "ok";
        // Gunakan transaksi database untuk memastikan semua data masuk atau batal jika ada error
        DB::beginTransaction();
        try {
            // Simpan properti baru
            $property = Properties::create($validated);

            // Simpan relasi many-to-many dengan jarak
            foreach ($request->locations as $locationId) {
                if (!empty($request->distances[$locationId])) {
                    $distance = $request->distances[$locationId]; // Ambil nilai jarak dari array distances
                    $property->locations()->attach($locationId, ['distance' => $distance]);
                }
            }

            DB::commit();

            // return "ok";
            return redirect()->route('owner.dashboard')->with('success', 'Properti berhasil ditambahkan.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function showEditKosForm(Properties $property)
    {
        $locations = Location::all();

        return view('owner.property.edit', compact('property', 'locations'));
    }



    public function update(Request $request, $id)
    {
        // Validasi input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'type' => 'required|string',
            'time_period' => 'required|string',
            'address' => 'required|string',
            'regency' => 'required|string',
            'locations' => 'array',
            'distances' => 'array',
            'distances.*' => 'numeric|min:0.01',
        ]);

        // Temukan properti berdasarkan ID
        $property = Properties::findOrFail($id);

        DB::beginTransaction();
        try {
            // Perbarui data properti
            $property->update($validated);

            // Sinkronisasi lokasi & jarak dengan pivot table
            $syncData = [];
            foreach ($request->locations as $locationId) {
                if (!empty($request->distances[$locationId])) {
                    $syncData[$locationId] = ['distance' => $request->distances[$locationId]];
                }
            }
            $property->locations()->sync($syncData);

            DB::commit();
            return redirect()->route('owner.dashboard')->with('success', 'Properti berhasil diperbarui.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
