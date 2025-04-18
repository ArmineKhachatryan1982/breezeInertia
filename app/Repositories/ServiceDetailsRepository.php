<?php
namespace App\Repositories;

use App\Interface\ServiceDetailsInterface;
use App\Models\ServiceDetails;

class ServiceDetailsRepository implements ServiceDetailsInterface
{

    public function store($dto){
    

        return ServiceDetails::create($dto);

    }
}
