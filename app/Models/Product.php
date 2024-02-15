<?php

namespace App\Models;

use App\Enums\ProductAbilityType;
use App\Http\Utilities\Helper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'is_free',
        'is_active',
        'is_custom',
        'price',
        'discount_percent',
        'duration',
        'icon',
        'stripe_price_id'
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
    
    public function scopeFree($query)
    {
        return $query->where('is_free', true);
    }

    public function scopePaid($query)
    {
        return $query->where('is_free', false);
    }

    public function scopeCustom($query)
    {
        return $query->where('is_custom', true);
    }

    public function scopeDefault($query)
    {
        return $query->where('is_custom', false);
    }

    public function abilities()
    {
        return $this->belongsToMany(Ability::class,'product_abilities','product_id','ability_id');
    }

    public function hasAbility(ProductAbilityType $ability)
    {
        return in_array($ability->value, $this->abilities()->pluck('name')->toArray());
    }

    public function abilityNames()
    {
        return $this->belongsToMany(Ability::class,'product_abilities','product_id','ability_id')->pluck('name');
    }

    public function permissionPropertyAbilities()
    {
        return Helper::toPermissionProperty($this->belongsToMany(Ability::class,'product_abilities','product_id','ability_id')->pluck('name'));
    }

    public function minimumUsers()
    {
        return (int)explode(":", $this->abilities[1]->name)[1];
    }
}