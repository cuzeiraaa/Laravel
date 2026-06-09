<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ComponenteModel;
use Illuminate\Support\Facades\Validator;


class ComponenteController extends Controller
{
    public function index() {
        return view('componente.index');
    }

    public function add(Request $data) {
        
        $comp = new ComponenteModel();
        $comp::create($data->all());

        $comps = new ComponenteModel();

        return view('componente.index', ['success' => 'Cadastrado!', 'comps' => $comps::all()]);
    }
}
