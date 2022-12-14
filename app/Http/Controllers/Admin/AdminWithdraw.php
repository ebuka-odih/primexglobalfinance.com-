<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\ApproveWithdraw;
use App\User;
use App\Withdraw;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AdminWithdraw extends Controller
{
    public function withdrawal()
    {
        $withdrawal = Withdraw::all();
        return view('admin.withdrawal', compact('withdrawal'));
    }

    public function approve_withdrawal($id)
    {
        $withdraw = Withdraw::findOrFail($id);
        $user = User::findOrFail($withdraw->user_id);
        $user->balance -= $withdraw->amount;
        $user->save();
        $withdraw->save();
        Mail::to($user->email)->send(new ApproveWithdraw($withdraw));
        return redirect()->back()->with('success', "Withdrawal Approved Successfully");
    }

    public function delete_withdrawal($id)
    {
        $withdraw = Withdraw::findOrFail($id);
        $withdraw->delete();
        return redirect()->back();
    }
}
