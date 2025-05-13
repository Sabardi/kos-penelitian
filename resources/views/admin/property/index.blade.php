@forelse ($properties as $property)
    <div class="property">
        <h2>{{ $property->name }}</h2> <a href="{{ route('property.rooms.index', $property) }}">show kamar</a>
  
@empty
    
@endforelse