<?php

Route::view('/', 'home')->name('home');
Route::view('/quienes somos', 'about')->name('about');

Route::resource('portafolio', 'App\Http\Controllers\ProjectController')
    ->names('projects')
    ->parameters(['portafolio' => 'project']);

Route::view('/contacto', 'contact')->name('contact');
Route::post('contact', 'App\Http\Controllers\MessageController@store')->name('messages.store');

Auth::routes();


