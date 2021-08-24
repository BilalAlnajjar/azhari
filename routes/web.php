<?php

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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::get('a',function (){
    return 'a';
})->name('a');
require __DIR__.'/auth.php';
//Route::get('/',function (){
//   return view('front.home');
//});

Route::get('/',[\App\Http\Controllers\Front\HomeController::class,'index'])->name('home');
Route::get('/About/Institute',[\App\Http\Controllers\Front\HomeController::class,'about'])->name('about');
Route::get("blogs/{id}",[\App\Http\Controllers\Front\HomeController::class,'showBlog'])->name('show.blog');
Route::get("about/song",[\App\Http\Controllers\Front\HomeController::class,'song'])->name('song');
Route::get("management/dean",[\App\Http\Controllers\Front\HomeController::class,'dean'])->name('dean');
Route::get("management/academic",[\App\Http\Controllers\Front\HomeController::class,'academic'])->name('academic');
Route::get("management/management",[\App\Http\Controllers\Front\HomeController::class,'management'])->name('management');
Route::get("service/admission",[\App\Http\Controllers\Front\HomeController::class,'admission'])->name('admission');
Route::get("service/staff",[\App\Http\Controllers\Front\HomeController::class,'staff'])->name('staff');
Route::get("service/student",[\App\Http\Controllers\Front\HomeController::class,'student'])->name('student');
Route::get("Association/al-shafi'i",[\App\Http\Controllers\Front\HomeController::class,'shafi'])->name('shafi');

Route::get('stages',[\App\Http\Controllers\Front\StageController::class,'index'])->name('stages');
Route::get('stages/subject/{id}',[\App\Http\Controllers\Front\StageController::class,'getSubjects'])->name('stages.subjects');
