<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CursoModel;



class CursoController extends Controller
{
    public function index() {
        return view('curso.index');
    }

    public function add(Request $data) {
        
        $curso = new CursoModel();
        $curso::create($data->all());

        $cursos = new CursoModel();

        return view('curso.index', ['success' => 'Cadastrado!', 'cursos' => $cursos::all()]);
    }
}
