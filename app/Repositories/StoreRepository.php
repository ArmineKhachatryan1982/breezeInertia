<?php
namespace App\Repositories;

use App\Interface\StoreInterface;
use Illuminate\Database\Eloquent\Model;

class StoreRepository implements StoreInterface
{
     protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

     public function create(array $attributes)
    {
       return $this->model->create($attributes);
    }


}
