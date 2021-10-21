<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //show view
    public function show()
    {
        # code...
        return view('front-end.login');
    }
}
