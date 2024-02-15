<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{

    protected $table = 'files';

    protected $fillable = [
        'uid',
        'ext',
        'original_name',
        'created_by',
    ];

    public function fullName()
    {
        return $this->uid.'.'.$this->ext;
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}