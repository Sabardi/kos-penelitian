@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header">{{ __('Propery') }}</div>

                    <div class="card-body">

                        <x-alert-error />

                        <form action="{{ route('owner.owner.room.store',$property) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <x-input name="name" label="Nama Kamar" type="text" value="{{ old('name') }}" />
                            <x-input name="size" label="Size" type="text" value="{{ old('size') }}" />
                            <x-input name="price" label="Price" type="text" value="{{ old('price') }}" />

                            <div class="mb-3">
                                <label for="availability" class="form-label">Availability</label>
                                <select name="availability" class="form-control">
                                    <option value="1">Available</option>
                                    <option value="0">Not Available</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="foto_room" class="form-label">Upload Image</label>
                                <input type="file" name="foto_room" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Facilities</label>
                                <div>
                                    @foreach ($facilities as $facility)
                                        <input type="checkbox" name="facilities[]" value="{{ $facility->id }}">
                                        {{ $facility->name }} <br>
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
