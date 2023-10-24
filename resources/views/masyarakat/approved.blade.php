<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Masyarakat') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="flex mx-auto max-w-7xl sm:px-6 lg:px-8">
            <!-- Sidebar -->
            <div class="w-1/4 py-8">
                <div class="mb-2 dark:text-gray-200">
                    <x-sidebar :href="route('masyarakat.index')" :active="request()->routeIs('masyarakat.index')">
                        {{ __('Daftar Masyarakat') }}
                    </x-sidebar>
                </div>
                <div class="mb-2 dark:text-gray-200">
                    <x-sidebar :href="route('masyarakat.approved')" :active="request()->routeIs('masyarakat.approved')">
                        {{ __('Sudah Disetujui') }}
                    </x-sidebar>
                </div>
                <div class="mb-2 dark:text-gray-200">
                    <x-sidebar :href="route('masyarakat.not_approved')" :active="request()->routeIs('masyarakat.not_approved')">
                        {{ __('Belum Disetujui') }}
                    </x-sidebar>
                </div>
            </div>

            <div class="w-3/4 pt-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="mb-6 overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h3 class="text-xl font-semibold leading-6 tracking-tighter dark:text-gray-200">Masyarakat</h3>
                        <p class="mt-1.5 text-sm text-muted-foreground dark:text-gray-300">Daftar masyarakat yang sudah di setujui</p>
                    </div>
                </div>

                <div class="overflow-hidden bg-transparent shadow-sm sm:rounded-lg">
                    @if ($masyarakat->count() > 0)
                        <div class="grid gap-4 sm:grid-cols-2">
                            @foreach ($masyarakat as $person)
                                <div
                                    class="flex flex-col p-6 my-2 text-gray-900 bg-white border rounded-lg shadow-sm dark:text-gray-200 dark:border-0 dark:bg-gray-800">
                                    <h4 class="font-semibold">{{ $person->nama }}</h4>
                                    <p>{{ $person->nohp }}</p>
                                    <p>{{ $person->alamat }}</p>
                                    <div class="flex items-center justify-between mt-4">
                                        <p>
                                            <small
                                                class="inline-flex items-center text-sm tracking-tight font-bold {{ $person->status == 'sudah disetujui' ? 'text-green-500' : ($person->status == 'ditolak' ? 'text-rose-500' : 'text-yellow-500') }}">{{ ucfirst($person->status) }}</small>
                                        </p>
                                        <x-detail-button x-data="" class="flex justify-end"
                                            href="{{ route('masyarakat.edit', $person->id) }}">{{ __('Detail') }}
                                        </x-detail-button>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="p-6 text-rose-500">
                            {{ __('Data tidak ditemukan') }}
                        </div>
                    @endif
                    <div class="p-6 mt-6 bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                        {{ $masyarakat->links() }}
                    </div>
                </div>
            </div>

            <!-- Main content -->

        </div>
    </div>
</x-app-layout>
