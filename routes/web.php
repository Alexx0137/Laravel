<?php


Route::view('/', 'home')->name('home');
Route::view('/quienes somos', 'about')->name('about');

Route::patch('portafolio/{project}/restore', 'App\Http\Controllers\ProjectController@restore')->name('projects.restore');
Route::delete('portafolio/{project}/force-delete', 'App\Http\Controllers\ProjectController@forceDelete')->name('projects.force-delete');

Route::resource('portafolio', 'App\Http\Controllers\ProjectController')
    ->parameters(['portafolio' => 'project'])
    ->names('projects');

Route::get('categories/{category}', 'App\Http\Controllers\CategoryController@show')->name('categories.show');

Route::view('/contacto', 'contact')->name('contact');
Route::post('contact', 'App\Http\Controllers\MessageController@store')->name('messages.store');

Auth::routes(['register' => false]);


