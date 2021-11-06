<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TourController;
use App\Http\Controllers\TourScheduleController;
use App\Http\Controllers\MainController;

Route::get('/c/run2', [App\Http\Controllers\HomeController::class, 'index'])->name('command2');

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [MainController::class,'main'])->name('dashboard');

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
Route::get('/command', [\App\Http\Controllers\CommandController::class, 'index'])->name('command.index');
Route::get('/event', function (){
    event(new \App\Events\MessagePushed());
    dd('fired');
})->name('event');
