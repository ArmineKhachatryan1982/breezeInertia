<?php
namespace App\Services;

use App\Interface\AparatInterface;
class  AparatService
{


    // protected $aparatRepository;

    // public function __construct(AparatRepository $aparatRepository)
    // {
    //     $this->aparatRepository = $aparatRepository;
    // }
    public function __construct( protected AparatInterface $aparatRepository){}

    public function getAll()
    {
        return $this->aparatRepository->all();
    }

    public function store(array $data)
    {
        return $this->aparatRepository->create($data);
    }

    public function update($id, array $data)
    {
        return $this->aparatRepository->update($id, $data);
    }

    public function delete($id)
    {
        return $this->aparatRepository->delete($id);
    }

    // Можешь добавлять кастомные методы, например:
    // public function getActive()
    // {
    //     return $this->aparatRepository->getModel()->where('status', 1)->get();
    // }



}
