<?php

    use Illuminate\Support\Facades\Route;
    Route::group(['namespace' => 'Admin'] , function(){
        /****Admin Login Route*****/
        Route::get('backend/login', 'Auth\LoginController@showLoginForm')->name('admin.login');
        Route::post('backend/login', 'Auth\LoginController@login')->name('admin.login');
        Route::post('backend/logout', 'Auth\LoginController@logout')->name('admin.logout');

        Route::get('/backend/dashboard',[
            'uses' => 'AdminController@admin_dashboard',
            'as' => '/backend/dashboard'
        ]);

    });
