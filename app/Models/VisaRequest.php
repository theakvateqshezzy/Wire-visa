<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VisaRequest extends Model
{
    
    protected $fillable = [
        'uid',
        'label',
        'submitted_at',
        'rejected_at',
        'approved_at',
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
        return $this->belongsTo(VisaRequestCriteria::class, 'visa_request_criteria_id', 'id');
    }

    public function documents()
    {
        return $this->hasMany(VisaRequestDocument::class);
    }

    public function queries()
    {
        return $this->hasMany(VisaRequestQuery::class);
    }

    public function scopeSubmitted($query)
    {
        return $query->whereNull('rejected_at')->whereNull('approved_at')->whereNotNull('submitted_at');
    }

    public function scopeCompleted($query)
    {
        return $query->whereNotNull('rejected_at')->OrWhereNotNull('approved_at');
    }

    public function scopeApproved($query)
    {
        return $query->whereNotNull('approved_at');
    }

    public function scopeRejected($query)
    {
        return $query->whereNotNull('rejected_at');
    }

    
}