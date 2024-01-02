@extends('layouts.dashboard')
@section('content')
    <div class="rounded-lg shadow w-full min-h-full py-6 bg-white dark:bg-zinc-800">
        <h2 class="text-2xl font-semibold text-zinc-900 dark:text-zinc-300 px-9">Create</h2>
        <hr class="h-px bg-zinc-300 w-full border-0 dark:bg-gray-700 my-4">
        <div class="step-form-wrapper py-16 px-12">
            <div class="w-full max-w-3xl">
                <form action="" class="step-1">
                    <h3 class="text-lg font-semibold text-zinc-900 dark:text-zinc-300 mb-8">Enter the following details:</h3>
                    <div class="form-group flex items-center mb-6">
                        <x-input-label for="email" :value="__('Where you are applying from')" class="text-sm mr-6 w-full max-w-52" />
                        <x-select-input />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <div class="form-group flex items-center mb-6">
                        <x-input-label for="email" :value="__('Your Nationality')" class="text-sm mr-6 w-full max-w-52" />
                        <x-select-input />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <div class="form-group flex items-center mb-6">
                        <x-input-label for="email" :value="__('Where you are going to')" class="text-sm mr-6 w-full max-w-52" />
                        <x-select-input />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <div class="form-group flex items-center mb-6">
                        <x-input-label for="email" :value="__('Visa Type')" class="text-sm mr-6 w-full max-w-52" />
                        <x-select-input />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <div class="form-group flex items-center mb-6">
                        <x-input-label for="email" :value="__('Desired length of VISA')" class="text-sm mr-6 w-full max-w-52" />
                        <x-select-input />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <div class="form-group flex items-center mb-6">
                        <x-input-label for="email" :value="__('Number of applicant')" class="text-sm mr-6 w-full max-w-52" />
                        <x-select-input />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <div class="flex items-center justify-end">
                        <x-button-primary-solid
                            class="mr-4 bg-zinc-300 text-zinc-900 border-zinc-300 hover:text-zinc-900 dark:hover:text-zinc-300 ">
                            Cancel
                        </x-button-primary-solid>
                        <x-button-primary-solid class="bg-indigo-500 border-indigo-500 hover:text-indigo-500 ">
                            Next
                        </x-button-primary-solid>
                    </div>

                </form>
                <form action="" class="step-2">
                    <h3 class="text-lg font-semibold text-zinc-900 dark:text-zinc-300 mb-8">Billing Details</h3>
                    <div class="form-group flex items-center mb-6">
                        <input type="radio" name="payment" id="r1"
                            class="mr-3 h-5 w-5 text-primary-500 border-gray-300 focus:ring-2 focus:ring-primary-500">
                        <x-input-label for="r1" :value="__('Debit / Credit Card')"
                            class="text-base font-medium mr-6 w-full max-w-52" />
                    </div>
                    <div class="form-group flex items-center mb-6">
                        <x-input-label for="email" :value="__('Card Number')" class="text-sm mr-6 w-full max-w-28" />
                        <x-text-input id="cardnumber"
                            class="block mt-1 w-full dark:border-zinc-700  bg-zinc-100 dark:text-gray-300 dark:bg-zinc-700"
                            type="text" name="card number" placeholder="374245455400126" />
                        <x-input-error :messages="$errors->get('cardnumber')" class="mt-2" />
                    </div>
                    <div class="form-group flex items-center justify-between mb-6">
                        <div class="form-group flex items-center">
                            <x-input-label for="email" :value="__('Expiry Date')" class="text-sm mr-6 w-full max-w-28" />
                            <x-text-input id="cardnumber"
                                class="block mt-1 w-full dark:border-zinc-700  bg-zinc-100 dark:text-gray-300 dark:bg-zinc-700"
                                type="text" name="card number" placeholder="MM/YY" />
                            <x-input-error :messages="$errors->get('cardnumber')" class="mt-2" />
                        </div>
                        <div class="form-group flex items-center">
                            <x-input-label for="email" :value="__('CVC')" class="text-sm mr-6 w-full max-w-28" />
                            <x-text-input id="cardnumber"
                                class="block mt-1 w-full dark:border-zinc-700  bg-zinc-100 dark:text-gray-300 dark:bg-zinc-700"
                                type="text" name="card number" placeholder="123" />
                            <x-input-error :messages="$errors->get('cardnumber')" class="mt-2" />
                        </div>
                    </div>
                    <div class="form-group flex items-center mb-6">
                        <input type="radio" name="payment" id="r2"
                            class="mr-3 h-5 w-5 text-primary-500 border-gray-300 focus:ring-2 focus:ring-primary-500">
                        <x-input-label for="r2" :value="__('PayPal')"
                            class="text-base font-medium mr-6 w-full max-w-52" />
                    </div>

                    <p class="text-base text-zinc-500 font-normal antialiased dark:text-zinc-400 mb-6">Your personal data
                        will be used to process your order, support your experience through
                        out this website, and for other purposes described in our privacy policy.</p>
                    <div class="form-group flex items-center mb-6">
                        <input type="checkbox" name="check" id="r3"
                            class="mr-3 h-5 w-5 text-primary-500 border-gray-300 focus:ring-2 focus:ring-primary-500">
                        <label for="r3" class="block font-medium text-base text-zinc-900 dark:text-zinc-400">I have
                            read and agree to the website <a href="#" class="text-primary-500">terms and
                                conditions</a>*</label>
                    </div>
                    <div class="flex items-center justify-end">
                        <x-button-primary-solid
                            class="mr-4 bg-zinc-300 text-zinc-900 border-zinc-300 hover:text-zinc-900 dark:hover:text-zinc-300 ">
                            Cancel
                        </x-button-primary-solid>
                        <x-button-primary-solid class="bg-indigo-500 border-indigo-500 hover:text-indigo-500 ">
                            Next
                        </x-button-primary-solid>
                    </div>
                </form>
                <form action="" class="step-3 mt-9">
                    <h3 class="text-lg font-semibold text-zinc-900 dark:text-zinc-300 mb-8">Please check the documents
                        needed for travel</h3>
                    <div class="form-group flex items-center justify-between mb-6">
                        <div>
                            <x-input-label for="" :value="__('Passport')" class="text-sm mr-6 w-full max-w-28" />
                            <a href="#" class="text-sm text-primary-500 font-semibold antialiased ">Download
                                Example</a>
                        </div>
                        <input type="file" name="check" id="r3" placeholder="Upload Image"
                            class="text-primary-500 border-gray-300 focus:ring-2 focus:ring-primary-500 bg-zinc-100 mx-2">
                        <div class="flex items-center">
                            <img src="/images/placeholder-image.png" alt="placeholder images" class="m-3">
                            <img src="/images/placeholder-image.png" alt="placeholder images" class="m-3">
                        </div>
                    </div>
                    <div class="form-group flex items-center justify-between mb-6">
                        <div>
                            <x-input-label for="" :value="__('Passport')" class="text-sm mr-6 w-full max-w-28" />
                            <a href="#" class="text-sm text-primary-500 font-semibold antialiased ">Download
                                Example</a>
                        </div>
                        <input type="file" name="check" id="r3" placeholder="Upload Image"
                            class="text-primary-500 border-gray-300 focus:ring-2 focus:ring-primary-500 bg-zinc-100 mx-2">
                        <div class="flex items-center">
                            <img src="/images/placeholder-image.png" alt="placeholder images" class="m-3">
                            <img src="/images/placeholder-image.png" alt="placeholder images" class="m-3">
                        </div>
                    </div>
                    <div class="form-group flex items-center justify-between mb-6">
                        <div>
                            <x-input-label for="" :value="__('Passport')" class="text-sm mr-6 w-full max-w-28" />
                            <a href="#" class="text-sm text-primary-500 font-semibold antialiased ">Download
                                Example</a>
                        </div>
                        <input type="file" name="check" id="r3" placeholder="Upload Image"
                            class="text-primary-500 border-gray-300 focus:ring-2 focus:ring-primary-500 bg-zinc-100 mx-2">
                        <div class="flex items-center">
                            <img src="/images/placeholder-image.png" alt="placeholder images" class="m-3">
                            <img src="/images/placeholder-image.png" alt="placeholder images" class="m-3">
                        </div>
                    </div>
                    <div class="form-group flex items-center justify-between mb-6">
                        <div>
                            <x-input-label for="" :value="__('Passport')" class="text-sm mr-6 w-full max-w-28" />
                            <a href="#" class="text-sm text-primary-500 font-semibold antialiased ">Download
                                Example</a>
                        </div>
                        <input type="file" name="check" id="r3" placeholder="Upload Image"
                            class="text-primary-500 border-gray-300 focus:ring-2 focus:ring-primary-500 bg-zinc-100 mx-2">
                        <div class="flex items-center">
                            <img src="/images/placeholder-image.png" alt="placeholder images" class="m-3">
                            <img src="/images/placeholder-image.png" alt="placeholder images" class="m-3">
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <div class="w-full h-full flex items-center justify-center bg-primary-500 dark:bg-zinc-800">
        <div class="w-full max-w-xl text-center">
            <img src="images/completed-visa.png" alt="visa submitted successfully" class="block mx-auto mb-4">
            <h2 class="text-5xl text-white dark:text-zinc-300 mb-3 font-bold">Visa Successfully
                Submitted For Review!</h2>
            <p class="text-base text-white font-normal antialiased dark:text-zinc-400 mb-7">Check under your dashboard for
                more information</p>
        </div>
    </div>
@endsection
