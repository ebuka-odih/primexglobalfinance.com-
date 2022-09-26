<?php

namespace App\Http\Controllers;

use App\User;
use App\WithdrawMethod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WithdrawMethodController extends Controller
{

    public function create()
    {
        $w_method = Auth::id();
        return view('dashboard.withdraw.withdrawal_info', compact('w_method'));
    }

    public function bank(Request $request)
    {
        $bank =  $request->validate([
            'bank_name' => 'required',
            'acct_name' => 'required',
            'acct_number' => 'required',
        ]);

        $user = User::findOrFail(Auth::id());
        $user->update($bank);
        return redirect()->back()->with('bank', "Account Added Successfully");

    }

    public function crypto(Request $request)
    {
        $crypto =  $request->validate([
            'btc_address' => 'nullable',
            'usdt_address' => 'nullable',
            'btc_cash' => 'nullable',
            'eth_address' => 'nullable',
            'ltc_address' => 'nullable',
            'tron_address' => 'nullable',
            'doge_address' => 'nullable',
            'bnb_address' => 'nullable',
        ]);
        $user = User::findOrFail(Auth::id());
        $user->update($crypto);
        return redirect()->back()->with('crypto', "Account Added Successfully");

    }

}
