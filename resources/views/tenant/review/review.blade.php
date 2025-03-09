    <form action="{{ route('front.rating.store', [$booking->id, $booking->room->id]) }}" method="POST">
        @csrf
        {{-- <input type="hidden" name="room_id"  value="{{ $booking->room->id }}" id="">
        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}" id=""> --}}

        <div class="mb-3">
            <label class="form-label">Rating:</label>
            <div class="rating">
                @for ($i = 5; $i > 0; $i--)
                    <input type="radio" name="rating" value="{{ $i }}" id="star{{ $i }}" required>
                    <label for="star{{ $i }}">{{ str_repeat('⭐', $i) }}</label>
                @endfor
            </div>
            <div class="invalid-feedback">Silakan pilih rating.</div>
        </div>
        <!-- Review Text -->
        <div class="mb-3">
            <label for="review" class="form-label">Ulasan:</label>
            <textarea name="comment" id="review" class="form-control" rows="3" placeholder="Tulis ulasan Anda..."></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Kirim Rating</button>
    </form>
