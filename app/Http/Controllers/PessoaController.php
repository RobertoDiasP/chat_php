<?php

namespace App\Http\Controllers;
use App\Models\Cliente;

use Illuminate\Http\Request;

class PessoaController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        
        return view('croppen.cadastros.pessoas', compact('clientes'));
    }

    public function indexCadastro($id = null)
    {
        $cliente = $id ? Cliente::find($id) : new Cliente();
        
        return view('croppen.cadastros.pessoaCadastro', compact('cliente'));
    }

    public function store(Request $request)

    {
        Cliente::create($request->all());

        return redirect()->route('pessoa')->with('success', 'Cliente cadastrado com sucesso!');
    }

    public function update(Request $request, $id)
    {
        $cliente = Cliente::find($id);
        $cliente->update($request->all());
        return redirect()->route('pessoa')->with('success', 'Cliente atualizado com sucesso!');
    }

}
