@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' =>
        'border border-zinc-300 rounded dark:border-zinc-700  bg-transparent dark:text-gray-300 focus:border-primary-500 dark:focus:border-primary-500 focus:ring-primary-500 dark:focus:ring-primary-500 shadow-sm',
]) !!}>
