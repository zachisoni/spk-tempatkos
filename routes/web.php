<?php

use App\Http\Controllers\AlternativesController;
use App\Http\Controllers\Calculations;
use App\Http\Controllers\HistoriesController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/calculation', [Calculations::class, 'index'])
        ->middleware(['auth', 'verified'])->name('calculation');

Route::post('/calculation/result', [Calculations::class, 'calculate'])
        ->middleware(['auth', 'verified'])->name('calculation/result');

Route::get('/criteria', function () {
    return view('criteria');
})->middleware(['auth', 'verified'])->name('criteria');

Route::get('/alternatives', [AlternativesController::class, 'index'])
        ->middleware(['auth', 'verified'])->name('alternatives');

Route::get('/alternatives/add', [AlternativesController::class, 'addAlternative'])
        ->middleware(['auth', 'verified'])->name('alternatives/add');

Route::get('/result', function () {
    return view('result');
})->middleware(['auth', 'verified'])->name('result');

Route::get('/histories', [HistoriesController::class, 'index'])
        ->middleware(['auth', 'verified'])->name('histories');

Route::get('/history/{id}', [HistoriesController::class, 'detail'])
        ->middleware(['auth', 'verified'])->name('history/{id}');

Route::get('/alternative', function () {
    return view('alternative');
})->middleware(['auth', 'verified'])->name('alternative');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
