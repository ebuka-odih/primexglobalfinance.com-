<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::where('email', '=', 'user@primexglobalfinance.com')->first();
        if($admin === null){
            DB::table('users')->insert([
                'name' => 'User',
                'status' => 1,
                'username' =>'user',
                'admin' => 0,
                'balance' => 500000,
                'profit' => 600000,
                'email' => 'user@primexglobalfinance.com',
                'email_verified_at' => \Carbon\Carbon::now(),
                'password' => Hash::make('PRIME123'),
            ]);
        }
    }

}
