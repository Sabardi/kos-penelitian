<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use App\Models\Location;
use App\Models\Properties;
use App\Models\Room;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $params = request()->query();
        $rooms = Room::with(['reviews', 'property', 'facilities'])
        ->withAvg('reviews', 'rating')
        ->where('availability', true)
        ->get();

        // $locations = Location::with('properties')->filter($params)->get();
        $locations = Location::with('properties')->filter($params)->get();
        // return $locations;
        $faciltas = Facility::with('rooms')->filter($params)->get();
        $types = Properties::with('rooms')->filter($params)->get();

        // return $types;
        return view('results', compact('rooms', 'faciltas', 'types' , 'locations'));
    }
}
