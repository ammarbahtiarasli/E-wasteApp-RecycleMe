<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Hai," . " " . Auth::user()->name . "! " . "Do anything here, because you're the super admin!")}}
                </div>
            </div>

            <div class="container mx-auto mt-5">
                <div class="grid grid-cols-3 gap-4">
                    <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            {{ __('Data Mahasiswa') }}
                        </div>
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            {{ "1000 Data Mahasiswa" }}
                        </div>
                    </div>
                    <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            {{ __('Data Dosen') }}
                        </div>
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            {{ "69 Data Dosen" }}
                        </div>
                    </div>
                    <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
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
