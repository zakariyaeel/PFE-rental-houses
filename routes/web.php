<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnonnceController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\housesController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ReservationsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/Contactez-nous',[EmailController::class,'index'])->name('contactUs');
Route::post('/Contactez-nous',[EmailController::class,'send'])->name('send.mail');

// to edit
Route::get('/annonces', [PostController::class,'show'])->name('annonces.index');
Route::any('/annonces/filtrer',[PostController::class,'filtrer'])->name('annonces.cherche');






Route::middleware('auth')->group(function(){
    Route::post('/logout',[AuthController::class,'logout'])->name('logout');
    Route::get('/annonces/{post}', [PostController::class,'showAnnonce'])->name('annonces.show');
    Route::post('/annonces/reserver/{post}', [PostController::class,'reserver'])->name('annonces.res');
    
    Route::middleware('adminCheck:admin')->group(function(){
        //admin routes
        Route::get('/admin',[AdminController::class,'index'])->name('admin');
        Route::resource('/admin/posts',PostController::class);
        Route::get('/admin/clients',[UserController::class,'clients']);
        Route::get('/admin/responsables',[UserController::class,'responsables']);
        Route::post('/admin/responsables/{user}',[UserController::class,'destroy'])->name('user.destroy');

        Route::get('/admin/reservations',[ReservationsController::class,'show']);
    });
});

Route::middleware('guest')->group(function(){
    Route::get('/Inscription',[AuthController::class,'showI'])->name('signUp');
    Route::post('/Inscription',[AuthController::class,'register'])->name('signUpA');
    Route::get('/connexion', [AuthController::class,'showC'])->name('login');
    Route::post('/connexion', [AuthController::class,'login'])->name('loginA');
});
