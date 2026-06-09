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

        $validador = Validator::make(
            $dados->all(),
                [
                    'nome' => 'required|min:3|max::255',
                ],
                [
                    'nome.required' => 'o nome é obrigatório',
                    'nome.max' => 'O campo nome deve conter no mínimo 3 caracteres.',
                    'nome.min' => 'O campo nome deve conter no máximo 255 caracteres.',
                ]
                );

        if($validador->fails()){
            return redirect()->route('aluno.index')->withErrors($validador)->withInput();
        }
        
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
