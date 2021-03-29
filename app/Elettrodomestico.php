<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Elettrodomestico extends Model
{
    protected $fillable = ['nome', 'marchio', 'prezzo', 'pezzi_disponibili', 'pezzi_venduti'];
}
