<?php

use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['auth', 'verified', 'admin'], 'prefix' => 'admin', 'as' => 'admin.'], function(){
    Route::get('dashboard', 'Admin\AdminController@dashboard')->name('dashboard');
    Route::get('user/details/{id}', "Admin\UserController@userDetails")->name('userDetails');
    Route::get('users', 'Admin\UserController@users')->name('users');
    Route::get('add/user', 'Admin\UserController@addUser')->name('addUser');
    Route::post('store/user', 'Admin\UserController@storeUser')->name('storeUser');
    Route::delete('delete/user', 'Admin\UserController@deleteUser')->name('deleteUser');
    Route::get('add-wallet', "Admin\UserController@wallet")->name('wallet');
    Route::post('add-wallet', "Admin\UserController@storeWallet")->name('storeWallet');

    Route::get('referrals', "Admin\AdminController@referrals")->name('referrals');
    Route::get('security', "Admin\AdminController@security")->name('security');
    Route::post('security', "Admin\AdminController@storePassword")->name('storePassword');
    Route::post('defund/account/', 'Admin\AdminController@defund')->name('defund');


    Route::resource('wallet', "Admin\PaymentMethodController");

    Route::get('add/deposits', "Admin\AdminDeposit@deposit")->name('deposit');
    Route::post('process/deposits', "Admin\AdminDeposit@processDeposit")->name('processDeposit');

    Route::get('deposits', "Admin\AdminDeposit@deposits")->name('deposits');
    Route::get('view/deposits', "Admin\AdminDeposit@view_deposit")->name('view_deposit');
    Route::get('approve/deposit/{id}', "Admin\AdminDeposit@approve_deposit")->name('approve_deposit');
    Route::delete('delete/deposit/{id}', "Admin\AdminDeposit@deleteDeposit")->name('deleteDeposit');

    // Withdrawal Route
    Route::get('withdrawals', "Admin\AdminWithdraw@withdrawal")->name('withdrawal');
    Route::get('approve/withdrawal/{id}', "Admin\AdminWithdraw@approve_withdrawal")->name('approve_withdrawal');
    Route::delete('delete/withdrawal/{id}', "Admin\AdminWithdraw@delete_withdrawal")->name('delete_withdrawal');

    Route::resource('package', "Admin\PackageController");

    Route::get('fund/user', "Admin\FundingController@fund")->name('fund');
    Route::post('fund/user', "Admin\FundingController@sendFund")->name('sendFund');


});
