<form action="{{ route('reference.store') }}" method="post">
    @csrf
    <div class="grid grid-cols-2 gap-4">
        <!-- Facilities Selection -->
        @foreach ($facilities as $facility)
            <div>
                <label class="inline-flex items-center">
                    <input type="checkbox" name="facilities[]" value="{{ $facility->id }}" class="form-checkbox">
                    <span class="ml-2">{{ $facility->name }}</span>
                </label>
            </div>
        @endforeach

        <!-- Location Selection -->
        <hr>
        @foreach ($locations as $location)
            <div>
                <label class="inline-flex items-center">
                    <input type="checkbox" name="locations[]" value="{{ $location->id }}" class="form-checkbox">
                    <span class="ml-2">{{ $location->name }}</span>
                </label>
            </div>
        @endforeach
    </div>
type kamar
    <div>
        <label for="type" class="block mb-1">Tipe Kamar</label>
        <select name="type" id="type" class="form-select">
            <option value="">Pilih tipe kamar</option>
            <option value="putra">Putra</option>
            <option value="putri">Putri</option>
            <option value="campur">Campur</option>
            <option value="keluarga">Keluarga</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>


<!-- Gender Type Selection -->

<!-- Price Range Inputs -->
{{-- <div>
            <label for="min_price" class="block">Min Price</label>
            <input type="number" name="min_price" id="min_price" class="form-input" placeholder="Min Price">
        </div>

        <div>
            <label for="max_price" class="block">Max Price</label>
            <input type="number" name="max_price" id="max_price" class="form-input" placeholder="Max Price">
        </div> --}}
