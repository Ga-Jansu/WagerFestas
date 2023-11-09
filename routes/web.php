<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ComerController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\OpsController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/registrar', function () 
{
    return view('/site/registrar');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

Route::middleware(['auth'])->group(function ()
{

    Route::middleware(['admin'])->group(function () {
        Route::get('/admin_menu', [AdminController::class, 'index'])->name('admin.index');


        Route::get('/admin/comida', [FoodController::class, 'index'])->name('admin.index');
        Route::get('/admin/comida/c', [FoodController::class, 'create'])->name('comida.create');
        Route::post('/admin/comida/c', [FoodController::class, 'store'])->name('comida.store');
    });

    Route::middleware(['comer'])->group(function () {
        Route::get('/comer_menu', [ComerController::class, 'index'])->name('comer.index');
    });

    Route::middleware(['ops'])->group(function () {
        Route::get('/ops_menu', [OpsController::class, 'index'])->name('ops.index');
    });
});


require __DIR__.'/auth.php';
