<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

// Route::get('/orders/create', function () {
//     return view('welcome');
// });
Route::get('/orders/create', [OrderController::class, 'create']);
Route::post('/orders',[OrderController::class,'store']);

Route::get('/orders/printlist',[OrderController::class,'printList']);
Route::post('/orders/print-selected',[OrderController::class,'printSelected']);

