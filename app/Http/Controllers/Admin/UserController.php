<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function users()
    {
        $users = User::where('admin', 0)->latest()->paginate(10);
        return view('admin.users.users', compact('users'));
    }

    public function userDetails($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.personal', compact('user'));
    }

    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->back();
    }

    public function wallet()
    {
        return view('admin.user.wallet');
    }

    public function storeWallet(Request $request){
        setting($request->except('_token'))->save();
        return redirect()->back()->with('success', 'Settings updated successfully');
    }

    public function addUser()
    {
        return view('admin.users.add');
    }

    public function storeUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'username' => 'required',
            'phone' => 'nullable',
            'country' => 'nullable',
            'password' => 'required|string|min:5|confirmed',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->phone = $request->phone;
        $user->country = $request->country;
        $user->password = Hash::make($request['password']);
        $user->save();
        return redirect()->back()->with('success', "User Created Successfully");

    }
}
