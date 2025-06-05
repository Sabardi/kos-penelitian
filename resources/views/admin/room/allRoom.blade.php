@extends('admin.Layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <p class="card-title">Detail Kamar</p>
                    <div class="row">
                        <div class="col-12 mb-4">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="{{ route('property.index') }}">Property</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Rooms</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Room Name</th>
                                            <th>Property</th>
                                            <th>Price</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($rooms as $room)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $room->name }}</td>
                                                <td>{{ $room->property->name }}</td>
                                                <td>Rp {{ number_format($room->price, 0, ',', '.') }}</td>
                                                <td>
                                                    <a href="#" class="btn btn-info btn-sm">Show</a>
                                                    <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                                    <form action="#" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                            disabled>Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5" class="text-center">No rooms found</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                                <div class="mt-4">
                                    {{ $rooms->links('pagination::bootstrap-4') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
