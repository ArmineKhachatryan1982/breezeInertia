<?php
namespace App\Interface;

interface  SubscriberInterface extends StoreInterface
{

     public function existsByEmail(string $email): bool;

}
