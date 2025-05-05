<?php
namespace App\Services;

use App\Interface\AparatInterface;
use App\Models\Aparat;
use Illuminate\Support\Arr;

class  AparatService
{


    // protected $aparatRepository;

    // public function __construct(AparatRepository $aparatRepository)
    // {
    //     $this->aparatRepository = $aparatRepository;
    // }
    public function __construct( protected AparatInterface $aparatRepository){}

    public function getAll()
    {
        return $this->aparatRepository->all();
    }

    public function store($dto)
    {
        $files_array = $dto->file;
        $data = Arr::except($dto->toArray(), ['file']);
        $object = $this->aparatRepository->create($data);
        $get_file = $this->file_upload($files_array,"aparats",$object);

        return $object;
    }

    public function update($id, $dto)
    {

        if ($dto->file !== null && $dto->file !== '') {
            dd($dto->file);
            $files_array = $dto->file;

            $object = Aparat::where('id',$id)->first();
            $get_file = $this->file_upload($files_array,"aparats", $object);

        }
        $data = Arr::except($dto->toArray(), ['file']);

        $files_array = $dto->file;
        return $this->aparatRepository->update($id, $data);
    }

    public function delete($id)
    {
        return $this->aparatRepository->delete($id);
    }

    // Можешь добавлять кастомные методы, например:
    // public function getActive()
    // {
    //     return $this->aparatRepository->getModel()->where('status', 1)->get();
    // }

    public function file_upload( $files_array, $folder, $object ){
        // dd($files_array);

        foreach( $files_array as $fle){
            $path = FileUploadService::upload($fle,$folder."/".$object->id);
            dd($path);
            $object->image = $path;
            $object->save();
            // dd($path);
            // dd($servise_details->files());
            // $service_details->files()->create([
            //     'path' => $path,
            //     'name' => $fle->getClientOriginalName()
            // ]);

        }
        return true;

    }

}
