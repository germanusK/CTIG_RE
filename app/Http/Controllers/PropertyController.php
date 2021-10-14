<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropertyController extends Controller
{
    //show view
    public function show()
    {
        return view('front-end.property');
    }
}
