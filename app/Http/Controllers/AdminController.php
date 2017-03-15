<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }

    

    public function index()
    {
        $totalusers = DB::table('downlines')
            ->select('downline_email')
            ->get()
            ->count();
       
            return view('admin.index')->withTotalusers($totalusers);
    }


    // Shows all users to the admin
    public function users()
    {
        $users = User::all();
        return view('admin.users')->withUsers($users);
    }

    // Shows a single user to the admin
    public function show($id)
    {
        $user = User::find($id);

        $downlines = DB::table('downlines')
            ->select('downline_email')
            ->where('user_email', $user->email)->get();
        
        return view('admin.show')->withUser($user)->withDownlines($downlines);
        //return redirect()->route('users.show')->withUser($user);
    }
    
    public function totalUsers()
    {
        $totalUsers = DB::table('downlines')
            ->select('downline_email')
            ->get()
            ->count();
        return $totalUsers;
    }
    
    public function brf($id)
    {
        $user = User::find($id);
        return DB::table('downlines')
            ->select('downline_email')
            ->where('user_email', $user->email)->get()->count();

        //return view('admin.show')->withDownlines($downlines);
        
    }
}
