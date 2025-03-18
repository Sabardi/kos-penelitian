<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Models\Facility;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class RoomController extends Controller
{
    public function index()
    {
        // Ambil user yang sedang login
        $user = Auth::user();

        // Ambil properti yang dimiliki oleh user
        $property = $user->properties;

        if (!$property) {
            return redirect()->route('owner.dashboard')->with('error', 'Anda sudah memiliki properti.');
        }

        // Ambil semua room yang dimiliki oleh properti user
        $rooms = $property->rooms()->with('facilities')->get();

        return view('owner.room.index', compact('rooms', 'property'));
    }



    public function create()
    {
        $property = Auth::user()->properties;

        // return $property;

        $facilities = Facility::all(); // get all facilities
        return view('owner.room.create', compact('facilities', 'property'));
    }

    public function store(Request $request, $property)
    {
        // Validasi input
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'size' => 'required|string',
            'price' => 'required|numeric|min:0',
            'foto_room' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'facilities' => 'array'
        ]);

        // Set property_id dari parameter
        $validatedData['property_id'] = $property;

        try {
            DB::beginTransaction(); // Mulai transaksi

            // Simpan gambar jika diunggah
            if ($request->hasFile('foto_room')) {
                $validatedData['foto_room'] = $request->file('foto_room')->store('rooms', 'public');
            }

            $room = Room::create($validatedData);
            // Menyimpan fasilitas ke tabel pivot jika ada
            if ($request->has('facilities')) {
                $room->facilities()->sync($request->facilities);
            }

            DB::commit();

            return redirect()->route('owner.rooms')->with('success', 'Room created successfully');
        } catch (\Exception $e) {
            DB::rollBack(); // Rollback jika ada error

            // Hapus file yang terlanjur diunggah
            if (isset($validatedData['foto_room'])) {
                Storage::disk('public')->delete($validatedData['foto_room']);
            }

            return redirect()->back()
                ->withErrors(['error' => 'Failed to create room. Please try again.'])
                ->withInput(); // Mengembalikan data input
        }
    }



    public function show($id)
    {
        $room = Room::with('property', 'facility', 'reviews')->findOrFail($id);
        return view('rooms.show', compact('room'));
    }


    public function edit($property, Room $room)
    {
        $facilities = Facility::all();
        return view('owner.room.edit', compact('property', 'room', 'facilities'));
    }


    // public function update(Request $request, $property, $room)
    // {
    //     // Validasi data yang dikirimkan oleh pengguna
    //     $validatedData = $request->validate([
    //         'name' => 'required|string|max:255',
    //         'availability' => 'boolean',
    //         'count_visitor' => 'integer|min:0',
    //         'size' => 'required|string',
    //         'price' => 'required|numeric|min:0',
    //         'foto_room' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    //         'facilities' => 'array'
    //     ]);

    //     // Temukan kamar berdasarkan ID
    //     $room = Room::findOrFail($room);

    //     // Update property_id jika diperlukan (biasanya tidak diubah, tetapi bisa disesuaikan)
    //     $validatedData['property_id'] = $property;

    //     // Handle upload foto jika ada file baru
    //     if ($request->hasFile('foto_room')) {
    //         // Hapus foto lama jika ada
    //         if ($room->foto_room) {
    //             Storage::disk('public')->delete($room->foto_room);
    //         }
    //         // Simpan foto baru
    //         $validatedData['foto_room'] = $request->file('foto_room')->store('rooms', 'public');
    //     }

    //     // Update data kamar
    //     $room->update($validatedData);

    //     // Menyimpan fasilitas ke tabel pivot jika ada
    //     if ($request->has('facilities')) {
    //         $room->facilities()->sync($request->facilities);
    //     } else {
    //         // Jika tidak ada fasilitas yang dikirimkan, hapus semua fasilitas terkait
    //         $room->facilities()->detach();
    //     }

    //     // Redirect dengan pesan sukses
    //     return redirect()->route('owner.owner.room', $property)->with('success', 'Room updated successfully');
    // }

    public function update(Request $request, $property, Room $room)
    {
        // Validasi input
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'size' => 'required|string',
            'price' => 'required|numeric|min:0',
            'foto_room' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'facilities' => 'array'
        ]);

        try {
            DB::beginTransaction(); // Mulai transaksi

            // Jika ada gambar baru, hapus gambar lama dan simpan yang baru
            if ($request->hasFile('foto_room')) {
                // Hapus gambar lama jika ada
                if ($room->foto_room) {
                    Storage::disk('public')->delete($room->foto_room);
                }

                // Simpan gambar baru
                $validatedData['foto_room'] = $request->file('foto_room')->store('rooms', 'public');
            } else {
                // Jika tidak ada gambar baru, gunakan gambar lama
                $validatedData['foto_room'] = $room->foto_room;
            }

            // Update room dengan data yang baru
            $room->update($validatedData);

            // Update fasilitas di tabel pivot
            if ($request->has('facilities')) {
                $room->facilities()->sync($request->facilities);
            }

            DB::commit();

            return redirect()->route('owner.rooms')->with('success', 'Room updated successfully');
        } catch (\Exception $e) {
            DB::rollBack(); // Rollback jika ada error

            return redirect()->back()
                ->withErrors(['error' => 'Failed to update room. Please try again.'])
                ->withInput(); // Mengembalikan data input
        }
    }




    public function destroy($property, Room $room)
    {
        // Temukan kamar berdasarkan ID
        // $room = Room::findOrFail($room);

        // Hapus foto jika ada
        if ($room->foto_room) {
            Storage::disk('public')->delete($room->foto_room);
        }

        // Hapus fasilitas terkait dari tabel pivot
        $room->facilities()->detach();

        // Hapus kamar dari database
        $room->delete();

        // Redirect dengan pesan sukses
        return redirect()->route('owner.rooms', $property)->with('success', 'Room deleted successfully');
    }


    public function book(Request $request, $id)
    {
        $room = Room::findOrFail($id);
        if ($room->availability) {
            // Simpan booking
            $booking = $room->bookings()->create([
                'user_id' => Auth::id(),
                'check_in' => now(),
            ]);

            // Update interaksi
            $room->interactions()->create([
                'user_id' => Auth::id(),
                'interaction_type' => 'booking',
                'interaction_value' => 1,
            ]);

            return redirect()->back()->with('success', 'Booking berhasil!');
        }

        return redirect()->back()->with('error', 'Kamar tidak tersedia.');
    }

    public function showAddFacilityForm(Request $request){
        $request->validate([
            'name' => 'required|string|unique:facilities,name,max:255',
        ]);
        Facility::create($request->only('name'));
        // return "ok";
        return redirect()->back();
    }
}
