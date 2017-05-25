<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
  /*use Notifiable;*/

  public $timestamps = true;

    protected $table = 'usuarios';

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
        'cidade',
        'bairro',
        'rua',
        'numero',
        'complemento',
        'email',
        'senha',
        'permissao',
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

    public function cargos()
    {
        return $this->belongsTo('App\Cargo');
    }
}
