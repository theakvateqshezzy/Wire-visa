<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VisaRequest extends Model
{
    
    protected $fillable = [
        'uid',
        'approved_at',
        'rejected_at',
        'parent_id',
        'created_by',
        'assigned_to',
        'visa_request_criteria_id',
    ];
    
}