<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/result', function(){
    $res = rand(1,3);
    $array = ['foreach1', 'foreach2', 'foreach3'];
    return view('result', ['res' => $res, 'array' => $array]);
});
