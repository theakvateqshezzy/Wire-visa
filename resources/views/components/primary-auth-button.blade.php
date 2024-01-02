<button {{ $attributes->merge(['type' => 'submit', 'class' => 'bg-primary-500 rounded text-white text-base font-medium antialiased flex items-center justify-center w-full h-[42px] hover:bg-primary-600 transition ease-in-out duration-150 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2']) }}>
    {{ $slot }}
</button>
