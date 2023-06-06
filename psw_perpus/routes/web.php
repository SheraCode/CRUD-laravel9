<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Auth;


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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [MahasiswaController::class , 'index']);
Route::get('/tambah', [MahasiswaController::class , 'tambah']);
Route::post('/tambahdata', [MahasiswaController::class , 'tambahdata']);
Route::get('/editdata/{id}', [MahasiswaController::class , 'editdata']);
Route::post('/simpan/{id}', [MahasiswaController::class , 'simpan']);
Route::get('/hapus/{id}', [MahasiswaController::class , 'hapus']);


Auth::routes();
Route::get('/logout', [MahasiswaController::class, 'logout']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
