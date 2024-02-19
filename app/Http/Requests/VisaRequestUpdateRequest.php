<?php

namespace App\Http\Requests;

use App\Models\VisaRequest;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;

class VisaRequestUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
        ];
    }

    public function after(): array
    {
        return [
            function (Validator $validator) {

                $uid = $this->visa_request;

                $visaRequest = VisaRequest::with(['documents', 'criteria', 'criteria.documents'])->where('uid', $uid)->first();

                
                if(!$visaRequest){
                    
                    $validator->errors([])->add('Visa Request','Unknown visa request selected.');
                    
                    return false;
                    
                }

                $submittedDocuments = [];

                foreach($visaRequest->documents()->notRejected()->get() as $submittedDocument)
                {
                    
                    $submittedDocuments["criteria_document".$submittedDocument->visa_request_criteria_document_id] = $submittedDocument;
    
                }

                foreach($visaRequest->criteria->documents as $document)
                {
                    $currentIndex = "criteria_document$document->id";

                    // dd(!array_key_exists($currentIndex, $this->all()), $currentIndex, $this->all());
                    if(!array_key_exists($currentIndex, $this->all()) && !$document->is_optional){
                        
                        if(!array_key_exists($currentIndex, $submittedDocuments))
                            $validator->errors([])->add("Document" , $document->name.' is required.');


                    }

                }

                if(count($validator->errors())) return false;
                
            }
        ];
    }
}