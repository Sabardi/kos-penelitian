@extends('admin.Layouts.app')

<style>
    .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.4);
        /* Black with opacity */
        padding-top: 60px;
    }

    .modal-content {
        background-color: #fefefe;
        margin: 5% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        max-width: 500px;
    }

    .close-btn {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close-btn:hover,
    .close-btn:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }

    .save-btn {
        background-color: #4CAF50;
        /* Green */
        color: white;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
        font-size: 16px;
    }

    .save-btn:hover {
        background-color: #45a049;
    }
</style>
@section('content')
    <!-- Card -->
    <div class="flex flex-col">
        <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
                <div
                    class="overflow-hidden bg-white border border-gray-200 rounded-xl shadow-2xs dark:bg-neutral-800 dark:border-neutral-700">
                    <!-- Header -->
                    <div
                        class="grid gap-3 px-6 py-4 border-b border-gray-200 md:flex md:justify-between md:items-center dark:border-neutral-700">
                        <div>
                            <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">
                                Data Booking Kamar kos
                            </h2>
                            <p class="text-sm text-gray-600 dark:text-neutral-400">
                                Add users, edit and more...
                            </p>
                        </div>

                        <div>
                            <div class="inline-flex gap-x-2">
                                <a class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-800 bg-white border border-gray-200 rounded-lg gap-x-2 shadow-2xs hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-50 dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                                    href="#">
                                    View all
                                </a>

                                <button type="button"
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-lg gap-x-2 hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                                    aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-scale-animation-modal"
                                    data-hs-overlay="#create-modal">
                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14" />
                                        <path d="M12 5v14" />
                                    </svg>
                                    Add location

                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <x-modal.modal id="create-modal" title="Add New Location">
        <x-form.form action="location.store" method="POST">
            @include('admin.location.__form')
            <div class="flex items-center justify-end px-4 py-3 border-t border-gray-200 gap-x-2 dark:border-neutral-700">
                <button type="button"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-800 bg-white border border-gray-200 rounded-lg gap-x-2 shadow-2xs hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                    data-hs-overlay="#create-modal">
                    Close
                </button>
                <button type="submit"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-lg gap-x-2 hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                    Save changes
                </button>
            </div>
        </x-form.form>
    </x-modal.modal> --}}



    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md table-auto">
            <thead>
                <tr class="bg-gray-100">
                    <th colspan="10" class="px-4 py-2 font-medium text-left text-gray-600">Name location</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($locations as $location)
                    <tr>
                        <td rowspan="5" class="px-4 py-2 text-gray-700">{{ $location->id }}</td>
                        <td rowspan="5" class="px-4 py-2 text-gray-700">{{ $location->name }} <br>
                        </td>
                        <td rowspan="5" class="px-4 py-2 text-gray-700">
                            {{-- <button id="openModalBtn" class="px-4 py-2 text-white bg-blue-500 rounded-md hover:bg-blue-600">
                                edit
                            </button> --}}
                            <button id="openModalBtn">Open Modal</button>

                            <div id="myModal" class="modal">
                                <div class="modal-content">
                                    <span class="close-btn" id="closeModalBtn">&times;</span>
                                    <h2>Modal title</h2>
                                    <p>This is a wider card with supporting text below as a natural lead-in to additional
                                        content.</p>
                                    <button id="saveChangesBtn" class="save-btn">Save changes</button>
                                </div>
                            </div>

                            <form action="{{ route('location.destroy', $location->id) }}" method="POST"
                                class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:underline"
                                    onclick="return confirm('Are you sure you want to delete this location?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    <tr></tr>
                @endforeach

                <script>
                    var modal = document.getElementById("myModal");
var openModalBtn = document.getElementById("openModalBtn");
var closeModalBtn = document.getElementById("closeModalBtn");
var saveChangesBtn = document.getElementById("saveChangesBtn");

// Open the modal when the "Open Modal" button is clicked
openModalBtn.onclick = function() {
    modal.style.display = "block";
}

// Close the modal when the "x" button is clicked
closeModalBtn.onclick = function() {
    modal.style.display = "none";
}

// Close the modal when clicking outside the modal
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

// Log message when "Save changes" button is clicked
saveChangesBtn.onclick = function() {
    console.log("Changes saved!");
    modal.style.display = "none";
}
                </script>
            </tbody>
        </table>
    </div>
@endsection
