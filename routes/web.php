<?php

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

/**
 * Роут написан не совсем логически правильно, без групп, но очень надеюсь, что как писать правильно роуты -
 * никому объяснять не надо? Чай не маленькие, документацию и примеры из других проектов сможете сами посмотреть?
*/
Route::get('mite/index', 'MiteController@index');
Route::get('mite/error', 'MiteController@error');
