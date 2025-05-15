<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use App\Models\Location;
use App\Models\Properties;
use App\Models\Room;
use App\Models\UserPreference;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserReperenceController extends Controller
{


    public function index()
    {
        // $userId = Auth::id();
        // $userPreference = UserPreference::where('user_id', $userId)->first();

        // if ($userPreference) {
        //     $facilities = Facility::whereIn('id', json_decode($userPreference->facilities))->get();
        // } else {
        //     $facilities = [];
        // }

        // return view('tenant.reference', compact('userPreference', 'facilities'));

        // Ambil data user preferences berdasarkan user yang sedang login
        // $userPreferences = UserPreference::where('user_id', Auth::id())->first();

        // // Ambil data fasilitas dari kolom 'facilities'
        // $facilities = $userPreferences ? $userPreferences->facilities : [];
        // return $facilities;
        // return $userPreferences;


        // Ambil fasilitas dari user preference berdasarkan user yang sedang login
        $userPreferences = UserPreference::where('user_id', Auth::id())->first();

        // Pastikan ada fasilitas yang dipilih oleh user
        if (!$userPreferences || empty($userPreferences->facilities)) {
            return response()->json(['message' => 'No facilities selected'], 400);
        }

        // Ambil fasilitas yang dipilih oleh user (ID fasilitas)
        $facilityIds = $userPreferences->facilities;
        $locationIds = $userPreferences->locations;
        $roomType = $userPreferences->type;

        // Cari kamar yang memiliki fasilitas yang sesuai dengan pilihan user
        // $rooms = Room::with('facilities', 'property.locations')->whereHas('facilities', function ($query) use ($facilityIds, $locationIds) {
        //     $query->whereIn('facilities.id', $facilityIds)
        //      ->whereHas('property.locations', function ($query) use ($locationIds) {
        //     $query->whereIn('locations.id', $locationIds); // Filter berdasarkan lokasi properti
        // })
        //     ; // Pastikan menggunakan alias 'facilities.id'


        // })
        // ->get();

        // Cari kamar yang memiliki fasilitas yang sesuai dengan pilihan user dan lokasi yang sesuai
        // $rooms = Room::with('facilities', 'property.locations') // Memuat relasi fasilitas dan lokasi
        //     ->whereHas('facilities', function ($query) use ($facilityIds) {
        //         $query->whereIn('facilities.id', $facilityIds); // Filter berdasarkan fasilitas
        //     })
        //     ->whereHas('property.locations', function ($query) use ($locationIds) {
        //         $query->whereIn('locations.id', $locationIds); // Filter berdasarkan lokasi properti
        //     })
        //     ->get();

        // Cari kos-kosan yang memiliki fasilitas yang sesuai dengan pilihan user dan lokasi yang sesuai
        $properties = Properties::whereHas('rooms', function ($query) use ($facilityIds,  $roomType) {
            // Filter berdasarkan fasilitas
            $query->whereHas('facilities', function ($query) use ($facilityIds) {
                $query->whereIn('facilities.id', $facilityIds); // Filter berdasarkan fasilitas
            });

            // Filter berdasarkan tipe kamar jika ada
            if ($roomType) {
                $query->where('type', $roomType);
            }
        })
            ->whereHas('locations', function ($query) use ($locationIds) {
                $query->whereIn('locations.id', $locationIds); // Filter berdasarkan lokasi properti
            })
            ->get();

        // return $properties;

        // Mengembalikan daftar kamar yang ditemukan
        // return response()->json($properties);

        return view('tes', compact('properties' ));
    }
    public function createReference()
    {

        $locations = Location::all();
        $facilities = Facility::all();
        return view('tenant.create-reference', compact('locations', 'facilities'));
    }

    public function store(Request $request)
    {


        // Validasi data yang diterima
        $request->validate([
            'type' => 'required|string|in:putra,putri,campur,keluarga', // memastikan type adalah string dan salah satu dari pilihan
            'locations' => 'nullable|array', // memastikan facilities adalah array atau null
            'locations.*' => 'exists:locations,id', // memastikan semua id locations ada dalam tabel locations
            'facilities' => 'nullable|array', // memastikan facilities adalah array atau null
            'facilities.*' => 'exists:facilities,id', // memastikan semua id fasilitas ada dalam tabel facilities
        ]);

        // Simpan data ke tabel user_preferences
        UserPreference::create([
            'user_id' => Auth::id(), // Mengambil ID user yang sedang login
            'type' => $request->input('type'), // Ambil type dari request
            'locations' => $request->input('locations', []), // Kirim array location tanpa encode
            'facilities' => $request->input('facilities', []), // Kirim array fasilitas tanpa encode
        ]);


        // Validate input
        // $request->validate([
        //     // 'locations' => 'required|array', // Ensure locations are selected
        //     // 'locations.*' => 'exists:locations,id', // Each location id must exist
        //     'facilities' => 'nullable', // Facilities are optional
        //     // 'facilities' => 'nullable|array', // Facilities are optional
        //     // 'facilities.*' => 'exists:facilities,id', // Each facility id must exist
        //     // 'gender_type' => 'required|string|in:putra,putri,campur,keluarga', // Validate gender type
        //     // 'min_price' => 'nullable|integer|min:0', // Validate min_price (optional, positive integer)
        //     // 'max_price' => 'nullable|integer|min:0|gte:min_price', // Validate max_price (optional, must be greater than or equal to min_price)
        // ]);

        // return $request->all();

        // Get facilities from request, default to empty array if not provided
        // Create the reference (assuming it's a model for storing the reference data)
        // $reference = new UserPreference();
        // $reference->user_id = auth()->id(); // assuming you're using auth
        // // $reference->location = json_encode($request->locations); // Store locations as JSON
        // $reference->facilities = $request->facilities; // Store facilities as JSON
        // $reference->gender_type = $request->gender_type;
        // $reference->min_price = $request->min_price;
        // $reference->max_price = $request->max_price;

        // $reference->save();

        // Redirect or return success message
        return 'ok';
        // return redirect()->route('reference.index')->with('success', 'Reference created successfully.');
    }
}
