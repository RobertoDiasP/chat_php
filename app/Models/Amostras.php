<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amostras extends Model
{
    use HasFactory;
    protected $fillable = [
        "id_interno", "id_externo", "id_cadastro", "cultura", "propriedade", "tipo", "lote", "status","data_amostra"
    ];
    
    public function ordemServico()
    {
        return $this->belongsTo(OrdemServico::class, 'ordem_servico_id');
    }
}
