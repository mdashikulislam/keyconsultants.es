<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeekerInfo extends Model
{
    use HasFactory;

    public function seeker_datas()
    {
        return $this->hasMany(SeekerData::class,'seeker_info_id','id');
    }
}
