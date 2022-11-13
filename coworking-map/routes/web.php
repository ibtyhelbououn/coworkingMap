<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoworkingSpaceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UploadImageController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ConsultationController;


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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/coworking-spaces',[CoworkingSpaceController::class,'index']);

Route::get('/admin',[CoworkingSpaceController::class,'list']);

Route::get('/blog',[CoworkingSpaceController::class,'blog']);

Route::get('/add-coworking-space',[CoworkingSpaceController::class,'add']);
Route::post('/add-coworking-space',[CoworkingSpaceController::class,'store']);

Route::get('/edit-coworking-space/{coworkingSpace}',[CoworkingSpaceController::class,'edit']);
Route::put('/edit-coworking-space/{coworkingSpace}',[CoworkingSpaceController::class,'update']);



Route::get('/details/{coworkingSpace}',[CoworkingSpaceController::class,'details']);

Route::delete('/delete-coworking-space/{coworkingSpace}',[CoworkingSpaceController::class,'delete']);

Route::get('/search',[CoworkingSpaceController::class,'search']);
Route::get('/filter',[CoworkingSpaceController::class,'filter']);

Route::get('home',[HomeController::class,'home']);


Route::get('/bookings',[BookingController::class,'index']);
Route::post('/details/{coworkingSpace}',[BookingController::class,'store']);

Route::get('/show-booking/{booking}',[BookingController::class,'show']);


Route::get('/admin-consultation',[ConsultationController::class,'index']);

Route::get('/consultation',[ConsultationController::class,'add']);
Route::post('/consultation',[ConsultationController::class,'store']);

Route::get('/thank-you', function () {
    return view('thank-you');
});

Route::get('/done', function () {
    return view('done');
});


Route::get('/show-consultation/{consultation}',[ConsultationController::class,'show']);





Route::get('/portfolio-details', function () {
    return view('portfolio-details');
});



Route::get('/blog-single', function () {
    return view('blog-single');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('users',[HomeController::class,'users']);




 
Route::get('upload-image', [UploadImageController::class, 'index']);
Route::post('save', [UploadImageController::class, 'save']);

Route::get('/booking',[BookingController::class,'index']);
Route::post('/booking',[BookingController::class,'store']);