<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;

class EventoController extends Controller
{
    public function index()
    {
        $dados = Evento::all();
        return view('eventos.meusEventos', compact('dados'));
    }

    public function store(Request $request)
    {
        // Valide os dados do formulário
        // $request->validate([
        //     'nome' => 'required|string|max:255',
        //     'email' => 'required|email|unique:usuarios',
        //     // Adicione mais regras de validação conforme necessário
        // ]);

        // Salve os dados no banco de dados
        // Substitua 'Usuario' pelo nome do seu modelo
        Evento::create([
            'nome' => $request->input('nome'),
            'descricao' => $request->input('descricao'),
            'datainicio' => $request->input('datainicio'),
            'datafim' => $request->input('datafim'),
            // Defina outros campos conforme necessário
        ]);

        // Redirecione para uma página de confirmação ou outra página
        return redirect('/meusEventos')->with('success', 'Cadastro realizado com sucesso!');
    }

    public function listEventos()
    {
        $dados = Evento::all();
        return view('eventos.eventosList',  compact('dados'));
    }
}
