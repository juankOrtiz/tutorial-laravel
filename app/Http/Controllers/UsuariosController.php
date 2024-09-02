<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    // index -> listado de elementos del recurso
    public function index() {
        return view('usuarios');
    }

    // show -> la pagina con los datos de un elemento puntual del recurso

    // create -> la pagina para crear un elemento del recurso

    // store -> guardar los datos de un recurso creado

    // edit -> la pagina para editar datos de un elemento del recurso

    // update -> actualizar los datos de un recurso

    // destroy -> eliminar un elemento del recurso
}
