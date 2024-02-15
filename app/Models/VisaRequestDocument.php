<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisaRequestDocument extends Model
{
    
    protected $fillable = [
        'visa_request_id',
        'file_id',
        'visa_request_criteria_document_id',
    ];

}