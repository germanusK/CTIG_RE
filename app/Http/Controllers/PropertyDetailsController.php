<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropertyDetailsController extends Controller
{
    //show view
    public function show()
    {
        return view('front-end.propertyDetails');
    }
}
