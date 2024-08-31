<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jogos extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $primaryKey = 'id_jogo';

    protected $fillable = ['id_jogo','titulo','genero','plataforma','data_lancamento','desenvolvedora'];
}
