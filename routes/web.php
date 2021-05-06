<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TourController;
use App\Http\Controllers\TourScheduleController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('main');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])
    ->prefix('tours')
    ->name('tours.')
    ->group(function (){

        Route::get('/',\App\Http\Livewire\Dashboard::class)->name('index');
        Route::get('/create',[TourController::class,'create'])->name('create');
        Route::post('/store',[TourController::class,'store'])->name('store');
        Route::get('/{tour}',\App\Http\Livewire\ShowTour::class)->name('show');
        Route::post('/update/{tour}',[TourController::class,'update'])->name('update');
        Route::get('/{tour}/schedules',[TourScheduleController::class,'index'])->name('schedules.index');
    });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
