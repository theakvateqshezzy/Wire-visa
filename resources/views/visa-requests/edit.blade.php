@extends('layouts.dashboard')
@section('content')
    <div class="rounded-lg shadow w-full min-h-full py-6 bg-white dark:bg-zinc-800">
        <h2 class="text-2xl font-semibold text-zinc-900 dark:text-zinc-300 px-9">Create</h2>
        <hr class="h-px bg-zinc-300 w-full border-0 dark:bg-gray-700 my-4">
        <div class="step-form-wrapper py-16 px-12">
            <div class="w-full max-w-3xl">
                <form action="{{route('visa-requests.update', $visaRequest->uid)}}" method="POST" class="step-3 mt-9" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <h3 class="text-lg font-semibold text-zinc-900 dark:text-zinc-300 mb-8">Please check the documents
                        needed for travel</h3>

                    @foreach($visaRequest->criteria->documents as $document)
                    <div class="form-group flex items-center justify-between mb-6">
                        <div>
                            <x-input-label for="" :value="__($document->name)" class="text-sm mr-6 w-full max-w-50" />
                            <a href="#" class="text-sm text-primary-500 font-semibold antialiased ">Download
                                Example</a>
                        </div>
                        <input type="file" name="criteria_document{{$document->id}}" id="r3" placeholder="Upload Image"
                            class="text-primary-500 border-gray-300 focus:ring-2 focus:ring-primary-500 bg-zinc-100 mx-2">
                        {{-- <div class="flex items-center">
                            <img src="/images/placeholder-image.png" alt="placeholder images" class="m-3">
                            <img src="/images/placeholder-image.png" alt="placeholder images" class="m-3">
                        </div> --}}
                    </div>
                    @endforeach

                    <div class="flex items-center justify-end">
                        <x-button-primary-solid
                            class="mr-4 bg-zinc-300 text-zinc-900 border-zinc-300 hover:text-zinc-900 dark:hover:text-zinc-300 ">
                            Cancel
                        </x-button-primary-solid>
                        <x-button-primary-solid class="bg-indigo-500 border-indigo-500 hover:text-indigo-500 ">
                            Submit for review
                        </x-button-primary-solid>
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
