<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id){

        $category_producten = DB::table('producten_category')->get();
        $producten_velgen = DB::table('producten_velgen')->where('tags', $id)->get();

        return view('admin.admin', compact('producten_velgen', 'category_producten', 'id'));
    }

    public function categorie(){

        $category_producten = DB::table('producten_category')->get();

        return view('admin.categories', compact('category_producten'));
    }
    public function users(){

        $category_producten = DB::table('producten_category')->get();
        $users = DB::table('users')->get();



        return view('admin.users', compact('category_producten', 'users'));
    }

    public function adminusers(){

        $category_producten = DB::table('producten_category')->get();
        $users = DB::table('users')->get();

        $adminusers = DB::table('users')->where('user_level', 'admin')->get();

        return view('admin.adminusers', compact('category_producten', 'users', 'adminusers'));
    }

    public function gebruikerusers(){

        $category_producten = DB::table('producten_category')->get();
        $users = DB::table('users')->get();

        $gebruikerusers = DB::table('users')->where('user_level', 'gebruiker')->get();

        return view('admin.gebruikerusers', compact('category_producten', 'users', 'gebruikerusers'));
    }

    public function velgen_opslaan(Request $request){
        $velgennaam = $request->input("velgennaam");
        $aantalvelgen = $request->input("aantal_velgen");
        $prijsvelgen = $request->input("prijs_velgen");

        $category_producten = DB::table('producten_category')->get();
        $producten_velgen = DB::table('producten_velgen')->get();
        $id_velgen = $request->input('id');
        $data = array('product_name' => $velgennaam, 'tags' => $id_velgen, 'aantal' => $aantalvelgen, 'prijs' =>'€ '.$prijsvelgen);
        DB::table('producten_velgen')->insert($data);

        return view('admin.velg-opslaan', compact('producten_velgen', 'category_producten'));
    }
    public function users_opslaan(Request $request){
        $naam = $request->input("naam");
        $email = $request->input("email");
        $telefoon = $request->input("telefoon");

        $category_producten = DB::table('producten_category')->get();
        $producten_velgen = DB::table('producten_velgen')->get();

        $data = array('name' => $naam, 'email' => $email, 'telefoon' => $telefoon);
        DB::table('users')->insert($data);

        return view('admin.velg-opslaan', compact('producten_velgen', 'category_producten'));
    }
    public function categorie_opslaan(Request $request){
        $categorie = $request->input("categorie");

        $category_producten = DB::table('producten_category')->get();
        $producten_velgen = DB::table('producten_velgen')->get();

        $data = array('category_name' => $categorie);
        DB::table('producten_category')->insert($data);

        return view('admin.velg-opslaan', compact('producten_velgen', 'category_producten'));
    }
}
