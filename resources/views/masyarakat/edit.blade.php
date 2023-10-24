<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Masyarakat') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">

            <div class="p-5 bg-white rounded-md shadow-lg dark:bg-gray-800">
                <h3 class="mb-6 text-2xl font-semibold text-gray-900 dark:text-white">Informasi Detail</h3>
                <h4 class="mb-4 text-xl font-medium text-gray-700 dark:text-gray-300">Detail Masyarakat yang sudah disetujui</h4>

                <div class="grid grid-cols-2 gap-4">
                    <!-- Nama -->
                    <div class="p-4 bg-gray-500 rounded-md dark:bg-gray-700">
                        <label for="nama" class="block mb-2 font-semibold text-gray-900 dark:text-white">Nama</label>
                        <input type="text" class="block w-full p-2 border border-gray-400 rounded" value="{{ $masyarakat->nama }}">
                    </div>
                    
                    <!-- No HP -->
                    <div class="p-4 bg-gray-100 rounded-md dark:bg-gray-700">
                        <label for="no_hp" class="block mb-2 font-semibold text-gray-900 dark:text-white">No HP</label>
                        <input type="text" class="block w-full p-2 border border-gray-400 rounded" value="{{ $masyarakat->nohp }}">
                    </div>

                    <!-- Jenis Kelamin -->
                    <div class="col-span-2 p-4 bg-gray-100 rounded-md dark:bg-gray-700">
                        <label for="jenis_kelamin" class="block mb-2 font-semibold text-gray-900 dark:text-white">Jenis Kelamin</label>
                        <select id="jenis_kelamin" name="jenis_kelamin"
                        class="w-full px-3 py-2 text-gray-500 bg-transparent border border-gray-500 rounded-md dark:text-grey-200 focus:outline-none focus:border-blue-500" value="{{ old('status', $masyarakat->jenis_kelamin) }}">
                        <option value="selected">Pilih Jenis Kelamin</option>
                        <option value="laki-laki">Laki - Laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                    @error('jenis_kelamin')
                        <div class="py-3 text-rose-500">{{ $message }}</div>
                    @enderror
                    </div>

                    <!-- Alamat -->
                    <div class="col-span-2 p-4 bg-gray-100 rounded-md dark:bg-gray-700">
                        <label for="alamat" class="block mb-2 font-semibold text-gray-900 dark:text-white">Alamat</label>
                        <textarea class="block w-full p-2 border border-gray-400 rounded" rows="4">{{ $masyarakat->alamat }}</textarea>
                    </div>

                    <!-- Email -->
                    <div class="p-4 bg-gray-100 rounded-md dark:bg-gray-700">
                        <label for="email" class="block mb-2 font-semibold text-gray-900 dark:text-white">Email</label>
                        <input type="text" class="block w-full p-2 border border-gray-400 rounded" value="{{ $masyarakat->email }}">
                    </div>

                    <!-- Status -->
                    <div class="col-span-2 p-4 bg-gray-100 rounded-md dark:bg-gray-700">
                        <label for="status" class="block mb-2 font-semibold text-gray-900 dark:text-white">Status</label>
                        <select id="status" name="status"
                        class="w-full px-3 py-2 text-gray-500 bg-transparent border border-gray-500 rounded-md dark:text-grey-200 focus:outline-none focus:border-blue-500" value="{{ old('status', $masyarakat->status) }}">
                        <option value="selected">Pilih Status</option>
                        <option value="aktif">Ditolak</option>
                        <option value="nonaktif">Disetujui</option>
                    </select>
                    @error('status')
                        <div class="py-3 text-rose-500">{{ $message }}</div>
                    @enderror
                    </div>
                </div>
                <div class="mt-4">
                    <button class="px-4 py-2 font-semibold text-gray-800 bg-green-500 rounded-md hover:bg-green-600 dark:bg-green-700 dark:hover:bg-green-800">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
