@extends('layouts.dashboard')
@section('content')
    <div class="rounded-lg shadow w-full min-h-full py-6 bg-white dark:bg-zinc-800">
        <h2 class="text-2xl font-semibold text-zinc-900 dark:text-zinc-300 px-9">Create</h2>
        <hr class="h-px bg-zinc-300 w-full border-0 dark:bg-gray-700 my-4">
        <div class="step-form-wrapper py-16 px-12">
            <div class="w-full max-w-3xl">
              <div class="w-full h-full flex items-center justify-center bg-primary-500 dark:bg-zinc-800">
                <div class="w-full max-w-xl text-center">
                    <img src="{{asset('images/completed-visa.png')}}" alt="visa submitted successfully" class="block mx-auto mb-4">
                    <h2 class="text-5xl text-white dark:text-zinc-300 mb-3 font-bold">Visa Successfully
                        Submitted For Review!</h2>
                    <p class="text-base text-white font-normal antialiased dark:text-zinc-400 mb-7">Check under your dashboard for
                        more information</p>
                </div>
              </div>
            </div>

        </div>
    </div>
@endsection
