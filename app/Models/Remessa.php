<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Remessa extends Model
{

        protected $table = 'remessa';
        // Outras propriedades e métodos do modelo...
    
        const STATUS_MAP = [
            0 => 'Aberto',
            1 => 'Pronto',
            3 => 'Enviado',
            4 => 'Concluido',
        ];

    use HasFactory;

    protected $fillable = ['usuario_id', 'dataInicio', 'dataFim', 'status', 'descricao', 'pagamento'];

    public function users()
    {
        return $this->belongsTo(Servico::class, 'id_usuario');
    }

    public function getStatusAttribute($value)
    {
        return self::STATUS_MAP[$value] ?? 'Status Desconhecido';
    }
}