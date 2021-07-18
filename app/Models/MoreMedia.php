<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoreMedia extends Model
{
    use HasFactory;
    public function properties()
    {
        return $this->belongsToMany(Property::class,'property_more_images');
    }
}
