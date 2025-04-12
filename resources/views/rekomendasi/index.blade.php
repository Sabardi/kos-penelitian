
<div class="container">
    <h2>Rekomendasi Kos Untukmu {{Auth::user()->name}} </h2>
    <hr>

    @if(count($rekomendasi) > 0)
        <ul>
            {{-- {{$rekomendasi}} --}}
        @foreach($rekomendasi as $item)
            <li>
                {{ $item['room_id']->id }}
                <strong>{{ $item['room_id']->name }}</strong> -
                {{-- Lokasi: {{ $item['kos']->location }},
                Harga: Rp{{ number_format($item['kos']->price) }}, --}}
                Skor Prediksi: <span style="color:green">{{ $item['score'] }}</span>
            </li>
        @endforeach
        </ul>
    @else
        <p>Tidak ada rekomendasi saat ini.</p>
    @endif

    <hr>
    <h3>Similaritas User</h3>
    <ul>
    @foreach($similarUsers as $sim)
        <li>
            @php
                $otherId = $sim->user_id_1 == Auth::id() ? $sim->user_id_2 : $sim->user_id_1;
                $user = \App\Models\User::find($otherId);
            @endphp
            user {{$user->id}} Mirip dengan <strong>{{ $user->name }}</strong>: 
            <span style="color:blue">{{ round($sim->similarity, 2) }}</span>
        </li>
    @endforeach
    </ul>
</div>
