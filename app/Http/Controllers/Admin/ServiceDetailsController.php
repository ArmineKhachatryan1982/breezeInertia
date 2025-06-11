<?php

namespace App\Http\Controllers\Admin;

use App\DTO\ServiceDetailsDto;
use App\Http\Controllers\Controller;
use App\Models\ServiceDetails;
use App\Services\ServiceDetailsService;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ServiceDetailsController extends Controller
{

    public function __construct(protected ServiceDetailsService $service){}

    public function index(){

        $data = $this->service->getAll();

        return Inertia::render('Admin/ServiceDetails/List',[
            'data'=>$data
        ]);
    }
    public function create(){
        $data= $this->service->create();


        return Inertia::render('Admin/ServiceDetails/Create',[
            'categories'=> $data
        ]);
    }
    public function store(Request $request){
        // dd($request->all());

        $data = $this->service->store(ServiceDetailsDto::fromRequestDto($request));
        dd($data);
        if($data){ // chi ashxatum
             return redirect()->back()->with('success', 'Контакт успешно создан!');

        }
        return redirect()->back()->with('error', 'Произошла ошибка при создании!');

    }


    public function edit(ServiceDetails $model){
        $files=[];
        if($model->video!=null){
            $files[0]['path'] = asset('storage/' . $model->video);
            $files[0]['id'] = $model->id;
        }



        return Inertia::render('Admin/ServiceDetails/Edit',[
            'contact' => $model,
            "files" => $files,
        ]);

    }
    public function update(Request $request, $id){


        $model = $this->service->update($id,ContactDto::fromRequestDto($request));


    }
}
