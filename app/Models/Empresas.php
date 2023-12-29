<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresas extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nome',
        'razao_social',
        'cnpj',
        'telefone',
        'email',
        'endereco',
        'cidade',
        'estado',
        'cep',
        'faturamento_anual',
        'inscricao_estadual',
        'responsavel_legal_nome',
        'responsavel_legal_cpf',
        'responsavel_legal_cargo',
        'ramo_atividade',
        'descricao',
        'data_fundacao',
        'numero_funcionarios',
        'website',
        'redes_sociais',
    ];

    protected $casts = [
        'data_fundacao' => 'date',
    ];
}
