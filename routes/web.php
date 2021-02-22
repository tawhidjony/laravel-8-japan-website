<?php


use App\Http\Controllers\FrontEnd\HomeController;
use App\Http\Controllers\FrontEnd\ProductController;
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

Route::get('/', function () { return view('frontend.welcome'); });


Route::view('/privacy-policy','frontend.terms-privacy-policy')->name('privacy-policy');

// frontend auth
Route::group(['middleware' => ['auth','verified']], function () {
    Route::resource('home', HomeController::class);
    Route::resource('product', ProductController::class);
    Route::get('/google/sheet', [ProductController::class, 'google_sheet'])->name('product.google.sheet');
    Route::get('/google-sheet-preview', [ProductController::class, 'google_sheet_preview'])->name(('google.sheet.preview'));
    Route::get('/product-confirm', [ProductController::class, 'product_confirm'])->name(('product.confirm'));
});


require __DIR__.'/auth.php';


