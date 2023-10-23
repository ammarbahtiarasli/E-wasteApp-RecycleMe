<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Mahasiswa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="container mb-10">
                <a href="{{ route('mahasiswa.create') }}" class="px-4 py-3 bg-green-500 rounded-md text-gray-800">Tambah
                    Mahasiswa</a>
            </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __('Data Mahasiswa') }}
                </div>
                @if ($mahasiswa->count() > 0)
                    <table class="table min-w-full">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-900 dark:text-gray-100 uppercase tracking-wider">
                                    Nama
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-900 dark:text-gray-100 uppercase tracking-wider">
                                    Npm
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-900 dark:text-gray-100 uppercase tracking-wider">
                                    Email</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-900 dark:text-gray-100 uppercase tracking-wider">
                                    Jurusan</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-900 dark:text-gray-100 uppercase tracking-wider">
                                    Dibuat</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-900 dark:text-gray-100 uppercase tracking-wider">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mahasiswa as $mhs)
                                <tr>
                                    <td class="px-6 py-4 text-gray-900 dark:text-gray-100 whitespace-nowrap">{{ $mhs->nama }}</td>
                                    <td class="px-6 py-4 text-gray-900 dark:text-gray-100 whitespace-nowrap">{{ $mhs->npm }}</td>
                                    <td class="px-6 py-4 text-gray-900 dark:text-gray-100 whitespace-nowrap">{{ $mhs->email }}</td>
                                    <td class="px-6 py-4 text-gray-900 dark:text-gray-100 whitespace-nowrap">{{ $mhs->jurusan }}</td>
                                    <td class="px-6 py-4 text-gray-900 dark:text-gray-100 whitespace-nowrap">
                                        {{ $mhs->created_at->diffForhumans() }}</td>
                                    <td class="px-6 py-4 text-gray-900 dark:text-gray-100 whitespace-nowrap">
                                        <a href="{{ route('mahasiswa.edit', $mhs->id) }}"
                                            class="px-3 py-2 bg-yellow-500 rounded-md text-gray-800">Edit</a>
                                        <form action="{{ route('mahasiswa.destroy', $mhs->id) }}" method="POST"
                                            class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="px-2 py-1.5 bg-red-600 rounded-md text-gray-100 dark:text-gray-100">Hapus</button>
                                        </form>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <div class="p-6">
                        {{ __('Data tidak ditemukan') }}
                    </div>
                @endif
                <div class="p-6">
                    {{ $mahasiswa->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
