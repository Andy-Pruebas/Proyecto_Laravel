<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function Index(){
        return view('/cursos.Index');
    }

    public function create(){
        return view('/cursos.create');
    }

    public function show($curso){
        return view('cursos.show',compact('curso'));
    }
}
