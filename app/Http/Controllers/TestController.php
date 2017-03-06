<?php

namespace App\Http\Controllers;

use App\LevelOneModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class TestController extends Controller
{
    public function index()
    {

       return DB::table('level_one_models')
            ->select('followers')
            ->where('active', '=', '1')
           ->orderBy('created_at', 'desc')
           ->first()
            ->followers;

    }


}


