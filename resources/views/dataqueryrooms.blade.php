<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Data Query
                    <br>
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">

                        <x-nav-link :href="route('DataQueryHardwares')" :active="request()->routeIs('DataQueryHardwares')">
                            {{ __('Hardwares') }}
                        </x-nav-link>
                        <x-nav-link :href="route('DataQueryRooms')" :active="request()->routeIs('DataQueryRooms')">
                            {{ __('Rooms') }}
                        </x-nav-link>
                        <x-nav-link :href="route('DataQueryWorkers')" :active="request()->routeIs('DataQueryWorkers')">
                            {{ __('Workers') }}
                        </x-nav-link>

                    </div>
                    <thead>
                    <tr>
                        <th>Szoba</th>
                        <th>Szerző</th>
                        <th>Kiadás éve</th>
                        <th>Nyelv</th>
                        <th>ISBN</th>
                        <th></th>
                    </tr>
                    </thead>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

