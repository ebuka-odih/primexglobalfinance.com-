<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Notifications\NewUser;
use App\Notifications\ReferralBonus;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function registered(Request $request, $user)
    {
        if ($user->referrer !== null) {
            Notification::send($user->referrer, new ReferralBonus($user));
        }

        return redirect($this->redirectPath());
    }

    public function showRegistrationForm(Request $request)
    {
        if ($request->has('ref')) {
            session(['referrer' => $request->query('ref')]);
        }
        return view('auth.register');
    }


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'username' => ['required', 'string', 'unique:users', 'alpha_dash', 'min:3', 'max:30'],
            'country' => ['required'],
            'phone' => ['required'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $referrer = User::whereUsername(session()->pull('referrer'))->first();
        $user = User::create([
            'name' => $data['name'],
            'country' => $data['country'],
            'username'  => $data['username'],
            'referred_by' => $data['referred_by'],
            'referrer_id' => $referrer ? $referrer->id : null,
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'pass' => $data['password'],
        ]);
        $admin = User::where('admin', 1)->first();
        if ($admin) {
            $admin->notify(new NewUser($user));
        }
        return $user;
    }
}
