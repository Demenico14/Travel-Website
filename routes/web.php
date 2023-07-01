<?php

use App\Http\Controllers\AuthManager;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', function () {
    return view('Landing Page');
})->name('home');

Route::get('/', [AuthManager::class, 'login'])->name('login');
Route::post('/', [AuthManager::class, 'loginPost'])->name('login.post');
Route::get('/Signup', [AuthManager::class, 'signup'])->name('signup');
Route::post('/Signup', [AuthManager::class, 'signupPost'])->name('signup.post');
Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');

