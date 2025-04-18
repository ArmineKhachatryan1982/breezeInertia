<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class ServiceDetails extends Model
{
    protected $guarded=[];

    public function files(): MorphMany
    {
        return $this->morphMany(Filable::class, 'filable', 'filable_type', 'filable_id');
    }
}
