<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Frontend\EnquireController;

//Home Routes
Route::get('/' , [HomeController::class , 'index'])->name('home');
Route::get('/about' , [HomeController::class , 'about'])->name('about');
Route::get('/trainers' , [HomeController::class , 'trainers'])->name('trainers');
Route::get('/gallery' , [HomeController::class , 'gallery'])->name('gallery');
Route::get('/certification' , [HomeController::class , 'certification'])->name('certification');
Route::get('/course' , [HomeController::class , 'course'])->name('courses');
Route::post('/enquire' , [EnquireController::class , 'submit'])->name('enquiry');



//Admin Route 
  Route::get('/admin' , [AdminController::class , 'index']);
  Route::prefix('/admin')->namespace('App\Http\Controllers\Admin')->group(function(){     
      Route::match(['get','post'],'login', 'AdminController@login')->name('login');
      Route::match(['get','post'],'register', 'AdminController@register')->name('register');
      Route::post('logout', 'AdminController@logout')->name('logout');
      Route::group(['middleware'=>['admin']],function(){
          Route::get('dashboard','DashboardController@index')->name('dashboard');

          Route::get('enquire','EnquireController@index')->name('enquire');
          Route::get('enquire/edit','EnquireController@edit')->name('enquire.edit');
          Route::get('enquire/show','EnquireController@show')->name('enquire.show');
          
          Route::get('course','CourseController@index')->name('course');
          Route::get('course/create','CourseController@create')->name('course.create');
          Route::post('course/store','CourseController@store')->name('course.store');
          Route::get('course/edit','CourseController@edit')->name('course.edit');
          Route::get('course/show','CourseController@show')->name('course.show');

          Route::get('subcourse','EnquireController@index')->name('subcourse');
          Route::get('subcourse/edit','EnquireController@edit')->name('subcourse.edit');
          Route::get('subcourse/show','EnquireController@show')->name('subcourse.show');

      });
  });


