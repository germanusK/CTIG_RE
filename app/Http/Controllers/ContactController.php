<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //show view
    public function show()
    {
        return view('front-end.contact');
    }
}
