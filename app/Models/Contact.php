<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $guarded=[];
    //  if use accessor must append  or use resource
    protected $appends = ['video_url'];

    public function getVideoUrlAttribute()
    {
        return asset('storage/'. $this->video);
    }
}
