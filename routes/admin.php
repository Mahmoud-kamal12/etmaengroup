<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "admin" middleware group. Enjoy building your admin!
|
*/

    // login routes0.
    Route::group([ 'namespace' => 'App\Http\Controllers\Admin' ],function(){
        Route::get('admin/login', 'AuthController@login')->name('admin/login');
        Route::post('admin/login', 'AuthController@check_login')->name('admin/check-login');

        Route::group(['middleware' => 'auth:admin'],function(){
            Route::get('admin/logout', 'AuthController@logout')->name('admin/logout');
        });
    });

    Route::group([ 'namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin' ],function(){

        Route::group(['middleware' => 'auth:admin'],function(){

            Route::get('/home', 'HomeController@home')->name('admin/index');
            Route::get('/get/airlines', 'HomeController@getAirlines')->name('admin/get/airlines');

            Route::get('admins/info/{id}', 'AdminController@info')->name('admins/info');
            Route::post('admins/info-update{id}', 'AdminController@info_update')->name('admins/info-update');
            Route::post('admins/change-password/{id}', 'AdminController@change_password')->name('admins/change-password');

            Route::post('admins/getMore', 'AdminController@getMore')->name('admin/getMore');
            Route::post('admins/search', 'AdminController@search')->name('admin/search');


            // rule and permissions
            // Route::group(['middleware'=> 'auto-check-permission'],function(){

                // admin routes
                Route::get('admins/index', 'AdminController@index')->name('admins/index');
                Route::get('admins/create', 'AdminController@create')->name('admins/create');
                Route::post('admins/store', 'AdminController@store')->name('admins/store');
                Route::get('admins/role/{id}', 'AdminController@role')->name('admins/role');
                Route::post('admins/role/update/{id}', 'AdminController@roleUpdate')->name('admins/role/update');
                Route::get('admins/activate/{id}', 'AdminController@activate')->name('admins/activate');
                Route::get('admins/delete/{id}', 'AdminController@delete')->name('admins/delete');

                // start role routes
                Route::get('roles/inde', 'RoleController@index')->name('admin/roles/index');
                Route::get('roles/create', 'RoleController@create')->name('admin/roles/create');
                Route::post('roles/store', 'RoleController@store')->name('admin/roles/store');
                Route::get('roles/edit/{id}', 'RoleController@edit')->name('admin/roles/edit');
                Route::post('roles/update/{id}', 'RoleController@update')->name('admin/roles/update');
                Route::get('roles/delete/{id}', 'RoleController@delete')->name('admin/roles/delete');

                // admin routes
                Route::get('teachers/index', 'TeacherController@index')->name('admin/teachers/index');
                Route::get('teachers/create', 'TeacherController@create')->name('admin/teachers/create');
                Route::post('teachers/store', 'TeacherController@store')->name('admin/teachers/store');
                Route::get('teachers/activate/{id}', 'TeacherController@activate')->name('admin/teachers/activate');
                Route::get('teachers/delete/{id}', 'TeacherController@delete')->name('admin/teachers/delete');
                Route::post('teachers/getMore', 'TeacherController@getMore')->name('admin/teachers/getMore');
                Route::post('teachers/search', 'TeacherController@search')->name('admin/teachers/search');

                // user routes
                Route::get('users/index', 'UserController@index')->name('admin/users/index');
                Route::get('users/create', 'UserController@create')->name('admin/users/create');
                Route::post('users/store', 'UserController@store')->name('admin/users/store');
                Route::get('users/activate/{id}', 'UserController@activate')->name('admin/users/activate');
                Route::get('users/delete/{id}', 'UserController@delete')->name('admin/users/delete');
                Route::post('users/getMore', 'UserController@getMore')->name('admin/users/getMore');
                Route::post('users/search', 'UserController@search')->name('admin/users/search');

                // classe routes
                Route::get('classes/index', 'ClassesController@index')->name('admin/classes/index');
                Route::get('classes/create', 'ClassesController@create')->name('admin/classes/create');
                Route::post('classes/store', 'ClassesController@store')->name('admin/classes/store');
                Route::get('classes/details/{id}', 'ClassesController@details')->name('admin/classes/details');
                Route::get('classes/edit/{id}', 'ClassesController@edit')->name('admin/classes/edit');
                Route::get('classes/add/students/{id}', 'ClassesController@addStudents')->name('admin/classes/add/students');
                Route::post('classes/students/search', 'ClassesController@studentsSearch')->name('admin/classes/students/search');
                Route::post('classes/students/store', 'ClassesController@studentsStore')->name('admin/classes/students/store');
                Route::post('classes/students/remove', 'ClassesController@studentsRemove')->name('admin/classes/students/remove');
                Route::post('classes/update/{id}', 'ClassesController@update')->name('admin/classes/update');
                Route::get('classes/activate/{id}', 'ClassesController@activate')->name('admin/classes/activate');
                Route::get('classes/file/{id}', 'ClassesController@file')->name('admin/classes/file');
                Route::post('classes/file/store/{id}', 'ClassesController@fileStore')->name('admin/classes/file/store');
                Route::get('classes/file/download/{id}', 'ClassesController@fileDownload')->name('admin/classes/file/download');
                Route::get('classes/file/delete/{id}', 'ClassesController@fileDelete')->name('admin/classes/file/delete');
                Route::get('classes/delete/{id}', 'ClassesController@delete')->name('admin/classes/delete');
                Route::get('classes/delete/{id}', 'ClassesController@delete')->name('admin/classes/delete');
                Route::post('classes/getMore', 'ClassesController@getMore')->name('admin/classes/getMore');
                Route::post('classes/search', 'ClassesController@search')->name('admin/classes/search');

                // question routes
                Route::get('questions/index', 'QuestionController@index')->name('admin/questions/index');
                Route::get('questions/create', 'QuestionController@create')->name('admin/questions/create');
                Route::post('questions/store', 'QuestionController@store')->name('admin/questions/store');
                Route::get('questions/activate/{id}', 'QuestionController@activate')->name('admin/questions/activate');
                Route::get('questions/edit/{id}', 'QuestionController@edit')->name('admin/questions/edit');
                Route::post('questions/update/{id}', 'QuestionController@update')->name('admin/questions/update');
                Route::get('questions/delete/{id}', 'QuestionController@delete')->name('admin/questions/delete');
                Route::post('questions/getMore', 'QuestionController@getMore')->name('admin/questions/getMore');
                Route::post('questions/search', 'QuestionController@search')->name('admin/questions/search');
                Route::get('questions/answers/{id}', 'QuestionController@answers')->name('admin/questions/answers');

                // booking routes
                Route::get('bookings/index', 'BookingsController@index')->name('admin/bookings/index');
                Route::post('bookings/getMore', 'BookingsController@getMore')->name('admin/bookings/getMore');
                Route::post('bookings/search', 'BookingsController@search')->name('admin/bookings/search');
                Route::get('bookings/status/{id}', 'BookingsController@status')->name('admin/bookings/status');
                Route::get('bookings/completed/{id}', 'BookingsController@completed')->name('admin/bookings/completed');
                Route::get('bookings/student-info/{id}', 'BookingsController@student_info')->name('admin/bookings/student-info');

                Route::get('bookings/quiz-info/{id}', 'BookingsController@quiz_info')->name('admin/bookings/quiz-info');
                Route::post('bookings/quiz_rate/{id}', 'BookingsController@quiz_rate')->name('admin/bookings/quiz_rate');
                Route::get('bookings/quiz_index_not', 'BookingsController@quiz_index_not')->name('admin/bookings/quiz_index_not');
                Route::get('bookings/quiz_index', 'BookingsController@quiz_index')->name('admin/bookings/quiz_index');

                // questionnaire routes
                Route::get('questionnaires/index', 'QuestionnairesController@index')->name('admin/questionnaires/index');
                Route::post('questionnaires/update', 'QuestionnairesController@update')->name('admin/questionnaires/update');

                // answer routes
                Route::post('answers/store/{id}', 'AnswerController@store')->name('admin/answers/store');
                Route::post('answers/update/{id}', 'AnswerController@update')->name('admin/answers/update');
                Route::get('answers/activate/{id}', 'AnswerController@activate')->name('admin/answers/activate');
                Route::get('answers/delete/{id}', 'AnswerController@delete')->name('admin/answers/delete');

                // setting routes
                Route::get('settings/index', 'SettingsController@index')->name('admin/settings/index');
                Route::get('settings/create', 'SettingsController@create')->name('admin/settings/create');
                Route::post('settings/store', 'SettingsController@store')->name('admin/settings/store');
                Route::get('settings/edit/{id}', 'SettingsController@Edit')->name('admin/settings/edit');
                Route::post('settings/update/{id}', 'SettingsController@update')->name('admin/settings/update');

                // product routes
                Route::get('products/index', 'ProductController@index')->name('admin/products/index');
                Route::get('products/create', 'ProductController@create')->name('admin/products/create');
                Route::post('products/store', 'ProductController@store')->name('admin/products/store');
                Route::get('products/activate/{id}', 'ProductController@activate')->name('admin/products/activate');
                Route::get('products/edit/{id}', 'ProductController@edit')->name('admin/products/edit');
                Route::post('products/update/{id}', 'ProductController@update')->name('admin/products/update');
                Route::get('products/delete/{id}', 'ProductController@delete')->name('admin/products/delete');
                Route::post('products/getMore', 'ProductController@getMore')->name('admin/products/getMore');
                Route::post('products/search', 'ProductController@search')->name('admin/products/search');

                // gallery routes
                Route::get('galleries/index', 'GalleriesController@index')->name('admin/galleries/index');
                Route::get('galleries/create', 'GalleriesController@create')->name('admin/galleries/create');
                Route::post('galleries/store', 'GalleriesController@store')->name('admin/galleries/store');
                Route::get('galleries/activate/{id}', 'GalleriesController@activate')->name('admin/galleries/activate');
                Route::get('galleries/edit/{id}', 'GalleriesController@edit')->name('admin/galleries/edit');
                Route::post('galleries/update/{id}', 'GalleriesController@update')->name('admin/galleries/update');
                Route::get('galleries/delete/{id}', 'GalleriesController@delete')->name('admin/galleries/delete');
                Route::post('galleries/getMore', 'GalleriesController@getMore')->name('admin/galleries/getMore');
                Route::post('galleries/search', 'GalleriesController@search')->name('admin/galleries/search');

                // lesson routes
                Route::get('lessons/index/{id}', 'LessonsController@index')->name('admin/lessons/index');
                Route::post('lessons/store/{id}', 'LessonsController@store')->name('admin/lessons/store');
                Route::post('lessons/update/{id}', 'LessonsController@update')->name('admin/lessons/update');
                Route::get('lessons/activate/{id}', 'LessonsController@activate')->name('admin/lessons/activate');
                Route::get('lessons/delete/{id}', 'LessonsController@delete')->name('admin/lessons/delete');

                // news routes
                Route::get('news/index', 'NewsController@index')->name('admin/news/index');
                Route::get('news/create', 'NewsController@create')->name('admin/news/create');
                Route::post('news/store', 'NewsController@store')->name('admin/news/store');
                Route::get('news/activate/{id}', 'NewsController@activate')->name('admin/news/activate');
                Route::get('news/edit/{id}', 'NewsController@edit')->name('admin/news/edit');
                Route::post('news/update/{id}', 'NewsController@update')->name('admin/news/update');
                Route::get('news/delete/{id}', 'NewsController@delete')->name('admin/news/delete');
                Route::post('news/getMore', 'NewsController@getMore')->name('admin/news/getMore');
                Route::post('news/search', 'NewsController@search')->name('admin/news/search');
                Route::get('news/answers/{id}', 'NewsController@answers')->name('admin/news/answers');

            // });

        });

    });
