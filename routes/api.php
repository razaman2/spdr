<?php

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

    use Illuminate\Support\Facades\Route;

    //Route::middleware('auth:api')->get('/user', function (Request $request) {
    //    return $request->user();
    //});

    Route::post('login', 'Api\LoginController@login');

    Route::post('register', 'Api\RegisterController@register');

    Route::get('/etf/symbols', function () {
        return \App\EtfSymbol::all();
    })->middleware('auth:api');

    Route::get('/etf/{symbol}', function ($symbol) {
        return \App\Etf::where('etf_name', $symbol)->get();
    })->middleware('auth:api');

    Route::middleware('auth:api')->get('/etf/data/download', 'SpdrController@download');
