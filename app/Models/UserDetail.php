<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserDetail extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'avatar_id',
        'dashboard_at',
        'is_approved',
        'is_active',
        'user_id',  
        'invited_by'
    ];

    protected $casts = [
        'is_active' => 'boolean'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function avatar()
    {
        return $this->hasOne(File::class, 'id', 'avatar_id');
    }

    public function markerImage()
    {
        return $this->hasOne(File::class, 'id', 'marker_image_id');
    }
    
}