<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\VisaRequestStoreRequest;
use App\Http\Requests\VisaRequestUpdateRequest;
use App\Http\Utilities\Flash;
use App\Models\City;
use App\Models\File;
use App\Models\VisaRequest;
use App\Models\VisaRequestCriteria;
use App\Models\VisaType;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class VisaRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        try{

            $query =  VisaRequest::orderBy('id', 'DESC');

            if($request->has('ongoing'))
                $query->submitted();
            elseif($request->has('completed'))
                $query->completed();

            $visaRequests = $query->paginate(10);

            return view('visa-requests.index', compact('visaRequests'));

        }catch(Exception $e){

            throw($e);
            Flash::failure("Something went wrong");
            
            return redirect()->back();

        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        try{

            $types = VisaType::active()->get();

            return view('visa-requests.create', compact('types'));

        }catch(Exception $e){

            throw($e);
            Flash::failure("Something went wrong");
            
            return redirect()->back();

        }
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VisaRequestStoreRequest $request)
    {
        
        try{

            DB::beginTransaction();

            //-- Process Payment

            $criteria = VisaRequestCriteria::where('nationality_country_id', $request->nationality)
            ->where('from_city_id', $request->fromCity)
            ->where('to_city_id', $request->toCity)
            ->where('visa_type_id', $request->type)
            ->where('length_start', '>=', $request->duration)
            ->where('length_end', '<=', $request->duration)
            ->first();

            
            if(!$criteria){
                
                $criteria = VisaRequestCriteria::first();
                // Flash::failure("Unknown criteria, please contact admin");
                
                // return redirect()->back();
                
            }
            
            $fromCity = City::find($request->fromCity);
            $toCity = City::find($request->toCity);

            $visaRequest = $criteria->requests()->create([
                'label' => "$fromCity->name > $toCity->name",
                'assigned_to' => Auth::user()->id
            ]);

                
            DB::commit();

            Flash::success("Visa request created");

            return redirect()->route('visa-requests.edit', $visaRequest->uid);

        }catch(Exception $e){

            dd($e);
            Flash::failure("Something went wrong");
            
            return redirect()->back();

        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $uid)
    {
        try{

            $visaRequest = VisaRequest::where('uid', $uid)->first();

            if(!$visaRequest){

                Flash::failure("Unknown request");
                
                return redirect()->route('visa-requests.index');

            }

            $submittedDocuments = collect();

            foreach($visaRequest->documents as $document)
            {
                
                $submittedDocuments["criteria_document".$document->visa_request_criteria_document_id] = $document;

            }

            return view('visa-requests.show', compact('visaRequest', 'submittedDocuments'));

        }catch(Exception $e){

            throw($e);
            Flash::failure("Something went wrong");
            
            return redirect()->back();

        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $uid)
    {
        try{

            $visaRequest = VisaRequest::with(['documents', 'criteria', 'criteria.documents'])->where('uid', $uid)->first();

            if(!$visaRequest){

                Flash::failure("Unknown request");
                
                return redirect()->route('visa-requests.index');

            }

            return view('visa-requests.edit', compact('visaRequest'));

        }catch(Exception $e){

            throw($e);
            Flash::failure("Something went wrong");
            
            return redirect()->back();

        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(VisaRequestUpdateRequest $request, string $uid)
    {
        
        try{

            DB::beginTransaction();

            $visaRequest = VisaRequest::where('uid', $uid)->first();

            if(!$visaRequest){

                Flash::failure("Unknown request");
                
                return redirect()->route('visa-requests.index');

            }

            foreach($visaRequest->criteria->documents as $document)
            {
                $currentIndex = "criteria_document$document->id";

                
                $file = $request[$currentIndex];

                if(!$file)
                    continue;

                $dbFile = File::create([
                    'uid' => time().'-'.uniqid(),
                    'ext' =>  $file->getClientOriginalExtension(),
                    'original_name' => $file->getClientOriginalName(),
                    'created_by' => Auth::user()->id
                ]);
                
                $visaRequest->documents()->create([
                    'file_id' => $dbFile->id,
                    'visa_request_criteria_document_id' => $document->id,
                ]);

                $file->move(public_path('user_documents'), $dbFile->fullName());

            }

            Flash::success("Visa request submitted successfully");
            
            DB::commit();

            return redirect()->route('visa-requests.show', $visaRequest->uid);

        }catch(Exception $e){

            throw($e);
            Flash::failure("Something went wrong");
            
            return redirect()->back();

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


    public function dummy(Request $request)
    {
        
        try{

            DB::beginTransaction();

            
                
            DB::commit();

        return redirect()->route('clients.index');

        }catch(Exception $e){

            Flash::failure("Something went wrong");
            
            return redirect()->back();

        }

    }
}