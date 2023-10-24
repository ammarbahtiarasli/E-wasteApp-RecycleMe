@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center justify-center ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-white dark:bg-gray-800 text-gray-200-foreground dark:hover:bg-gray-800/80 hover:bg-slate-200/80 sm:h-11 rounded-full h-10 px-6 w-56 sm:px-8 text-[1.05rem] tracking-tighter font-bold'
            : 'inline-flex items-center justify-center ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-transparent dark:bg-transparent text-gray-200-foreground dark:hover:bg-gray-800/80 hover:bg-slate-200/80 sm:h-11 rounded-full h-10 px-6 w-56 sm:px-8 text-[1.05rem] tracking-tighter font-normal';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
