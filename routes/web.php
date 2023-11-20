<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AniverController;
use App\Http\Controllers\areacontroller;
use App\Http\Controllers\ComerController;
use App\Http\Controllers\ExirecomController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\InviteController;
use App\Http\Controllers\OpenScheduleController;
use App\Http\Controllers\OpsController;
use App\Http\Controllers\RecommendationController;
use App\Http\Controllers\SolicitationController;
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

Route::get('/logar', function () 
{
    return view('/auth/login');
});

Route::get('/convidados', [InviteController::class, 'index'])->name('convidados.index');
Route::get('/convidados/c', [InviteController::class, 'create'])->name('convidados.create');
Route::post('/convidados/c', [InviteController::class, 'store'])->name('convidados.store');
Route::get('/convidados/lista/{id}',[InviteController::class,'show'])->name('convidados.show');
Route::delete('/convidados/{id}',[InviteController::class, 'destroy'])->name('convidados.destroy');

Route::get('/recomendacao' ,[ExirecomController::class, 'index'])->name('recomendacao.index')->middleware('aniver');

Route::get('/admin_menu', [AdminController::class, 'index'])->name('admin.index')->middleware('admin');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


Route::middleware(['auth'])->group(function () 
{
    Route::middleware(['admin'])->group(function () {
        //Route::get('/admin_menu', [AdminController::class, 'index'])->name('admin.index');


        Route::get('/admin/comida', [FoodController::class, 'index'])->name('admin.comida')->middleware('admin');
        
        Route::get('/admin/comida/c', [FoodController::class, 'create'])->name('comida.create')->middleware('admin');
        Route::post('/admin/comida/c', [FoodController::class, 'store'])->name('comida.store')->middleware('admin');
        Route::get('/admin/comida/{id}',[FoodController::class,'show'])->name('comida.show')->middleware('admin');
        Route::get('/admin/comida/{id}/edit',[FoodController::class,'edit'])->name('comida.edit')->middleware('admin');
        Route::put('/admin/comida/{id}',[FoodController::class, 'update'])->name('comida.update')->middleware('admin');
        Route::delete('/admin/comida/{id}',[FoodController::class, 'destroy'])->name('comida.destroy')->middleware('admin');

        Route::get('/admin/recomendacao' ,[RecommendationController::class, 'index'])->name('admin.recomendacao')->middleware('admin');
        Route::get('/admin/recomendacao/c' ,[RecommendationController::class, 'create'])->name('recomendacao.create')->middleware('admin');
        Route::post('/admin/recomendacao/c' ,[RecommendationController::class, 'store'])->name('recomendacao.store')->middleware('admin');
        Route::get('/admin/recomendacao/{id}' ,[RecommendationController::class,'show'])->name('recomendacao.show')->middleware('admin');
        Route::get('/admin/recomendacao/{id}/edit',[RecommendationController::class,'edit'])->name('recomendacao.edit')->middleware('admin');
        Route::put('/admin/recomendacao/{id}' ,[RecommendationController::class,'update'])->name('recomendacao.update')->middleware('admin');
        Route::delete('/admin/recomendacao/{id}' ,[RecommendationController::class,'destroy'])->name('recomendacao.destroy')->middleware('admin');


        Route::get('/admin/horario' ,[OpenScheduleController::class, 'index'])->name('tempo.index')->middleware('admin');
        Route::get('/admin/horario/c' ,[OpenScheduleController::class, 'create'])->name('tempo.create')->middleware('admin');
        Route::post('/admin/horario/c' ,[OpenScheduleController::class, 'store'])->name('tempo.store')->middleware('admin');
        Route::get('/admin/horario/{id}' ,[OpenScheduleController::class,'show'])->name('tempo.show')->middleware('admin');
        Route::get('/admin/horario/{id}/edit',[OpenScheduleController::class,'edit'])->name('tempo.edit')->middleware('admin');
        Route::put('/admin/horario/{id}' ,[OpenScheduleController::class,'update'])->name('tempo.update')->middleware('admin');
        Route::delete('/admin/horario/{id}' ,[OpenScheduleController::class,'destroy'])->name('tempo.destroy')->middleware('admin');

        Route::get('/admin/solicitacao',[SolicitationController::class,'index'])->name('solicitacao.index')->middleware('admin');
        Route::get('/admin/solicitacao/{id}',[SolicitationController::class,'show'])->name('solicitacao.show')->middleware('admin');
        Route::delete('/admin/solicitacao/{id}',[SolicitationController::class,'destroy'])->name('solicitacao.destroy')->middleware('admin');
        Route::get('/admin/solicitacao/{id}/approved',[SolicitationController::class,'approve'])->name('solicitacao.approve')->middleware('admin');
    });
    
    Route::middleware(['comer'])->group(function () {
        Route::get('/comer_menu', [ComerController::class, 'index'])->name('comer.index')->middleware('comer');
    });

    Route::middleware(['ops'])->group(function () {
        Route::get('/ops_menu', [OpsController::class, 'index'])->name('ops.index')->middleware('ops');
    });

    Route::middleware(['aniver'])->group(function () {
        Route::get('/aniver_menu', [AniverController::class, 'index'])->name('aniver.index')->middleware('aniver');
        Route::get('/aniver/a', [AniverController::class, 'create'])->name('aniver.create')->middleware('aniver');
        Route::post('/aniver/a' ,[AniverController::class, 'store'])->name('aniver.store')->middleware('aniver');

        Route::get('/areafesta', [areacontroller::class, 'index'])->name('area.index')->middleware('aniver');
    });

});

require __DIR__.'/auth.php';
