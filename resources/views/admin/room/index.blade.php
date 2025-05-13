@forelse ($rooms as $room)
    <div class="room">
        <h2>{{ $room->name }}</h2>
        <p>Property: {{ $room->name }}</p>
        <p>Price: {{ $room->price }}</p>
        {{-- <a href="{{ route('admin.room.show', $room) }}">Show</a>
        <a href="{{ route('admin.room.edit', $room) }}">Edit</a>
        <form action="{{ route('admin.room.destroy', $room) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form> --}}
    </div>
    
@empty
    
@endforelse