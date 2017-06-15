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

/* /about can be just about and about.blade.php can be just about*/

Route::get('/about', function () {
    return view('about');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/entrar/github', 'SocialAuthController@entrarGithub');
Route::get('/retorno/github', 'SocialAuthController@retornoGithub');

Route::get('/entrar/facebook', 'SocialAuthController@entrarFacebook');
Route::get('/retorno/facebook', 'SocialAuthController@retornoFacebook');