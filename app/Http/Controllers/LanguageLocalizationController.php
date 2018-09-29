<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageLocalizationController extends Controller
{
    public function index(Request $request){
        if($request->lang<> '')
        {
            app()->setLocale($request->lang);
        }
        return view('welcome');
    }
    public function overons(Request $request){
        if($request->lang<> '')
        {
            app()->setLocale($request->lang);
        }
        return view('over-ons');
    }
}
