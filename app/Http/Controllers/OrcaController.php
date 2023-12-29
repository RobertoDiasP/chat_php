<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrcaController extends Controller
{
    public function index()
    {

        return view('croppen.cadastros.orcamento');
    }
    
}
