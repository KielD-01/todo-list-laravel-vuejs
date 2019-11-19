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

Route::prefix('todo')
    ->group(function () {
        Route::get('/', 'ToDoController@index');
        Route::post('/', 'ToDoController@store');
        Route::patch('/{todo}', 'ToDoController@update');
        Route::delete('/{todo}', 'ToDoController@delete');
    });
