<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Controlador para manejar las operaciones relacionadas con los posts
class PostController extends Controller
{
    // Método para mostrar el listado de los posts
    public function index()
    {
        return 'Aqui se mostrará el listado de los post';
    }

    // Método para mostrar el formulario de creación de un nuevo post

    public function create()
    {
        return 'Aqui se mostrará el formulario para crear un nuevo post';
    }
    // Método para mostrar un post específico basado en su ID
    public function show($id)
    {
        return "Aquí se mostrará el post con el id: $id";
    }
}
