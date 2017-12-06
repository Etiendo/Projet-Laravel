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

Route::get('/hello', function () {
    return view('child');
});

/*Route::get('user/{id?}', function ($id='4') {
    if ($id<=10) {
        return 'User '.$id;
    } else {
        return "L'utilisateur n'existe pas";
    }
}); */
