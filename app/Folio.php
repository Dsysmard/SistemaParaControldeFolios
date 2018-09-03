<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Folio extends Model
{
    protected $table = 'folios';

    protected $fillable = [
    	'num_folio',
    	'nombre_creador',
    	'nom_departamento_emitido',
    	'nom_dependencia_dirigido',
    	'documento'
    ];
}
