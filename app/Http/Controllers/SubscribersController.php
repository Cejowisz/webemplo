<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscriber;


class SubscribersController extends Controller
{
    public function index()
    {
        $profile = Subscriber::all();
        return view('subscribers.index')->withProfiles($profile);
    }

    // Holds the profile of the subscriber
    public function profile($id)
    {
        $profile = Subscriber::where('id', '=', $id)->first();
        return view('subscribers.profile')->withProfile($profile);
    }
    
    
    public function create()
    {
        $subscribers = Subscriber::all();
        return view('subscribers.create')->withSubscribers($subscribers);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name'        =>  'required|max:255',
            'last_name'         =>  'required|max:255',
            'email'             =>  'required|max:255|unique:subscribers,email',
            'phone'             =>  'required|max:255',
            'bank_name'         =>  'required|max:255',
            'acct_name'         =>  'required|max:255',
            'acct_number'       =>  'required|max:255',
            'profile_pix'       =>  'nullable',
            'sme'               =>  'nullable|max:255',
            'other_sme'         =>  'nullable|max:255',
            'password'          =>  'confirmed'

        ]);

        $emplousers = new Subscriber;
        
        $emplousers->first_name     = $request->first_name;
        $emplousers->last_name      = $request->last_name;
        $emplousers->email          = $request->email;
        $emplousers->phone          = $request->phone;
        $emplousers->bank_name      = $request->bank_name;
        $emplousers->acct_name      = $request->acct_name;
        $emplousers->acct_number    = $request->acct_number;
        $emplousers->profile_pix    = $request->file('profile_pix')->store('pictures');
        $emplousers->sme            = $request->sme;
        $emplousers->other_sme      = $request->other_sme;
        $emplousers->password       = bcrypt($request->password);

        $emplousers->save();
        
        return view('admin/index')->with('message', 'Subscriber saved successffuly');
    }
}
