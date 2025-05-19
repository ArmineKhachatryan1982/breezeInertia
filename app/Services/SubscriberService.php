<?php
namespace App\Services;

use App\Interface\SubscriberInterface;
use Illuminate\Support\Arr;

class SubscriberService
{
    public function __construct( protected SubscriberInterface $subscriberRepository){}

    public function store($dto){

        if ($this->subscriberRepository->existsByEmail($dto->email)) {
            return [
                'status' => false,
                'message' => 'Вы уже подписаны!',
            ];
        }

        $this->subscriberRepository->create($dto->toArray());
        
        return [
            'status' => true,
            'message' => 'Вы успешно подписались!',
        ];

    }
}
