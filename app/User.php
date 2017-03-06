<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 
        'last_name', 
        'email',
        'phone',
        'bank_name',
        'acct_name',
        'acct_number',
        'profile_pix',
        'sme',
        'other_sme',
        'password',
    ];

    public function levelonemodel()
    {
        return $this->hasOne('App\LevelOneModel', 'user_email');
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
