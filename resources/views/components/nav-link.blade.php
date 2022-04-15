@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-via-400 text-sm font-medium leading-5 text-via-900 hover:text-via-900 focus:outline-none focus:border-via-700 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-via-500 hover:text-via-900 hover:border-via-300 focus:outline-none focus:text-via-500 focus:border-via-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
