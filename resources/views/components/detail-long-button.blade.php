<a {{ $attributes->merge(['class' => 'px-3.5 w-full h-9 mt-4 items-center justify-center rounded-full inline-flex items-center px-4 py-2 bg-gray-200 border border-transparent rounded-md font-medium text-xs text-gray-800 uppercase tracking-widest hover:bg-gray-200/80 active:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-200 focus-visible:ring-offset-2 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</a>
