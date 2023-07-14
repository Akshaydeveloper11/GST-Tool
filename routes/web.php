<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ServiceController;
use App\Http\Controllers\Frontend\ProjectController;
use App\Http\Controllers\Frontend\teamController;
use App\Http\Controllers\Frontend\TestimonialController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\DetailController;
use App\Http\Controllers\Frontend\LoginController;
use App\Http\Controllers\Frontend\SignupController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class,'index']);
Route::get('/index',[HomeController::class,'index']);
Route::get('/about',[AboutController::class,'check']);
Route::get('/service',[ServiceController::class,'index']);
Route::get('/project',[ProjectController::class,'index']);
Route::get('/team',[TeamController::class,'index']);
Route::get('/testimonial',[TestimonialController::class,'index']);

Route::get('/detail',[DetailController::class,'index']);
Route::get('/contact',[ContactController::class,'index']);
Route::post('/contact',[ContactController::class,'store']);

Route::get('/login',[LoginController::class,'index']);
Route::get('/signup',[SignupController::class,'index']);


