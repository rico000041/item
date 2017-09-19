<?php



Route::post('/register','RegistrationController@index');
Route::post('/edit','PostsController@edit');
Route::post('/{post}/comment','CommentsController@store');

Route::get('/main','PagesController@index')->name('home');

Route::post('/main','SessionController@login')->name('homepage');

Route::get('/logout','SessionController@destroy');
                                         //
Route::get('/', 'HomeController@index')->name('mainHome'); //main
Route::get('/login','SessionController@index');
Route::get('/register','RegistrationController@index');
Route::post('/register','RegistrationController@store');

Route::get('/add','PagesController@add');
Route::get('/remove','PagesController@remove');
Route::post('/remove','PostsController@remove');
Route::post('/upload','PostsController@store')->name('upload');
Route::get('/edit','PagesController@edit');
Route::get('/about','HomeController@about');

Route::get('/{post}','PostsController@show');

