<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Amostras;

class AmostrasController extends Controller
{
    /**
     * 
     */
        public function index()
    {
        $amostras = Amostras::all();
        return view('croppen.cadastros.amostras', compact('amostras'));
    }

    /**
     * 
     */
    public function indexCadastro($id = null)
    {
        $amostras = $id ? Amostras::find($id) : new Amostras();
        
        return view('croppen.cadastros.CadastroAmostras', compact('amostras'));
    }

    public function store(Request $request)

    {
        Amostras::create($request->all());

        return redirect()->route('listaAmostra')->with('success', 'Empresa cadastrado com sucesso!');
    }

    public function update(Request $request, $id)
    {
        $amostras = Amostras::find($id);
        $amostras->update($request->all());
        return redirect()->route('listaAmostra')->with('success', 'Empresa atualizado com sucesso!');
    }
}
