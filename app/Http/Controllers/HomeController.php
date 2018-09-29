<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function landing()
    {
        return view('landingspage');
    }
    public function test()
    {
        return view('auth.login-form');
    }
    public function test2()
    {
        return view('auth.profile_information');
    }

}
