<?php
use App\Http\Controllers\Dashboard\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::middleware('guest')->group(function () {
route::get('login',[AuthController::class,'showLogin'])->name('login');
route::post('login/checkLogin',[AuthController::class,'login'])->name('login.attempt');
});
// LMS Admin Dashboard
route::prefix('dashboard')->middleware('auth')->group(function(){
    route::get('panel',[AuthController::class,'index'])->name('index');
    route::get('profile',[AuthController::class,'showProfile'])->name('showProfile');
    route::put('updateProfile',[AuthController::class,'updateProfile'])->name('updateProfile');



    // logout
    route::get('logout',[AuthController::class,'logout'])->name('logout');
});
