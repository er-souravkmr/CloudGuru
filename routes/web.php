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
Route::get('/course' , [HomeController::class , 'course'])->name('course');
Route::post('/enquire' , [EnquireController::class , 'submit'])->name('enquire');



//Admin Route 
  Route::get('/admin' , [HomeController::class , 'index'])->name('home');
  Route::prefix('/admin')->namespace('App\Http\Controllers\Admin')->group(function(){     
      Route::match(['get','post'],'login', 'AdminController@login');
      Route::group(['middleware'=>['admin']],function(){
          Route::get('/dashboard','AdminController@index');
      });
  });


