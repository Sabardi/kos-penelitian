<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Facility;
use Illuminate\Http\Request;

class FacilyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $facilities = Facility::paginate(10);
        // return $facilities;
        return view('admin.facility', compact('facilities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.facility.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        try {
            Facility::create($validated);
            return redirect()->route('admin.facility.index')->with('success', 'facility successfully');
        } catch (\Throwable $th) {
            return redirect()->route('admin.facility.index')->withErrors(['error' => 'Failed to create facility']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Facility $facility)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Facility $facility)
    {
        return view('admin.facility.edit', compact('facility'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Facility $facility)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        try {
            $facility->update($validated);
            return redirect()->route('admin.facility.index')->with('success', 'facility updated successfully');
        } catch (\Throwable $th) {
            return redirect()->route('admin.facility.index')->withErrors(['error' => 'Failed to update facility']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Facility $facility)
    {
        try {
            $facility->delete();
            return redirect()->route('admin.facility.index')->with('success', 'facility deleted successfully');
        } catch (\Throwable $th) {
            return redirect()->route('admin.facility.index')->withErrors(['error' => 'Failed to delete facility']);
        }
    }
}
