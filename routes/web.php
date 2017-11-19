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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('profile', 'ProfileController');
Route::resource('address', 'AddressController');
Route::resource('personWithSpecialNeed','PersonWithSpecialNeedController');
Route::resource('specialNeeds','SpecialNeedsController');
Route::resource('inscription','InscriptionController');
Route::resource('exemption','ExemptionController');
Route::resource('course','CourseController');
Route::resource('quota','QuotaController');
Route::resource('selectiveProcess','SelectiveProcessController');
Route::resource('selectiveProcessCourse','SelectiveProcessCourseController');
Route::resource('selectiveProcessQuota','SelectiveProcessQuotaController');