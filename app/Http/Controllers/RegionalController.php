<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegionalController extends Controller
{
    public function Dashboard() {
        return view('regional.dashboard');
    }
}
