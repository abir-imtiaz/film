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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('posts', 'MovieController@index');

Route::get('post/{id}', 'MovieController@show');

Route::post('post', 'MovieController@store');

Route::put('post', 'MovieController@store');

Route::delete('post/{id}', 'MovieController@destroy');