@extends('layouts.dashboard')

@section('content')
    <div class="rounded-lg shadow w-full py-6 bg-white dark:bg-zinc-800">
        <div class="flex items-center justify-between px-9">
            <div>
                <h2 class="text-2xl font-semibold text-zinc-900 dark:text-zinc-300">Users
                </h2>
            </div>
            <div class="flex items-center justify-end w-full max-w-72">
                <form class="w-full">
                    <label for="default-search"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="search" id="default-search"
                            class="block w-full text-sm font-normal py-[10px] pl-10 text-gray-500 dark:text-gray-400 border border-zinc-200 rounded  focus:ring-primary-500 focus:border-primary-500 dark:bg-zinc-800 dark:border-zinc-700 dark:placeholder-gray-400  dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Search by name" required>
                    </div>
                </form>

            </div>
        </div>
        <hr class="h-px bg-zinc-300 w-full border-0 dark:bg-gray-700 my-4">
        <div class="px-9 overflow-x-auto pt-2">
            <table class="min-w-full admin-users-list">
                <thead class="">
                    <tr>
                        <th scope="col" class="p-0 text-start text-xs font-medium text-gray-500 dark:text-gray-400">
                            <div class="px-6 py-4 bg-zinc-100 dark:bg-zinc-700 mb-4 block rounded-l-lg">
                                Name
                            </div>
                        </th>
                        <th scope="col" class="p-0 text-start text-xs font-medium text-gray-500 dark:text-gray-400">
                            <div class="px-6 py-4 bg-zinc-100 dark:bg-zinc-700 mb-4 block">
                                Email
                            </div>
                        </th>
                        <th scope="col" class="p-0 text-start text-xs font-medium text-gray-500 dark:text-gray-400">
                            <div class="px-6 py-4 bg-zinc-100 dark:bg-zinc-700 mb-4 block">
                                Phone
                            </div>
                        </th>
                        <th scope="col" class="p-0 text-start text-xs font-medium text-gray-500 dark:text-gray-400">
                            <div class="px-6 py-4 bg-zinc-100 dark:bg-zinc-700 mb-4 block">
                                Created Date
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
                            class="text-sm font-normal text-zinc-600 dark:text-zinc-400 border-b border-dashed border-zinc-200 dark:border-zinc-700 px-6 py-3">
                            <div class="flex items-center">
                                <img class="w-7 h-7 mr-3" src="/images/user.png" alt="user profile">
                                <h4 class="block font-medium text-sm text-zinc-900 dark:text-zinc-400">Emelita Giraldez</h4>
                            </div>
                        </td>
                        <td
                            class="text-sm font-normal text-zinc-600 dark:text-zinc-400 border-b border-dashed border-zinc-200 dark:border-zinc-700 px-6 py-3">
                            emelita@gmail.com
                        </td>
                        <td
                            class="text-sm font-normal text-zinc-600 dark:text-zinc-400 border-b border-dashed border-zinc-200 dark:border-zinc-700 px-6 py-3">
                            (480) 555-0103
                        </td>
                        <td
                            class="text-sm font-normal text-zinc-600 dark:text-zinc-400 border-b border-dashed border-zinc-200 dark:border-zinc-700 px-6 py-3">
                            24/08/2023
                        </td>
                        <td
                            class="text-sm font-normal text-zinc-600 dark:text-zinc-400 border-b border-dashed border-zinc-200 dark:border-zinc-700 px-6 py-3">
                            <div class="flex items-center">
                                <button
                                    class="w-9 h-9 flex items-center justify-center bg-primary-400 text-primary-500 rounded mx-2 hover:opacity-85">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>
                                <button
                                    class="w-9 h-9 flex items-center justify-center bg-red-200 text-red-500 rounded mx-2 hover:opacity-85">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td
                            class="text-sm font-normal text-zinc-600 dark:text-zinc-400 border-b border-dashed border-zinc-200 dark:border-zinc-700 px-6 py-3">
                            <div class="flex items-center">
                                <img class="w-7 h-7 mr-3" src="/images/user.png" alt="user profile">
                                <h4 class="block font-medium text-sm text-zinc-900 dark:text-zinc-400">Emelita Giraldez</h4>
                            </div>
                        </td>
                        <td
                            class="text-sm font-normal text-zinc-600 dark:text-zinc-400 border-b border-dashed border-zinc-200 dark:border-zinc-700 px-6 py-3">
                            emelita@gmail.com
                        </td>
                        <td
                            class="text-sm font-normal text-zinc-600 dark:text-zinc-400 border-b border-dashed border-zinc-200 dark:border-zinc-700 px-6 py-3">
                            (480) 555-0103
                        </td>
                        <td
                            class="text-sm font-normal text-zinc-600 dark:text-zinc-400 border-b border-dashed border-zinc-200 dark:border-zinc-700 px-6 py-3">
                            24/08/2023
                        </td>
                        <td
                            class="text-sm font-normal text-zinc-600 dark:text-zinc-400 border-b border-dashed border-zinc-200 dark:border-zinc-700 px-6 py-3">
                            <div class="flex items-center">
                                <button
                                    class="w-9 h-9 flex items-center justify-center bg-primary-400 text-primary-500 rounded mx-2 hover:opacity-85">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>
                                <button
                                    class="w-9 h-9 flex items-center justify-center bg-red-200 text-red-500 rounded mx-2 hover:opacity-85">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td
                            class="text-sm font-normal text-zinc-600 dark:text-zinc-400 border-b border-dashed border-zinc-200 dark:border-zinc-700 px-6 py-3">
                            <div class="flex items-center">
                                <img class="w-7 h-7 mr-3" src="/images/user.png" alt="user profile">
                                <h4 class="block font-medium text-sm text-zinc-900 dark:text-zinc-400">Emelita Giraldez</h4>
                            </div>
                        </td>
                        <td
                            class="text-sm font-normal text-zinc-600 dark:text-zinc-400 border-b border-dashed border-zinc-200 dark:border-zinc-700 px-6 py-3">
                            emelita@gmail.com
                        </td>
                        <td
                            class="text-sm font-normal text-zinc-600 dark:text-zinc-400 border-b border-dashed border-zinc-200 dark:border-zinc-700 px-6 py-3">
                            (480) 555-0103
                        </td>
                        <td
                            class="text-sm font-normal text-zinc-600 dark:text-zinc-400 border-b border-dashed border-zinc-200 dark:border-zinc-700 px-6 py-3">
                            24/08/2023
                        </td>
                        <td
                            class="text-sm font-normal text-zinc-600 dark:text-zinc-400 border-b border-dashed border-zinc-200 dark:border-zinc-700 px-6 py-3">
                            <div class="flex items-center">
                                <button
                                    class="w-9 h-9 flex items-center justify-center bg-primary-400 text-primary-500 rounded mx-2 hover:opacity-85">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>
                                <button
                                    class="w-9 h-9 flex items-center justify-center bg-red-200 text-red-500 rounded mx-2 hover:opacity-85">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
