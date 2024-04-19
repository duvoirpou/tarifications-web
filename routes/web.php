<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FunctionalityController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\TypesFunctionalityController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get("/", [ClientController::class, "index"])->name("home");
Route::get("/tarifications", [ClientController::class, "tarifications"])->name("tarifications");
Route::get("/contact", [ClientController::class, "contact"])->name("contact");
Route::resource('order', OrderController::class);

Route::get("/mail", [MailController::class, "index"])->name("home");
Route::post('send-email', [MailController::class, "sendEmail"])->name('send-email');
Route::post('send-mail', [MailController::class, "sendMail"])->name('send-mail');

Route::get("/admin/categories", [CategoryController::class, "index"])->name("admin.categories");
Route::get("/admin/categories/{id}/edit", [CategoryController::class, "edit"])->name("admin.category.edit");
Route::resource('category', CategoryController::class);

Route::get("/admin/types", [TypeController::class, "index"])->name("admin.types");
Route::resource('type', TypeController::class);

Route::get("/admin/functionalities", [FunctionalityController::class, "index"])->name("admin.functionalities");
Route::resource('functionality', FunctionalityController::class);

Route::get("/admin/types-functionalities", [TypesFunctionalityController::class, "index"])->name("admin.types-functionalities");
Route::resource('type-functionality', TypesFunctionalityController::class);
