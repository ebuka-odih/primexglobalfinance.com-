<?php

namespace App\Http\Controllers;

use App\Deposit;
use App\Investment;
use App\Message;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
   public function dashboard()
   {
       $message = Message::whereUserId(\auth()->id())->first();
       $deposit = Deposit::whereUserId(auth()->id())->where('status', 1)->sum('amount');
       $investment = Investment::whereUserId(auth()->id())->where('status', 1)->sum('amount');
       $active_investment = Investment::whereUserId(auth()->id())->where('status', 1)->count();
       return view('dashboard.dashboard', compact('deposit', 'investment', 'active_investment', 'message'));
   }

   public function profile()
   {
       $user = Auth::user();
       return view('dashboard.profile', compact('user'));
   }


    public function updateProfile(Request $request)
    {
        $user = User::findOrFail(auth()->id());
        $data = $this->getData($request);
        $user->update($data);
        return redirect()->back()->with('success', 'Profile Updated Successful');
    }


    protected function getData(Request $request){
        $rules = [
            'name' => 'nullable',
            'email' => 'nullable',
            'telegram' => 'nullable',
            'country' => 'nullable',
            'username' => 'nullable',
            'address' => 'nullable',
            'phone' => 'nullable',
        ];
        return $request->validate($rules);
    }

}
