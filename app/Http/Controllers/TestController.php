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

       $f =  LevelOneModel::where('user_email', 'cjustinobi@gmail.com')->first();
        $f->created_at;
      /*$user = DB::table('level_one_models')
            ->select('followers')
            ->where('active', '=', '1')
           ->orderBy('created_at', 'desc')
           ->first()
            ->followers;*/


       /*$user = DB::table('level_one_models')->select('user_email')
            ->where('completed', '=', '0')->first()->user_email
            ;

      return  DB::table('level_one_models')
            ->where('user_email', $user)
            ->increment('followers', 1);*/

        /*$users = DB::table('level_one_models')
            ->select('followers')
            ->where('followers', '=', 5)->first()->followers;

        if($users){
            DB::table('level_one_models')
                ->where('followers', '=', 5)
                ->update(['active' => 1])
                ;
        }*/

          /*DB::table('level_one_models')
              ->where([['completed', '=', 0],[''],])
              ->increment('followers', 1)->value('followers')
              ->orderBy('created_at', 'desc')->get();*/

        return $f;
    }


}
/*$levelone = new LevelOneModel();

            $levelone->associate($id);

            $levelone->save();*/

