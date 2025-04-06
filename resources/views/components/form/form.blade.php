@props(['action', 'method' => 'POST'])
<form action="{{ route($action) }}" method="POST">
    @csrf
    {{ $slot }}
</form>