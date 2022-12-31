<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/redirects', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('/', function () {
	return view('welcome');
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('dashboard');
Route::resource('applications', 'App\Http\Controllers\ApplicationsController');
Route::resource('staffapplications', 'App\Http\Controllers\StaffApplicationsController');
Route::resource('courses', 'App\Http\Controllers\CoursesController');
Route::resource('students', 'App\Http\Controllers\StudentsController');
Route::resource('lecturers', 'App\Http\Controllers\LecturersController');
Route::resource('units', 'App\Http\Controllers\UnitsController');

Route::get('/mydash', [App\Http\Controllers\DashController::class, 'index']);
Route::get('/lecdash', [App\Http\Controllers\DashController::class, 'lecturer']);

Auth::routes();
Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController');
	// Route::resource('applications', 'App\Http\Controllers\ApplicationsController', ['except' => ['create']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::patch('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::patch('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
	Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);
});

// Route::prefix('admin')->group([ 'middleware' => 'auth', 'isAdmin' ], function () 
// {
// 	Route::resource('admin', 'App\Http\Controllers\AdminAuthController');
// });

// Route::get('/applications/insert', [App\Http\Controllers\ApplicationsController::class, 'create']);

