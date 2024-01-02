@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-base text-zinc-900 dark:text-zinc-400']) }}>
    {{ $value ?? $slot }}
</label>
