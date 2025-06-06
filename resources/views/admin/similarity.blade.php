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

                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Cosine</th> {{-- Label untuk pojok kiri atas --}}
                                            @foreach ($uniqueUsers as $user)
                                                {{-- Asumsi model User memiliki atribut 'name' untuk ditampilkan --}}
                                                <th>{{ $user->id }}</th>
                                            @endforeach
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($uniqueUsers as $rowUser)
                                            <tr>
                                                {{-- Tampilkan nama pengguna sebagai header baris --}}
                                                <td>{{ $rowUser->id }}</td>
                                                @foreach ($uniqueUsers as $colUser)
                                                    <td>
                                                        {{-- Ambil skor dari matriks menggunakan ID pengguna --}}
                                                        @if (isset($similarityMatrix[$rowUser->id][$colUser->id]))
                                                            {{ number_format($similarityMatrix[$rowUser->id][$colUser->id], 2) }}
                                                        @else
                                                            - {{-- Tampilkan strip jika tidak ada data (seharusnya jarang terjadi jika data lengkap) --}}
                                                        @endif
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
