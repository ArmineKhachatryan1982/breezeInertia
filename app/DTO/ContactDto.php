<?php

namespace App\DTO;
use Illuminate\Http\Request;
use Carbon\Carbon;
class ContactDto
{
    public function __construct(

        public string $address,
        public string $phone_number,
        public string $map,
        public ?array $file,

    )
    {}

    public static  function fromRequestDto(Request $request): ContactDto{
        return  new self(
            address: $request->address,
            phone_number:$request->phone_number,
            map: $request->map,
            file: $request->hasFile('file') ? $request->file('file') : null
        );

    }

    public function toArray()
    {
        return [
            'address' => $this->address,
            'phone_number'=>$this->phone_number,
            "map"=> $this->map,
            "file" => $this->file

        ];
    }

}
