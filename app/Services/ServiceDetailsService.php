<?php
namespace App\Services;

use App\Interface\ServiceDetailsInterface;
use Illuminate\Support\Arr;

class ServiceDetailsService
{


    public function __construct( protected ServiceDetailsInterface $serviseDetailsRepository){}

    public function store($dto){

        $files_array = $dto->file;
        $data = Arr::except($dto->toArray(), ['file']);

        $service_details = $this->serviseDetailsRepository->store($data);
        foreach($files_array  as $file){

            $files = $this->file_upload( $files_array, $service_details );
        }
    }

    public function file_upload( $files_array, $service_details ){
        // dd($files_array);

        foreach( $files_array as $fle){
            $path = FileUploadService::upload($fle,"service_details/".$service_details->id);
            // dd($path);
            // dd($servise_details->files());
            $service_details->files()->create([
                'path' => $path,
                'name' => $fle->getClientOriginalName()
            ]);

        }
        return true;

     }

}

