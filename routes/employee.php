<?php
/**
 * Created by PhpStorm.
 * User: Anamika
 * Date: 4/12/2018
 * Time: 10:12 PM
 */
Route::group(['middleware' => 'web', 'as' => 'employee::', 'prefix' => '/employee'], function() {

    /*Dashboard*/
    Route::get('/dashboard', ['as' => 'dashboard', 'uses' => 'Employee\DashboardController@index']);
    Route::get('logout', 'Employee\DashboardController@logout');

    //Employment
    Route::resource('employment', 'Employee\ExperienceController');
    //Profile
//    Route::get('/profile/{user_id}', ['as' => 'profile', 'uses' => 'Employee\ProfileController@edit']);
    Route::put('/profile_update', ['as' => 'profile_update', 'uses' => 'Employee\ProfileController@update']);
    Route::get('/password', ['as' => 'password', 'uses' => 'Employee\ProfileController@editPassword']);
    Route::post('/update_password', ['as' => 'update_password', 'uses' => 'Employee\ProfileController@update_password']);

    Route::put('/profile_emg_update', ['as' => 'profile_emg_update', 'uses' => 'Employee\ProfileController@updateEmg']);
    Route::put('/profile_image_update/{user_id}', ['as' => 'profile_image_update', 'uses' => 'Employee\ProfileController@updateImage']);
    //Training
    Route::resource('training', 'Employee\AcheivementController');
    //Acheivements
    Route::resource('skill', 'Employee\SkillController');
    //Blog
    Route::resource('blog', 'Employee\Blog\BlogController');
//Education
    Route::resource('education', 'Employee\EducationController');
    //cv
    Route::put('/cv_update/{id}', ['as' => 'cv_update', 'uses' => 'Employee\ProfileController@updateCV']);


});