<?php

namespace App\Http\Controllers;

use App\Deposit;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function dashboard()
   {
       $deposit = Deposit::whereUserId(auth()->id())->where('status', 1)->sum('amount');
//       $investment = Deposit::whereUserId(auth()->id())->where('status', 1)->sum('amount');
       return view('dashboard.dashboard', compact('deposit'));
   }

}
