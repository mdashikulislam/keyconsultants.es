<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Property extends Model
{
    use HasFactory,SoftDeletes;

    public function more_medias()
    {
        return $this->belongsToMany(MoreMedia::class,'property_more_images');
    }

    public function propertyStatus()
    {
        return $this->hasOne(PropertyStatus::class,'id','property_status');
    }

    public function favorites()
    {
        return $this->hasOne(Favorite::class,'post_id','id');
    }

    public function region()
    {
        $this->hasMany(Region::class,'id','region');
    }
}
