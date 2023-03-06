<?php

use App\Http\Controllers\OrderCreateController;
use App\Http\Controllers\OrderEditController;
use App\Http\Controllers\OrderIndexController;
use App\Http\Controllers\OrderStoreController;
use App\Http\Controllers\OrderUpdateController;
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
    return view('welcome');
});

Route::get('/orders/create', OrderCreateController::class);
Route::post('/orders', OrderStoreController::class);
Route::get('/orders/{order}/edit', OrderEditController::class);
Route::patch('/orders/{order}', OrderUpdateController::class);
Route::get('/orders', OrderIndexController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
