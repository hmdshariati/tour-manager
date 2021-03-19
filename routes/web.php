<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TourController;
use App\Http\Controllers\TourScheduleController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])
    ->prefix('tours')
    ->name('tours.')
    ->group(function (){

        Route::get('/',[TourController::class,'index'])->name('index');
        Route::get('/create',[TourController::class,'create'])->name('create');
        Route::post('/store',[TourController::class,'store'])->name('store');
        Route::get('/edit/{tour}',[TourController::class,'edit'])->name('edit');
        Route::post('/update/{tour}',[TourController::class,'update'])->name('update');
        Route::get('/{tour}/schedules',[TourScheduleController::class,'index'])->name('schedules.index');
    });
