<?php

use App\Http\Controllers\main;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [main::class, 'dashboard']);
Route::get('/delete/{id}', [main::class, 'delete']);
Route::post('/add', [main::class, 'store'])->name('todo.add');
Route::post('/login', [main::class, 'login'])->name('user.login');
Route::get('/register', [main::class, 'register']);
Route::post('/register/user', [main::class, 'signup'])->name('user.reg');
Route::get('/logout', [main::class, 'logout']);
Route::get('/edit/{id}', [main::class, 'edit']);
Route::put('/update', [main::class, 'update'])->name('update');
