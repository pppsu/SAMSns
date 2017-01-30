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

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/staff', function () {
    return view('staff.home');
});

Route::get('/organizeation', function () {
    return view('staff.in_organize');
});

Route::get('/addOrganization', function () {
    return view('staff.add_organize');
});


