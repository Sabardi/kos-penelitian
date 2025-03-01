<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Facility;
use App\Models\Properties;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AllRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function allrooms()
    {
        $allrooms = Room::all();
        return view('admin.room.allroom', compact('allrooms'));
    }
    public function index($property)
    {
        // return $property;
        $rooms = Room::where('property_id', $property)->with('property', 'facilities')->get();
        return view('admin.room.index', compact('property', 'rooms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($property)
    {
        $facilities = Facility::all(); // get all facilities
        return view('admin.room.create', compact('property', 'facilities'));
    }

    /**
     * Store a newly created resource in storage.
     */


    public function store(Request $request, $property)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'availability' => 'boolean',
            'count_visitor' => 'integer|min:0',
            'size' => 'required|string',
            'price' => 'required|numeric|min:0',
            'foto_room' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'facilities' => 'array'
        ]);

        // Set property_id dari parameter
        $validatedData['property_id'] = $property;

        $validatedData['foto_room'] = $request->file('foto_room')->store('rooms', 'public');

        // Simpan kamar ke database
        $room = Room::create($validatedData);

        // Menyimpan fasilitas ke tabel pivot jika ada
        if ($request->has('facilities')) {
            $room->facilities()->sync($request->facilities);
        }

        return redirect()->route('admin.property.rooms.index', $property)->with('success', 'Room created successfully');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($property, Room $room)
    {
        $facilities = Facility::all(); // get all facilities

        return view('admin.room.edit', compact('property', 'facilities', 'room'));
    }

    public function update(Request $request, $property, $room)
    {
        // Validasi data yang dikirimkan oleh pengguna
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'availability' => 'boolean',
            'count_visitor' => 'integer|min:0',
            'size' => 'required|string',
            'price' => 'required|numeric|min:0',
            'foto_room' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'facilities' => 'array'
        ]);

        // Temukan kamar berdasarkan ID
        $room = Room::findOrFail($room);

        // Update property_id jika diperlukan (biasanya tidak diubah, tetapi bisa disesuaikan)
        $validatedData['property_id'] = $property;

        // Handle upload foto jika ada file baru
        if ($request->hasFile('foto_room')) {
            // Hapus foto lama jika ada
            if ($room->foto_room) {
                Storage::disk('public')->delete($room->foto_room);
            }
            // Simpan foto baru
            $validatedData['foto_room'] = $request->file('foto_room')->store('rooms', 'public');
        }

        // Update data kamar
        $room->update($validatedData);

        // Menyimpan fasilitas ke tabel pivot jika ada
        if ($request->has('facilities')) {
            $room->facilities()->sync($request->facilities);
        } else {
            // Jika tidak ada fasilitas yang dikirimkan, hapus semua fasilitas terkait
            $room->facilities()->detach();
        }

        // Redirect dengan pesan sukses
        return redirect()->route('admin.property.rooms.index', $property)->with('success', 'Room updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     */
    // public function destroy($property, Room $room)
    // {
    //     $room->delete();
    //     return redirect()->route('admin.property.rooms.index', $property)->with('success', 'Room deleted successfully');
    // }

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
        return redirect()->route('admin.property.rooms.index', $property)->with('success', 'Room deleted successfully');
    }
}
