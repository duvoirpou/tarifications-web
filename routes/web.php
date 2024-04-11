<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get("/", [ClientController::class, "index"])->name("home");
Route::resource('order', OrderController::class);

Route::get("/mail", [MailController::class, "index"])->name("home");
Route::post('send-email', [MailController::class, "sendEmail"])->name('send-email');
Route::post('send-mail', [MailController::class, "sendMail"])->name('send-mail');
