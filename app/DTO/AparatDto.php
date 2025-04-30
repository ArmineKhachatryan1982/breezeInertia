<?php

namespace App\DTO;
use Illuminate\Http\Request;
use Carbon\Carbon;
class AparatDto
{
    public function __construct(

        public string $title,
        public string $description,
        public ?array $file,

    )
    {}

    public static  function fromRequestDto(Request $request): AparatDto{
        return  new self(
            title: $request->title,
            description: $request->description,
            file: $request->hasFile('file') ? $request->file('file') : null
        );

    }

    public function toArray()
    {
        return [

            'title' => $this->title,
            "description"=> $this->description,
            "file" => $this->file

        ];
    }

}
