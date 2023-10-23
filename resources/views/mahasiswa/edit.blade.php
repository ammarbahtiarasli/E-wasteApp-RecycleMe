<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Mahasiswa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __('Ubah data Mahasiswa') }}
                </div>
            </div>



            <div class="container p-8 mx-auto mt-5 bg-white dark:bg-gray-800">
                <form action={{ route('mahasiswa.update') }} method="POST">
                    @csrf
                    <input type="hidden" id="id" name="id" value="{{ $mahasiswa->id }}">
                    <div class="mb-4">
                        <label for="nama"
                            class="block mb-1 font-semibold text-gray-900 dark:text-gray-100">Nama</label>
                        <input type="text" id="nama" name="nama"
                            class="w-full px-3 py-2 bg-transparent border border-gray-500 rounded-md outline-none focus:border-blue-500"
                            placeholder="Masukkan Nama" value="{{ old('nama', $mahasiswa->nama) }}">
                        @error('nama')
                            <div class="py-3 text-rose-500">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="npm"
                            class="block mb-1 font-semibold text-gray-900 dark:text-gray-100">Npm</label>
                        <input type="number" id="npm" name="npm"
                            class="w-full px-3 py-2 bg-transparent border border-gray-500 rounded-md outline-none focus:border-blue-500"
                            placeholder="Masukkan Npm" maxlength="9" value="{{ old('npm', $mahasiswa->npm) }}">
                        @error('npm')
                            <div class="py-3 text-rose-500">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="email"
                            class="block mb-1 font-semibold text-gray-900 dark:text-gray-100">Email</label>
                        <input type="email" id="email" name="email"
                            class="w-full px-3 py-2 bg-transparent border border-gray-500 rounded-md focus:outline-none focus:border-blue-500"
                            placeholder="Masukkan Email" value="{{ old('email', $mahasiswa->email) }}">
                        @error('email')
                            <div class="py-3 text-rose-500">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="jurusan"
                            class="block mb-1 font-semibold text-gray-900 dark:text-gray-100">Jurusan</label>
                        <select id="jurusan" name="jurusan"
                            class="w-full px-3 py-2 text-gray-500 bg-transparent border border-gray-500 rounded-md focus:outline-none focus:border-blue-500" value="{{ old('jurusan', $mahasiswa->jurusan) }}">
                            <option value="selected">Pilih Jurusan</option>
                            <option value="teknik Informatika">Teknik Infomatika</option>
                            <option value="teknik Mesin">Teknik Mesin</option>
                            <option value="teknik Pangan">Teknik Pangan</option>
                        </select>
                        @error('jurusan')
                            <div class="py-3 text-rose-500">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit"
                        class="px-4 py-2 mt-3 font-semibold text-gray-800 bg-green-500 rounded-md hover:bg-green-600">Ubah
                        Data</button>
                </form>
            </div>

        </div>
    </div>
</x-app-layout>
