<?php

namespace App\Http\Controllers;
use App\Models\Empresas;

use Illuminate\Http\Request;

class EmpresasController extends Controller
{
    public function index()
    {
        $empresa = Empresas::all();
        
        return view('croppen.empresa.empresa', compact('empresa'));
    }


    public function indexCadastro($id = null)
    {
        $empresas = $id ? Empresas::find($id) : new Empresas();
        
        return view('croppen.empresa.empresaCadastro', compact('empresas'));
    }

    public function store(Request $request)

    {
        Empresas::create($request->all());

        return redirect()->route('empresa')->with('success', 'Empresa cadastrado com sucesso!');
    }

    public function update(Request $request, $id)
    {
        $empresas = Empresas::find($id);
        $empresas->update($request->all());
        return redirect()->route('empresa')->with('success', 'Empresa atualizado com sucesso!');
    }
}
