<?php

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
    return redirect('/login');
});

Route::get('register',function(){
  return redirect('login');
});

Route::group(['middleware'=>'auth','prefix'=>'SAdm'], function(){

    Route::get('Dashboard','SuperAdmController@index');

    Route::get('Adms','SuperAdmController@adms');

    Route::get('Empresas','SuperAdmController@companies');

});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::get('Sair',function(){
  Auth::logout();
  return redirect('login');
})->middleware('auth');
