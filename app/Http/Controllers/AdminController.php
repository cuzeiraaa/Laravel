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
}
