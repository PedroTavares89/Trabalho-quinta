<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
     protected $fillable = ['nome_cupom','dt_inicio_ctrl','dt_fim_ctrl', 'objetivo'];
}
