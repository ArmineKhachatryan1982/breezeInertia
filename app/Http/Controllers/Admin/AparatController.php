<?php

namespace App\Http\Controllers\Admin;

use App\DTO\AparatDto;
use App\Http\Controllers\Controller;
use App\Models\Aparat;
use App\Services\AparatService;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AparatController extends Controller
{
    public $service;
    public function __construct(AparatService $service){

        $this->service = $service;
    }
    public function index(){

        $data = $this->service->getAll();

        return Inertia::render('Admin/Aparat/List',[
            'data'=>$data
        ]);
    }
    public function create(){
        return Inertia::render('Admin/Aparat/Create');
    }

    public function store(Request $request){

        $data = $this->service->store(AparatDto::fromRequestDto($request));

        // if($data){ // chi ashxatum
        //      return redirect()->back()->with('success', 'Аппарат успешно создан!');

        // }
        // return redirect()->back()->with('error', 'Произошла ошибка при создании!');
    }
    public function edit(Aparat $model){
        $files=[];
        if($model->image!=null){
            $files[0]['path'] = asset('storage/' . $model->image);
            $files[0]['id'] = $model->id;
        }



        return Inertia::render('Admin/Aparat/Edit',[
            'aparat' => $model,
            "files" => $files,
        ]);

    }
    public function update(Request $request, $id){

        $model = $this->service->update($id,AparatDto::fromRequestDto($request));
        // if($model->image!=null){
        //     $files[0]['path'] = asset('storage/' . $model->image);
        //     $files[0]['id'] = $model->id;
        // }


    }
}
