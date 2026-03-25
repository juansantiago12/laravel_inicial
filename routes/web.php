<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

// Aquí es donde puedes registrar las rutas web para tu aplicación. Estas rutas son cargadas por el RouteServiceProvider dentro de un grupo que contiene el middleware "web". ¡Ahora crea algo genial!
Route::get('/', [HomeController::class, 'index']);

// Rutas para el controlador de Post
Route::get('/post', [PostController::class, 'index']);
Route::get('/post/create', [PostController::class, 'create']);
Route::get('/post/{id}', [PostController::class, 'show']);

Route::get('/post/{id}', function ($id) {
    return "Aquí se mostrará el post con el id: $id";
});
