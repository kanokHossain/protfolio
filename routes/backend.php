<?php
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
    Route::group(['namespace' => 'Admin','prefix' => 'dashboard'] , function(){
        Route::get('manage-works', 'WorkController@manageWorks')->name('admin.manage.works');
        Route::get('edit-work/{id}', 'WorkController@editWork')->name('admin.work.edit');
        Route::get('add-work', 'WorkController@addWork')->name('admin.work.create');
        Route::post('save-work', 'WorkController@saveWork')->name('admin.work.save');
        Route::post('update-work', 'WorkController@updateWork')->name('admin.work.update');
        Route::get('delete-work/{id}', 'WorkController@deleteWork')->name('admin.work.delete');
    });
    Route::get('work-details',[
        'uses' => 'Front\IndexController@workDetails',
        'as' => 'admin/work/details'
    ]);

