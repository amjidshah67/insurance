<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\AuthController;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\InsuranceController;
use App\Http\Controllers\PorfolioController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ContactMkController;
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
Route::get('admin',[AuthController::class,'index'])->name('admin');
Route::post('login',[AuthController::class,'login'])->name('check-login');
Route::get('register',[AuthController::class,'register'])->name('register');
Route::post('register-post',[AuthController::class,'register_post'])->name('register-post');
Route::get('logout',[AuthController::class,'logout'])->name('logout');

Route::get('admin',[IndexController::class,'index'])->name('admin-dashboard');
//admin

Route::resource('blogs', BlogController::Class);

Route::resource('services', ServicesController::Class);

Route::resource('packages', PackageController::Class);

Route::resource('testimonial', TestimonialController::Class);

Route::resource('contact',ContactController::class);

//front
Route::get('/',[HomeController::class,'home'])->name('home');
//pages
Route::get('about',[PageController::class,'about'])->name('about');
Route::get('appoint',[PageController::class,'appoint'])->name('appoint');
Route::get('pricing',[PageController::class,'pricing'])->name('pricing');
Route::get('team',[PageController::class,'team'])->name('team');
//Insurance
Route::get('insurance',[InsuranceController::class,'insurance'])->name('insurance');
//portfolio
Route::get('portfolio',[PorfolioController::class,'portfolio'])->name('portfolio');
//blog
Route::get('news',[NewsController::class,'news'])->name('news');
//contact
Route::get('contact-us',[ContactMkController::class,'contact_us'])->name('contact-us');
//Route::post('insert-contact',[ContactMkController::class,'insert_contact'])->name('insert-contact');
//
//Route::fallback(function () {
//    return view('mckinney.404');
//});
