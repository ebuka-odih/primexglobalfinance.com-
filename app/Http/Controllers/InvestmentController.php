<?php

namespace App\Http\Controllers;

use App\Package;
use Illuminate\Http\Request;

class InvestmentController extends Controller
{
    public function plans()
    {
        $plans = Package::all();
        return view('dashboard.invest.plans', compact('plans'));
    }
}
