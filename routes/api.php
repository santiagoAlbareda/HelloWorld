<?php

use Illuminate\Http\Request;
use App\Planet;

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
/**
**Basic Routes for a RESTful service:
**Route::get($uri, $callback);
**Route::post($uri, $callback);
**Route::put($uri, $callback);
**Route::delete($uri, $callback);
**
*/
Route::get('planets', 'PlanetsController@index');

Route::get('planets/{planet}', 'PlanetsController@show');

Route::post('planets', 'PlanetsController@store');

Route::put('planets', 'PlanetsController@update');

Route::delete('planets', 'PlanetsController@delete');
