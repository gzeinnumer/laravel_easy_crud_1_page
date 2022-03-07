<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\ExampleController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [BarangController::class, 'index'])->name('barang.index');

Route::prefix('barang')->group(function () {
    Route::get('/', [BarangController::class, 'index'])->name('barang.index');
    Route::post('/create', [BarangController::class, 'create'])->name('barang.create');
    Route::get('/delete/{id}', [BarangController::class, 'delete'])->name('barang.delete');
    Route::get('/find/{id}', [BarangController::class, 'find'])->name('barang.find');
    Route::post('/update', [BarangController::class, 'update'])->name('barang.update');
});



Route::prefix('example')->group(function () {
    Route::get('/modal', [ExampleController::class, 'modal'])->name('example.modal');
});
