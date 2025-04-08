<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');
