@extends('layouts.dashboard')
@section('content')
    <a href="#" class="text-lg text-zinc-800 dark:text-zinc-400 font-semibold antialiased mb-3 block"><i
            class="fa-solid fa-arrow-left mr-2"></i><span> Back</span></a>
    <div class="rounded-lg shadow w-full min-h-full py-6 bg-white dark:bg-zinc-800">
        <form method="POST" action="{{route('visa-requests.update', $visaRequest->uid)}}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
            <div class="flex items-center justify-between px-9">
                <div>
                    <h2 class="text-2xl font-semibold text-zinc-900 dark:text-zinc-300">Journalist, Official Travel (James)
                    </h2>
                    <h5 class="text-base font-semibold text-yellow-500">35% Completed</h5>
                </div>
                <div class="flex items-center justify-end w-full max-w-96 mb-7">
                    <x-button-primary-bordered class="text-red-600 border-red-600 hover:bg-red-600 mr-2">
                        Delete Visa
                    </x-button-primary-bordered>
                    <x-button-primary-solid class="bg-amber-600 border-amber-600 hover:bg-tranparent hover:text-amber-600 ml-2">
                        Save
                    </x-button-primary-solid>
                </div>
            </div>
            <hr class="h-px bg-zinc-300 w-full border-0 dark:bg-gray-700 my-4">
            <div class="px-9 overflow-x-auto">
                <table class="min-w-full">
                    <thead class="">
                        <tr>
                            <th scope="col" class="p-0 text-start text-xs font-medium text-gray-500 dark:text-gray-400">
                                <div class="px-6 py-4 bg-zinc-100 dark:bg-zinc-700 mb-4 block rounded-l-lg text-center">
                                    Documents
                                </div>
                            </th>
                            <th scope="col" class="p-0 text-start text-xs font-medium text-gray-500 dark:text-gray-400">
                                <div class="px-6 py-4 bg-zinc-100 dark:bg-zinc-700 mb-4 block text-center">
                                    Status
                                </div>
                            </th>
                            <th scope="col" class="p-0 text-start text-xs font-medium text-gray-500 dark:text-gray-400">
                                <div class="px-6 py-4 bg-zinc-100 dark:bg-zinc-700 mb-4 block text-center">
                                    Action
                                </div>
                            </th>
                            <th scope="col" class="p-0 text-center text-xs font-medium text-gray-500 dark:text-gray-400">
                                <div class="px-6 py-4 bg-zinc-100 dark:bg-zinc-700 mb-4 block rounded-r-lg text-center">
                                    Information
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($visaRequest->criteria->documents as $document)
                        <tr>
                            <td
                                class="text-sm text-zinc-800 dark:text-zinc-400 border border-zinc-200 dark:border-zinc-700 px-6 py-3 min-w-96">
                                <div class="bg-tranparent w-full divide-y divide-gray-200">
                                    @php $submittedDocument = $submittedDocuments["criteria_document".$document->id] @endphp
                                    @if($submittedDocument->queries()->count())
                                    <details>
                                        <summary
                                            class="question py-2 pl-2 cursor-pointer select-none w-full outline-none border-red-500">
                                            {{$document->name}}</summary>
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
                                                                </tr>
                                                            </thead>
                                                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                                                @foreach($submittedDocument->queries as $query)
                                                                <tr>
                                                                    <td class="px-6 py-4 text-sm font-normal text-gray-800 dark:text-gray-400 max-w-56 antialiased">
                                                                            {!! $query->is_resolved ? '<i class="fa-solid fa-check text-primary-500 font-bold"></i>' : ''!!} {{$query->description}}
                                                                    </td>
                                                                    <td
                                                                        class="px-6 py-4 text-sm text-gray-800 dark:text-gray-400">
                                                                        {{$query->created_at}}</td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </details>
                                    @else
                                    <div>
                                        <div
                                        class="question py-2 pl-2 select-none w-full outline-none border-red-500">
                                        {{$document->name}}</div>
                                    </div>
                                    @endif

                                </div> </td>
                            {{-- <td
                                class="text-sm text-center text-zinc-800 dark:text-zinc-400 border border-zinc-200 dark:border-zinc-700 px-6 py-3 ">
                                <div
                                    class="w-9 h-9 flex items-center justify-center {{$submittedDocument->approved_at ? 'text-primary-500 bg-primary-400' : 'text-gray-400 bg-gray-100'}}  rounded mx-2">
                                    {!!$submittedDocument->approved_at ? '<i class="fa-solid fa-check"></i>' : '<i class="fa-solid fa-times"></i>'!!}
                                </div>
                            </td> --}}
                            <td class="text-sm text-zinc-800 dark:text-zinc-400 border border-zinc-200 dark:border-zinc-700 px-6 py-3 text-center">
                                @if(!$submittedDocument->rejected_at && !$submittedDocument->approved_at)
                                    <div>
                                        <p class="text-sm text-yellow-500 font-semibold antialiased ">Awaiting Response...</p>
                                    </div>
                                @elseif($submittedDocument->approved_at)
                                    <div>
                                        <p class="text-sm text-primary-500 font-semibold antialiased ">Approved</p>
                                    </div>
                                @elseif($submittedDocument->rejected_at)
                                    <div>
                                        <p class="text-sm text-red-500 font-semibold antialiased ">Rejected</p>
                                    </div>
                                @endif
                            </td>
                            <td class="text-sm text-zinc-800 dark:text-zinc-400 border border-zinc-200 dark:border-zinc-700 px-6 py-3 text-center">
                                <div class="flex items-center justify-center">
                                    <a href="#" title="View"> 
                                        <div class="w-9 h-9 flex items-center justify-center text-primary-500 bg-primary-400 rounded mx-2">
                                            <i class="fa-solid fa-eye"></i>
                                        </div>  
                                    </a>
                                    @if($submittedDocument->rejected_at)
                                        <div>
                                            <a href="#" title="Example Document"> 
                                                <div class="w-9 h-9 flex items-center justify-center text-blue-500 bg-blue-200 rounded mx-2">
                                                    <i class="fa-solid fa-file"></i>
                                                </div>  
                                            </a>
                                        </div>
                                        <div>
                                            <input type="file" name="criteria_document{{$document->id}}" id="r3" placeholder="Upload Image"
                                            class="text-primary-500 border-gray-300 focus:ring-2 focus:ring-primary-500 bg-zinc-100 mx-2">
                                        </div>
                                        {{-- <x-input-label for="" :value="__('Reupload Document')" class="text-sm mr-6 w-full max-w-50" /> --}}

                                    @endif
                                </div>
                            </td>
                            <td
                                class="text-sm text-center text-zinc-800 dark:text-zinc-400 border border-zinc-200 dark:border-zinc-700 px-6 py-3">
                                <button class="text-lg text-gray-500" onclick="toggleModal()"><i
                                        class="fa-solid fa-circle-info"></i></button>
                                <div class="flex items-center justify-center">
                                    {{-- <button class="py-2 px-6 bg-blue-500 text-white rounded hover:bg-blue-700"
                                        onclick="toggleModal()">Show Modal</button> --}}
                                </div>
                                <div class="fixed z-10 overflow-y-auto top-0 w-full left-0 hidden" id="modal"
                                    onclick="toggleModal()">
                                    <div class="flex items-center justify-center pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                                        <div class="fixed inset-0 transition-opacity">
                                            <div class="absolute inset-0 bg-gray-900 opacity-75" />
                                        </div>
                                        <span class="hidden sm:inline-block sm:align-middle sm:h-screen">&#8203;</span>
                                        <div class="inline-block align-center bg-white dark:bg-zinc-800 rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
                                            role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                                            <div class="bg-white dark:bg-zinc-800 p-4 rounded-lg text-center">
                                                <h2 class="text-xl font-semibold text-zinc-800 dark:text-zinc-300 mb-7">
                                                    Document Guidelines</h2>
                                                <p
                                                    class="text-base text-zinc-500 font-normal antialiased dark:text-zinc-400 mb-7">
                                                    {{$document->description}}
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </form>
    </div>

@endsection


@section('js')

    <script>
        // function toggleModal() {
        //     document.getElementsByClassName('modalx').classList.toggle('hidden')
        // }
        function toggleModal() {
            document.getElementById('modal').classList.toggle('hidden')
        }
    </script>

@endsection