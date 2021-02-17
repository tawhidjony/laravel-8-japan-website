<?php

use App\Http\Controllers\Admin\Auth\RegisterController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

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

Route::group(['prefix' =>'user', 'middleware' => ['guest']], function () {
    Route::view('/login', 'frontend.login')->name('user.login');
    Route::post('/login/store', [AuthenticatedSessionController::class, 'userStore'])->name('user.login.store');
    Route::view('/register', 'frontend.register')->name('register.form');
    Route::post('/register/getStore', [RegisteredUserController::class, 'registerGet'])->name('register.storeGet');
    Route::get('/preview-register', [RegisterController::class, 'registerPreview'])->name('preview.register');
    Route::post('/user-register', [RegisterController::class, 'store'])->name('user.register');

});

Route::group(['prefix' =>'user', 'middleware' => ['auth','verified']], function () {
    Route::view('/verify-email', 'frontend.verify-email')->name('verify.email');
    Route::view('registration-complete', 'frontend.registration-complete')->name('register.done');
    Route::view('home', 'frontend.home')->name('user.home');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


