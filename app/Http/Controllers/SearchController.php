<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use App\Models\Properties;
use App\Models\Room;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $params = request()->query();
        $rooms = Room::with('facilities')->filter($params)->get();

        return $rooms;
        $facilities = Facility::with('rooms')->filter($params)->get();

        return view('results', compact('properties'));
    }
}
