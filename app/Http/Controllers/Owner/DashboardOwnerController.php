<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Properties;
use App\Models\Review;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardOwnerController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // melakukan pengecekan user yang login dan mencari apakah dia sudah mendaftarkan kos atau belum, jika belom maka akan di arahkan ke halaman untuk mengisi data kos, jika sudah akan di rahkan ke view dashboard owner
        $user = Auth::user();

        $countRoom = Room::whereHas('property', function ($query) use ($user) {
            $query->where('user_id', $user->id);
        })->count();

        // Menghitung total count_visitor dari semua room milik user yang login
        $totalVisitors = Room::whereHas('property', function ($query) use ($user) {
            $query->where('user_id', $user->id);
        })->sum('count_visitor');

        $totalRent = Booking::whereHas('room.property', function ($query) use ($user) {
            $query->where('user_id', $user->id);
        })->count();

        // return $averageRating;
        // Mengecek apakah user memiliki properti (kos)
        $property = Properties::where('user_id', $user->id)->first();
        // return $property;
        if (!$property) {
            // Jika belum memiliki kos, arahkan ke halaman pendaftaran kos
            return redirect()->route('owner.fill-kos');
        } elseif ($property) {
            // menampilkan room yang terkait dengan property ini
            // Mengambil daftar rooms yang terkait dengan property yang dimiliki oleh user

            $rooms = Room::with('property', 'facilities')
                ->where('property_id', $property->id)
                ->get();
        }
        // Jika sudah memiliki kos, arahkan ke dashboard owner
        return view('owner.dashboard', compact('rooms', 'countRoom', 'totalVisitors', 'totalRent'));
    }
}
