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
    $date = array(
        'title'=>'Home',
        'info'=>'WE ARE CREATIVE AGENCY'
    );

    return view('pages.index')->with('date' ,$date);
});

Route::get('about' , function(){
    $date = array(
        'title'=>'About',
        'info'=>'About'
    );
    return view('pages.about')->with('date' , $date);
});

Route::get('portfolio' , function(){
    $date = array(
        'title'=>'Portfolio',
        'info'=>'Portfolio'
    );
    return view('pages.portfolio')->with('date' , $date);
});
Route::get('contact' , function(){
    $date = array(
        'title'=>'Contact',
        'info'=>'Contact'
    );
    return view('pages.contact')->with('date' , $date);
});
Route::get('services' , function(){
    $date = array(
        'title'=>'Services',
        'info'=>'Services'
    );
    return view('pages.services')->with('date' , $date);
});