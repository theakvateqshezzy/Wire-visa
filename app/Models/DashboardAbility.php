<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DashboardAbility extends Model
{
    protected $fillable = [
        'name',
        'is_active',
    ]; 

    protected $casts = [
        'is_acitve' => 'boolean'
    ];

    protected $hidden = [
        'pivot'
    ];

    public function scopeActive($query)
    {
        return $this->where('is_active', true);
    }

}