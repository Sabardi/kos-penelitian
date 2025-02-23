
<div class="container">
    <h1>{{ $room->name }}</h1>
    <div class="row">
        <div class="col-md-6">
            <img src="{{ json_decode($room->foto_room)[0] }}" class="img-fluid" alt="Foto Kamar">
        </div>
        <div class="col-md-6">
            <h5>Deskripsi</h5>
            <p>{{ $room->property->description }}</p>
            <h5>Fasilitas</h5>
            <p>{{ $room->facility->name }}</p>
            <h5>Ulasan</h5>
            @foreach ($room->reviews as $review)
            <div class="card mb-2">
                <div class="card-body">
                    <p>{{ $review->comment }} (Rating: {{ $review->rating }}/5)</p>
                </div>
            </div>
            @endforeach
            <form action="{{ route('rooms.book', $room->id) }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-success">Booking Sekarang</button>
            </form>
        </div>
    </div>
</div>