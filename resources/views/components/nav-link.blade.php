@props(['active'])

@php
    $classes = ($active ?? false)
        ? 'inline-flex items-center px-4 py-2 max-w-max rounded-lg text-sm font-semibold text-white bg-blue-500 dark:bg-indigo-600 shadow-lg transition-all duration-300 ease-in-out'
        : 'inline-flex items-center px-4 py-2 max-w-max rounded-lg text-sm font-medium text-white dark:text-gray-400 hover:text-blue-600 hover:bg-white dark:hover:text-indigo-400 dark:hover:bg-gray-900 focus:outline-none focus:ring focus:ring-indigo-300 dark:focus:ring-indigo-800 transition-all duration-300 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>