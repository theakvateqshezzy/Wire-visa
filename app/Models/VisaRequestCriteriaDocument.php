<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VisaRequestCriteriaDocument extends Model
{
    
    protected $fillable = [
        'name',
        'description',
        'is_optional',
        'file_id',
        'visa_request_criteria_id',
    ];

    protected $casts = [
        'is_optional' => 'boolean'
    ];

    public function criteria()
    {
        return $this->belongsTo(VisaRequestCriteria::class);
    }

    public function file()
    {
        return $this->hasOne(File::class);
    }


}