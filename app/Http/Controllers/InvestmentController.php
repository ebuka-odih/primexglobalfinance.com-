<?php

namespace App\Http\Controllers;

use App\Investment;
use App\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InvestmentController extends Controller
{
    public function plans()
    {
        $plans = Package::all();
        return view('dashboard.invest.plans', compact('plans'));
    }

    public function processInvest(Request $request)
    {
//        return $request;
        $invest = new Investment();
        if ($request->amount < \auth()->user()->balance){
            $plan_id = Package::findOrFail($request->package_id);
            if ($request->get('amount') < $plan_id->min_deposit || $request->get('amount') > $plan_id->max_deposit)
            {
                return redirect()->back()->with('declined', "Please enter the amount within the Min/Max Deposit");
            }else{
                $invest->package_id = $request->package_id;
                $invest->user_id = Auth::id();
                $invest->amount = $request->amount;
                $invest->status = 1;
                $invest->save();
                return redirect()->route('user.investmentDetails');
            }
        }
        return redirect()->back()->with('insufficient', "Sorry! You do not have upto that amount in your balance");
    }

    public function investmentDetails()
    {
        $myplans = Investment::whereUserId(\auth()->id())->get();
        return view('dashboard.invest.myplan', compact('myplans'));
    }

}
