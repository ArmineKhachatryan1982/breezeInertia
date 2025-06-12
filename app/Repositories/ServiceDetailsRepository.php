<?php
namespace App\Repositories;

use App\Interface\ServiceDetailsInterface;
use App\Models\Category;
use App\Models\ServiceDetails;

class ServiceDetailsRepository implements ServiceDetailsInterface
{
    public function all(){

         $data = ServiceDetails::all();
         return $data;

    }
    public function create(){

        $data = Category::all();
        return $data;
    }

    public function store($dto){

        return ServiceDetails::create($dto);

    }
    public function update($id,$dto){

        return ServiceDetails::where('id',$id)->update($dto);
  

    }
}
