<?php
namespace App\Repositories;

use App\Interface\AparatInterface;

use App\Models\Aparat;
use App\Repositories\BaseRepository;

class AparatRepository extends BaseRepository implements AparatInterface
{

    public function __construct(Aparat $model)
    {
        parent::__construct($model);
    }

}



