<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ContactController extends Controller
{

     public function index(){

        $data = Contact::all();

        return Inertia::render('Frontend/Contacts/Index',[

            'data' => $data
        ]);

    }
}
