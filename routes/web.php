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
/*
Route::get('/', function () {
    return view('index');
});
Route::get('/data', function () {
    return view('data');
});
*/
route::get('/', 'PagesController@home');
route::get('/data','PengajarController@index');
//gurus
route::get('/teachers', 'TeachersController@index');
route::get('/teachers/create', 'TeachersController@create');
route::get('/teachers/{teacher}', 'TeachersController@show');
route::post('/teachers', 'TeachersController@store');
route::delete('/teachers/{teacher}', 'TeachersController@destroy');
route::get('/teachers/{teacher}/edit', 'TeachersController@edit');
route::patch('/teachers/{teacher}', 'TeachersController@update');
