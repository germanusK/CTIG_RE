<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    //
    public function index()
    {
        # code...
        return view('dashboard.customer.dashboard_customer');
    }
}
