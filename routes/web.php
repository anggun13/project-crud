<?php

use App\Http\Controllers\FlowerController;
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

Route::get('/', function () {
    return view('welcome');
});

// Masuk ke halaman index
Route::get('/flower',[FlowerController::class, 'index'])->name('flower');

 // Masuk ke halaman tambah flower
Route::get('/tambahflower', [FlowerController::class, 'tambahflower'])->name('tambahflower');

//Masuk ke insert data
Route::post('/insertdata', [FlowerController::class, 'insertdata'])->name('insertdata');

//Masuk ke tampil data
Route::get('/tampilkandata/{id}', [FlowerController::class, 'tampilkandata'])->name('tampilkandata');

//Masuk ke update data
Route::post('/updatedata/{id}', [FlowerController::class, 'updatedata'])->name('updatedata');

//Masuk ke hapus data
Route::get('/delete/{id}', [FlowerController::class, 'delete'])->name('delete');
