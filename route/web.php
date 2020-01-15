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
Route::get('/actions',function(){
    $actions = "aciton";
    return view('pages.actions',compact('actions'));
});
Route::get('/about',function(){
    $abouts = "about";
    return view('pages.about',compact('abouts'));
});
Route::get('/contact',function(){
    $contacts = "contact";
    return view('pages.contact',compact('contacts'));
});
Route::get('/join',function(){
    return view('pages.join');
});
Route::get('/news',function(){
    return view('pages.news');
});

Route::get('/customer','PageController@showCustomer');
    
