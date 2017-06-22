<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parceiros extends Model
{
    protected $fillable = ['nome', 'CNPJ','dt_inicio_ctrl', 'objetivo'];
    
    public function descontos() {
        return $this->belongsTo('Parceiros');
        
    }
}
