<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[AuthController::class,'login'])->name('login');
Route::post('/login',[AuthController::class,'AuthLogin']);
Route::get('/logout',[AuthController::class,'logout']);
Route::get('/forgotpassword',[AuthController::class,'forgotpassword']);
Route::post('/forgotpassword',[AuthController::class,'PostForgotpassword']);
Route::get('/reset/{taken}',[AuthController::class,'reset']);
Route::post('/reset/{taken}',[AuthController::class,'postrest']);


Route::get('admin/dashboard', function () { 
    return view('admin/dashboard');
});


Route::group(['middleware'=>'admin'],function(){
    Route::get('admin/dashboard',[DashboardController::class,'dashboard']);
    Route::get('admin/admin/list',[AdminController::class,'list']);
    Route::get('admin/admin/add',[AdminController::class,'add']);
    Route::post('admin/admin/add',[AdminController::class,'insert']);
});

Route::group(['middleware'=>'teacher'],function(){
    Route::get('teacher/dashboard',[DashboardController::class,'dashboard']);
});

Route::group(['middleware'=>'student'],function(){
    
    Route::get('student/dashboard',[DashboardController::class,'dashboard']);

});

Route::group(['middleware'=>'parent'],function(){
    
    Route::get('parent/dashboard',[DashboardController::class,'dashboard']);

});