@extends('layouts.dashboard')

@section('title')
    Manage Encoders
@endsection

@section('sidebar')
    <aside
        class="fixed top-0 left-0 z-40 w-64 h-screen pt-14 transition-transform -translate-x-full bg-white border-r border-gray-200 md:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
        aria-label="Sidenav" id="drawer-navigation">
        <div class="overflow-y-auto py-5 px-3 h-full bg-white dark:bg-gray-800">
            <ul class="space-y-2">

                {{-- Overview --}}
                <li>
                    <a href="{{ route('admin.overview') }}"
                        class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-green-100 dark:hover:bg-gray-700 group">
                        <box-icon type='solid' name='pie-chart-alt-2'></box-icon>
                        <span class="ml-3">Overview</span>
                    </a>
                </li>

                {{-- CES --}}
                <li>
                    <a class="flex items-center p-2 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-green-100 dark:text-white dark:hover:bg-green-700"
                        aria-controls="dropdown-sales" data-collapse-toggle="dropdown-sales">
                        <box-icon name='building' type='solid'></box-icon>
                        <span class="flex-1 ml-3 text-left whitespace-nowrap">CES</span>
                        <box-icon name='chevron-down'></box-icon>
                    </a>
                    <ul id="dropdown-sales" class="hidden py-2 space-y-2">
                        <li>
                            <a href="{{ route('admin.ces_view') }}"
                                class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-green-100 dark:text-white dark:hover:bg-green-700">
                                <box-icon name='line-chart'></box-icon>
                                <span class="ml-3">View Data</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.ces_add') }}"
                                class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-green-100 dark:text-white dark:hover:bg-green-700">
                                <box-icon name='plus'></box-icon>
                                <span class="ml-3">Add Data</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.ces_edit') }}"
                                class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-green-100 dark:text-white dark:hover:bg-green-700">
                                <box-icon name='edit-alt' type='solid'></box-icon>
                                <span class="ml-3">Edit Data</span>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- BATAC --}}
                <li>
                    <a href="{{ route('admin.batac') }}"
                        class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg  dark:text-white hover:bg-green-100 dark:hover:bg-gray-700 group">
                        <box-icon name='building' type='solid'></box-icon>
                        <span class="ml-3">BATAC</span>
                    </a>
                </li>

                {{-- AGUSAN --}}
                <li>
                    <a href="{{ route('admin.agusan') }}"
                        class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg  dark:text-white hover:bg-green-100 dark:hover:bg-gray-700 group">
                        <box-icon name='building' type='solid'></box-icon>
                        <span class="ml-3">AGUSAN</span>
                    </a>
                </li>

                {{-- BICOL --}}
                <li>
                    <a href="{{ route('admin.bicol') }}"
                        class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg  dark:text-white hover:bg-green-100 dark:hover:bg-gray-700 group">
                        <box-icon name='building' type='solid'></box-icon>
                        <span class="ml-3">BICOL</span>
                    </a>
                </li>

                {{-- ISABELA --}}
                <li>
                    <a href="{{ route('admin.isabela') }}"
                        class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg  dark:text-white hover:bg-green-100 dark:hover:bg-gray-700 group">
                        <box-icon name='building' type='solid'></box-icon>
                        <span class="ml-3">ISABELA</span>
                    </a>
                </li>

                {{-- LOS BAÑOS --}}
                <li>
                    <a href="{{ route('admin.losbaños') }}"
                        class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg  dark:text-white hover:bg-green-100 dark:hover:bg-gray-700 group">
                        <box-icon name='building' type='solid'></box-icon>
                        <span class="ml-3">LOS BAÑOS</span>
                    </a>
                </li>

                {{-- MIDSAYAP --}}
                <li>
                    <a href="{{ route('admin.midsayap') }}"
                        class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg  dark:text-white hover:bg-green-100 dark:hover:bg-gray-700 group">
                        <box-icon name='building' type='solid'></box-icon>
                        <span class="ml-3">MIDSAYAP</span>
                    </a>
                </li>

                {{-- NEGROS --}}
                <li>
                    <a href="{{ route('admin.negros') }}"
                        class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg  dark:text-white hover:bg-green-100 dark:hover:bg-gray-700 group">
                        <box-icon name='building' type='solid'></box-icon>
                        <span class="ml-3">NEGROS</span>
                    </a>
                </li>

                <hr>

                {{-- Manage Encoders --}}
                <li>
                    <a href="{{ route('admin.manage_encoders') }}"
                        class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg bg-green-100 dark:text-white hover:bg-green-100 dark:hover:bg-gray-700 group">
                        <box-icon type='solid' name='user-account'></box-icon>
                        <span class="ml-3">Manage Encoders</span>
                    </a>
                </li>

            </ul>
        </div>

        </div>
    </aside>
@endsection

@section('content')
    <main class="p-4 md:ml-64 h-screen pt-20">

        {{-- Search --}}
        <div class="mb-2 ">
            <label for="table-search" class="sr-only">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="text" id="table-search-users"
                    class="h-12 block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Search">
            </div>
        </div>

        {{-- Table --}}
        <div class="my-4 relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            PhilRice ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            {{-- <div class="flex items-center"> --}}
                            Email
                            {{-- </div> --}}
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                Station
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                Division
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                Position
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                User Type
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            <span>Actions</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($encoders as $encoder)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-normal dark:text-white max-w-xs">
                                {{ $encoder->philrice_id }}
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-normal dark:text-white max-w-xs">
                                {{ $encoder->first_name }} {{ $encoder->mi }} {{ $encoder->last_name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $encoder->email }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $stations->firstWhere('id', $encoder->station)->station }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $divisions->firstWhere('id', $encoder->division)->division }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $positions->firstWhere('id', $encoder->position)->position }}
                            </td>
                            <td class="px-6 py-4">
                                {{ ucwords($encoder->user_type) }}
                            </td>
                            {{-- Action Buttons --}}
                            <td class="px-6 py-4 text-center">
                                <div class="flex items-center justify-center">
                                    @if ($encoder->user_type === 'encoder')
                                        {{-- If isBlocked = false --}}
                                        @if ($encoder->isBlocked === 0)
                                            <form id="block-{{ $encoder->id }}"
                                                action="{{ route('admin.block', $encoder->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <button type="button" onclick="confirmBlock({{ $encoder->id }}, event)"
                                                    class="text-white bg-blue-300 hover:bg-blue-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-center items-center justify-center w-8 h-8 m-[0.5px] mx-1">
                                                    <box-icon type='solid' name='shield-alt-2'
                                                        size="xs"></box-icon>
                                                </button>
                                            </form>
                                        {{-- If isBlocked = true --}}
                                        @elseif ($encoder->isBlocked === 1)
                                            <form id="unblock-{{ $encoder->id }}"
                                                action="{{ route('admin.unblock', $encoder->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <button type="button"
                                                    onclick="confirmUnblock({{ $encoder->id }}, event)"
                                                    class="text-white bg-red-300 hover:bg-red-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-center items-center justify-center w-8 h-8 m-[0.5px] mx-1">
                                                    <box-icon name='block' size="xs"></box-icon>
                                                </button>
                                            </form>
                                        @endif
                                    @endif
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
@endsection

@section('scripts')
    <script>
        function confirmBlock(id, event) {
            event.preventDefault();
            Swal.fire({
                title: "Confirm Block",
                text: "Are you sure you want to block this user's access?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, block!"
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: "Blocked!",
                        text: "User's access has been successfully blocked.",
                        icon: "success"
                    }).then(()=> {
                        document.getElementById('block-' + id).submit();
                    });
                }
            });
        }

        function confirmUnblock(id, event) {
            event.preventDefault();
            Swal.fire({
                title: "Confirm Unblock",
                text: "Are you sure you want to unblock this user's access?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, unblock!"
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: "Unblocked!",
                        text: "User's access has been successfully unblocked.",
                        icon: "success"
                    }).then(()=> {
                        document.getElementById('unblock-' + id).submit();
                    });
                }
            });
        }
    </script>
@endsection
