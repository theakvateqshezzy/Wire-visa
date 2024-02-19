@extends('layouts.dashboard')
@section('content')
    <div class="rounded-lg shadow w-full min-h-full py-6 bg-white dark:bg-zinc-800">
        <h2 class="text-2xl font-semibold text-zinc-900 dark:text-zinc-300 px-9">Create</h2>
        <hr class="h-px bg-zinc-300 w-full border-0 dark:bg-gray-700 my-4">
        <div class="step-form-wrapper py-16 px-12">
            <div class="w-full max-w-3xl">
                <form action="{{route('visa-requests.store')}}" class="step-1" method="POST">
                  @csrf
                    <h3 class="text-lg font-semibold text-zinc-900 dark:text-zinc-300 mb-8">Enter the following details:</h3>
                    <div class="form-group flex items-center mb-6">
                        <x-input-label for="nationality" :value="__('Your Nationality')" class="text-sm mr-6 w-full max-w-52" />
                        <select required class="country-ajax w-full" name="nationality"></select>
                        {{-- <x-select-input /> --}}
                        <x-input-error :messages="$errors->get('nationality')" class="mt-2" />
                    </div>
                    <div class="form-group flex items-center mb-6">
                        <x-input-label for="fromCity" :value="__('Where you are applying from')" class="text-sm mr-6 w-full max-w-52" />
                        <select required class="city-ajax w-full" name="fromCity"></select>
                        {{-- <x-select-input /> --}}
                        <x-input-error :messages="$errors->get('fromCity')" class="mt-2" />
                    </div>
                    <div class="form-group flex items-center mb-6">
                        <x-input-label for="toCity" :value="__('Where you are going to')" class="text-sm mr-6 w-full max-w-52" />
                        <select required class="city-ajax w-full" name="toCity"></select>
                        <x-input-error :messages="$errors->get('toCity')" class="mt-2" />
                    </div>
                    <div class="form-group flex items-center mb-6">
                        <x-input-label for="type" :value="__('Visa Type')" class="text-sm mr-6 w-full max-w-52" />
                        <select name="type" required class="border text-sm text-zinc-500 py-3 px-4 border-zinc-200 rounded dark:border-zinc-700  bg-zinc-100 dark:text-gray-300 dark:bg-zinc-700 focus:border-primary-500 dark:focus:border-primary-500 focus:ring-primary-500 dark:focus:ring-primary-500 shadow-sm w-full">
                          <option value="" disabled selected>Select Type</option>
                          @foreach($types as $type)
                            <option class="text-zinc-600 font-medium dark:text-zinc-300" value="{{$type->id}}">{{$type->name}}</option>
                          @endforeach
                      </select>
                        <x-input-error :messages="$errors->get('type')" class="mt-2" />
                    </div>
                    <div class="form-group flex items-center mb-6">
                        <x-input-label for="duration" :value="__('Length of VISA (Months)')" class="text-sm mr-6 w-full max-w-52" />
                        <input name="duration" type="number" placeholder="Enter number of months" required class="border text-sm text-zinc-500 py-3 px-4 border-zinc-200 rounded dark:border-zinc-700  bg-zinc-100 dark:text-gray-300 dark:bg-zinc-700 focus:border-primary-500 dark:focus:border-primary-500 focus:ring-primary-500 dark:focus:ring-primary-500 shadow-sm w-full">
                        <x-input-error :messages="$errors->get('duration')" class="mt-2" />
                    </div>
                    <div class="form-group flex items-center mb-6">
                        <x-input-label for="applicantCount" :value="__('Number of applicant')" class="text-sm mr-6 w-full max-w-52" />
                        <input name="applicantCount" type="number" placeholder="Enter number of applicants" required class="border text-sm text-zinc-500 py-3 px-4 border-zinc-200 rounded dark:border-zinc-700  bg-zinc-100 dark:text-gray-300 dark:bg-zinc-700 focus:border-primary-500 dark:focus:border-primary-500 focus:ring-primary-500 dark:focus:ring-primary-500 shadow-sm w-full">
                        <x-input-error :messages="$errors->get('applicantCount')" class="mt-2" />
                    </div>
                    {{-- <div class="flex items-center justify-end">
                        <x-button-primary-solid
                            class="mr-4 bg-zinc-300 text-zinc-900 border-zinc-300 hover:text-zinc-900 dark:hover:text-zinc-300 ">
                            Cancel
                        </x-button-primary-solid>
                        <x-button-primary-solid class="bg-indigo-500 border-indigo-500 hover:text-indigo-500 ">
                            Next
                        </x-button-primary-solid>
                    </div> --}}

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
            </div>

        </div>
    </div>
@endsection


@section('js')

<script>

$(".city-ajax").select2({
  ajax: {
    url: "{{env('APP_URL')}}/api/cities",
    dataType: 'json',
    delay: 250,
    data: function (params) {
      return {
        name: params.term,
      };
    },
    processResults: function (data) {

      return {
        results: data.data,
      };
    },
    cache: true
  },
  placeholder: 'Search City',
  minimumInputLength: 2,
  templateResult: formatRepo,
  templateSelection: formatRepoSelection
});

$(".country-ajax").select2({
  ajax: {
    url: "{{env('APP_URL')}}/api/countries",
    dataType: 'json',
    delay: 250,
    data: function (params) {
      return {
        name: params.term,
      };
    },
    processResults: function (data) {

      return {
        results: data.data,
      };
    },
    cache: true
  },
  placeholder: 'Search Country',
  minimumInputLength: 2,
  templateResult: formatRepo,
  templateSelection: formatRepoSelection
});

function formatRepo (country) {
  var $container = $(
    "<div class='select2-result-repository clearfix'>" +
      "<div class='select2-result-repository__meta'>" +
        "<div class='select2-result-repository__title'></div>" +
        "</div>" +
      "</div>" +
    "</div>"
  );

  $container.find(".select2-result-repository__title").text(country.name);

  return $container;
}

function formatRepoSelection (country, something) {
  return country.id == '' ? country.text : country.name ;
}

</script>

@endsection