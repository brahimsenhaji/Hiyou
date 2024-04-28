<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\singup;
use App\Http\Controllers\login;
use App\Http\Controllers\home;

Route::get('/', [login::class, 'index'])->name('login_page');
Route::get('/singup', [singup::class, 'index'])->name('singup_page');
Route::post('/Register', [singup::class, 'create'])->name('Register_page');
Route::post('/Login', [login::class, 'login'])->name('login_function');
Route::get('/Chat', [home::class, 'index'])->name('home_page');

Route::get('/search/{keyword}', [home::class, 'search'])->name('search');
Route::post('/invite', [home::class, 'inviteUser'])->name('invite');
Route::get('/Chat/{username}', [home::class, 'index'])->name('chat_page');
Route::post('/Chat/{username}',[home::class, 'sendMessage'])->name('sendMessage');
Route::get('/Messages/{username}', [home::class, 'displayMessages'])->name('displayMessages');
Route::get('/notifications',[home::class,'notifications'])->name('notifications');

Route::get('/Logout',[login::class, 'Logout'])->name('logout_page');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
