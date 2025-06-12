<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aparat extends Model
{
    protected $guarded=[];
    protected $appends = ['aparat_image'];

    public function getAparatImageAttribute(){


          return asset('storage/'. $this->image);
    }

}
