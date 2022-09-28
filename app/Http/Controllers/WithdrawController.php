<?php

namespace App\Http\Controllers;

use App\Mail\AdminWithdrawAlert;
use App\Mail\RequestWithdraw;
use App\User;
use App\Withdraw;
use App\WithdrawMethod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class WithdrawController extends Controller
{
    public function withdraw()
    {
        $wallets = WithdrawMethod::whereUserId(auth()->id())->get();
        return view('dashboard.withdraw.withdraw', compact('wallets'));
    }

    public function processWithdraw(Request $request)
    {
        $request->validate([
            'amount' => 'required',
            'withdraw_method_id' => 'required',
        ]);
        $withdraw = new Withdraw();
        if ($request->amount >= 100){
            $withdraw->amount = $request->amount;
            $withdraw->user_id = Auth::id();
            $withdraw->withdraw_method_id = $request->withdraw_method_id;
            $user = User::findOrFail($withdraw->user_id);
            $data = ['withdraw' => $withdraw, 'user' => $user];
            $withdraw->save();
            Mail::to($user->email)->send( new RequestWithdraw($data));
            Mail::to('admin@primexglobalfinance.com')->send( new AdminWithdrawAlert($data));
            return redirect()->back()->with('success_message', 'Withdrawal Request Sent Successfully, Awaiting Approval');
        }
        return redirect()->back()->with('nop', "You can't withdraw less than 50 USD");

    }

}
