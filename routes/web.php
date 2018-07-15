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
Route::get('/', 'HomeController@index')->name('home');
Route::get('/blog', 'HomeController@blog')->name('blog');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/work', 'HomeController@work')->name('work');
Route::get('/post', 'HomeController@post')->name('post');
Route::get('/project', 'HomeController@project')->name('project');

Route::post('/chat', 'HomeController@chat');


Auth::routes();



Route::group(['prefix'=>'admin', 'namespace'=>'admin', 'middleware'=>'auth'], function () {
    Route::get('/', 'DashboardController@index')->name('admin.dashboard');
    Route::get('/categories', 'DashboardController@categories')->name('admin.dashboard.categories');
    Route::resource('/category', 'CategoryController', ['as'=>'admin']);
    Route::resource('/post', 'PostController', ['as'=>'admin']);
    Route::post('/category/{id}', 'CategoryController@change');
    Route::post('/post/{id}', 'PostController@change');
});

