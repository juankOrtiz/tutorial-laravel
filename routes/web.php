<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prueba', function () {
    dd('Ruta de prueba');
});

Route::get('/usuarios', function () {
    return view('usuarios');
})->name('usuarios');

Route::prefix('admin')->group(function () {
    // Ruta definitiva: /admin/usuarios
    Route::get('/usuarios', function () {
        dd('Listado completo de usuarios');
    })->name('admin.usuarios');

    Route::get('/productos', function () {
        dd('Listado completo de productos');
    })->name('admin.productos');
});

Route::get('/productos', function () {
    return view('productos');
})->name('productos');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
