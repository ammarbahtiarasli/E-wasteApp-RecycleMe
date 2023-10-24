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

                <form action={{ route('masyarakat.update') }} method="POST">
                    @csrf
                    @method('PUT') 
                    <input type="hidden" name="id" id="id" value="{{ $masyarakat->id }} ">
                    <div class="grid grid-cols-2 gap-4">

                        <!-- Nama -->
                        <div class="p-4 bg-gray-500 rounded-md dark:bg-gray-700">
                            <label for="nama" class="block mb-2 font-semibold text-white">Nama</label>
                            <input type="text" name="nama" id="nama" class="w-full px-3 py-2 text-gray-900 bg-transparent border border-gray-500 rounded-md outline-none focus:border-blue-500" value="{{ $masyarakat->nama }}">
                        </div>

                        <!-- Jenis Kelamin -->
                        <div class="p-4 bg-gray-100 rounded-md dark:bg-gray-700">
                            <label for="jenis_kelamin" class="block mb-2 font-semibold text-gray-400">Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="w-full px-3 py-2 text-gray-500 bg-transparent border border-gray-500 rounded-md" id="jenis_kelamin">
                                <option value="laki-laki" {{ $masyarakat->jenis_kelamin === 'laki-laki' ? 'selected' : '' }}>Laki - Laki</option>
                                <option value="perempuan" {{ $masyarakat->jenis_kelamin === 'perempuan' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                        </div>

                        <!-- No HP -->
                        <div class="p-4 bg-gray-100 rounded-md dark:bg-gray-700">
                            <label for="no_hp" class="block mb-2 font-semibold text-gray-400">No HP</label>
                            <input type="text" name="nohp" id="nohp" class="w-full px-3 py-2 text-gray-900 bg-transparent border border-gray-500 rounded-md outline-none focus:border-blue-500" value="{{ $masyarakat->nohp }}">
                        </div>

                        <!-- Email -->
                        <div class="p-4 bg-gray-100 rounded-md dark:bg-gray-700">
                            <label for="email" class="block mb-2 font-semibold text-gray-400">Email</label>
                            <input type="email" name="email" id="email" class="w-full px-3 py-2 text-gray-900 bg-transparent border border-gray-500 rounded-md outline-none focus:border-blue-500" value="{{ $masyarakat->email }}">
                        </div>

                        <!-- Status -->
                        <div class="p-4 bg-gray-100 rounded-md dark:bg-gray-700">
                            <label for="status" class="block mb-2 font-semibold text-gray-400">Status</label>
                            <select name="status" id="status" class="w-full px-3 py-2 text-gray-500 bg-transparent border border-gray-500 rounded-md" value="{{ old('status', $masyarakat->status) }}">
                                <option value="selected">Pilih Status</option>
                                <option value="ditolak" {{ $masyarakat->status === 'ditolak' ? 'selected' : '' }}>Ditolak</option>
                                <option value="sudah disetujui" {{ $masyarakat->status === 'sudah disetujui' ? 'selected' : '' }}>Sudah Disetujui</option>
                            </select>
                        </div>

                        <!-- Alamat -->
                        <div class="col-span-2 p-4 bg-gray-100 rounded-md dark:bg-gray-700">
                            <label for="alamat" class="block mb-2 font-semibold text-gray-400">Alamat</label>
                            <textarea name="alamat" class="w-full px-3 py-2 text-gray-900 bg-transparent border border-gray-500 rounded-md outline-none focus:border-blue-500" rows="4">{{ $masyarakat->alamat }}</textarea>
                        </div>

                    </div>

                    <div class="mt-4">
                        <button type="submit" class="px-4 py-2 font-semibold text-gray-800 bg-green-500 rounded-md hover:bg-green-600 dark:bg-green-700 dark:hover:bg-green-800">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
