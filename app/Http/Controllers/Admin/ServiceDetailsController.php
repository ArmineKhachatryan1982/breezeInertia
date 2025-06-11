<?php

namespace App\Http\Controllers\Admin;

use App\DTO\ServiceDetailsDto;
use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
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

        if($data){ // chi ashxatum
             return redirect()->back()->with('success', 'Контакт успешно создан!');

        }
        return redirect()->back()->with('error', 'Произошла ошибка при создании!');

    }


    public function edit(ServiceDetails $model){
        

        $categories = CategoryResource::collection(Category::all());

        return Inertia::render('Admin/ServiceDetails/Edit',[
            'model' => $model,
            'categories' => $categories,
            'files' => $model->files,
        ]);

    }
    public function update(Request $request, $id){


        $model = $this->service->update($id,ServiceDetailsDto::fromRequestDto($request));


    }
}
