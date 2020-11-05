<?php
Route::group(['namespace' => 'Front'] , function(){
    Route::get('/','IndexController@index')->name('index');
});