<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atividade_mensagem extends Model
{
    public $timestamps = true;

    protected $table = 'atividades_mensagens';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'mensagem',
        'tipo',
        'id_usuario',
        'id_atividade',
    ];

    protected $guarded = ['id'];

    /**
    * The attributes that should be hidden for arrays.
    *
    * @var array
    */

    public function usuario()
    {        
        return $this->belongsTo('App\Usuario', 'id_usuario');
    }
    public function atividade()
    {        
        return $this->belongsTo('App\Atividade', 'id_atividade');
    }
}
