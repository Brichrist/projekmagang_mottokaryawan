<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ability extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [];

    public function contents()
    {
        return $this->belongsToMany(content::class,'user_abilities');
    }
}
