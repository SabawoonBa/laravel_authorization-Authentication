<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegionalSalesController extends Controller
{
    public function Dashboard() {
        return view('regional_sales.dashboard');
    }
}
