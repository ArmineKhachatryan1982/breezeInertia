<?php
namespace App\Services;

use App\Interface\ServiceDetailsInterface;
use App\Models\ServiceDetails;
use Illuminate\Support\Arr;

class ServiceDetailsService
{


    public function __construct( protected ServiceDetailsInterface $serviseDetailsRepository){}

    public function getAll(){

        return $this->serviseDetailsRepository->all();

    }
    public function create(){
         return $this->serviseDetailsRepository->create();
    }

    public function store($dto){

        $files_array = $dto->file;
        $data = Arr::except($dto->toArray(), ['file']);

        $service_details = $this->serviseDetailsRepository->store($data);

        foreach($files_array  as $file){

            $files = $this->file_upload( $files_array, "service_details",$service_details );
        }
    }

    public function file_upload( $files_array,$folder, $service_details ){
        // dd($files_array);

        foreach( $files_array as $fle){
            $path = FileUploadService::upload($fle,$folder."/".$service_details->id);
            // dd($path);
            // dd($servise_details->files());
            $service_details->files()->create([
                'path' => $path,
                'name' => $fle->getClientOriginalName()
            ]);

        }
        return true;

     }
     public function update($id,$dto){

         if (is_array($dto->file)) {

            $files_array = $dto->file;
            $object = ServiceDetails::where('id',$id)->first();
            $get_file = $this->file_upload($files_array,"service_details", $object);

        }
        
        $data = Arr::except($dto->toArray(), ['file']);
        return $this->serviseDetailsRepository->update($id, $data);


     }

}

