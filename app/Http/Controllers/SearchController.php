<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use App\Models\Location;
use App\Models\Properties;
use App\Models\Room;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    // public function index(Request $request)
    // {
    //     $params = request()->query();

    //     $facilities = Facility::where('name', 'like', '%' . $params['facilities'] . '%')->with('rooms')->get();
    //     $locations = Location::where('name', 'like', '%' . $params['keyword'] . '%')->with('properties.rooms')->get();
    //     $locations = Room::filter($params)->get();

    //     return $locations;
    //     $rooms = Room::with('facilities')->filter($params)->get();
    //     $locations = Room::with('facilities')->filter($params)->get();

    //     return $rooms;
    //     $facilities = Facility::with('rooms')->filter($params)->get();

    //     return view('results', compact('properties'));
    // }

    public function index(Request $request)
    {
        $query = Room::query();

        // Filter berdasarkan lokasi atau nama properti
        if ($request->has('keyword')) {
            $keyword = $request->input('keyword');
            $query->whereHas('property', function ($q) use ($keyword) {
                $q->where('name', 'like', "%$keyword%")
                  ->orWhere('address', 'like', "%$keyword%")
                  ->orWhere('regency', 'like', "%$keyword%");
            });
        }

        // Filter berdasarkan fasilitas
        if ($request->has('facilities') && $request->facilities != 'Facilitas') {
            $facility = $request->input('facilities');
            $query->whereHas('facilities', function ($q) use ($facility) {
                $q->where('name', $facility);
            });
        }

        // Filter berdasarkan harga
        if ($request->has('price')) {
            switch ($request->price) {
                case '100 rb - 500 rb':
                    $query->whereBetween('price', [100000, 500000]);
                    break;
                case '500 rb - 1 jt':
                    $query->whereBetween('price', [500000, 1000000]);
                    break;
                case '1 jt - 2 jt':
                    $query->whereBetween('price', [1000000, 2000000]);
                    break;
                case 'Di atas 2 jt':
                    $query->where('price', '>', 2000000);
                    break;
            }
        }

        // Filter berdasarkan tipe kos
        if ($request->has('type') && $request->type != 'Type') {
            $query->whereHas('property', function ($q) use ($request) {
                $q->where('type', $request->type);
            });
        }

        $rooms = $query->with('property')->get();

        return $rooms;
        return view('search.results', compact('rooms'));
    }

}
