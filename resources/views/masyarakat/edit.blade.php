<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Masyarakat') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-white dark:text-gray-100">
                    {{ __('Ubah data Masyarakat') }}
                </div>
            </div>

            <div class="container p-8 mx-auto mt-5 bg-white dark:bg-gray-800">
                <form action={{ route('masyarakat.update') }} method="POST">
                    @csrf
                    <input type="hidden" id="id" name="id" value="{{ $masyarakat->id }}">
                    <div class="mb-4">
                        <label for="nama"
                            class="block mb-1 font-semibold text-white dark:text-white">Nama</label>
                        <input type="text" id="nama" name="nama"
                            class="w-full px-3 py-2 text-gray-900 bg-transparent border border-gray-500 rounded-md outline-none focus:border-blue-500 dark:text-gray-100"
                            placeholder="Masukkan Nama" value="{{ old('nama', $masyarakat->nama) }}">
                        @error('nama')
                            <div class="py-3 text-rose-500">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="no_hp"
                            class="block mb-1 font-semibold text-gray-400 dark:text-gray-100">No HP</label>
                        <input type="number" id="no_hp" name="no_hp"
                            class="w-full px-3 py-2 text-gray-900 bg-transparent border border-gray-500 rounded-md outline-none dark:text-gray-100 focus:border-blue-500"
                            placeholder="Masukkan No HP" value="{{ old('no_hp', $masyarakat->nohp) }}">
                        @error('no_hp')
                            <div class="py-3 text-rose-500">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="email"
                            class="block mb-1 font-semibold text-gray-400 dark:text-gray-100">Email</label>
                        <input type="email" id="email" name="email"
                            class="w-full px-3 py-2 text-gray-900 bg-transparent border border-gray-500 rounded-md dark:text-gray-100s focus:outline-none focus:border-blue-500 dark:text-gray-100"
                            placeholder="Masukkan Email" value="{{ old('email', $masyarakat->email) }}">
                        @error('email')
                            <div class="py-3 text-rose-500">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="alamat"
                            class="block mb-1 font-semibold text-gray-400 dark:text-gray-100">Alamat</label>
                        <textarea id="alamat" name="alamat"
                            class="w-full px-3 py-2 text-gray-900 bg-transparent border border-gray-500 rounded-md outline-none dark:text-gray-100 focus:border-blue-500"
                            placeholder="Masukkan Alamat">{{ old('alamat', $masyarakat->alamat) }}</textarea>
                        @error('alamat')
                            <div class="py-3 text-rose-500">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- status --}}
                    <div class="mb-4">
                        <label for="status"
                            class="block mb-1 font-semibold text-gray-400 dark:text-gray-100">Status</label>
                        <select id="status" name="status"
                            class="w-full px-3 py-2 text-gray-500 bg-transparent border border-gray-500 rounded-md dark:text-grey-200 focus:outline-none focus:border-blue-500" value="{{ old('status', $masyarakat->status) }}">
                            <option value="selected">Pilih Status</option>
                            <option value="aktif">Ditolak</option>
                            <option value="nonaktif">Disetujui</option>
                        </select>
                        @error('status')
                            <div class="py-3 text-rose-500">{{ $message }}</div>
                        @enderror

                    <button type="submit"
                        class="px-4 py-2 mt-3 font-semibold text-gray-800 bg-green-500 rounded-md hover:bg-green-600">Ubah
                        Data</button>
                </form>
            </div>

        </div>
    </div>
</x-app-layout>
