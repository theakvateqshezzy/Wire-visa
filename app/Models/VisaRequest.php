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


    public function assignee()
    {
        return $this->belongsTo(User::class, 'assigned_to', 'id');
    }

    public function creator()
    {
        return $this->belongsTo(User::class);
    }
    
    public function parent()
    {
        return $this->belongsTo(VisaRequest::class);
    }

    public function criteria()
    {
        return $this->belongsTo(VisaRequestCriteria::class);
    }

    public function documents()
    {
        return $this->hasMany(VisaRequestDocument::class);
    }

    public function queries()
    {
        return $this->hasMany(VisaRequestQuery::class);
    }
    
}