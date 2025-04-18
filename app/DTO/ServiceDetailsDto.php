<?php

namespace App\DTO;
use Illuminate\Http\Request;
use Carbon\Carbon;
class ServiceDetailsDto
{
    public function __construct(
        public int $category_id,
        public string $title,
        public string $description,
        public ?array $file,

    )
    {}

    public static  function fromRequestDto(Request $request): ServiceDetailsDto{
        return  new self(
            category_id: $request->category_id,
            title: $request->title,
            description: $request->description,
            file: $request->hasFile('file') ? $request->file('file') : null
        );

    }

    public function toArray()
    {
        return [
            "category_id" => $this->category_id,
            'title' => $this->title,
            "description"=> $this->description,
            "file" => $this->file

        ];
    }

}
