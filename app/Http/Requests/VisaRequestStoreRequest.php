<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VisaRequestStoreRequest extends FormRequest
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
            'nationality' => 'required|numeric|exists:countries,id',
            'toCity' => 'required|numeric|exists:cities,id',
            'fromCity' => 'required|numeric|exists:cities,id',
            'duration' => 'required|numeric',
            'type' => 'required|numeric|exists:visa_types,id',
        ];
    }
}