<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    use HasFactory;

    protected $fillable = ['status', 'arquivo', 'nome', 'servico_id','id_usuario', 'id_remessa'];

    const STATUS_MAP = [
        1 => 'Recebido',
        2 => 'Processando',
        3 => 'Pronto',
        4 => 'Postado',
        5 => 'Pago',
        6 => 'Cancelado',
    ];

    public function servico()
    {
        return $this->belongsTo(Servico::class, 'servico_id');
    }

    public function users()
    {
        return $this->belongsTo(Servico::class, 'id_usuario');
    }

    public function remessa()
    {
        return $this->belongsTo(Servico::class, 'id_remessa');
    }

    public function getStatusAttribute($value)
    {
        return self::STATUS_MAP[$value] ?? 'Status Desconhecido';
    }
}
