<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class content extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [];
    // public $timestamps = false;


    public function abilities()
    {
        return $this->belongsToMany(ability::class,'user_abilities');
    }
    // public function scopeAbilities()
    // {
    //     return $this->belongsToMany(ability::class,'user_abilities');
    // }
}
