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
    return view('home');
});
Route::get('classroom', function() {
    return view('classroom');
});
Route::get('teacher' ,function() {
    return view('teacher');
});
Route::get('lesson' ,function() {
    return view('lesson');
});
Route::get('access', function() {
    return view('access');
});
Route::get('contact',function() {
    return view('contact');
});
