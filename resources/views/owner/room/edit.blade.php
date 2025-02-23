@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Propery') }}</div>

                    <div class="card-body">

                        <x-alert-error />

                        <form action="{{ route('owner.owner.room.update', [$property, $room]) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            @method('PUT')
                            <x-input name="name" label="Nama Kamar" type="text" value="{{ $room->name }}" />
                            <x-input name="size" label="Size" type="text" value="{{ $room->size }}" />
                            <x-input name="price" label="Price" type="text" value="{{ $room->price }}" />

                            <div class="mb-3">
                                <label for="availability" class="form-label">Availability</label>
                                <select name="availability" class="form-control">
                                    <option value="1" {{ $room->availability == 1 ? 'selected' : '' }}>Available
                                    </option>
                                    <option value="0" {{ $room->availability == 0 ? 'selected' : '' }}>Not Available
                                    </option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="foto_room" class="form-label">Upload Image</label>
                                <input type="file" name="foto_room" class="form-control">
                                @if ($room->foto_room)
                                    <img src="{{ Storage::url($room->foto_room) }}" alt=""
                                        class="img-thumbnail mt-2">
                                @endif
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Facilities</label>
                                <div>
                                    @foreach ($facilities as $facility)
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="facilities[]"
                                                value="{{ $facility->id }}"
                                                {{ in_array($facility->id, $room->facilities->pluck('id')->toArray()) ? 'checked' : '' }}>
                                            <label class="form-check-label">{{ $facility->name }}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
