{{-- <form action="{{ $action }}" method="{{ strtolower($method) === 'get' ? 'GET' : 'POST' }}" class="w-full max-w-2xl p-8 bg-white rounded-lg shadow-md">
    @csrf
    @if (!in_array(strtoupper($method), ['GET', 'POST']))
        @method($method)
    @endif

    {{ $slot }}
</form> --}}
