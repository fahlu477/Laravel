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
    return redirect('/home');
});

Route::get('/keluar',function(){
    \Auth::logout();
 
    return redirect('/login');
});
 
Route::group(['middleware'=>'auth'],function(){
 
    Route::get('/supplier','Supplier_controller@index');
 
});
 
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
