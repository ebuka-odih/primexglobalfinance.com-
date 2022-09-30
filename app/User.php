<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;


    protected $guarded = [];
    protected $appends = ['referral_link'];
    protected $with = ['referredBy'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];




    public function referrer()
    {
        return $this->belongsTo(User::class, 'referrer_id', 'id');
    }

    public function referrals()
    {
        return $this->hasMany(User::class, 'referrer_id', 'id');
    }

    public function all_referrals()
    {
        $refs = User::whereReferredBy($this->id)->get();
        return $refs;
    }

    public function referredBy()
    {
        return $this->belongsTo(User::class, 'referred_by', 'id');
    }
    public function getReferralLinkAttribute()
    {
        return $this->referral_link = route('register', ['ref' => $this->username, 'id'=> $this->id]);
    }

    public function status()
    {
        if ($this->status < 0){
            return "<span class='user-status user-status-unverified'>Unverified</span>";
        }elseif ($this->status >= 0){
            return "<span class='user-status user-status-verified'>Verified</span>";
        }else{
            return "<span class='badge bg-warning text text-uppercase'>Blocked</span>";
        }
    }

    public function withdrawal()
    {
        return $this->hasMany(Withdrawal::class, 'user_id');
    }
    public function deposit()
    {
        return $this->hasMany(Deposit::class, 'user_id');
    }
    public function funding()
    {
        return $this->hasMany(Funding::class, 'user_id');
    }

}
