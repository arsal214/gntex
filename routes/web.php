<?php

use App\Http\Controllers\ProfileController;
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
    return view('auth.login');
});
Route::get('/register', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->namespace('\App\Http\Controllers')->group(function () {

    Route::resource('colors', 'ColorController')->names('colors');
    Route::resource('sizes', 'SizeController')->names('sizes');
    Route::resource('suppliers', 'SupplierController')->names('suppliers');
    Route::resource('packings', 'PackingController')->names('packings');
    Route::resource('cartoons', 'CartoonController')->names('cartoons');
    Route::resource('categories', 'CategoryController')->names('categories');
    Route::resource('product-constructions', 'ProductConstructionController')->names('product-constructions');
    Route::resource('orders', 'OrderController')->names('orders');
    Route::post('downloadPdf', 'OrderController@pdf')->name('orders.pdf');

});


require __DIR__ . '/auth.php';
