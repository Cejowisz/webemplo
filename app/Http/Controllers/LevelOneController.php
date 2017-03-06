<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class LevelOneController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function giveDownline()
    {
        $downline = User::all()->where('upline', '=', '')->first();
        
        return view('downline.index')->withDownline($downline);
    }
}
