<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisaRequestDocument extends Model
{
    
    protected $fillable = [
        'file_id',
        'visa_request_criteria_document_id',
        'visa_request_id',
    ];

    public function visaRequest()
    {
        return $this->belongsTo(VisaRequest::class);
    }

    public function document()
    {
        return $this->belongsTo(VisaRequestCriteriaDocument::class);
    }

    public function file()
    {
        return $this->hasOne(File::class);
    }

}