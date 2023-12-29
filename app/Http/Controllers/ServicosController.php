<?php

namespace App\Http\Controllers;
use App\Models\Servico;

use Illuminate\Http\Request;

class ServicosController extends Controller
{
    public function store(Request $request)
        {
            // Aqui você processa a requisição de criação
            // Exemplo: Criar um novo modelo Eloquent
            Servico::create($request->except('_token'));

            return response()->json(['message' => 'Registro criado com sucesso']);
        }

    public function index($nome)
    {
        $servico = Servico::where('nome', 'like', '%' . $nome . '%')->get();

        return response()->json($servico);
    }

    public function update(Request $request)
    {
        // Aqui você processa a requisição de atualização
        // Exemplo: Atualizar um modelo Eloquent
        $servico = Servico::findOrFail($request->id);
        $servico->update($request->except('_token'));
    
        return response()->json(['message' => 'Registro atualizado com sucesso']);
    }
}
