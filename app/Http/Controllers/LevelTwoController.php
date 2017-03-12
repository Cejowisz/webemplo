<?php

namespace App\Http\Controllers;

use App\LevelTwoModel;
use Illuminate\Http\Request;

class LevelTwoController extends Controller
{
    public function store($email)
    {
        // validate the input field


        // store in the database
        $level_2 = LevelTwoModel::where($email);

        /*$level_2->followers        = $request->followers;
        $level_2->active         = $request->active;
        $level_2->completed  = $request->completed;
        $level_2->stop_count         = $request->stop_count;*/

        $level_2->save();

        //$post->tags()->sync($request->tags, false);

       // Session::flash('success', 'Post is successfully saved');

       // return redirect()->route('posts.show', $post->id);
    }
}
