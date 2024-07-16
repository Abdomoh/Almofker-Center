<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\WorkController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\ViewController;
use App\Http\Controllers\Admin\VisionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalizationController;

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

Route::get('lang/{lang}', [LocalizationController::class, 'index'])->name('lang.switch');
Route::view('/', 'welcome')->middleware(['throttle:visit','visit']);
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['prefix'=>'dashboard'],function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('abouts', AboutController::class);
    Route::resource('visions', VisionController::class);
    Route::resource('works', WorkController::class);
    Route::get('work/{id}', [WorkController::class, 'getShowWork']);
    Route::get('visits', [ViewController::class, 'index']);
});

require __DIR__ . '/auth.php';
