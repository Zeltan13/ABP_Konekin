<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\VideoController;

// Authentication Routes
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function() {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/forum', [ForumController::class, 'index'])->name('forum');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile/edit', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/profile/change-password', [ProfileController::class, 'showChangePasswordForm'])->name('profile.change-password');
    Route::post('/profile/change-password', [ProfileController::class, 'changePassword'])->name('profile.change-password.update');
});

Route::prefix('course')->group(function() {
    Route::get('/{course}/description', [CourseController::class, 'showDescription'])->name('course.description');
    Route::post('/{course}/description', [CourseController::class, 'redirectToPayment'])->name('course.redirectToPayment');
    Route::get('/{course}/payment', [CourseController::class, 'payment'])->name('payment');
    Route::post('/{course}/pay', [CourseController::class, 'pay'])->name('course.pay');
    Route::get('/{course}/success', [CourseController::class, 'success'])->name('success');
    Route::get('/{course}/watch', [CourseController::class, 'watch'])->name('watch');
});
