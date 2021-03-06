<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeekerData extends Model
{
    use HasFactory;

    public function propertyStatus()
    {
        return $this->hasOne(PropertyStatus::class,'id','for');
    }
}
