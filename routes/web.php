<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\JadwalController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return redirect('pesan');
});

Route::get('/pesan', [PesananController::class, 'create']);
Route::post('/pesan', [PesananController::class, 'store']);


Route::get('/pesanan', [PesananController::class, 'index']);

Route::get('/pesanan/{id}/edit', [PesananController::class, 'edit']);
Route::put('/pesanan/{id}', [PesananController::class, 'update']);

