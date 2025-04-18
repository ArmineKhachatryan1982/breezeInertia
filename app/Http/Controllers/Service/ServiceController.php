<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ServiceController extends Controller
{
    public function index(){

        $data = Category::with('service_details', 'service_details.files' )->get();
        // dd($data);


        return Inertia::render('Frontend/Services/Index',[

            'categories'=>$data
        ]);


    }

}
