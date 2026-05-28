<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AlunoModel;

class AlunoController extends Controller
{

    public function index() {

        $aluno = new AlunoModel();

        return view('aluno.index', ['alunos' => $aluno::all()]);
    }

    public function add(Request $data) {
        
        $aluno = new AlunoModel();
        $aluno::create($data->all());

        $alunos = new AlunoModel();

        return view('aluno.index', ['success' => 'Cadastrado!', 'alunos' => $alunos::all()]);
    }

    public function remove(string $id){
        $aluno = new AlunoModel();

        $aluno::destroy($id);

        return view('aluno.index', ['success' => 'Removido!', 'alunos'=>$aluno::all()]);
    }

    public function atualizar(string $id){
        $aluno = new AlunoModel();
        $aluno = $aluno->find($id);


        return view('aluno.atualizar', ['aluno'=>$aluno]);
    }

    public function save(Request $dados){
        $aluno = new AlunoModel();

        $aluno = $aluno::find($dados->id);

        $aluno->update($dados->all());

        return view('aluno.index', ['success'=>'Atualizado!', 'alunos'=>$aluno::all()]);
    }


}
