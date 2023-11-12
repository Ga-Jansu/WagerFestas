<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ComerController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\InviteController;
use App\Http\Controllers\OpsController;
use App\Http\Controllers\RecommendationController;
use App\Models\Recommendation;
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
    return view('/auth/register');
});

Route::get('/logado', function () 
{
    return view('/auth/login');
});

Route::get('/convidados', [InviteController::class, 'index'])->name('convidados.index');
Route::get('/convidados/c', [InviteController::class, 'create'])->name('convidados.create');
Route::post('/convidados/c', [InviteController::class, 'store'])->name('convidados.store');
Route::get('/convidados/lista/{id}',[InviteController::class,'show'])->name('convidados.show');
Route::delete('/convidados/{id}',[InviteController::class, 'destroy'])->name('convidados.destroy');


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


        Route::get('/admin/comida', [FoodController::class, 'index'])->name('admin.comida');
        
        Route::get('/admin/comida/c', [FoodController::class, 'create'])->name('comida.create');
        Route::post('/admin/comida/c', [FoodController::class, 'store'])->name('comida.store');
        Route::get('/admin/comida/{id}',[FoodController::class,'show'])->name('comida.show');
        Route::get('/admin/comida/{id}/edit',[FoodController::class,'edit'])->name('comida.edit');
        Route::put('/admin/comida/{id}',[FoodController::class, 'update'])->name('comida.update');
        Route::delete('/admin/comida/{id}',[FoodController::class, 'destroy'])->name('comida.destroy');

        Route::get('/admin/recomendacao' ,[RecommendationController::class, 'index'])->name('admin.recomendacao');
        Route::get('/admin/recomendacao/c' ,[RecommendationController::class, 'create'])->name('recomendacao.create');
        Route::post('/admin/recomendacao/c' ,[RecommendationController::class, 'store'])->name('recomendacao.store');
        Route::get('/admin/recomendacao/{id}' ,[RecommendationController::class,'show'])->name('recomendacao.show');
        Route::get('/admin/recomendacao/{id}/edit',[RecommendationController::class,'edit'])->name('recomendacao.edit');
        Route::put('/admin/recomendacao/{id}' ,[RecommendationController::class,'update'])->name('recomendacao.update');
        Route::delete('/admin/recomendacao/{id}' ,[RecommendationController::class,'destroy'])->name('recomendacao.destroy');

    });
    
    Route::middleware(['comer'])->group(function () {
        Route::get('/comer_menu', [ComerController::class, 'index'])->name('comer.index');
    });

    Route::middleware(['ops'])->group(function () {
        Route::get('/ops_menu', [OpsController::class, 'index'])->name('ops.index');
    });

});

require __DIR__.'/auth.php';
