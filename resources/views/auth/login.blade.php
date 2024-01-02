<x-guest-layout>
    {{-- <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" /> --}}
    <h2 class="text-[56px] text-zinc-900 font-semibold font-poppins antialiased dark:text-zinc-300 mb-5">Login</h2>
    <p class="text-base text-zinc-500 font-normal antialiased dark:text-zinc-400 mb-7">Ut enim ad minima veniam, quis nostrum exercitationem ullam
        corporis suscipit laboriosam, nisi ut alter.</p>
    <div class="flex items-center justify-between flex-wrap">
        <x-google-login-button></x-google-login-button>
        <x-facebook-login-button></x-facebook-login-button>
    </div>
    <div class="flex items-center justify-center my-8">
        <hr class="h-px bg-zinc-300 w-full border-0 dark:bg-gray-700"> 
        <p class="mx-9 text-base text-zinc-500 font-normal antialiased dark:text-zinc-400">Or</p> 
        <hr class="h-px bg-zinc-300 w-full border-0 dark:bg-gray-700">
    </div>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        
        <div class="flex items-center justify-between mt-2 mb-8">
            <div class="block">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-primary-600 shadow-sm focus:ring-primary-500 dark:focus:ring-primary-600 dark:focus:ring-offset-gray-800" name="remember">
                    <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                </label>
            </div>
            @if (Route::has('password.request'))
                <a class="underline text-sm text-primary-500 dark:text-primary-500 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </div>
        <x-primary-auth-button >
            {{ __('Sign in') }}
        </x-primary-auth-button>
        <p class="text-sm text-center text-zinc-900 dark:text-zinc-400 mt-10 flex items-center justify-center"><span>Don't have an account?</span> <a class="text-sm text-primary-500 dark:text-primary-500 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 dark:focus:ring-offset-gray-800 ml-1" href="{{ route('register') }}">
            {{ __('Sign up') }}
        </a></p>
    </form>
</x-guest-layout>

