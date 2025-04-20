<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];

    public function service_details(){
        return $this->hasOne(ServiceDetails::class);
    }


}
