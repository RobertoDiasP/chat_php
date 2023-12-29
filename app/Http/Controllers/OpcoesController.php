<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OpcoesController extends Controller
{
    public function index($id = null)
    {
        return view('croppen.opcoes.opcoes',['id' => $id]);
    }
}
