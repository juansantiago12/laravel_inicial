<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;

// Aquí es donde puedes registrar las rutas web para tu aplicación. Estas rutas son cargadas por el RouteServiceProvider dentro de un grupo que contiene el middleware "web". ¡Ahora crea algo genial!
Route::get('/', HomeController::class);

// Rutas para el controlador de Post
Route::get('/post', [PostController::class, 'index']);
Route::get('/post/create', [PostController::class, 'create']);
Route::get('/post/{id}', [PostController::class, 'show']);

Route::get('/prueba', function () {
    /*creación de un nuevo post
    $post = new Post();
    $post->title = 'Titulo de mi tercer post';
    $post->content = 'Este es el contenido de mi tercer post';
    $post->category = "Categoría de mi tercer post";
    $post->save();
    return $post;
    */

    /*encontrar un post por su id
    $post = Post::find(5);
    return $post;
    */

    /* encontrar un post por su título, actualizar su categoría y guardarlo
    $post = Post::where('title', 'Titulo de mi tercer post')->first();
    $post->category = 'Desarrollo web';
    $post->save();
    return $post;
    */

    /* encontrar los post con id mayor o igual a 3
    $post = Post::where('id', '>=', 3)->get();
    return $post;
    */

    $post = Post::find(2);
    $post->delete();
    return 'Post eliminado';
});
