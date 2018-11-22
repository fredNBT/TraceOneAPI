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
Route::resource('power', 'Api\PowerController');

Route::get('Api\PowerController{id}', [
    'ID' => 'Api\PowerController@show'
]);

Route::resource('time', 'Api\TimeController');

Route::get('Api\TimeController{time}', [
    'TIME' => 'Api\TimeController@show'
]);

Route::resource('SigmaJsSchema', 'Api\SigmaJsSchemaController');
Route::get('Api\SigmaJsSchemaController{time}', [
    'time' => 'Api\SigmaJsSchemaController@show'
]);

Route::resource('solarcontroller', 'Api\solarcontroller');
Route::get('solarcontroller{time}', [
    'time' => 'solarcontroller@show'
]);


Route::post('solarcontroller/{id}', 'Api\solarcontroller@update');

Route::post('solarcontrolleradd/{id}', 'Api\solarcontrolleradd@update');










