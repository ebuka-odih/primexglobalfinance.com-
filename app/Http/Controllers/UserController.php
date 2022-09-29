<?php

namespace App\Http\Controllers;

use App\Deposit;
use App\Investment;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function dashboard()
   {
       $deposit = Deposit::whereUserId(auth()->id())->where('status', 1)->sum('amount');
       $investment = Investment::whereUserId(auth()->id())->where('status', 1)->sum('amount');
       return view('dashboard.dashboard', compact('deposit', 'investment'));
   }

}
