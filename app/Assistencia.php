<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assistencia extends Model
{
  public $timestamps = true;

  protected $table = 'assistencias';

  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  protected $fillable = [
    'nome',
    'descricao',
    'email',
    'site',
    'cnpj',
    'complemento',
    'telefone1',
    'telefone2',
    'celular',
    'cidade',
    'bairro',
    'rua',
    'numero',

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
