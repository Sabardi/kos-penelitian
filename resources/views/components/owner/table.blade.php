@props(['headers', 'rows'])

<div class="overflow-x-auto border rounded-lg shadow-md dark:border-gray-700">
    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
        <thead class="bg-gray-50 dark:bg-gray-800">
            <tr>
                @foreach($headers as $header)
                    <th class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-gray-400">
                        {{ $header }}
                    </th>
                @endforeach
                <th class="px-6 py-3 text-xs font-medium tracking-wider text-right text-gray-500 uppercase dark:text-gray-400">
                    Aksi
                </th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
            @foreach($rows as $row)
                <tr class="hover:bg-gray-50 dark:hover:bg-gray-700">
                    @foreach($row as $cell)
                        <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap dark:text-gray-100">
                            {{ $cell }}
                        </td>
                    @endforeach
                    <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                        <div class="flex justify-end space-x-2">
                            {{-- <form action="{{ route('permohonan.accept', $row['id']) }}" method="POST"> --}}
                            <form action="" method="POST">
                                @csrf
                                @method('PUT')
                                <button type="submit"
                                        class="text-green-600 hover:text-green-900"
                                        onclick="return confirm('Terima permohonan ini?')">
                                    <i class="mr-1 fas fa-check-circle"></i>Terima
                                </button>
                            </form>

                            {{-- <form action="{{ route('permohonan.reject', $row['id']) }}" method="POST"> --}}
                            <form action="" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        class="text-red-600 hover:text-red-900"
                                        onclick="return confirm('Tolak permohonan ini?')">
                                    <i class="mr-1 fas fa-times-circle"></i>Tolak
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
