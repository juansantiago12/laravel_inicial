<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Controlador para manejar las operaciones relacionadas con los posts
class PostController extends Controller
{
    // Método para mostrar el listado de los posts
    public function index()
    {
        return view('post.index');
    }
    // Método para mostrar el formulario de creación de un nuevo post
    public function create()
    {
        return view('post.create');
    }
    // Método para mostrar un post específico basado en su ID
    public function show($id)
    {
        return view('post.show', compact('id'));
    }
}
