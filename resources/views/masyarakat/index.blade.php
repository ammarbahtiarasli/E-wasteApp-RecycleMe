<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Masyarakat') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="flex mx-auto max-w-7xl sm:px-6 lg:px-8">

            <!-- Sidebar -->
            <div class="w-1/4 p-4">
                <div class="mb-4 text-xl font-bold dark:text-gray-400">
                    <a href="" class="hover:underline">Daftar Masyarakat</a>
                </div>
                <div class="mb-2 dark:text-gray-400">
                    <a href="" class="hover:underline">Belum Disetujui</a>
                </div>
                <div class="mb-4 dark:text-gray-400">
                    <a href="" class="hover:underline">Sudah Disetujui</a>
                </div>
            </div>

            <!-- Main content -->
            <div class="w-3/4 overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-xl font-semibold leading-6 tracking-tighter dark:text-gray-200">Masyarakat</h3>
                    <p class="mt-1.5 text-sm text-muted-foreground dark:text-gray-300">Daftar semua masyarakat yang sudah registrasi</p>
                </div>

                @if ($masyarakat->count() > 0)
                    <div class="grid grid-cols-2 gap-4">
                        @foreach ($masyarakat as $person)
                            <div class="p-4 m-4 border rounded-lg">
                                <h4 class="font-bold">{{ $person->nama }}</h4>
                                <p>No HP: {{ $person->nohp }}</p>
                                <p>Alamat: {{ $person->alamat }}</p>
                                <p>Status: 
                                    <span class="{{ $person->status == 'sudah disetujui' ? 'text-green-500' : ($person->status == 'ditolak' ? 'text-rose-500' : 'text-yellow-300') }}">
                                        {{ ucfirst($person->status) }}
                                    </span>
                                </p>
                                <div class="mt-2">
                                    <x-detail-button x-data="" href="{{ route('masyarakat.edit', $person->id) }}">{{ __('Detail') }}</x-detail-button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="p-6 text-rose-500">
                        {{ __('Data tidak ditemukan') }}
                    </div>
                @endif
                <div class="p-6">
                    {{ $masyarakat->links() }}
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
