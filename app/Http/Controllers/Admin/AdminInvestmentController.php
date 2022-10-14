<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Investment;
use Illuminate\Http\Request;

class AdminInvestmentController extends Controller
{

    public function investments()
    {
        $investments = Investment::all();
        return view('admin.investments', compact('investments'));
    }
}
