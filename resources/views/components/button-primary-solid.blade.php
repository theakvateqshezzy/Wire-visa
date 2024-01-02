<!-- resources/views/components/button-primary-solid.blade.php -->
<button {{ $attributes->merge([
    'type' => 'submit',
    'class' => 'w-full max-w-[170px] bg-primary-500 border border-primary-500 rounded text-base text-white font-medium antialiased flex items-center justify-center py-3 hover:bg-transparent hover:text-primary-500 transition ease-in-out duration-150'
]) }}>
    {{ $slot }}
</button>