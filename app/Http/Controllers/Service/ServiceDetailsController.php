<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use App\Models\ServiceDetails;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ServiceDetailsController extends Controller
{
    public function show(Request $request,$id){
        $data = ServiceDetails::where('category_id',$id)->first();
        // dd( $data);
        return Inertia::render('Frontend/Services/ServiceDetails',[

            'servise_details'=>$data
        ]);

    }
}
