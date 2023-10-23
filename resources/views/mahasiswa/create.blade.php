<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Mahasiswa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 dark:text-gray-100 text-gray-900">
                    {{ __('Tambah data Mahasiswa') }}
                </div>
            </div>



            <div class="container dark:bg-gray-800 bg-white mx-auto mt-5 p-8">
                <form action={{ route('mahasiswa.store') }} method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="nama" class="block dark:text-gray-100 text-gray-900 font-semibold mb-1">Nama</label>
                        <input type="text" id="nama" name="nama" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" placeholder="Masukkan Nama">
                    </div>

                    <div class="mb-4">
                        <label for="npm" class="block dark:text-gray-100 text-gray-900 font-semibold mb-1">Npm</label>
                        <input type="number" id="npm" name="npm" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" placeholder="Masukkan Npm" maxlength="10">
                    </div>

                    <div class="mb-4">
                        <label for="email" class="block dark:text-gray-100 text-gray-900 font-semibold mb-1">Email</label>
                        <input type="email" id="email" name="email" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" placeholder="Masukkan Email">
                    </div>

                    <div class="mb-4">
                        <label for="jurusan" class="block dark:text-gray-100 text-gray-900 font-semibold mb-1">Jurusan</label>
                        <select id="jurusan" name="jurusan" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500">
                            <option value="selected">Pilih Jurusan</option>
                            <option value="teknik Informatika">Teknik Infomatika</option>
                            <option value="teknik Mesin">Teknik Mesin</option>
                            <option value="teknik Pangan">Teknik Pangan</option>
                        </select>
                    </div>

                    <button type="submit" class=" mt-3 bg-green-500 hover:bg-green-600 text-gray-800 font-semibold rounded-md py-2 px-4">Tambah Data</button>
                </form>
            </div>

        </div>
    </div>
</x-app-layout>
