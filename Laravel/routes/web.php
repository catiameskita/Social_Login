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



/*Route::get('about', function()
{
    return View::make('about');
});
Route::get('projects', function()
{
    return View::make('projects');
});*/
Route::get('contact', function()
{
    return View::make('contact');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/entrar/github', 'SocialAuthController@entrarGithub');
Route::get('/retorno/github', 'SocialAuthController@retornoGithub');

Route::get('/entrar/facebook', 'SocialAuthController@entrarFacebook');
Route::get('/retorno/facebook', 'SocialAuthController@retornoFacebook');