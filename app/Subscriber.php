<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
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
}
