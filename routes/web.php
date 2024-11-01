<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/admin/kuwago1/feedbacks', function () {
    return view('admin.kuwago1.feedbacks'); // Adjust to your view path
})->name('admin.kuwago1.feedbacks');


Route::get('/admin/users/index', function () {
    return view('admin.users.index'); // Adjust to your view path
})->name('admin.users.index');

Route::get('/admin/users/edit', function () {
    return view('admin.users.edit'); // Adjust to your view path
})->name('admin.users.edit');

Route::get('/admin/users/create', function () {
    return view('admin.users.create'); // Adjust to your view path
})->name('admin.users.create');

Route::get('/admin/users/changepass', function () {
    return view('admin.users.changepass'); // Adjust to your view path
})->name('admin.users.changepass');

Route::get('/kuwago_managers/index', function () {
    return view('kuwago_managers.index'); // Adjust to your view path
})->name('kuwago_managers.index');

Route::get('/navbar', function () {
    return view('navbar'); // Adjust to your view path
})->name('navbar');