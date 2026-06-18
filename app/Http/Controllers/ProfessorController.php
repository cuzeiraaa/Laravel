<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProfessorModel;

class ProfessorController extends Controller
{
    public function index() {
        return view('professor.index');
    }

    public function add(Request $data) {
        
        $prof = new ProfessorModel();
        $prof::create($data->all());


        return view('professor.index', ['success' => 'Cadastrado!', 'profs' => $prof::all()]);
    }

    public function remove(string $id)
    {
        $prof = new ProfessorModel();

        $prof::destroy($id);

        return view('professor.index', ['success' => 'Removido!', 'profs' => $prof::all()]);

    }

    public function atualizar(string $id)
    {
        $prof = new ProfessorModel();
        $prof = $prof->find($id);

        return view('professor.atualizar', [ 'prof' => $prof]);

    }

    public function save(Request $request)
    {
        $prof = new ProfessorModel();

        $prof = $prof::find($request->id);

        $prof->update($request->all());

        return view('professor.index', ['success' => 'Atualizado!', 'profs' => $prof::all()]);

    }
}
