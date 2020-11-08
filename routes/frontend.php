<?php
Route::group(['namespace' => 'Front'] , function(){
    Route::get('/','IndexController@index')->name('index');
    Route::post('contact-us', 'IndexController@saveContactUs')->name('contact.us');
});