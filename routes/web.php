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

// Route::get('/', function () {
//     return view('app');
// });

Route::get('/', function () {
    return view('app');
});

Route::get('/register', 'RegistrationController@create');
Route::post('register', 'RegistrationController@store');

Route::group(['middleware' => 'guest:user'], function(){
    Route::prefix('auth')->group(function () {
        Route::post('register' , 'UserController@register');
        Route::get('register' , 'UserController@register');
    });
});
