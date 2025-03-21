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
    //     $params = request()->query();


    //     $locations = Location::with(['properties' => function ($query) use ($params) {
    //         $query->filter($params);
    //     }])->filter($params)->get();

    //     // return $locations;
    //     $facilities = Facility::with(['rooms' => function ($query) use ($params) {
    //         $query->filter($params);
    //     }])->filter($params)->get();

    //     $types = Properties::with(['rooms' => function ($query) use ($params) {
    //         $query->filter($params);
    //     }])->filter($params)->get();



    //    // $rooms = Room::with(['reviews', 'property', 'facilities'])
    //     //     ->withAvg('reviews', 'rating')
    //     //     ->where('availability', true)
    //     //     ->get();
    //     // return $types;
    //     return view('results', compact('locations', 'facilities', 'types'));
    //     // return view('results', compact('rooms', 'faciltas', 'types', 'locations'));


      // Query untuk lokasi dengan filter dari request
      $locationsQuery = Location::query();

      if ($request->has('keyword')) {
          $locationsQuery->where('name', 'LIKE', "%{$request->keyword}%");
      }

      $locations = $locationsQuery->with(['properties' => function ($query) use ($request) {
          // Filter pada properties jika diperlukan
          if ($request->has('keyword')) {
              $query->where('name', 'LIKE', "%{$request->keyword}%");
          }
      }])->get();

      // Query untuk fasilitas dengan filter dari request
      $facilitiesQuery = Facility::query();

      if ($request->has('facilities')) {
          $facilitiesQuery->where('name', 'LIKE', "%{$request->facilities}%");
      }

      if ($request->has('keyword')) {
          $facilitiesQuery->orWhere('name', 'LIKE', "%{$request->keyword}%");
      }

      $facilities = $facilitiesQuery->with(['rooms' => function ($query) use ($request) {
          // Filter pada rooms jika diperlukan
          if ($request->has('keyword')) {
              $query->where('name', 'LIKE', "%{$request->keyword}%");
          }
      }])->get();

      // Query untuk properties dengan filter dari request
      $propertiesQuery = Properties::query();

      if ($request->has('type')) {
          $propertiesQuery->where('type', 'LIKE', "%{$request->type}%");
      }

      $types = $propertiesQuery->with(['rooms' => function ($query) use ($request) {
          // Filter pada rooms jika diperlukan
          if ($request->has('keyword')) {
              $query->where('name', 'LIKE', "%{$request->keyword}%");
          }
      }])->get();

      // Mengirim data ke view
      return view('results', compact('locations', 'facilities', 'types'));
    }
}
