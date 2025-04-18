<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ServiceDetails;
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
    public function show($id){
        $data = Category::with('service_details', 'service_details.files' )->get();

        $serviceDetails = ServiceDetails::where('category_id',$id)->first();
        // dd( $data);
        return Inertia::render('Frontend/Services/HeadIndex',[

            'servise_details'=>$serviceDetails,
            'data'=>$data
        ]);


    }

}
