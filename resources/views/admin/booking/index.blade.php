@extends('admin.Layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <p class="card-title">Data Booking</p>
                    <div class="row">
                        <div class="col-12 mb-4">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Data Booking</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            {{-- <th>User Name</th> --}}
                                            <th>Room Name</th>
                                            <th>Alias</th>
                                            {{-- <th>Check In</th>
                                            <th>Check Out</th>
                                            <th>Status</th>
                                            <th>Action</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($bookings as $booking)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                {{-- <td>{{ $booking->user->name }}</td> --}}
                                                <td>{{ $booking->room->name }}</td>
                                                <td>room {{ $booking->room->id }}</td>
                                                {{-- <td>{{ $booking->check_in }}</td>
                                                <td>{{ $booking->check_out }}</td>
                                                <td>{{ $booking->status }}</td> --}}
                                                <td>
                                                    <a href="#" class="btn btn-info btn-sm">Detail</a>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="7" class="text-center">No bookings found</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
