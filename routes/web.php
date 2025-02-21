<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Frontend\UserDashboardController;
use App\Http\Controllers\Admin\Auth\RegisteredUserController;
use App\Http\Controllers\Frontend\InstructorDashboardController;


// Root route that returns the welcome view
Route::get('/', function () {
    return view('welcome');
});
// Route::get ('/dashboard',function (){
//     return view ('dashboard');

// })->middleware(['auth','verified'])->name('dashboard');

Route::group(['middleware'=> ['auth:web','verified', 'check_role:student'],'prefix'=>'student','as'=>'student.'], function () {
    Route::get('/dashboard',[UserDashboardController::class,'index'])->name('dashboard');
});
Route::group(['middleware'=> ['auth:web','verified', 'check_role:instructor'],'prefix'=>'instructor','as'=>'instructor.'], function () {
    Route::get('/dashboard',[InstructorDashboardController::class,'index'])->name('dashboard');
});


Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth:admin', 'verified'])->name('admin.dashboard');

// Including additional route definitions from external files
require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
