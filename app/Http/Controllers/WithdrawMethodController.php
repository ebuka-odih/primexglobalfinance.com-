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
        $wallets = WithdrawMethod::whereUserId(\auth()->id())->get();
        return view('dashboard.withdraw.withdrawal_info', compact('wallets'));
    }

    public function store(Request $request)
    {
        $data = $this->getBTCData($request);
        $data['user_id'] = Auth::id();
        WithdrawMethod::create($data);
        return redirect()->back()->with('success', "Wallet Created Successfully");
    }

    protected function getBTCData(Request $request)
    {
        $rules = [
            'name' => 'required',
            'value' => 'nullable',
        ];
        return $request->validate($rules);
    }

    public function show(WithdrawMethod $withdrawMethod)
    {
        //
    }


    public function edit(WithdrawMethod $withdrawMethod)
    {
        //
    }


    public function update(Request $request, WithdrawMethod $withdrawMethod)
    {
        //
    }


    public function deleteWallet($id)
    {
        $wallet = WithdrawMethod::findOrFail($id);
        $wallet->delete();
        return redirect()->back();
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


}
