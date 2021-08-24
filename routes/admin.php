<?php
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/admin/dashboard', []);
Route::group(['prefix'=>'dashboard','middleware'=>['auth','admin']],function (){
    Route::resource('blogs','App\Http\Controllers\Admin\BlogController');
    Route::resource('advertisements','App\Http\Controllers\Admin\AdvertisementController');
    Route::resource('visuals','App\Http\Controllers\Admin\VisualController');
    Route::resource('acoustics','App\Http\Controllers\Admin\AcousticController');
    Route::resource('users','App\Http\Controllers\Auth\UserController');
    Route::resource('sliders','App\Http\Controllers\Admin\SliderController');
    Route::resource('events','App\Http\Controllers\Admin\EventController');
    Route::resource('stages','App\Http\Controllers\Admin\StageController');
    Route::resource('subjects','App\Http\Controllers\Admin\SubjectController');
    Route::get('/',[\App\Http\Controllers\Admin\DashboardController::class,'index'])->name('admin.dashboard');
    Route::post('upload/images',[\App\Http\Controllers\Admin\BlogController::class,'uploadImage'])->name('blogs.images');
    Route::post('upload/images/delete',[\App\Http\Controllers\Admin\BlogController::class,'deleteImage'])->name('blogs.images.delete');
});

