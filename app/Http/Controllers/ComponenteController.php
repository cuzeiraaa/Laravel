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

    public function remove(string $id)
    {
        $comp = new ComponenteModel();
        $comp::destroy($id);

        return view('componente.index', ['success => Removido com sucesso!', 'comps' => $comp::all()]);

    }

    public function atualizar(string $id)
    {
        $comp = new ComponenteModel();

        $comp = $comp->find($id);

        return view('componente.atualizar', ['comp' => $comp]);

    }

    public function save(Request $request)
    {
        $comp = new ComponenteModel();

        $comp = $comp::find($request->id);

        $comp->update($request->all());

        return view('componente.index', ['success' => 'Atualizado!!' ,'comps' => $comp::all()]);

    }
}
