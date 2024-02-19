<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisaRequestDocument extends Model
{
    
    protected $fillable = [
        'rejected_at',
        'approved_at',
        'file_id',
        'visa_request_criteria_document_id',
        'visa_request_id',
    ];

    protected $casts = [
        'rejected_at' => 'datetime',
        'approved_at' => 'datetime'
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

    public function queries()
    {
        return $this->hasMany(VisaRequestQuery::class, 'visa_request_document_id', 'id');
    }

    public function scopeSubmitted($query)
    {
        return $query->whereNull('rejected_at')->whereNull('approved_at');
    }

    public function scopeApproved($query)
    {
        return $query->whereNotNull('approved_at');
    }

    public function scopeNotRejected($query)
    {
        return $query->whereNull('rejected_at');
    }

}