<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Passageiro extends Model
{
    protected $fillable = [
        'nome', 'cpf', 'telefone', 'cep', 'rua', 'numero', 'bairro', 'cidade', 'ibge', 'estado', 'ibge'
    ];
}
