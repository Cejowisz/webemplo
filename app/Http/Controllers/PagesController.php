<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }
    
    public function about()
    {
        return view ('pages.about');
    }

    public function career()
    {
        return view ('pages.career');
    }

    public function login()
    {
        return view ('pages.login');
    }

    public function media()
    {
        return view ('pages.media');
    }
}
