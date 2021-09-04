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
define('PAGINATOR',10);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', 'App\Http\Controllers\Api\AuthController@register');
Route::post('/login', 'App\Http\Controllers\Api\AuthController@login');

Route::group(['prefix'=>'questions','namespace'=>'App\Http\Controllers','middleware'=>'auth:api'],function () {
    Route::get('/','QuestionController@index');
    Route::get('/show/{id}','QuestionController@show');
    Route::get('/delete/{id}','QuestionController@delete');
    Route::post('/store','QuestionController@store');
    Route::get('/up/{id}','QuestionController@upQuestion');
    Route::get('/down/{id}','QuestionController@downQuestion');
    Route::post('/search','QuestionController@search');


});

Route::group(['prefix'=>'answer','namespace'=>'App\Http\Controllers','middleware'=>'auth:api'],function () {
    Route::get('/up/{id}','AnswerController@upAnswer');
    Route::get('/down/{id}','AnswerController@downAnswer');
    Route::post('/store','AnswerController@store');
    Route::get('/delete/{id}','AnswerController@delete');


});




