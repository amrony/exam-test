<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/account','SettingsController@index')->name('my-account');
Route::post('/password/update','SettingsController@updatePassword')->name('password-update');
Route::get('/view/profile','SettingsController@viewProfile')->name('profile-update');
Route::put('/update/profile','SettingsController@updateProfile')->name('update-profile');



Auth::routes();


Route::get('/', 'HomePageController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('company', 'CompanyController');
Route::resource('school', 'SchoolController');
Route::put('update/school', 'SchoolController@schoolUpdate')->name('school-update');
Route::get('school/delete/{id}', 'SchoolController@destroy')->name('school_destroy');


Route::post('student', 'StudentController@addStudent')->name('student-add');
Route::get('student/index', 'StudentController@index')->name('student-index');
Route::get('student/approve/{id}', 'StudentController@approveStudent')->name('student-approve');
Route::get('student/edit/{id}', 'StudentController@edit')->name('student-edit');
Route::put('student/update', 'StudentController@update')->name('student-update');
Route::get('student/{id}/delete', 'StudentController@destroy')->name('student-delete');
