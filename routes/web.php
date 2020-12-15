<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});

Auth::routes();
//Home
Route::get('/home', 'HomeController@index')->name('home');

// Ke Page Laptop
Route::get('/laptop', 'HomeController@laptoppage');   
// mendapatkan data laptop
Route::get('/laptop', 'LaptopController@data');

// Ke Page Komputer
Route::get('/komputer', 'HomeController@komputerpage');  
//mendapatkan data komputer
Route::get('/komputer', 'KomputerController@data'); 

//ke page handphone
Route::get('/handphone', 'HomeController@handphonepage');   
//mendapatkan data handphone
Route::get('/handphone', 'HandphoneController@data');

//detail laptop
Route::get('/laptopdetail/{id}', 'LaptopController@showlaptopdetail');
//detail komputer
Route::get('/komputerdetail/{id}', 'KomputerController@showcomdetail');
//detail hp
Route::get('/hpdetail/{id}', 'HandphoneController@showhpdetail');
//ke view add laptop
Route::get('/addlaptop','LaptopController@addlaptopview');
Route::post('/addlaptoptopage','LaptopController@addlaptop');
