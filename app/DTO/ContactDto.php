<?php

namespace App\DTO;
use Illuminate\Http\Request;
use Carbon\Carbon;
class ContactDto
{
    public function __construct(

        public string $address,
        public string $map,
        public ?array $file,

    )
    {}

    public static  function fromRequestDto(Request $request): ContactDto{
        return  new self(
            address: $request->address,
            map: $request->map,
            file: $request->hasFile('file') ? $request->file('file') : null
        );

    }

    public function toArray()
    {
        return [
            'address' => $this->address,
            "map"=> $this->map,
            "file" => $this->file

        ];
    }

}
