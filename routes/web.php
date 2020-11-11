<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::get('/welcome', function () {
    return view('welcome');
});



Route::get('/welcome', [PagesController::class, 'welcome'])->name('welcome');
Route::get('/', [PagesController::class, 'index'])->name('index');
Route::get('/all_products', [PagesController::class, 'all_products'])->name('all_products');