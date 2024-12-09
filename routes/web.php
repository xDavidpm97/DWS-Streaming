<?php

use App\Http\Controllers\FrontEndController;

// Rutas generales
Route::get('/', [FrontEndController::class, 'inicio'])->name('inicio');
Route::get('/catalogo', [FrontEndController::class, 'catalogo'])->name('catalogo');

// Rutas para admin
Route::get('/admin', [FrontEndController::class, 'adminPanel'])->name('admin.panel');
Route::post('/admin/add-video', [FrontEndController::class, 'addVideo'])->name('admin.addVideo');

// Login y logout
Route::post('/login', [FrontEndController::class, 'login'])->name('login');
Route::post('/logout', [FrontEndController::class, 'logout'])->name('logout');
