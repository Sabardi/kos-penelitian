@extends('admin.Layouts.app')
<!-- partial -->
@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <p class="card-title">Review Data</p>
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Room</th> {{-- Atau ganti dengan "cosin" jika ingin persis seperti gambar --}}
                                            @foreach ($users as $user)
                                                <th>{{ $user->id }}</th>
                                            @endforeach
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($rooms as $room)
                                            <tr>
                                                <td>room_{{ $room->id }}</td>
                                                @foreach ($users as $user)
                                                    <td>
                                                        {{-- Cek apakah ada rating untuk kombinasi room dan user ini --}}
                                                        {{ $ratingsLookup[$room->id][$user->id] ?? '-' }}
                                                        {{-- '?? '-' akan menampilkan '-' jika tidak ada rating. Ganti dengan '' jika ingin kosong. --}}
                                                    </td>
                                                @endforeach
                                            </tr>
                                        @endforeach
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
