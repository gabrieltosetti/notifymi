<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atividade_Comentario extends Model
{
    public $timestamps = true;

    protected $table = 'atividades_comentarios';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'status',
        'comentario',
        'id_usuario',
        'id_atividade',
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

    public function usuario()
    {        
        return $this->belongsTo('App\Usuario', 'id_usuario');
    }
    public function atividade()
    {        
        return $this->belongsTo('App\Atividade', 'id_atividade');
    }
}
