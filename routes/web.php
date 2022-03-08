<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\ExampleController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [BarangController::class, 'index'])->name('barang.index');

Route::prefix('barang')->group(function () {
    //list
    Route::get('/', [BarangController::class, 'index'])->name('barang.index');
    //add
    Route::post('/create', [BarangController::class, 'create'])->name('barang.create');
    //info
    Route::get('/find/{id}', [BarangController::class, 'find'])->name('barang.find');
    //update
    Route::get('/find_update/{id}', [BarangController::class, 'find_update'])->name('barang.find_delete');
    Route::post('/update', [BarangController::class, 'update'])->name('barang.update');
    //delete
    Route::get('/find_delete/{id}', [BarangController::class, 'find_delete'])->name('barang.find_delete');
    Route::post('/delete', [BarangController::class, 'delete'])->name('barang.delete');
});

Route::prefix('example')->group(function () {
    Route::get('/modal', [ExampleController::class, 'modal'])->name('example.modal');
});
