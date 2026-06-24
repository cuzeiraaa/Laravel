<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AlunoModel;
use Illuminate\Support\Facades\Validator;

class AlunoController extends Controller
{
    public function index() 
    {
        // Busca todos os alunos direto pelo Model
        $alunos = AlunoModel::all();
        return view('aluno.index', ['alunos' => $alunos]);
    }

    public function add(Request $data) 
    {
        $validador = Validator::make(
            $data->all(),
            [
                'nome' => 'required|min:3|max:255',
            ],
            [
                'nome.required' => 'O nome é obrigatório.',
                'nome.min' => 'O campo nome deve conter no mínimo 3 caracteres.',
                'nome.max' => 'O campo nome deve conter no máximo 255 caracteres.',
            ]
        );

        if ($validador->fails()) {
            return redirect()->route('aluno.index')->withErrors($validador)->withInput();
        }
        
        // Cria o aluno no banco
        AlunoModel::create($data->all());

        return redirect()->route('aluno.index')->with('success', 'Cadastrado com sucesso!');
    }

    public function remove(string $id)
    {
        // Destrói o registro pelo ID
        AlunoModel::destroy($id);

        return redirect()->route('aluno.index')->with('success', 'Removido com sucesso!');
    }

    public function atualizar(string $id)
    {
        // Busca o aluno pelo ID para mandar para a view de edição
        $aluno = AlunoModel::find($id);

        return view('aluno.atualizar', ['aluno' => $aluno]);
    }

    public function save(Request $dados)
    {
        // 1. Busca o aluno pelo ID que veio do input hidden do formulário
        $aluno = AlunoModel::find($dados->id);

        // 2. Segurança: Se por algum motivo o aluno não for encontrado, redireciona de volta
        if (!$aluno) {
            return redirect()->route('aluno.index')->withErrors(['error' => 'Aluno não encontrado para atualizar.']);
        }

        // 3. Se encontrou, atualiza os dados com segurança
        $aluno->update($dados->all());

        return redirect()->route('aluno.index')->with('success', 'Só sucesso! Atualizado.');
    }
}