<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Masyarakat') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="container mb-6">
                <x-add-button x-data="" href="{{ route('masyarakat.create') }}">{{ __('Tambah Masyarakat') }}</x-add-button>
            </div>
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __('Data Masyarakat') }}
                </div>
                @if ($masyarakat->count() > 0)
                    <table class="table min-w-full">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-900 uppercase dark:text-gray-100">
                                    #
                                </th>
                                <th class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-900 uppercase dark:text-gray-100">
                                    Nama
                                </th>
                                <th class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-900 uppercase dark:text-gray-100">
                                    Jenis Kelamin
                                </th>
                                <th class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-900 uppercase dark:text-gray-100">
                                    Alamat
                                </th>
                                <th class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-900 uppercase dark:text-gray-100">
                                    Status
                                </th>
                                <th class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-900 uppercase dark:text-gray-100">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($masyarakat as $person)
                            <tr>
                                <td class="px-6 py-4 text-gray-900 dark:text-gray-100 whitespace-nowrap">
                                    {{ $loop->index + 1 }}</td>
                                <td class="px-6 py-4 text-gray-900 dark:text-gray-100 whitespace-nowrap">
                                    {{ $person->nama }}</td>
                                <td class="px-6 py-4 text-gray-900 dark:text-gray-100 whitespace-nowrap">
                                    {{ ucfirst($person->jenis_kelamin) }}</td>
                                <td class="px-6 py-4 text-gray-900 dark:text-gray-100 whitespace-nowrap">
                                    {{ $person->alamat }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="{{ $person->status == 'sudah disetujui' ? 'text-green-500' : ($person->status == 'ditolak' ? 'text-rose-500' : 'text-gray-500') }}">
                                            {{ ucfirst($person->status) }}
                                        </span>
                                </td>
                                <td class="px-6 py-4 text-gray-900 dark:text-gray-100 whitespace-nowrap">
                                    <x-detail-button x-data="" href="{{ route('masyarakat.edit', $person->id) }}">{{ __('Detail') }}</x-detail-button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @else
                    <div class="p-6 text-rose-500">
                        {{ __('Data tidak ditemukan') }}
                    </div>
                @endif
                <div class="p-6">
                    {{-- {{ $masyarakat->links() }} --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

