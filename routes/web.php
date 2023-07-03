<?php

use App\Http\Controllers\AuthManager;
use App\Http\Controllers\ForgetPasswordManager;
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

Route::get('/', [AuthManager::class, 'login'])
->name('login');
Route::post('/', [AuthManager::class, 'loginPost'])
->name('login.post');
Route::get('/Signup', [AuthManager::class, 'signup'])
->name('signup');
Route::post('/Signup', [AuthManager::class, 'signupPost'])
->name('signup.post');
Route::get('/logout', [AuthManager::class, 'logout'])
->name('logout');
Route::get('/forget-password', [ForgetPasswordManager::class, 'ForgetPassword'])
->name('forget.password');
Route::post('/forget-password', [ForgetPasswordManager::class, 'ForgetPasswordPost'])
->name('forget.passwordPost');
Route::get('/reset-password/{token}', [ForgetPasswordManager::class, 'resetPassword'])
->name('reset.password');
Route::post('/reset-password', [ForgetPasswordManager::class, 'resetPasswordPost'])
->name('reset.password.post');
