<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\HomeController;
use App\Http\Controllers\V1\DepartmentController;
use App\Http\Controllers\V1\DoctorController;
use App\Http\Controllers\V1\NewsController;
use App\Http\Controllers\V1\ServiceController;
use App\Http\Controllers\V1\ReviewController;
use App\Http\Controllers\V1\BannerController;

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

Route::get('/admin', function () {
    return view('welcome');
});

Route::get('/admin/home', function () {
    return view('admin_layout');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('banners', [HomeController::class, 'banners']);
Route::get('departments', [HomeController::class, 'departments']);
Route::get('doctors', [HomeController::class, 'doctors']);
Route::get('news', [HomeController::class, 'news']);
Route::get('services', [HomeController::class, 'services']);
Route::get('reviews', [HomeController::class, 'reviews']);



Route::middleware('auth:web')->group(function () {
	Route::prefix('admin')->group(function(){
		//Departments
		Route::get('department', [DepartmentController::class, 'create']);
		Route::get('departments', [DepartmentController::class, 'index']);
		Route::post('departments', [DepartmentController::class, 'store']);
		Route::get('departments/{department}', [DepartmentController::class, 'show']);
		Route::post('departments/{department}', [DepartmentController::class, 'update']);
		Route::delete('departments/{department}', [DepartmentController::class, 'destroy']);

		//Doctors
		Route::get('doctor', [DoctorController::class, 'create']);
		Route::get('doctors', [DoctorController::class, 'index']);
		Route::post('doctors', [DoctorController::class, 'store']);
		Route::get('doctors/{doctor}', [DoctorController::class, 'show']);
		Route::post('doctors/{doctor}', [DoctorController::class, 'update']);
		Route::delete('doctors/{doctor}', [DoctorController::class, 'destroy']);

		//News
		Route::get('new', [NewsController::class, 'create']);
		Route::get('news', [NewsController::class, 'index']);
		Route::post('news', [NewsController::class, 'store']);
		Route::get('news/{news}', [NewsController::class, 'show']);
		Route::post('news/{news}', [NewsController::class, 'update']);
		Route::delete('news/{news}', [NewsController::class, 'destroy']);

		//Banner
		Route::get('banner', [BannerController::class, 'create']);
		Route::get('banners', [BannerController::class, 'index']);
		Route::post('banners', [BannerController::class, 'store']);
		Route::get('banners/{banner}', [BannerController::class, 'show']);
		Route::post('banners/{banner}', [BannerController::class, 'update']);
		Route::delete('banners/{banner}', [BannerController::class, 'destroy']);

		//services
		Route::get('service', [ServiceController::class, 'create']);
		Route::get('services', [ServiceController::class, 'index']);
		Route::post('services', [ServiceController::class, 'store']);
		Route::get('services/{service}', [ServiceController::class, 'show']);
		Route::post('services/{service}', [ServiceController::class, 'update']);
		Route::delete('services/{service}', [ServiceController::class, 'destroy']);

		//Review
		Route::get('review', [ReviewController::class, 'create']);
		Route::get('reviews', [ReviewController::class, 'index']);
		Route::post('reviews', [ReviewController::class, 'store']);
		Route::get('reviews/{review}', [ReviewController::class, 'show']);
		Route::post('reviews/{review}', [ReviewController::class, 'update']);
		Route::delete('reviews/{review}', [ReviewController::class, 'destroy']);

	});
});

/*TESTING

//Departments
		Route::get('departments', [DepartmentController::class, 'index']);
		Route::post('departments', [DepartmentController::class, 'store']);
		Route::get('departments/{department}', [DepartmentController::class, 'show']);
		Route::post('departments/{department}', [DepartmentController::class, 'update']);
		Route::delete('departments/{department}', [DepartmentController::class, 'destroy']);

		//Doctors
		Route::get('doctors', [DoctorController::class, 'index']);
		Route::post('doctors', [DoctorController::class, 'store']);
		Route::get('doctors/{doctor}', [DoctorController::class, 'show']);
		Route::post('doctors/{doctor}', [DoctorController::class, 'update']);
		Route::delete('doctors/{doctor}', [DoctorController::class, 'destroy']);

		//News
		Route::get('news', [NewsController::class, 'index']);
		Route::post('news', [NewsController::class, 'store']);
		Route::get('news/{news}', [NewsController::class, 'show']);
		Route::post('news/{news}', [NewsController::class, 'update']);
		Route::delete('news/{news}', [NewsController::class, 'destroy']);

		//Banner
		Route::get('banners', [ReviewController::class, 'index']);
		Route::post('banners', [ReviewController::class, 'store']);
		Route::get('banners/{banner}', [ReviewController::class, 'show']);
		Route::post('banners/{banner}', [ReviewController::class, 'update']);
		Route::delete('banners/{banner}', [ReviewController::class, 'destroy']);

		//services
		Route::get('services', [ServiceController::class, 'index']);
		Route::post('services', [ServiceController::class, 'store']);
		Route::get('services/{service}', [ServiceController::class, 'show']);
		Route::post('services/{service}', [ServiceController::class, 'update']);
		Route::delete('services/{service}', [ServiceController::class, 'destroy']);

		//Review
		Route::get('reviews', [ReviewController::class, 'index']);
		Route::post('reviews', [ReviewController::class, 'store']);
		Route::get('reviews/{review}', [ReviewController::class, 'show']);
		Route::post('reviews/{review}', [ReviewController::class, 'update']);
		Route::delete('reviews/{review}', [ReviewController::class, 'destroy']);

		*/



