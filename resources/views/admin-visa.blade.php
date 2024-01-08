@extends('layouts.dashboard')

@section('content')
<a href="#" class="text-lg text-zinc-800 dark:text-zinc-400 font-semibold antialiased mb-3 block"><i
    class="fa-solid fa-arrow-left mr-2"></i><span> Back</span></a>
<div class="rounded-lg shadow w-full min-h-full py-6 bg-white dark:bg-zinc-800">
    <div class="flex items-center justify-between px-9">
        <div>
            <h2 class="text-2xl font-semibold text-zinc-900 dark:text-zinc-300">Electronic Business Visa (Jason)
            </h2>
            <h5 class="text-base font-semibold text-yellow-500">35% Completed</h5>
        </div>
        <div class="flex items-center justify-end w-full max-w-96 mb-7">
            <x-button-primary-bordered class="text-red-600 border-red-600 hover:bg-red-600 mr-2">
                Delete Visa
            </x-button-primary-bordered>
            <x-button-primary-solid class="bg-amber-600 border-amber-600 hover:bg-tranparent hover:text-amber-600 ml-2">
                Issue query
            </x-button-primary-solid>
        </div>
    </div>
    <hr class="h-px bg-zinc-300 w-full border-0 dark:bg-gray-700 my-4">
    <div class="px-9 overflow-x-auto">
        <table class="min-w-full">
            <thead class="">
                <tr>
                    <th scope="col" class="p-0 text-start text-xs font-medium text-gray-500 dark:text-gray-400">
                        <div class="px-6 py-4 bg-zinc-100 dark:bg-zinc-700 mb-4 block rounded-l-lg">
                            Document Type 
                        </div>
                    </th>
                    <th scope="col" class="p-0 text-start text-xs font-medium text-gray-500 dark:text-gray-400">
                        <div class="px-6 py-4 bg-zinc-100 dark:bg-zinc-700 mb-4 block">
                            Document
                        </div>
                    </th>
                    <th scope="col" class="p-0 text-start text-xs font-medium text-gray-500 dark:text-gray-400">
                        <div class="px-6 py-4 bg-zinc-100 dark:bg-zinc-700 mb-4 block rounded-r-lg">
                            Action
                        </div>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td
                        class="text-sm text-zinc-800 dark:text-zinc-400 border border-zinc-200 dark:border-zinc-700 px-6 py-3 min-w-96">
                        <div class="bg-tranparent w-full divide-y divide-gray-200">
                            <details>
                                <summary
                                    class="question py-2 pl-2 cursor-pointer select-none w-full outline-none border-red-500">
                                    Passport</summary>
                                <div class="flex flex-col">
                                    <div class="-m-1.5 overflow-x-auto">
                                        <div class="p-1.5 min-w-full inline-block align-middle">
                                            <div class="overflow-hidden">
                                                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col"
                                                                class="px-6 py-3 text-start text-xs font-medium text-gray-500">
                                                                Queries</th>
                                                            <th scope="col"
                                                                class="px-6 py-3 text-start text-xs font-medium text-gray-500">
                                                                Date</th>
                                                            <th scope="col"
                                                                class="px-6 py-3 text-start text-xs font-medium text-gray-500">
                                                                Action</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                                        <tr>
                                                            <td
                                                                class="px-6 py-4 text-sm font-normal text-gray-800 dark:text-gray-400 max-w-56 antialiased">
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                                sed do eiusmod tempor incididunt ut labore </td>
                                                            <td
                                                                class="px-6 py-4 text-sm text-gray-800 dark:text-gray-400">
                                                                24/08/2023</td>
                                                            <td class="px-6 py-4  text-end text-sm font-medium">
                                                                <button
                                                                    class="w-9 h-9 flex items-center justify-center bg-primary-400 text-primary-500 rounded mx-2 hover:opacity-85">
                                                                    <i class="fa-solid fa-check"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </details>

                        </div 
                        </td>
                    <td
                        class="text-sm text-center text-zinc-800 dark:text-zinc-400 border border-zinc-200 dark:border-zinc-700 px-6 py-3 ">
                       <div class="flex items-center">
                        <img class="w-11 h-11 mr-3" src="/images/placeholder-image.png" alt="">
                        <img class="w-11 h-11" src="/images/placeholder-image.png" alt="">
                       </div>
                    </td>
                    <td
                        class="text-sm text-zinc-800 dark:text-zinc-400 border border-zinc-200 dark:border-zinc-700 px-6 py-3 text-center">
                        <div class="flex items-center">
                            <button
                                class="w-9 h-9 flex items-center justify-center bg-primary-400 text-primary-500 rounded mx-2 hover:opacity-85">
                                <i class="fa-solid fa-check"></i>
                            </button>
                            <button
                                class="w-9 h-9 flex items-center justify-center bg-red-200 text-red-500 rounded mx-2 hover:opacity-85">
                                <i class="fa-solid fa-xmark"></i>
                            </button>
                        </div>
                    </td>
                    
                </tr>
                <tr>
                    <td
                        class="text-sm text-zinc-800 dark:text-zinc-400 border border-zinc-200 dark:border-zinc-700 px-6 py-3 min-w-96">
                        <div class="bg-tranparent w-full divide-y divide-gray-200">
                            <details>
                                <summary
                                    class="question py-2 pl-2 cursor-pointer select-none w-full outline-none border-red-500">
                                    Copy of passport ID page</summary>
                                <div class="flex flex-col">
                                    <div class="-m-1.5 overflow-x-auto">
                                        <div class="p-1.5 min-w-full inline-block align-middle">
                                            <div class="overflow-hidden">
                                                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col"
                                                                class="px-6 py-3 text-start text-xs font-medium text-gray-500">
                                                                Queries</th>
                                                            <th scope="col"
                                                                class="px-6 py-3 text-start text-xs font-medium text-gray-500">
                                                                Date</th>
                                                            <th scope="col"
                                                                class="px-6 py-3 text-start text-xs font-medium text-gray-500">
                                                                Action</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                                        <tr>
                                                            <td
                                                                class="px-6 py-4 text-sm font-normal text-gray-800 dark:text-gray-400 max-w-56 antialiased">
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                                sed do eiusmod tempor incididunt ut labore </td>
                                                            <td
                                                                class="px-6 py-4 text-sm text-gray-800 dark:text-gray-400">
                                                                24/08/2023</td>
                                                            <td class="px-6 py-4  text-end text-sm font-medium">
                                                                <button
                                                                    class="w-9 h-9 flex items-center justify-center bg-primary-400 text-primary-500 rounded mx-2 hover:opacity-85">
                                                                    <i class="fa-solid fa-check"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </details>

                        </div 
                        </td>
                    <td
                        class="text-sm text-center text-zinc-800 dark:text-zinc-400 border border-zinc-200 dark:border-zinc-700 px-6 py-3 ">
                       <div class="flex items-center">
                        <img class="w-11 h-11 mr-3" src="/images/placeholder-image.png" alt="">
                        <img class="w-11 h-11" src="/images/placeholder-image.png" alt="">
                       </div>
                    </td>
                    <td
                        class="text-sm text-zinc-800 dark:text-zinc-400 border border-zinc-200 dark:border-zinc-700 px-6 py-3 text-center">
                        <div class="flex items-center">
                            <button
                                class="w-9 h-9 flex items-center justify-center bg-primary-400 text-primary-500 rounded mx-2 hover:opacity-85">
                                <i class="fa-solid fa-check"></i>
                            </button>
                            <button
                                class="w-9 h-9 flex items-center justify-center bg-red-200 text-red-500 rounded mx-2 hover:opacity-85">
                                <i class="fa-solid fa-xmark"></i>
                            </button>
                        </div>
                    </td>
                    
                </tr>
            </tbody>
        </table>
    </div>
</div>

{{-- modal html start --}}

<div class="rounded-lg shadow w-full max-w-3xl pt-5 bg-white dark:bg-zinc-800 mt-3">
    <div class="flex flex-col justify-center items-center px-5">
        <i class="fa-solid fa-xmark w-full text-right text-2xl cursor-pointer dark:text-zinc-300"></i>
        <h2 class="text-2xl font-semibold text-zinc-900 dark:text-zinc-300">Issue Query</h2>
    </div>
    <form action="" class="px-12 py-7">
        <div class="flex items-center justify-between">
            <div class="flex flex-col w-full max-w-80">
                <label class="text-sm font-medium text-gray-600 dark:text-zinc-300 mb-2" for="">Query #</label>
                <input class="bg-gray-100 rounded py-3 px-4 placeholder:text-zinc-800 dark:placeholder-zinc-400 font-normal focus:ring-primary-500 focus:border-primary-500 border-zinc-200 dark:border-zinc-700 dark:bg-zinc-700" type="text" placeholder="101" disabled>
            </div>
            <div class="flex flex-col w-full max-w-80">
                <label class="text-sm font-medium text-gray-600 dark:text-zinc-300 mb-2" for="">Query Reason</label>
                <input class="bg-transparent rounded py-3 px-4 placeholder:text-zinc-800 dark:placeholder-zinc-400 font-normal focus:ring-primary-500 focus:border-primary-500 border-zinc-200 dark:border-zinc-700" type="text" placeholder="Due to passport image">
            </div>
        </div>
        <div class="mt-5 mb-6">
            <label class="text-sm font-medium text-gray-600 dark:text-zinc-300 mb-2 block" for="">Query Description</label>
            <textarea class="bg-transparent rounded py-3 px-4 placeholder:text-zinc-800 dark:placeholder-zinc-400 font-normal focus:ring-primary-500 focus:border-primary-500 border-zinc-200 dark:border-zinc-700 h-32 w-full" name="" id="" cols="30" rows="10" placeholder="Type something...">
            </textarea>
        </div>
        <x-primary-auth-button >
            {{ __('Issue Query') }}
        </x-primary-auth-button>
    </form>
</div>

{{-- modal html end --}}
@endsection