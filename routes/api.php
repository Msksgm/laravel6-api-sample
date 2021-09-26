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

Route::group(['middleware' => ['api']], function () {
    Route::get('articles', 'Api\ArticleController@index');
    Route::get('articles/{id}', 'Api\ArticleController@show');
    Route::post('articles', 'Api\ArticleController@store');
    Route::patch('articles/{id}', 'Api\ArticleController@update');
    Route::delete('articles/{id}', 'Api\ArticleController@destroy');
});
