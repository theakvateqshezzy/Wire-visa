@extends('layouts.dashboard')

@section('content')
    <div
        class="top-info-banner bg-primary-500 dark:bg-primary-950 text-white dark:text-zinc-300 rounded-lg px-14 py-11 mb-9">
        <div class="max-w-[490px]">
            <h4 class="text-2xl font-normal mb-2 antialiased">Hello!</h4>
            <h2 class="text-4xl font-medium mb-4 antialiased">Welcome Back to Visawire</h2>
            <p class="text-base font-light antialiased">Lorem ipsum dolor sit amet, consectetur
                adipiscing elit.
                Sit amet, consectetur adipiscing dolor ipsum do elit. </p>
        </div>
    </div>
    <div class="flex items-center mb-9 -mx-[10px]">
        <div
            class="w-[calc(25%-20px)] mx-[10px] rounded-lg shadow-sm bg-white dark:bg-zinc-800 py-8 px-10 flex items-center border border-zinc-100 dark:border-zinc-800">
            <i class="fa-solid fa-file-contract text-4xl text-yellow-400 dark:text-yellow-700"></i>
            <h3 class="text-[2.75rem] font-bold text-zinc-900 dark:text-zinc-300 mx-4">23</h3>
            <p class="text-lg font-normal text-zinc-500 dark:text-zinc-400">In Progress Visa</p>
        </div>
        <div
            class="w-[calc(25%-20px)] mx-[10px] rounded-lg shadow-sm bg-white dark:bg-zinc-800 py-8 px-10 flex items-center border border-zinc-100 dark:border-zinc-800">
            <i class="fa-solid fa-file-circle-check text-4xl text-primary-500 dark:text-primary-800"></i>
            <h3 class="text-[2.75rem] font-bold text-zinc-900 dark:text-zinc-300 mx-4">48</h3>
            <p class="text-lg font-normal text-zinc-500 dark:text-zinc-400">Completed Visa</p>
        </div>
        <div
            class="w-[calc(25%-20px)] mx-[10px] rounded-lg shadow-sm bg-white dark:bg-zinc-800 py-8 px-10 flex items-center border border-zinc-100 dark:border-zinc-800">
            <i class="fa-solid fa-file-circle-exclamation text-4xl text-red-600 dark:text-red-800"></i>
            <h3 class="text-[2.75rem] font-bold text-zinc-900 dark:text-zinc-300 mx-4">20</h3>
            <p class="text-lg font-normal text-zinc-500 dark:text-zinc-400">Cancelled Visa</p>
        </div>
        <div
            class="w-[calc(25%-20px)] mx-[10px] rounded-lg shadow-sm bg-white dark:bg-zinc-800 py-8 px-10 flex items-center border border-zinc-100 dark:border-zinc-800">
            <i class="fa-solid fa-file-lines text-4xl text-orange-400 dark:text-orange-800"></i>
            <h3 class="text-[2.75rem] font-bold text-zinc-900 dark:text-zinc-300 mx-4">122</h3>
            <p class="text-lg font-normal text-zinc-500 dark:text-zinc-400">Total Visa</p>
        </div>
    </div>
    <div class="flex items-center flex-wrap mb-9 -mx-[10px]">
        <div
            class="w-[calc(33.33%-20px)] mx-[10px] rounded-lg shadow-sm bg-white dark:bg-zinc-800 py-8 px-10 border border-zinc-100 dark:border-zinc-800">
            <h3 class="text-xl text-zinc-900 dark:text-zinc-300 font-semibold mb-2 antialiased">Electronic
                Business
                Visa (Preet)</h3>
            <a href="#" class="text-base font-medium text-orange-400 flex items-center antialiased"><span>View
                    progress</span><i class="fa-solid fa-chevron-right text-sm ml-3"></i></a>
            <div id="container" class="semi-circle-counter w-64 h-36 block mx-auto mt-4 relative">
                <p class="text-lg font-normal text-center text-zinc-400 dark:text-zinc-400 antialiased">Total
                    Completed</p>
            </div>
        </div>
        <div
            class="w-[calc(33.33%-20px)] mx-[10px] rounded-lg shadow-sm bg-white dark:bg-zinc-800 py-8 px-10 border border-zinc-100 dark:border-zinc-800">
            <h3 class="text-xl text-zinc-900 dark:text-zinc-300 font-semibold mb-2 antialiased">Electronic
                Business
                Visa (Preet)</h3>
            <a href="#" class="text-base font-medium text-orange-400 flex items-center antialiased"><span>View
                    progress</span><i class="fa-solid fa-chevron-right text-sm ml-3"></i></a>
            <div id="container2" class="semi-circle-counter w-64 h-36 block mx-auto mt-4 relative">
                <p class="text-lg font-normal text-center text-zinc-400 dark:text-zinc-400 antialiased">Total
                    Completed</p>
            </div>
        </div>
        <div
            class="w-[calc(33.33%-20px)] mx-[10px] rounded-lg shadow-sm bg-white dark:bg-zinc-800 py-8 px-10 border border-zinc-100 dark:border-zinc-800">
            <h3 class="text-xl text-zinc-900 dark:text-zinc-300 font-semibold mb-2 antialiased">Electronic
                Business
                Visa (Preet)</h3>
            <a href="#" class="text-base font-medium text-orange-400 flex items-center antialiased"><span>View
                    progress</span><i class="fa-solid fa-chevron-right text-sm ml-3"></i></a>
            <div id="container3" class="semi-circle-counter w-64 h-36 block mx-auto mt-4 relative">
                <p class="text-lg font-normal text-center text-zinc-400 dark:text-zinc-400 antialiased">Total
                    Completed</p>
            </div>
        </div>

    </div>
    <div class="admin-dashboard">
        <div class="flex flex-wrap mb-7">
            <div
                class="w-[calc(50%-10px)] mr-[10px] flex items-center flex-wrap rounded-lg shadow-sm bg-white dark:bg-zinc-800 py-7 px-7 border border-zinc-100 dark:border-zinc-800">
                <h3 class="text-2xl text-zinc-900 dark:text-zinc-300 font-semibold mb-6 w-full antialiased">Overview</h3>
                <div
                    class="w-[calc(25%-20px)] mx-[10px] rounded-lg shadow-sm bg-white dark:bg-zinc-800 py-6 px-6 flex flex-col items-baseline border border-zinc-100 dark:border-zinc-700">
                    <i class="fa-solid fa-file-contract text-4xl text-yellow-400 dark:text-yellow-700 text-left"></i>
                    <h3 class="text-[2.75rem] font-bold text-zinc-900 dark:text-zinc-300 text-left antialiased">23</h3>
                    <p class="text-base font-normal text-zinc-500 dark:text-zinc-400 text-left h-14 antialiased">In Progress Visa</p>
                </div>
                <div
                    class="w-[calc(25%-20px)] mx-[10px] rounded-lg shadow-sm bg-white dark:bg-zinc-800 py-6 px-6 flex flex-col items-baseline border border-zinc-100 dark:border-zinc-700">
                    <i class="fa-solid fa-file-circle-check text-4xl text-primary-500 dark:text-primary-800"></i>
                    <h3 class="text-[2.75rem] font-bold text-zinc-900 dark:text-zinc-300 mx-4 antialiased">48</h3>
                    <p class="text-base font-normal text-zinc-500 dark:text-zinc-400 h-14 antialiased">Completed Visa</p>
                </div>
                <div
                    class="w-[calc(25%-20px)] mx-[10px] rounded-lg shadow-sm bg-white dark:bg-zinc-800 py-6 px-6 flex flex-col items-baseline border border-zinc-100 dark:border-zinc-700">
                    <i class="fa-solid fa-file-circle-exclamation text-4xl text-red-600 dark:text-red-800"></i>
                    <h3 class="text-[2.75rem] font-bold text-zinc-900 dark:text-zinc-300 mx-4 antialiased">20</h3>
                    <p class="text-base font-normal text-zinc-500 dark:text-zinc-400 h-14 antialiased">Cancelled Visa</p>
                </div>
                <div
                    class="w-[calc(25%-20px)] mx-[10px] rounded-lg shadow-sm bg-white dark:bg-zinc-800 py-6 px-6 flex flex-col items-baseline border border-zinc-100 dark:border-zinc-700">
                    <i class="fa-solid fa-file-lines text-4xl text-orange-400 dark:text-orange-800"></i>
                    <h3 class="text-[2.75rem] font-bold text-zinc-900 dark:text-zinc-300 mx-4 antialiased">122</h3>
                    <p class="text-base font-normal text-zinc-500 dark:text-zinc-400 h-14 antialiased">Total Visa</p>
                </div>
            </div>
            {{-- <div
                class="w-[calc(50%-10px)] ml-[10px] flex items-center flex-wrap rounded-lg shadow-sm bg-white dark:bg-zinc-800 py-7 px-7 border border-zinc-100 dark:border-zinc-800"> --}}
            <img src="/images/visas-applied.png" alt="" class="w-[calc(50%-10px)] ml-[10px] rounded-lg shadow-sm">
            {{-- </div> --}}
        </div>
        <div class="flex flex-wrap mb-7">
            <div class="w-[calc(60%-10px)] mr-[10px] flex items-center flex-wrap rounded-lg shadow-sm bg-white dark:bg-zinc-800 py-7 px-7 border border-zinc-100 dark:border-zinc-800">
                <h3 class="text-2xl text-zinc-900 dark:text-zinc-300 font-semibold mb-6 w-full antialiased">New Visas</h3>
                <table class="min-w-full">
                    <thead class="">
                        <tr>
                            <th scope="col" class="p-0 text-start text-xs font-medium text-gray-500 dark:text-gray-400">
                                <div class="px-6 py-4 bg-zinc-100 dark:bg-zinc-700 mb-4 block rounded-l-lg">
                                    Ref #
                                </div>
                            </th>
                            <th scope="col" class="p-0 text-start text-xs font-medium text-gray-500 dark:text-gray-400">
                                <div class="px-6 py-4 bg-zinc-100 dark:bg-zinc-700 mb-4 block">
                                    Visa Type
                                </div>
                            </th>
                            <th scope="col" class="p-0 text-start text-xs font-medium text-gray-500 dark:text-gray-400">
                                <div class="px-6 py-4 bg-zinc-100 dark:bg-zinc-700 mb-4 block">
                                    Progress
                                </div>
                            </th>                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-sm font-medium text-zinc-600 dark:text-zinc-400 border-b border-zinc-200 dark:border-zinc-700 px-6 py-3">
                                2351
                            </td>
                            <td class="text-sm font-medium text-zinc-800 dark:text-zinc-400 border-b border-zinc-200 dark:border-zinc-700 px-6 py-3">
                                Electronic Business Visa
                            </td>
                            <td class="text-sm text-zinc-800 dark:text-zinc-400 border-b border-zinc-200 dark:border-zinc-700 px-6 py-3 text-center"> 
                                <div id="progressbar1" class="progressbar-type-1 relative flex items-center">
                                    {{-- <p class="text-lg font-normal text-center text-zinc-400 dark:text-zinc-400 antialiased">Total
                                        Completed</p> --}}
                                </div>
                            </td>
                            
                        </tr>                        
                    </tbody>
                </table>
            </div>
            <div class="w-[calc(40%-10px)] mr-[10px] rounded-lg shadow-sm bg-white dark:bg-zinc-800 py-7 border border-zinc-100 dark:border-zinc-800">
                    <div class="flex items-center justify-between px-7">
                        <h3 class="text-2xl text-zinc-900 dark:text-zinc-300 font-semibold antialiased">Users</h3>
                            <a class="text text-sm font-semibold text-orange-300" href="">View All</a>
                    </div>
                    <hr class="h-px bg-zinc-300 w-full border-0 dark:bg-gray-700 my-4">
                    <div class="overflow-x-auto border-b border-dashed border-zinc-200 dark:border-gray-700 mt-5">
                        <div class="flex items-center justify-between px-7 py-2">
                            <div class="flex items-center">
                                <img class="w-8 h-8 mr-3" src="/images/user.png" alt="user profile">
                                <h4 class="block font-medium text-base text-zinc-900 dark:text-zinc-400" >Emelita Giraldez</h4>
                            </div>
                            <p class="text-sm font-normal text-zinc-400 dark:text-zinc-400">emelita@gmail.com</p>
                        </div>
                    </div>
                    <div class="overflow-x-auto border-b border-dashed border-zinc-200 dark:border-gray-700 mt-5">
                        <div class="flex items-center justify-between px-7 py-2">
                            <div class="flex items-center">
                                <img class="w-8 h-8 mr-3" src="/images/user.png" alt="user profile">
                                <h4 class="block font-medium text-base text-zinc-900 dark:text-zinc-400" >Emelita Giraldez</h4>
                            </div>
                            <p class="text-sm font-normal text-zinc-400 dark:text-zinc-400">emelita@gmail.com</p>
                        </div>
                    </div>
                    <div class="overflow-x-auto border-b border-dashed border-zinc-200 dark:border-gray-700 mt-5">
                        <div class="flex items-center justify-between px-7 py-2">
                            <div class="flex items-center">
                                <img class="w-8 h-8 mr-3" src="/images/user.png" alt="user profile">
                                <h4 class="block font-medium text-base text-zinc-900 dark:text-zinc-400" >Emelita Giraldez</h4>
                            </div>
                            <p class="text-sm font-normal text-zinc-400 dark:text-zinc-400">emelita@gmail.com</p>
                        </div>
                    </div>              
            </div>
        </div>
        <div>
            <h2 class="text-3xl font-semibold text-zinc-900 dark:text-zinc-300">Total Visas</h2>
            <div class="mt-6 flex flex-wrap">
                <div class="w-[calc(33%-10px)] mr-[10px] mb-[10px] rounded-lg shadow-sm bg-white dark:bg-zinc-800 py-8 px-7 border border-zinc-100 dark:border-zinc-800">
                    <div class="flex items-start justify-between mb-5">
                        <div>
                            <p class="text-base font-medium text-zinc-500 dark:text-zinc-400 antialiased">Ref#: 2351</p>
                            <h3 class="text-xl text-zinc-900 dark:text-zinc-300 font-semibold antialiased">Electronic Business Visa (Preet)</h3>
                        </div>
                            <a class="text-2xl text-red-500" href=""><i class="fa-regular fa-circle-question"></i></a>
                    </div>
                    <div id="progressbar2" class="progressbar-type-2 relative flex items-center flex-col-reverse justify-center">
                        {{-- <p class="text-lg font-normal text-center text-zinc-400 dark:text-zinc-400 antialiased">Total
                            Completed</p> --}}
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection
