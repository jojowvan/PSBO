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
    //return view('welcome');
//});

Route::get('/', function () {
    return view('index');
});

Route::get('login', function () {
    return view('login');
});

Route::get('register', function () {
    return view('register');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function(){
    Route::get('/profile', 'AdminController@profile')->name('admin.profile');
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/addScholarship', 'ScholarshipController@create')->name('addScholarship.create');
    Route::post('/addScholarship', 'ScholarshipController@store')->name('addScholarship.store');
    Route::get('/student', 'StudentController@read')->name('student');
    Route::get('/scholarship', 'ScholarshipController@read')->name('scholarship.read');
    Route::get('/{id}/editScholarship', 'ScholarshipController@edit')->name('editScholarship.edit');
    Route::patch('/{updateScholarship}/editScholarship', 'ScholarshipController@update')->name('editScholarship.update');
    Route::delete('/{deleteScholarship}/editScholarship', 'ScholarshipController@destroy')->name('editScholarship.destroy');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/test', 'adminController@editPhoto')->name('admin.editPhoto');
    Route::post('/test', 'adminController@updatePhoto')->name('admin.updatePhoto');
});
