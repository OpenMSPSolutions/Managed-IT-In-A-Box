<?php

use App\Http\Controllers\Admin\Clients\ClientsControler;

// Prefix: clients
Route::get('/', [ClientsControler::class, 'index'])->name('show');
Route::post('/', [ClientsControler::class, 'store'])->name('store');
Route::get('/create', [ClientsControler::class, 'create'])->name('create');
