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

Route::get('/testroute', 'NewdbController@index');
//依照不同id 顯示對應的資料
Route::get('/todolist/{id}', 'NewdbController@todofunc');
//新增一筆資料
Route::post('/newdata', 'NewdbController@create');
//更新一筆資料
Route::put('/updatedata/{id}', 'NewdbController@update');
//刪除資料
Route::delete('/deldata/{id}', 'NewdbController@delete');


Route::get('/changeLog',         'ChangeLogController@index');
Route::get('/changeLog/{id}',    'ChangeLogController@findOne');
Route::post('/changeLog',        'ChangeLogController@create');
Route::put('/changeLog/{id}',    'ChangeLogController@update');
Route::delete('/changeLog/{id}', 'ChangeLogController@delete');
