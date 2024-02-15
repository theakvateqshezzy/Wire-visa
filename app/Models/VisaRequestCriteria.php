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

    public function nationality()
    {
        return $this->belongsTo(Country::class, 'nationality_country_id');
    }

    public function fromCity()
    {
        return $this->belongsTo(City::class, 'from_city_id');
    }

    public function toCity()
    {
        return $this->belongsTo(VisaRequestCriteria::class, 'to_city_id');
    }

    public function type()
    {
        return $this->belongsTo(VisaType::class);
    }

    public function documents()
    {
        return $this->hasMany(VisaRequestCriteriaDocument::class);
    }


}