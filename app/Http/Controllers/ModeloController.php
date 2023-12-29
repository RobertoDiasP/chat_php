<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Modelo;
use App\Models\Remessa;

class ModeloController extends Controller
{
    public function index()
    {
            // Obtenha o ID do usuário autenticado
        $idUsuario = Auth::id();

        // Defina o número de itens por página desejado
        $itensPorPagina = 20; // ou qualquer número que você preferir

        // Filtrar os modelos com base no id_usuario e adicionar paginação
        $dados = Modelo::with('servico')
            ->where('id_usuario', $idUsuario)
            ->orderByDesc('created_at')
            ->paginate($itensPorPagina);

        return view('modelos.modelos', compact('dados'));
    }

    public function indexRemessa()
    {
            // Obtenha o ID do usuário autenticado
        $idUsuario = Auth::id();

        // Defina o número de itens por página desejado
        $itensPorPagina = 3; // ou qualquer número que você preferir

        // Filtrar os modelos com base no id_usuario e adicionar paginação
            $dados = Modelo::with('servico')
                ->where('id_usuario', $idUsuario)
                ->orderByDesc('created_at')
                ->paginate($itensPorPagina);

            $dadosR = Remessa::with('users')
                ->where('id_usuario', $idUsuario)
                ->orderByDesc('created_at')
                ->paginate($itensPorPagina);

        return view('modelos.remessas', compact('dados', 'dadosR'));
    }
    
    public function store(Request $request)
    {
       
    $modelo = new Modelo([
        'nome' => $request->input('nome'),
        'arquivo' => $request->input('arquivo'),
        'servico_id' => $request->input('servico_id'),
        'status' => 1,
    ]);

    // Associe o usuário autenticado ao modelo
    $modelo->id_usuario = Auth::id();

    // Salve o modelo
    $modelo->save();
        // Redirecione para uma página de confirmação ou outra página
        return redirect('/modelos')->with('success', 'Cadastro realizado com sucesso!');
    }

    
}
