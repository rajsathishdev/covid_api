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

Route::get('/countires', 'CovidController@get_countries');

Route::put('/patients/{patient_id}','CovidController@edit_patient');
Route::delete('/patients/{patient_id}', 'CovidController@delete_patient');
Route::post('/patients','CovidController@add_patient');
Route::get('/patients', 'CovidController@get_patients');




