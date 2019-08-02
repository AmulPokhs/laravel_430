<?php

Route::resource('blog','BlogController')->middleware(['auth','admin']);
Route::post('/post','BlogController@storeData')->name('blog-store');
Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'/about-us'],function() {
    Route::get('/', function () {
        $data = array(
            'about_content' => 'This is about content'
        );
        return view('about-us')->with('detail', $data);
    })->name('list');
});


    Route::get('/form', function () {
        return view('form');
    })->name('form');

Route::get('/home','PostController@getAllData')->name('home');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
