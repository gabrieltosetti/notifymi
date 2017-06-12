<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public $timestamps = true;
  
    protected $table = 'clientes';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'nome', 
        'rg', 
        'cpf',
        'cidade',
        'telefone',
        'celular',
        'cidade',
        'bairro',
        'rua',
        'numero',
        'complemento',
        'email',
        'senha',
    ];

    protected $guarded = ['id'];

    /**
    * The attributes that should be hidden for arrays.
    *
    * @var array
    */
    protected $hidden = [
        'remember_token',
    ];
}
