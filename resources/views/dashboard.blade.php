<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Hai !, Kamu login sebagai" . " " . Auth::user()->name)}}
                </div>
            </div>

            <div class="container mx-auto mt-5">
                <div class="grid grid-cols-3 gap-4">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            {{ __('Data Mahasiswa') }}
                        </div>
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            {{ "1000 Data Mahasiswa" }}
                        </div>
                    </div>
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            {{ __('Data Dosen') }}
                        </div>
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            {{ "69 Data Dosen" }}
                        </div>
                    </div>
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            {{ __('Data Mata Kuliah') }}
                        </div>
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            {{ "70 Data Mata Kuliah" }}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
