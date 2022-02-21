<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    protected $fillable = [
        'id',
        'azienda',
        'stazione_partenza',
        'stazione_arrivo',
        'giorno',
        'orario_partenza',
        'orario_arrivo',
        'codice_treno',
        'numero_carrozza',
        'in_orario',
        'cancellto',
        'created_at',
        'updated_at'
    ];
}
