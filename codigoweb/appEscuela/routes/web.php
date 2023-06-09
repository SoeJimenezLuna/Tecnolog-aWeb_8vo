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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/ciberseguridad', function () {
//     return view('ciber');
// });
// Route::get('/desarrolloweb', function () {
//     return view('web');
// });
// Route::get('/basededatos', function () {
//     return view('bd');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/ciberseguridad', function () {
    return view('ciber');
})->middleware(['auth', 'verified'])->name('ciber');

Route::get('/desarrolloweb', function () {
    return view('web');
})->middleware(['auth', 'verified'])->name('web');

Route::get('/basededatos', function () {
    return view('bd');
})->middleware(['auth', 'verified'])->name('bd');

Route::get('/', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('welcome');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
