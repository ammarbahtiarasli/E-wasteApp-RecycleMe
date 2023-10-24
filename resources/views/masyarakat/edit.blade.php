<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Masyarakat') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-xl font-semibold leading-6 tracking-tighter dark:text-gray-200">Detail Informasi
                    </h3>
                    <p class="mt-1.5 text-sm text-muted-foreground dark:text-gray-300">Masyarakat yang sudah registrasi
                    </p>
                </div>
            </div>

            <div class="container p-8 mx-auto mt-5 bg-white dark:bg-gray-800">
                <form action={{ route('masyarakat.update') }} method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="id" name="id" value="{{ $masyarakat->id }}">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="mb-4">
                            <x-input-label for="nama" :value="__('Nama')" />
                            <x-text-input id="nama" name="nama" type="text" class="block w-full mt-1"
                                :value="old('nama', $masyarakat->nama)" required autofocus autocomplete="nama" />
                            <x-input-error class="mt-2" :messages="$errors->get('nama')" />
                        </div>

                        <div class="mb-4">
                            <x-input-label for="jenis_kelamin" :value="__('Jenis Kelamin')" />
                            <x-select id="jenis_kelamin" name="jenis_kelamin" class="block w-full mt-1">
                                <option value="laki-laki"
                                {{ $masyarakat->jenis_kelamin === 'laki-laki' ? 'selected' : '' }}>Laki - Laki</option>
                                <option value="perempuan"
                                {{ $masyarakat->jenis_kelamin === 'perempuan' ? 'selected' : '' }}>Perempuan</option>
                            </x-select>
                            <x-input-error class="mt-2" :messages="$errors->get('jenis_kelamin')" />
                        </div>

                        <div class="mb-4">
                            <x-input-label for="nohp" :value="__('Nomor HP')" />
                            <x-text-input id="nohp" name="nohp" type="number" class="block w-full mt-1"
                                :value="old('nohp', $masyarakat->nohp)" required autocomplete="nohp" />
                            <x-input-error class="mt-2" :messages="$errors->get('nohp')" />
                        </div>

                        <div class="mb-4">
                            <x-input-label for="email" :value="__('email')" />
                            <x-text-input id="email" name="email" type="email" class="block w-full mt-1"
                                :value="old('email', $masyarakat->email)" required autocomplete="email" />
                            <x-input-error class="mt-2" :messages="$errors->get('email')" />
                        </div>

                        <div class="mb-4">
                            <x-input-label for="status" :value="__('Status')" />
                            <x-select id="status" name="status" class="block w-full mt-1">
                                <option value="belum disetujui"
                                {{ $masyarakat->status === 'belum disetujui' ? 'selected' : '' }}>Belum Disetujui</option>
                                <option value="disetujui"
                                {{ $masyarakat->status === 'disetujui' ? 'selected' : '' }}>Disetujui</option>
                                <option value="ditolak"
                                {{ $masyarakat->status === 'ditolak' ? 'selected' : '' }}>Ditolak</option>
                            </x-select>
                        </div>
                    </div>

                    <div class="mb-4">
                        <x-input-label for="alamat" :value="__('Alamat')" />
                        <x-textarea-input id="alamat" name="alamat" class="block w-full mt-1" rows="3"
                            :value="old('alamat', $masyarakat->alamat)" required autocomplete="alamat" />
                        <x-input-error class="mt-2" :messages="$errors->get('alamat')" />
                    </div>

                    <x-primary-button type="submit" class="mt-2">{{ __('Ubah Data') }}</x-primary-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
