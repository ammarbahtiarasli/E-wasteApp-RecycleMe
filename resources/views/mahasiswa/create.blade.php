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
                    <h3 class="text-xl font-semibold leading-6 tracking-tighter dark:text-gray-200">Tambah data mahasiswa</h3>
                    <p class="mt-1.5 text-sm text-muted-foreground dark:text-gray-300">lorem ipsum dolor sit amet</p>
                </div>
            </div>



            <div class="container p-8 mx-auto mt-5 bg-white dark:bg-gray-800">
                <form action={{ route('mahasiswa.store') }} method="POST">
                    @csrf
                    <div class="mb-4">
                        <x-input-label for="nama" :value="__('Nama')" />
                        <x-text-input id="nama" name="nama" type="text" class="block w-full mt-1" required
                            autofocus autocomplete="nama" />
                        <x-input-error class="mt-2" :messages="$errors->get('nama')" />
                    </div>

                    <div class="mb-4">
                        <x-input-label for="npm" :value="__('npm')" />
                        <x-text-input id="npm" name="npm" type="number" class="block w-full mt-1" required
                            autocomplete="npm" />
                        <x-input-error class="mt-2" :messages="$errors->get('npm')" />
                    </div>

                    <div class="mb-4">
                        <x-input-label for="email" :value="__('email')" />
                        <x-text-input id="email" name="email" type="email" class="block w-full mt-1" required
                            autofocus autocomplete="email" />
                        <x-input-error class="mt-2" :messages="$errors->get('email')" />
                    </div>

                    <div class="mb-4">
                        <x-input-label for="jurusan" :value="__('jurusan')" />
                        <x-select id="jurusan" name="jurusan" class="block w-full mt-1">
                            <option value="" selected>Pilih Jurusan</option>
                            <option value="teknik Informatika">Teknik Infomatika</option>
                            <option value="teknik Mesin">Teknik Mesin</option>
                            <option value="teknik Pangan">Teknik Pangan</option>
                        </x-select>
                    </div>
                    <x-primary-button>{{ __('Save') }}</x-primary-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
