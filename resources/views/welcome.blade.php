<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Sampah Elektronik') }}
        </h2>
    </x-slot>

    <div class="pt-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                {{ __('Barang bekas yang masih bisa dimanfaatkan bisa di beli disini :)') }}
            </div>
        </div>
    </div>

    <div class="px-4 py-4 mx-auto lg:py-12 sm:px-6 md:px-4 lg:max-w-6xl xl:max-w-7xl lg:px-8">
        <div class="flex flex-col p-6 px-0 pt-0">
            <h3 class="text-xl font-semibold leading-6 tracking-tighter dark:text-gray-200">Semua barang elektronik</h3>
            <p class="mt-1.5 text-sm text-muted-foreground dark:text-gray-300">Semua barang bekas yang ada di dropbox</p>
        </div>
        <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
            {{-- card 1 --}}
            <div
                class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="p-8 rounded-t-lg" src="https://picsum.photos/id/119/1000/1000" alt="product image" />
                </a>
                <div class="px-5 pb-5">
                    <a href="#">
                        <h3 class="text-xl font-semibold leading-6 tracking-tighter dark:text-gray-200">Macbook Pro 2016
                            Bekas</h3>
                    </a>
                    <form action="/checkout" method="post">
                        @csrf
                        <div class="py-2">
                            <x-input-label for="qty" :value="__('Qty')" />
                            <x-text-input id="qty" class="block w-full mt-1" type="number" name="qty"
                                :value="old('qty')" required autofocus />
                            <x-input-error :messages="$errors->get('qty')" class="mt-2" />
                        </div>
                        <div class="py-2">
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" class="block w-full mt-1" type="text" name="name"
                                :value="old('name')" required />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                        <div class="py-2">
                            <x-input-label for="phone" :value="__('Phone')" />
                            <x-text-input id="phone" class="block w-full mt-1" type="text" name="phone"
                                :value="old('name')" required aria-valuemax="13" />
                            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                        </div>
                        <div class="py-2">
                            <x-input-label for="address" :value="__('Address')" />
                            <x-textarea-input id="address" class="block w-full mt-1" type="text" name="address"
                                :value="old('address')" required />
                            <x-input-error :messages="$errors->get('address')" class="mt-2" />
                        </div>
                        <div class="flex items-center justify-between pt-2">
                            <span class="text-xl font-semibold leading-6 tracking-tighter dark:text-gray-200">Rp.
                                60.000</span>
                            <button type="submit"
                                class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">Checkout</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
