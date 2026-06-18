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

    public function remove(string $id)
    {
        $curso = new CursoModel();

        $curso::destroy($id);

        return view('curso.index', ['success'=> 'Removido!!', 'cursos' => $curso::all()]);
    }

    public function atualizar(string $id)
    {
        $curso = new CursoModel();

        $curso->find($id);

        return view('curso.atualizar', ['curso' => $curso]);


    }

    public function save(Request $request)
    {
        $curso = new CursoModel();

        $curso = $curso::find($request->id);

        $curso->update($request->all());

        return view('curso.index', ['success' => 'Dados Salvos!', 'cursos' => $curso::all()]);
    }
}
