<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

Route::put('/profile', [userController::class, 'update'])->name('profile.update');


Route::get('/', function () {
    return view('index');
});
Route::get('/kalender', function () {
    return view('kalender');
})->name('kalender');
Route::get('/jadwal-checkup', function () {
    return view('jadwal_cu');
})->name('jadwal.cu');
// Route::get('/register', function () {
//     return view('regist');
// })->name('regist');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard',[App\Http\Controllers\HomeController::class, 'index'] )->name('dashboard');
    // Route::resource('user','profilController')->name('user');
});
Route::get('/profil',[App\Http\Controllers\HomeController::class, 'profil'] )->name('profil');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profil', function () {
    return view('profil');
})->name('profil');


Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
Route::put('/user/update/{id}', [UserController::class, 'update'])->name('user.update');
