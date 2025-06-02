<?php
namespace App\Services;

use App\Interface\AparatInterface;
use App\Interface\ContactInterface;
use App\Models\Contact;
use Illuminate\Support\Arr;

class  ContactService
{
    public function __construct( protected ContactInterface $contactRepository){}

    public function getAll()
    {
        return $this->contactRepository->all();
    }

    public function store($dto)
    {
        $files_array = $dto->file;
        $data = Arr::except($dto->toArray(), ['file']);
        $object = $this->contactRepository->create($data);

        $get_file = $this->file_upload($files_array,"contacts",$object);

        return $object;
    }

    public function update($id, $dto)
    {

        if (is_array($dto->file)) {

            $files_array = $dto->file;
            $object = Contact::where('id',$id)->first();
            $get_file = $this->file_upload($files_array,"contacts", $object);

        }
        $data = Arr::except($dto->toArray(), ['file']);
     
        return $this->contactRepository->update($id, $data);
    }

    public function delete($id)
    {
        return $this->contactRepository->delete($id);
    }


    public function file_upload( $files_array, $folder, $object ){

        foreach( $files_array as $fle){
            $path = FileUploadService::upload($fle,$folder."/".$object->id);
            $object->video = $path;
            $object->save();

        }
        return true;

    }

}
