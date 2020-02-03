<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route:: group(['namespace'=>'Api'],function(){
    Route::post('sign','AuthController@sign')->name('test');
    Route::get('profile','ProfileController@index');
    Route::get('/siswa','SiswaController@index');
    Route::get('/kelas','KelasController@index');
    Route::post('/kelas/input','KelasController@store');
    Route::post('/siswa/input','SiswaController@store');
    Route::get('/siswa/{id}','SiswaController@show');


});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
