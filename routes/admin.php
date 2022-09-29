<?php

use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['auth', 'verified', 'admin'], 'prefix' => 'admin', 'as' => 'admin.'], function(){
    Route::get('dashboard', 'Admin\AdminController@dashboard')->name('dashboard');
    Route::resource('wallet', "Admin\PaymentMethodController");

    Route::get('deposits', "Admin\AdminDeposit@deposits")->name('deposits');
    Route::get('view/deposits', "Admin\AdminDeposit@view_deposit")->name('view_deposit');
    Route::get('approve/deposit/{id}', "Admin\AdminDeposit@approve_deposit")->name('approve_deposit');
    Route::delete('delete/deposit/{id}', "Admin\AdminDeposit@deleteDeposit")->name('deleteDeposit');

    // Withdrawal Route
    Route::get('withdrawals', "Admin\AdminWithdraw@withdrawal")->name('withdrawal');
    Route::get('approve/withdrawal/{id}', "Admin\AdminWithdraw@approve_withdrawal")->name('approve_withdrawal');
    Route::delete('delete/withdrawal/{id}', "Admin\AdminWithdraw@delete_withdrawal")->name('delete_withdrawal');

    Route::resource('package', "Admin\PackageController");

});
