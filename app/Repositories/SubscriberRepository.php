<?php
namespace App\Repositories;

use App\Interface\SubscriberInterface;
use App\Models\Subscriber;

class SubscriberRepository extends StoreRepository implements SubscriberInterface
{
   public function __construct(Subscriber $model)
    {
        parent::__construct($model);
    }
    
     public function existsByEmail(string $email): bool
    {
        return $this->model->where('email', $email)->exists();
    }
}
