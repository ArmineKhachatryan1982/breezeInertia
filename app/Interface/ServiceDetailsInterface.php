<?php
namespace App\Interface;
interface ServiceDetailsInterface
{
    public function all();
    public function create();
    public function store(array $dto);

}
