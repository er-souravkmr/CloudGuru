<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Frontend\EnquireController;
use App\Http\Controllers\Frontend\SubcourseController;

//Home Routes
Route::get('/' , [HomeController::class , 'index'])->name('home');
Route::get('/about' , [HomeController::class , 'about'])->name('about');
Route::get('/trainers' , [HomeController::class , 'trainers'])->name('trainers');
Route::get('/gallery' , [HomeController::class , 'gallery'])->name('gallerys');
Route::get('/certification' , [HomeController::class , 'certification'])->name('certification');
Route::get('/courses/{id}' , [SubcourseController::class , 'index'])->name('courses');
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
          Route::get('course/edit/{id}','CourseController@edit')->name('course.edit');
          Route::post('course/update','CourseController@update')->name('course.update');
          Route::get('course/delete/{id}','CourseController@delete')->name('course.delete');
        
          
          Route::get('subcourse','SubcourseController@index')->name('subcourse');
          Route::get('subcourse/create','SubcourseController@create')->name('subcourse.create');
          Route::post('subcourse/store','SubcourseController@store')->name('subcourse.store');
          Route::get('subcourse/edit/{id}','SubcourseController@edit')->name('subcourse.edit');
          Route::post('subcourse/update','SubcourseController@update')->name('subcourse.update');
          Route::get('subcourse/delete','SubcourseController@delete')->name('subcourse.delete');
          Route::get('subcourse/show','SubcourseController@show')->name('subcourse.show');
          Route::get('subcourse/status-change','SubcourseController@changeStatus')->name('subcourse.status');

          Route::get('trainer','TrainerController@index')->name('trainer');
          Route::get('trainer/create','TrainerController@create')->name('trainer.create');
          Route::post('trainer/store','TrainerController@store')->name('trainer.store');
          Route::get('trainer/edit/{id}','TrainerController@edit')->name('trainer.edit');
          Route::post('trainer/update','TrainerController@update')->name('trainer.update');
          Route::get('trainer/delete','TrainerController@delete')->name('trainer.delete');

          Route::get('certificate','CertificateController@index')->name('certificate');
          Route::get('certificate/create','CertificateController@create')->name('certificate.create');
          Route::post('certificate/store','CertificateController@store')->name('certificate.store');
          Route::get('certificate/edit/{id}','CertificateController@edit')->name('certificate.edit');
          Route::post('certificate/update','CertificateController@update')->name('certificate.update');
          Route::get('certificate/delete','CertificateController@delete')->name('certificate.delete');
          
          Route::get('gallery','GalleryController@index')->name('gallery');
          Route::get('gallery/create','GalleryController@create')->name('gallery.create');
          Route::post('gallery/store','GalleryController@store')->name('gallery.store');
          Route::get('gallery/edit/{id}','GalleryController@edit')->name('gallery.edit');
          Route::post('gallery/update','GalleryController@update')->name('gallery.update');
          Route::get('gallery/delete','GalleryController@delete')->name('gallery.delete');
          
             

      });
  });


