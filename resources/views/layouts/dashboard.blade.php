<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/izitoast.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="h-svh" x-data="{ isSidebarExpanded: true }">
        <div class="w-full h-full flex items-center justify-start">
            <aside
                class="sidebar h-full flex flex-col text-gray-300 bg-white transition-all duration-300 ease-in-out p-5 border-r border-zinc-300 shadow-sm relative z-10 dark:bg-zinc-800 dark:border-zinc-800"
                :class="isSidebarExpanded ? 'min-w-[270px]' : 'min-w-0 max-w-0 !px-0 overflow-hidden'">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="flex items-center justify-between focus:outline-none transition ease-in-out duration-150 w-full">
                            {{-- <div>{{ Auth::user()->name }}</div> --}}
                            <div class="flex items-center">
                                <div
                                    class="w-12 h-12 rounded-full bg-primary-400 flex items-center justify-center text-primary-500 text-xl uppercase font-semibold mr-3">
                                    {{ substr(Auth::user()->name, 0, 1) }}
                                </div>
                                <h5 class="text-lg font-normal text-zinc-900 dark:text-zinc-400">
                                    {{ Auth::user()->name }}</h5>
                            </div>
                            <div class="ms-1 text-zinc-900 dark:text-zinc-400">
                                <i class="fa-solid fa-caret-down"></i>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
                <div class="mt-10">
                    <a href="{{ route('create.lead') }}"
                        class="w-full h-11 flex items-center justify-start text-white bg-primary-500 rounded-lg px-4 text-base font-medium dark:bg-primary-700 antialiased border-2 border-primary-500 dark:border-primary-700 hover:bg-transparent hover:text-primary-500 dark:hover:text-white transition-all duration-300 ease-in-out"><i
                            class="fa-solid fa-plus"></i><span class="ml-4">Create New</span></a>
                </div>
                <ul class="mt-12 nav-menu">
                    <li class="mb-8"><a href="{{ route('dashboard') }}"
                            class="w-full h-11 flex items-center justify-start text-zinc-500 dark:text-zinc-300 bg-transparent rounded-lg px-4 text-base font-medium dark:bg-transparent antialiased border-2 border-transparent hover:border-primary-400 dark:border-transparent hover:bg-transparent hover:text-primary-500 dark:hover:text-white transition-all duration-300 ease-in-out {{ request()->route()->getName() == 'dashboard'? 'active': '' }}"><i
                                class="fa-solid fa-house-chimney"></i><span class="ml-4">Dashboard</span></a></li>
                    <li class="mb-8"><a href="{{ route('visa-requests.index') }}"
                            class="w-full h-11 flex items-center justify-start text-zinc-500 dark:text-zinc-300 bg-transparent rounded-lg px-4 text-base font-medium dark:bg-transparent antialiased border-2 border-transparent hover:border-primary-400 dark:border-transparent hover:bg-transparent hover:text-primary-500 dark:hover:text-white transition-all duration-300 ease-in-out {{ request()->route()->getName() == 'visa-requests.index'? 'active': '' }}"><i
                                class="fa-brands fa-watchman-monitoring"></i><span class="ml-4">Track
                                ongoing</span></a></li>
                    <li class="mb-8"><a href="{{ route('completed') }}"
                            class="w-full h-11 flex items-center justify-start text-zinc-500 dark:text-zinc-300 bg-transparent rounded-lg px-4 text-base font-medium dark:bg-transparent antialiased border-2 border-transparent hover:border-primary-400 dark:border-transparent hover:bg-transparent hover:text-primary-500 dark:hover:text-white transition-all duration-300 ease-in-out {{ request()->route()->getName() == 'completed'? 'active': '' }}"><i
                                class="fa-solid fa-file"></i><span class="ml-4">Completed Visa</span></a></li>
                    <li class="mb-8"><a href="{{ route('users') }}"
                            class="w-full h-11 flex items-center justify-start text-zinc-500 dark:text-zinc-300 bg-transparent rounded-lg px-4 text-base font-medium dark:bg-transparent antialiased border-2 border-transparent hover:border-primary-400 dark:border-transparent hover:bg-transparent hover:text-primary-500 dark:hover:text-white transition-all duration-300 ease-in-out {{ request()->route()->getName() == 'users'? 'active': '' }}"><i
                                class="fa-solid fa-users"></i><span class="ml-4">Users</span></a></li>
                    <li class="mb-8"><a href="{{ route('visas') }}"
                            class="w-full h-11 flex items-center justify-start text-zinc-500 dark:text-zinc-300 bg-transparent rounded-lg px-4 text-base font-medium dark:bg-transparent antialiased border-2 border-transparent hover:border-primary-400 dark:border-transparent hover:bg-transparent hover:text-primary-500 dark:hover:text-white transition-all duration-300 ease-in-out {{ request()->route()->getName() == 'visas'? 'active': '' }}"><i
                                class="fa-solid fa-file"></i><span class="ml-4">Visas</span></a></li>
                    <li class="mb-8"><a href="#"
                            class="w-full h-11 flex items-center justify-start text-zinc-500 dark:text-zinc-300 bg-transparent rounded-lg px-4 text-base font-medium dark:bg-transparent antialiased border-2 border-transparent hover:border-primary-400 dark:border-transparent hover:bg-transparent hover:text-primary-500 dark:hover:text-white transition-all duration-300 ease-in-out {{ request()->route()->getName() == 'setting'? 'active': '' }}"><i
                                class="fa-solid fa-gear"></i><span class="ml-4">Settings</span></a></li>


                </ul>
                <img src="/images/logo-green.png" alt=""
                    class="absolute bottom-12 left-1/2 -translate-x-1/2 dark:brightness-0 dark:invert ">
            </aside>
            <div class="content-wrapper h-full w-full">
                <header
                    class="header bg-white h-20 h- w-full p-5 border-b border-zinc-300 relative dark:bg-zinc-800 dark:border-zinc-800">
                    <button class="p-2 -ml-2 mr-2 dark:fill-white" @click="isSidebarExpanded = !isSidebarExpanded">
                        <svg viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6 transform dark:invert"
                            :class="isSidebarExpanded ? 'rotate-180' : 'rotate-0'">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <line x1="4" y1="6" x2="14" y2="6" />
                            <line x1="4" y1="18" x2="14" y2="18" />
                            <path d="M4 12h17l-3 -3m0 6l3 -3" />
                        </svg>
                    </button>
                    <button id="theme-toggle" type="button"
                        class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 absolute right-0">
                        <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                        </svg>
                        <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                fill-rule="evenodd" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </header>
                <div
                    class="content-area h-[calc(100svh-160px)] bg-zinc-100 w-full px-9 py-9 dark:bg-zinc-900 overflow-y-auto">
                    @yield('content')
                </div>
                <footer
                    class="footer bg-white h-20 w-full p-5 border-t border-zinc-300 dark:bg-zinc-800 dark:border-zinc-800 flex items-center justify-center">
                    <p class="text-base font-normal text-zinc-500 dark:text-zinc-400 text-center">Copyright 2023 ©
                        <span class="text-primary-500">Visawire</span>
                    </p>
                </footer>
            </div>
        </div>

    </div>


</body>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.13.3/cdn.js"
integrity="sha512-x6oUSDeai/Inb/9HFvbrBtDOnLvFSd37f6j2tKRePhFBLYAezejnN5xgG52M20rnFN66+6EWwuFwAneEXyq6oA=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/progressbar.js/1.0.0/progressbar.min.js"
integrity="sha512-Hivnqo7w/SRPjJY3qvD8Y1CaKbmrmqDjZKYgIFyIag/2bOye6Qk1W99wZYObixwzYoZQeKWPqZ2ifus82GE07A=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="{{asset('js/izitoast.js')}}"></script>



<script>
    var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
    var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

    // Change the icons inside the button based on previous settings
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
            '(prefers-color-scheme: dark)').matches)) {
        themeToggleLightIcon.classList.remove('hidden');
    } else {
        themeToggleDarkIcon.classList.remove('hidden');
    }

    var themeToggleBtn = document.getElementById('theme-toggle');

    themeToggleBtn.addEventListener('click', function() {

        // toggle icons inside button
        themeToggleDarkIcon.classList.toggle('hidden');
        themeToggleLightIcon.classList.toggle('hidden');

        // if set via local storage previously
        if (localStorage.getItem('color-theme')) {
            if (localStorage.getItem('color-theme') === 'light') {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            } else {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            }

            // if NOT set via local storage previously
        } else {
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            } else {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            }
        }

    });
</script>

@if(Session::has('status'))
    @if(Session::get('status'))
        <script>
            iziToast.show({
                title: 'Success :',
                message: '{{Session::get("message")}}',
                color: "green"
            });
        </script>
    @else
        <script>
            iziToast.show({
                title: 'Error :',
                message: '{{Session::get("message")}}',
                color: "red"
            });
        </script>
    @endif
@endif

@if(Session::has('failure'))
  <script>
      iziToast.show({
          title: 'Error :',
          message: '{{Session::get("failure")}}',
          color: "red"
      });
  </script>
@endif
<!-- END FAILURE FLASH -->

<!-- VALIDATOR FLASH -->
@if($errors->any())
<script>
  @foreach ($errors->all() as $error)
    iziToast.show({
        title: 'Error :',
        message: '{{$error}}',
        color: "red"
    });
  @endforeach
</script>
@endif

@yield('js')

@stack('js')

</html>
