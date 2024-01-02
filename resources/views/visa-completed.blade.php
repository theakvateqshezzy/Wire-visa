@extends('layouts.dashboard')
@section('content')
    <a href="#" class="text-lg text-zinc-800 dark:text-zinc-400 font-semibold antialiased mb-3 block"><i
            class="fa-solid fa-arrow-left mr-2"></i><span> Back</span></a>
    <div class="rounded-lg shadow w-full min-h-full py-6 bg-white dark:bg-zinc-800">
        <div class="flex items-center justify-between px-9">
            <div>
                <h2 class="text-2xl font-semibold text-zinc-900 dark:text-zinc-300">Tourist (James Henry)
                </h2>
                <h5 class="text-base font-semibold text-yellow-500">35% Completed</h5>
            </div>
            <div class="flex items-center justify-end w-full max-w-96 mb-7">
                <x-button-primary-solid class="bg-amber-600 border-amber-600 hover:bg-tranparent hover:text-amber-600 ml-2">
                    Download PDF
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
                                Documents
                            </div>
                        </th>
                        <th scope="col" class="p-0 text-start text-xs font-medium text-gray-500 dark:text-gray-400">
                            <div class="px-6 py-4 bg-zinc-100 dark:bg-zinc-700 mb-4 block">
                                Approved
                            </div>
                        </th>
                        <th scope="col" class="p-0 text-start text-xs font-medium text-gray-500 dark:text-gray-400">
                            <div class="px-6 py-4 bg-zinc-100 dark:bg-zinc-700 mb-4 block">
                                Action
                            </div>
                        </th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td
                            class="text-sm text-zinc-800 dark:text-zinc-400 border border-zinc-200 dark:border-zinc-700 px-6 py-3">
                            Passport
                        </td>
                        <td
                            class="text-sm text-center text-zinc-800 dark:text-zinc-400 border border-zinc-200 dark:border-zinc-700 px-6 py-3 ">
                            <div
                                class="w-7 h-7 flex items-center justify-center bg-primary-400 text-primary-500 rounded mx-2">
                                <i class="fa-solid fa-check"></i>
                            </div>
                        </td>
                        <td
                            class="text-sm text-zinc-800 dark:text-zinc-400 border border-zinc-200 dark:border-zinc-700 px-6 py-3 text-center">
                        </td>

                    </tr>
                    <tr>
                        <td
                            class="text-sm text-zinc-800 dark:text-zinc-400 border border-zinc-200 dark:border-zinc-700 px-6 py-3">
                            Passport
                        </td>
                        <td
                            class="text-sm text-center text-zinc-800 dark:text-zinc-400 border border-zinc-200 dark:border-zinc-700 px-6 py-3 ">
                            <div
                                class="w-7 h-7 flex items-center justify-center bg-primary-400 text-primary-500 rounded mx-2">
                                <i class="fa-solid fa-check"></i>
                            </div>
                        </td>
                        <td
                            class="text-sm text-zinc-800 dark:text-zinc-400 border border-zinc-200 dark:border-zinc-700 px-6 py-3 text-center">
                        </td>

                    </tr>
                    <tr>
                        <td
                            class="text-sm text-zinc-800 dark:text-zinc-400 border border-zinc-200 dark:border-zinc-700 px-6 py-3">
                            Passport
                        </td>
                        <td
                            class="text-sm text-center text-zinc-800 dark:text-zinc-400 border border-zinc-200 dark:border-zinc-700 px-6 py-3 ">
                            <div
                                class="w-7 h-7 flex items-center justify-center bg-primary-400 text-primary-500 rounded mx-2">
                                <i class="fa-solid fa-check"></i>
                            </div>
                        </td>
                        <td
                            class="text-sm text-zinc-800 dark:text-zinc-400 border border-zinc-200 dark:border-zinc-700 px-6 py-3 text-center">
                        </td>

                    </tr>
                    <tr>
                        <td
                            class="text-sm text-zinc-800 dark:text-zinc-400 border border-zinc-200 dark:border-zinc-700 px-6 py-3">
                            Passport
                        </td>
                        <td
                            class="text-sm text-center text-zinc-800 dark:text-zinc-400 border border-zinc-200 dark:border-zinc-700 px-6 py-3 ">
                            <div
                                class="w-7 h-7 flex items-center justify-center bg-primary-400 text-primary-500 rounded mx-2">
                                <i class="fa-solid fa-check"></i>
                            </div>
                        </td>
                        <td
                            class="text-sm text-zinc-800 dark:text-zinc-400 border border-zinc-200 dark:border-zinc-700 px-6 py-3 text-center">
                        </td>

                    </tr>
                    <tr>
                        <td
                            class="text-sm text-zinc-800 dark:text-zinc-400 border border-zinc-200 dark:border-zinc-700 px-6 py-3">
                            Passport
                        </td>
                        <td
                            class="text-sm text-center text-zinc-800 dark:text-zinc-400 border border-zinc-200 dark:border-zinc-700 px-6 py-3 ">
                            <div
                                class="w-7 h-7 flex items-center justify-center bg-primary-400 text-primary-500 rounded mx-2">
                                <i class="fa-solid fa-check"></i>
                            </div>
                        </td>
                        <td
                            class="text-sm text-zinc-800 dark:text-zinc-400 border border-zinc-200 dark:border-zinc-700 px-6 py-3 text-center">
                        </td>

                    </tr>
                    <tr>
                        <td
                            class="text-sm text-zinc-800 dark:text-zinc-400 border border-zinc-200 dark:border-zinc-700 px-6 py-3">
                            Passport
                        </td>
                        <td
                            class="text-sm text-center text-zinc-800 dark:text-zinc-400 border border-zinc-200 dark:border-zinc-700 px-6 py-3 ">
                            <div
                                class="w-7 h-7 flex items-center justify-center bg-primary-400 text-primary-500 rounded mx-2">
                                <i class="fa-solid fa-check"></i>
                            </div>
                        </td>
                        <td
                            class="text-sm text-zinc-800 dark:text-zinc-400 border border-zinc-200 dark:border-zinc-700 px-6 py-3 text-center">
                        </td>

                    </tr>
                    <tr>
                        <td
                            class="text-sm text-zinc-800 dark:text-zinc-400 border border-zinc-200 dark:border-zinc-700 px-6 py-3">
                            Passport
                        </td>
                        <td
                            class="text-sm text-center text-zinc-800 dark:text-zinc-400 border border-zinc-200 dark:border-zinc-700 px-6 py-3 ">
                            <div
                                class="w-7 h-7 flex items-center justify-center bg-primary-400 text-primary-500 rounded mx-2">
                                <i class="fa-solid fa-check"></i>
                            </div>
                        </td>
                        <td
                            class="text-sm text-zinc-800 dark:text-zinc-400 border border-zinc-200 dark:border-zinc-700 px-6 py-3 text-center">
                        </td>

                    </tr>
                    <tr>
                        <td
                            class="text-sm text-zinc-800 dark:text-zinc-400 border border-zinc-200 dark:border-zinc-700 px-6 py-3">
                            Passport
                        </td>
                        <td
                            class="text-sm text-center text-zinc-800 dark:text-zinc-400 border border-zinc-200 dark:border-zinc-700 px-6 py-3 ">
                            <div
                                class="w-7 h-7 flex items-center justify-center bg-primary-400 text-primary-500 rounded mx-2">
                                <i class="fa-solid fa-check"></i>
                            </div>
                        </td>
                        <td
                            class="text-sm text-zinc-800 dark:text-zinc-400 border border-zinc-200 dark:border-zinc-700 px-6 py-3 text-center">
                        </td>

                    </tr>


                </tbody>
            </table>
        </div>
    </div>
@endsection
