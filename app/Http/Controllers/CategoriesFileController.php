<?php

namespace App\Http\Controllers;

use App\DTO\ServiceDetailsDto;
use App\Models\Category;
use App\Services\ServiceDetailsService;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CategoriesFileController extends Controller
{
    public function __construct(protected ServiceDetailsService $service){}
    public function index(){

        $data = Category::all();

        return Inertia::render('CategoryFile/Index',[

            "categories"=>$data
        ]);

    }
    public function store(Request $request){
        // dd($request->all());
        $data = $this->service->store(ServiceDetailsDto::fromRequestDto($request));

    }
}
