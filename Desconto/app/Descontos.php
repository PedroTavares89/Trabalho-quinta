<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Descontos extends Model
{
    protected $fillable = ['nome', 'descricao', 'tp_desconto','dt_inicio_ctrl', 'objetivo'];
    
    public function parceiros() {
        return $this->belongsTo('descontos');
        
    }
}
