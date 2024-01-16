<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function Dashboard() {
        return view('sales.dashboard');
    }
}
