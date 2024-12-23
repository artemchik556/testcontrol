<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\AuthController;

// Страница рецептов
Route::get('/recipes', [RecipeController::class, 'index'])->name('recipes.index');

// Страница отдельного рецепта
Route::get('/recipes/{recipe}', [RecipeController::class, 'show'])->name('recipes.show');

// Регистрация
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');

// Авторизация
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Выход
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');



