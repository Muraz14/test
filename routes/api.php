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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/name', function () {
    return 'muraz';
});

Route::get('/lastname', function () {
    return 'usubovi';
});

Route::get('/age', function () {
    return '21';
});

Route::get('/country', function () {
    return 'Georgia';
});

Route::post('/university', function () {
    return 'BTU';
});

Route::post('/arr', function () {
    $array = [
        "message" => "წარმატებით განახლდა"
    ];

    return response()->json($array);
});

Route::put('/arr', function () {
    $array = [
        "message" => "წარმატებით დაემატა"
    ];

    return response()->json($array);
});

Route::delete('/arr', function () {
    $array = [
        "message" => "წარმატებით წაიშალა"
    ];

    return response()->json($array);
});