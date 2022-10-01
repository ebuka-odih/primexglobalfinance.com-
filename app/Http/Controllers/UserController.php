<?php

namespace App\Http\Controllers;

use App\Deposit;
use App\Investment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
   public function dashboard()
   {
       $deposit = Deposit::whereUserId(auth()->id())->where('status', 1)->sum('amount');
       $investment = Investment::whereUserId(auth()->id())->where('status', 1)->sum('amount');
       return view('dashboard.dashboard', compact('deposit', 'investment'));
   }

   public function profile()
   {
       $user = Auth::user();
       return view('dashboard.profile', compact('user'));
   }

}
