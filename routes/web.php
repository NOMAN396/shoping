<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AuthController as AuthController;
use App\Http\Controllers\Backend\UserController as UserController;
use App\Http\Controllers\Backend\DashboardController as dashboard;
use App\Http\Controllers\Backend\PermissionController as permission;






Route::get('/register', [AuthController::class, 'signUpForm'])->name('register');
Route::post('/register', [AuthController::class,'signUpStore'])->name('register.store');
Route::get('/login', [AuthController::class,'signInForm'])->name('login');
Route::post('/login', [AuthController::class,'signInCheck'])->name('login.check');
Route::get('/logout', [AuthController::class,'singOut'])->name('logOut');

Route::middleware(['checkrole'])->group(function(){
    Route::get('/dashboard', [dashboard::class,'index'])->name('dashboard');
    Route::resource('/user', UserController::class);
});


Route::get('/', function () {
    return view('frontend.home');
});