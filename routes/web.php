<?php
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/test', 'HomeController@test')->name('test');
Route::get('/test2', 'HomeController@test2')->name('test2');

Route::get('/', function () {
    return view('welcome');
})->name('landing');

Route::get('/velgen-home/{lang?}', function (Request $request) {
    if($request->lang<> '')
    {
        app()->setLocale($request->lang);
    }

    return view('velgen.home');
})->name('velgen_home');

Route::get('/over-ons/{lang?}', function (Request $request) {
    if($request->lang<> '')
    {
        app()->setLocale($request->lang);
    }
    return view('over-ons');
})->name('over-ons');

Route::get('/informatie/{lang?}', function (Request $request) {
    if($request->lang<> '')
    {
        app()->setLocale($request->lang);
    }
    return view('informatie');
})->name('informatie');

Route::get('/contact/{lang?}', function (Request $request) {
    if($request->lang<> '')
    {
        app()->setLocale($request->lang);
    }
    return view('contact');
})->name('contact');

Route::get('/velgen/home', 'VelgenController@index')->name('velgen-site');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/language', array(
  'Middleware'=>'LanguageSwitcher',
  'uses'=>'LanguageLocalizationController@index'
));
Route::post('/admin/opslaan/categorie', 'AdminController@categorie_opslaan')->name('categorie_opslaan');
Route::post('/admin/opslaan/users', 'AdminController@users_opslaan')->name('users_opslaan');
Route::post('/admin/opslaan/velgen', 'AdminController@velgen_opslaan')->name('velgen_opslaan');
Route::get('/admin/categories', 'AdminController@categorie')->name('categorie');
Route::get('/admin/users/admin', 'AdminController@adminusers')->name('admin_users');
Route::get('/admin/users/gebruiker', 'AdminController@gebruikerusers')->name('gebruiker_users');
Route::get('/admin/users', 'AdminController@users')->name('users');

Route::get('/{lang?}', 'LanguageLocalizationController@index');
Route::get('/admin/{id}', 'AdminController@index')->name('admin');


