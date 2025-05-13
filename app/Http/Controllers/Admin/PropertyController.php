<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Location;
use App\Models\Properties;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PropertyController extends Controller
{
    public function index()
    {
        $properties = Properties::with('locations')->get();
        // return $properties;
        return view('admin.property.index', compact('properties'));
    }

    public function create()
    {
        $locations = Location::all();
        return view('admin.property.create', compact('locations'));
    }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'description' => 'required',
    //         'type' => 'required',
    //         'time_period' => 'required',
    //         'address' => 'required',
    //         'regency' => 'required',
    //         'locations' => 'required',
    //     ]);
    //     $property = Properties::create($request->only('name', 'description', 'type', 'time_period', 'address', 'regency'));

    //     foreach ($request->locations as $locationId => $data) {
    //         $property->locations()->attach($locationId, ['distance' => $data['distance']]);
    //     }


    //     return redirect()->route('admin.property.index');
    // }

    public function store(Request $request)
    {
        // return $request->all();
        // Validasi input
        $userId = Auth::user()->id;
        $validated = $request->validate([
            // 'user_id' => 'required|exists:users,id',
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'type' => 'required|string',
            'time_period' => 'required|date',
            'address' => 'required|string',
            'regency' => 'required|string',
            'locations' => 'required|array',
            'locations.*.distance' => 'required|numeric|min:0.01', // Validasi jarak
        ]);

        $validated['user_id'] = $userId;

        // Buat properti baru
        $property = Properties::create($validated);

        // Simpan lokasi dengan jarak yang valid
        foreach ($request->locations as $locationId => $data) {
            if (!empty($data['distance'])) {
                $property->locations()->attach($locationId, ['distance' => $data['distance']]);
            }
        }

        return redirect()->route('admin.property.index')->with('success', 'Properti berhasil ditambahkan.');
    }

    // public function show(Properties $property)
    // {
    //     return view('properties.show', compact('property'));
    // }

    public function edit(Properties $property)
    {
        $locations = Location::all();
        return view('admin.property.edit', compact('property', 'locations'));
    }

    public function update(Request $request, Properties $property)
    {
        $property->update($request->only('name', 'description', 'type', 'time_period', 'address', 'regency'));

        $property->locations()->detach();
        foreach ($request->locations as $locationId => $data) {
            if (!empty($data['distance'])) {
                $property->locations()->attach($locationId, ['distance' => $data['distance']]);
            }
        }
        return redirect()->route('admin.property.index');
    }

    public function destroy(Properties $property)
    {
        $property->locations()->detach();
        $property->delete();
        return redirect()->route('admin.property.index');
    }
}
