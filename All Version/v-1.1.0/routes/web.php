<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;

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
Route::get('/',function(){
    return Redirect::to('/home');
});
Route::get('/home', function () {
    return view('home');
});

Route::get('/about',function(){
    return view('about');
});

Route::get('/certificate',function(){
    return view('certificate');
});
Route::get('/projects',function(){
    return view('projects');
});
// lang
Route::get('/home/{lang}', function ($lang) {
    App::setlocale($lang);
    return view('home');
});
Route::get('/about/{lang}',function($lang){
    App::setlocale($lang);
    return view('about');
});

Route::get('/certificate/{lang}',function($lang){
    App::setlocale($lang);
    return view('certificate');
});
Route::get('/projects/{lang}',function($lang){
    App::setlocale($lang);
    return view('projects');
});