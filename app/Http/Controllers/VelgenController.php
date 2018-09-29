<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Jenssegers\Agent\Agent;

class VelgenController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category_producten = DB::table('producten_category')->get();
        $producten = DB::table('producten_velgen')->get();
        $agent = new Agent();
        return view('velgen-site.home', compact('producten', 'agent', 'category_producten'));
    }
    

}
