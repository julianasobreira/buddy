<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ponto extends Model
{
	protected $fillable = ['nome'];

    public function rotas()
    {
        return $this->belongsToMany('App\Rota', 'rota_ponto', 'ponto_id', 'rota_id')->withPivot('horario');
    }
}
