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
route::get('/', function(){
    return view('/auths/login');
});

Route::get('/registration', 'RegistrationController@create');
Route::post('registration', 'RegistrationController@store');

//gurus
route::get('/login','AuthController@login')->name('login');
route::post('/postlogin','AuthController@postlogin');
route::get('/logout','AuthController@logout');

route::group(['middleware' => 'auth'],function(){
    route::get('/dashboard','DashboardController@index');
    route::get('/teachers', 'TeachersController@index');
    route::get('/teachers/create', 'TeachersController@create');
    route::get('/teachers/{teacher}', 'TeachersController@show');
    route::post('/teachers', 'TeachersController@store');
    route::delete('/teachers/{teacher}', 'TeachersController@destroy');
    route::get('/teachers/{teacher}/edit', 'TeachersController@edit');
    route::patch('/teachers/{teacher}', 'TeachersController@update');
    Route::get('user','UserController@index');
    Route::get('user/json','UserController@json');
});