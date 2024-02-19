@extends('layouts.dashboard')
@section('content')
  
    <div class="rounded-lg w-full min-h-full py-6">
      <div>
        <h2 class="text-3xl font-semibold text-zinc-900 dark:text-zinc-300">Total Visas</h2>
        <div class="mt-6 flex flex-wrap">
            @foreach($visaRequests as $visaRequest)
                <a href="{{route('visa-requests.show', $visaRequest->uid)}}">
                    <div class="w-[calc(33%-10px)] mr-[10px] mb-[10px] rounded-lg shadow-sm bg-white dark:bg-zinc-800 py-8 px-7 border border-zinc-100 dark:border-zinc-800">
                        <div class="flex items-start justify-between mb-5">
                            <div>
                                <p class="text-xs font-medium text-zinc-500 dark:text-zinc-400 antialiased">Ref#: {{$visaRequest->uid}}</p>
                                <h3 class="text-xl text-zinc-900 dark:text-zinc-300 font-semibold antialiased">{{$visaRequest->label}}</h3>
                                <h3 class="text-sm text-yellow-500 dark:text-yellow-300 font-semibold antialiased">View now</h3>
                            </div>
                                <a class="text-2xl text-red-500" href=""><i class="fa-regular fa-circle-question"></i></a>
                        </div>
                        <x-progress-bar :percentage="(float)($visaRequest->documents()->approved()->count()/$visaRequest->criteria->documents()->count())"> </x-progress-bar>
                            
                        </div>
                    </div>
                </a>
            @endforeach
            
        </div>
      </div>
    </div>


    <script>
    </script>
@endsection

