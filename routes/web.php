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

/***Cycle:browser->route->index method->PagesControllers'index method
->views' index->extends master ***/

Route::get('/', [PagesController::class, 'index'])->name('index');

/***Cycle:browser->route->product method->PagesControllers'product method
->pages->products->index***/

Route::get('/products', [PagesController::class, 'products'])->name('products');


/***Cycle:browser->route->all_products method->PagesControllers'all_products method
->pages->products->all_products***/

Route::get('/all_products', [PagesController::class, 'all_products'])->name('all_products');


/***Cycle:browser->route->welcome method->PagesControllers'welcome method
->pages->welcome***/

Route::get('/welcome', [PagesController::class, 'welcome'])->name('welcome');


/***Cycle:browser->route->contact method->PagesControllers'contact method
->pages->contact->index***/

Route::get('/contact', [PagesController::class, 'contact'])->name('contact');