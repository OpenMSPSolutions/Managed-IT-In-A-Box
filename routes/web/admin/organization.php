<?php

use App\Http\Controllers\Admin\Organization\OrgUsersControler;

// Prefix: organization

Route::get('/users', [OrgUsersControler::class, 'index'])->name('users.show');
Route::get('/users/create', [OrgUsersControler::class, 'create'])->name('users.create');
Route::post('/users', [OrgUsersControler::class, 'store'])->name('users.store');
