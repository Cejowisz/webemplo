<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Downline extends Model
{
    public function user(){
        return $this->hasMany('App\User', 'user_email', 'downline_email');
    }

    public $primarykey = 'user_email';

    protected $fillable = ['user_email', 'downline_email'];
}
