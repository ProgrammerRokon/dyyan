<?php

///////////////////////////////////////////
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\ProductController;
///////////////////////////////////////////
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
    return view('welcome');
});

Auth::routes();

Route::get('/user-profile', [App\Http\Controllers\HomeController::class, 'user_profile'])->name('user_profile');
// or, Route::get('/user-profile', [App\Http\Controllers\omeController::Class, 'user_profile'])->name('user_profile')->middleware('custom');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('custom');
Route::get('/mail', [App\Http\Controllers\TestMailController::Class, 'index'])->name('mail')->middleware('auth');


Route::middleware(['auth','custom'])->prefix('admin')->group(function () {

    Route::resource('/category', CategoryController::class);
    Route::resource('/brand', BrandController::class);
    Route::resource('/unit', UnitController::class);
    Route::resource('/product', ProductController::class);
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////

});

