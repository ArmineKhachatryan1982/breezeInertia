<?php

namespace App\DTO;
use Illuminate\Http\Request;

class SubscriberDto
{

     public function __construct(
        
        public string $email,

    )
    {}

    public static  function fromRequestDto(Request $request): SubscriberDto{
        return  new self(
            email: $request->email,

        );

    }

    public function toArray()
    {
        return [
            'email' => $this->email,

        ];
    }

}
