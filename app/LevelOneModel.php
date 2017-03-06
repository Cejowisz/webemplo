<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class LevelOneModel extends Model
{
    public function user(){
        return $this->belongsTo('App\User', 'user_email');
    }

    protected $fillable = ['user_email'];

}


