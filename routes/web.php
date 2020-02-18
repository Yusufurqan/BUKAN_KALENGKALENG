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

use App\Http\Controllers\ImportController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();



Route::get('/administrator', 'AdministratorController@index')->middleware('role:administrator');
Route::get('/admin', 'AdminController@index')->middleware(['role:administrator|admin']);
Route::get('/client', 'ClientController@index')->middleware('role:administrator|client');

Route::group(['middleware'=>'auth'],function(){
    Route::get('/verify-account',function(){
        return view('auth.verify');
    });

    Route::namespace('Auth')->group(function(){
        Route::get('/send-verification','VerificationController@sendEmailVerification');
    });

    Route::group(['middleware'=>'checkAccount'],function(){
        Route::get('/home', 'HomeController@index')->name('home');
        Route::group(['prefix'=>'kelas'], function(){
            Route::resource('Kelas/','KelasController');
            Route::post('/import','ImportController@importkelas');
        });

    });
});

Route::namespace('Auth')->group(function(){
    Route::get('/activated-account','VerificationController@verifyToken');
});

