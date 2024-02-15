<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisaRequestCriteria extends Model
{
    
    protected $fillable = [
        'nationality_country_id',
        'from_city_id',
        'to_city_id',
        'visa_type_id',
        'length_start',
        'length_end'
    ];

}