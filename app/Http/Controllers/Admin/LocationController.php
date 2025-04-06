<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index()
    {
        $locations = Location::all();
        // return $locations;
        return view('admin.location.index', compact('locations'));
    }

    public function create()
    {
        return view('admin.location.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:locations,name',
        ]);
        
        Location::create($request->only(['name']));
        return redirect()->route('location.index')->with('success', 'Location created successfully');
    }

    public function show(Location $location)
    {
        return view('admin.location.show', compact('location'));
    }

    public function edit(Location $location)
    {
        return view('admin.location.edit', compact('location'));
    }

    public function update(Request $request, Location $location)
    {
        $location->update($request->only('name'));
        return redirect()->route('admin.location.index');
    }

    public function destroy(Location $location)
    {
        $location->delete();
        return redirect()->route('adminlocation.index');
    }
}
