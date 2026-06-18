<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminModel;
use App\Http\Controllers\Controller;



class AdminController extends Controller
{
    public function index() {
        return view('admin.index');
    }

    public function add(Request $data) {
        
        $admin = new AdminModel();
        $admin::create($data->all());

        $admins = new AdminModel();

        return view('admin.index', ['success' => 'Cadastrado!', 'admins' => $admins::all()]);
    }

    public function remove(string $id)
    {
        $admin = new AdminModel();

        $admin::destroy($id);

        return view('admin.index', ['success' => 'Removido!', 'admins' => $admin::all()]);
    }

    public function atualizar(string $id)
    {
        $admin = new AdminModel();

        $admin = $admin->find($id);

        return view('admin.atualizar', ['admin' => $admin]);


    }

    public function save(Request $request)
    {
        $admin = new AdminModel();

        $admin = $admin::find($request->id);

        $admin->update($request->all());

        return view('admin.index', ['success' => 'Atualizado com sucesso!!', 'admins' => $admin::all()]);
    }
}
