<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisaRequestQuery extends Model
{
    
    protected $fillable = [
        'description',
        'is_resolved',
        'visa_request_document_id',
        'visa_request_id',
    ];

}