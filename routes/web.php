<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testController;
use App\Http\Controllers\MajController;
use App\Http\Controllers\DelibererController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DecisionController;
use App\Http\Controllers\BulletinController;
use App\Http\Controllers\PvController;
use App\Http\Controllers\ParaController;

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
Route::get('/test',[testController::class,'index']);
Route::get('/test/{id}',[testController::class,'show'])->where('id','\d+')->name('etudiantshow');
Route::get('/navtest',function() {
    return view('navtest');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/maj',[MajController::class,'show'])->name('MAJ');
Route::put('/maj/{decision}',[MajController::class,'update'])->name('update');
Route::get('/maj/{decision}/edit',[MajController::class,'edit'])->name('EDIT');
Route::get('/deliberer',[DelibererController::class,'show'])->name('deliberer');
Route::get('/dashboard/{id}',[DashboardController::class,'show'])->name('dashboard');
Route::post('/dashboard/{id}/valide',[DecisionController::class,'valide'])->name('valide');
Route::post('/dashboard/{id}/ajourne',[DecisionController::class,'ajourne'])->name('ajourne');
Route::post('/dashboard/{id}/bulletin',[BulletinController::class,'show'])->name('bulletin');
Route::post('/dashboard/{id}/pv',[PvController::class,'show'])->name('pv');
Route::post('/dashboard/{id}/para',[ParaController::class,'parametrage'])->name('parametrage');