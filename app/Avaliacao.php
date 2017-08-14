<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{
  public $timestamps = true;

  protected $table = 'avaliacao';

  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  protected $fillable = [
    'id_usuario',
    'id_assistencia',
    'id_conserto',
    'id_cliente',
    'atendimento',
    'agilidade',
    'nota'
    'obs',
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
