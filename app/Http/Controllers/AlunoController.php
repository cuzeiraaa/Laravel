<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AlunoModel;

class AlunoController extends Controller
{
    public function index() {
        return view('aluno.index');
    }

    public function add(Request $data) {
        
        $aluno = new AlunoModel();
        $aluno::create($data->all());

        $alunos = new AlunoModel();

        return view('aluno.index', ['success' => 'Cadastrado!', 'alunos' => $alunos::all()]);
    }


}
