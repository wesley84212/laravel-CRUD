<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//Route::get('/newdb', 'NewdbController@index');
// Route::get('/newdb', 'NewdbController@index');


//Route::get('/newdb/{id}', 'NewdbController@index');

Route::get('/testroute', 'NewdbController@index');

Route::get('/printcount', 'NewdbController@index2');

Route::get('/todolist/{id}', 'NewdbController@todofunc' ,function ($id) {
    //return $id;
});


//Route::get('user/{id}', function ($id) {
    //return 'User '.$id;
//});


Route::post('/newdata', 'NewdbController@store');
