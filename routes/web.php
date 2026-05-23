<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('pages.home');
})->name('home') ;

Route::get('/contacto', function () {
    return view('pages.contact');
})->name('contact') ;

Route::get('/portafolio', function () {
    return view('pages.portfolio');
})->name('portafolio') ;


Route::post('/contacto', [ContactController::class, 'send'])
    ->name('contact.send');