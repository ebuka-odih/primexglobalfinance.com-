<?php

namespace App\Http\Controllers;

use App\Deposit;
use App\Mail\AdminDepositAlert;
use App\Mail\DepositAlert;
use App\PaymentMethod;
use App\Withdraw;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class DepositController extends Controller
{
    public function transactions()
    {
        $deposits = Deposit::whereUserId(\auth()->id())->where('status', 1)->get();
        $withdrawal = Withdraw::whereUserId(\auth()->id())->get();
        return view('dashboard.deposit.transactions', compact('deposits', 'withdrawal'));
    }

    public function deposit()
    {
        $payment_m = PaymentMethod::all();
        $deposits = Deposit::whereUserId(\auth()->id())->where('status', 0)->get();
        return view('dashboard.deposit.deposit', compact('payment_m', 'deposits'));
    }

    public function processDeposit(Request $request)
    {
        $deposit = new Deposit();
        if ($request->amount > 40){
            $deposit->user_id = Auth::id();
            $deposit->amount = $request->amount;
            $deposit->payment_method_id = $request->payment_method_id;
            $deposit->save();
            Mail::to($deposit->user->email)->send(new DepositAlert($deposit));
            return redirect()->route('user.payment', $deposit->id);
        }
        return redirect()->back()->with('declined', "You can only deposit 100 USD and above");

    }

    public function payment($id)
    {
        $deposit = Deposit::findOrFail($id);
        return view('dashboard.deposit.payment', compact('deposit'));
    }


    public function processPayment(Request $request)
    {
        $request->validate([
                'reference' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:7048',
            ]
        );
        if ($request->hasFile('reference')){
            $image = $request->file('reference');
            $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/proof');
            $image->move($destinationPath, $input['imagename']);

            $id = $request->deposit_id;
            $deposit = Deposit::findOrFail($id);
            $deposit->update(['reference' => $input['imagename'] ]);
            Mail::to('admin@primexglobalfinance.com')->send(new AdminDepositAlert($deposit));
            return redirect()->back()->with('success', "Transaction Sent, Awaiting Approval ");
        }
        return redirect()->back()->with('declined', "Please Upload Your Payment Screenshot ");

    }

    public function cancelDeposit($id)
    {
        $deposit = Deposit::findOrFail($id);
        $deposit->status = -1;
        $deposit->save();
        return view('dashboard.deposit.cancel-deposit', compact('deposit'));
    }

}
