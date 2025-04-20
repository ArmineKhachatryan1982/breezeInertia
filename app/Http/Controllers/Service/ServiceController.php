<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ServiceDetails;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ServiceController extends Controller
{
    public function index(Request $request){
        $categoryId = $request->category_id;

        $data = Category::with('service_details', 'service_details.files' )->get();
        // dd($data);


        return Inertia::render('Frontend/Services/Index',[

            'categories'=>$data,
            'category_id'=>$categoryId
        ]);


    }
   

}
