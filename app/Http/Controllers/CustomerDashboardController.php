<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerDashboardController extends Controller
{
    //show view
    public function show()
    {
        # code...
        return view('dashboard.customer.dashboard_customer');
    }
}
