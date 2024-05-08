<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\UserController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
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
    return view('auth');
});

//auth
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
Route::post('login', [AuthController::class, 'authenticate'])->name('proseslogin');

//pegawai
Route::get('/pegawai', [PegawaiController::class, 'index'])->name('index.pegawai')->middleware('auth');
Route::get('/pegawai/create', [PegawaiController::class, 'create'])->name('create.pegawai')->middleware('auth');
Route::post('/pegawai', [PegawaiController::class, 'store'])->name('pegawai.store')->middleware('auth');
Route::get('/pegawai/{id}/edit', [PegawaiController::class, 'edit'])->name('pegawai.edit')->middleware('auth');
Route::patch('/pegawai/{id}', [PegawaiController::class, 'update'])->name('pegawai.update')->middleware('auth');
Route::delete('/pegawai/{id}', [PegawaiController::class, 'destroy'])->name('pegawai.delete')->middleware('auth');

//users
Route::get('user', [UserController::class, 'index'])->name('user.index')->middleware('auth');
Route::post('getPegawai', [UserController::class, 'getPegawai'])->name('user.getPegawai')->middleware('auth');
Route::get('user/create', [UserController::class, 'create'])->name('user.create')->middleware('auth');
Route::post('user', [UserController::class, 'store'])->name('user.store')->middleware('auth');
Route::delete('user/{id}', [UserController::class, 'destroy'])->name('user.delete')->middleware('auth');
