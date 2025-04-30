<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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

        $aparats = $this->service->getAll();
        dd($aparats);
        return Inertia::render('Admin/Aparat/Create');
    }


    // public function index(){
    //     return Inertia::render('Admin/Aparat/Create');
    // }

    public function store(Request $request){
        dd($request->all());
    }
}
