<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Overview') }}
        </h2>
    </x-slot>

    @if (session()->has('success'))
        <div class="pt-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden transition bg-green-200 shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                        {{ __(session('success')) }}
                </div>
            </div>
        </div>
    @endif

    <div class="pt-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                {{ __('Hai,' . ' ' . Auth::user()->name . '! ') }}
            </div>
        </div>
    </div>

    <div class="px-4 py-4 mx-auto lg:py-12 sm:px-6 md:px-4 lg:max-w-6xl xl:max-w-7xl lg:px-8">
        <div class="flex flex-col p-6 px-0 pt-0">
            <h3 class="text-xl font-semibold leading-6 tracking-tighter dark:text-gray-200">Dashboard</h3>
            <p class="mt-1.5 text-sm text-muted-foreground dark:text-gray-300">Semua statistik yang berhubungan dengan
                akun anda</p>
        </div>
        <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
            <div
                class="p-8 text-gray-900 bg-white border rounded-lg shadow-sm dark:text-gray-200 dark:border-0 dark:bg-gray-800">
                <h4 class="font-mono text-xl">700</h4><small class="block mt-6 text-sm text-muted-foreground">Daftar
                    Registrasi
                    Masyarakat</small>
                <x-detail-long-button :href="route('masyarakat.index')">Detail</x-detail-long-button>
            </div>
            <div
                class="p-8 text-gray-900 bg-white border rounded-lg shadow-sm dark:text-gray-200 dark:border-0 dark:bg-gray-800">
                <h4 class="font-mono text-xl">69</h4><small class="block mt-6 text-sm text-muted-foreground">Daftar
                    Registrasi
                    Kurir</small>
                <x-detail-long-button href="">Detail</x-detail-long-button>
            </div>
            <div
                class="p-8 text-gray-900 bg-white border rounded-lg shadow-sm dark:text-gray-200 dark:border-0 dark:bg-gray-800">
                <h4 class="font-mono text-xl">0</h4><small class="block mt-6 text-sm text-muted-foreground">Data
                    Dropbox</small>
                <x-detail-long-button href="">Detail</x-detail-long-button>
            </div>
        </div>
    </div>
</x-app-layout>
