<!-- resources/views/components/button-primary-bordered.blade.php -->
<button {{ $attributes->merge([
    'type' => 'submit',
    'class' => 'w-full max-w-[170px] bg-transparent hover:text-white border border-primary-500 text-primary-500 rounded text-base font-medium antialiased flex items-center justify-center py-3 transition ease-in-out duration-150'
]) }}>
    {{ $slot }}
</button>