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

        $profs = new ProfessorModel();

        return view('professor.index', ['success' => 'Cadastrado!', 'profs' => $profs::all()]);
    }
}
