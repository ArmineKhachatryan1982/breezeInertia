<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Services\ContactService;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ContactController extends Controller
{

    public $service;
    public function __construct(ContactService $service){

        $this->service = $service;
    }
    public function index(){

        $data = $this->service->getAll();

        return Inertia::render('Admin/Contact/List',[
            'data'=>$data
        ]);
    }
    public function create(){
        return Inertia::render('Admin/Contact/Create');
    }

    public function store(Request $request){

        $data = $this->service->store(AparatDto::fromRequestDto($request));

        if($data){ // chi ashxatum
             return redirect()->back()->with('success', 'Аппарат успешно создан!');

        }
        return redirect()->back()->with('error', 'Произошла ошибка при создании!');
    }
    public function edit(Contact $model){
        $files=[];
        if($model->image!=null){
            $files[0]['path'] = asset('storage/' . $model->image);
            $files[0]['id'] = $model->id;
        }



        return Inertia::render('Admin/Contact/Edit',[
            'aparat' => $model,
            "files" => $files,
        ]);

    }
    public function update(Request $request, $id){

        $model = $this->service->update($id,AparatDto::fromRequestDto($request));


    }
}
