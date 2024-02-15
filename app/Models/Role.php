<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'name',
        'is_system',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'is_system' => 'boolean',
    ];

    protected $hidden = [
        'pivot'
    ];


    public function abilities()
    {
        return $this->belongsToMany(DashboardAbility::class, 'role_abilities' ,'role_id','dashboard_ability_id');
    }

    public function abilitiesToArray()
    {
        return $this->abilities()->pluck('name')->toArray();
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function isSystem()
    {
        return $this->is_system;
    }
    

}