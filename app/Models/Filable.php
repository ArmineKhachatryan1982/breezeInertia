<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Filable extends Model

{
    // protected $guarded= [];
    protected $fillable = ['name', 'path',];
    protected $appends = ['file_path'];
    public function filable(): MorphTo
    {
        return $this->morphTo();

    }

    public function getFilePathAttribute()
    {
        return asset('storage/'. $this->path);
    }
}
