<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
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
Route::get('search', [Controller::class, 'searchFilm']);
Route::post('square', [Controller::class, 'squareArea']);
Route::post('pesan', [Controller::class, 'pesan']);
Route::get('time', [Controller::class, 'time']);
Route::get('name', [Controller::class, 'name']);

Route::get('main', [Controller::class, 'main']);