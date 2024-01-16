<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupplyChainController extends Controller
{
    public function Dashboard() {
        return view('supply_chain.dashboard');
    }
}
