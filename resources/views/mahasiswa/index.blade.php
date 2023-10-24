<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Mahasiswa') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="container mb-6">
                <x-add-button x-data="" href="{{ route('mahasiswa.create') }}">{{ __('Tambah Mahasiswa') }}</x-add-button>
            </div>
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-xl font-semibold leading-6 tracking-tighter dark:text-gray-200">Mahasiswa</h3>
                    <p class="mt-1.5 text-sm text-muted-foreground dark:text-gray-300">Data semua Mahasiswa</p>
                </div>
                @if ($mahasiswa->count() > 0)
                    <table class="table min-w-full">
                        <thead>
                            <tr>
                                <th
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-900 uppercase dark:text-gray-100">
                                    #
                                </th>
                                <th
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-900 uppercase dark:text-gray-100">
                                    Nama
                                </th>
                                <th
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-900 uppercase dark:text-gray-100">
                                    Npm
                                </th>
                                <th
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-900 uppercase dark:text-gray-100">
                                    Email</th>
                                <th
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-900 uppercase dark:text-gray-100">
                                    Jurusan</th>
                                <th
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-900 uppercase dark:text-gray-100">
                                    Dibuat</th>
                                <th
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-900 uppercase dark:text-gray-100">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mahasiswa as $mhs)
                                <tr>
                                    <td class="px-6 py-4 text-gray-900 dark:text-gray-100 whitespace-nowrap">
                                        {{ $loop->index + 1 }}</td>
                                    <td class="px-6 py-4 text-gray-900 dark:text-gray-100 whitespace-nowrap">
                                        {{ $mhs->nama }}</td>
                                    <td class="px-6 py-4 text-gray-900 dark:text-gray-100 whitespace-nowrap">
                                        {{ $mhs->npm }}</td>
                                    <td class="px-6 py-4 text-gray-900 dark:text-gray-100 whitespace-nowrap">
                                        {{ $mhs->email }}</td>
                                    <td class="px-6 py-4 text-gray-900 dark:text-gray-100 whitespace-nowrap">
                                        {{ $mhs->jurusan }}</td>
                                    <td class="px-6 py-4 text-gray-900 dark:text-gray-100 whitespace-nowrap">
                                        {{ $mhs->created_at->diffForhumans() }}</td>
                                    <td class="px-6 py-4 text-gray-900 dark:text-gray-100 whitespace-nowrap">
                                            <x-warning-button x-data="" href="{{ route('mahasiswa.edit', $mhs->id) }}">{{ __('Edit') }}</x-warning-button>
                                        <form action="{{ route('mahasiswa.destroy', $mhs->id) }}" method="post"
                                            class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <x-danger-button x-data="" onclick="confirm('Mahasiswa ini akan dihapus ?');">{{ __('Delete') }}</x-danger-button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <div class="p-6 text-rose-500">
                        {{ __('Data mahasiswa tidak ada.') }}
                    </div>
                @endif
                <div class="p-6">
                    {{ $mahasiswa->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
