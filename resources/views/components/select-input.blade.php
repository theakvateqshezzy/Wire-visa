@props(['disabled' => false])

<select required {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' =>
        'border text-sm text-zinc-500 py-3 px-4 border-zinc-200 rounded dark:border-zinc-700  bg-zinc-100 dark:text-gray-300 dark:bg-zinc-700 focus:border-primary-500 dark:focus:border-primary-500 focus:ring-primary-500 dark:focus:ring-primary-500 shadow-sm w-full',
]) !!}
    >
    <option value="" disabled selected>Select an option</option>
    <option class="text-zinc-600 font-medium dark:text-zinc-300" value="option-1">Option A</option>
    <option class="text-zinc-600 font-medium dark:text-zinc-300" value="option-2">Option B</option>
    <option class="text-zinc-600 font-medium dark:text-zinc-300" value="option-3">Option C</option>
</select>
