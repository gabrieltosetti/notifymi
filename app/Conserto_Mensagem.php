<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conserto_Mensagem extends Model
{
    public $timestamps = true;

    protected $table = 'consertos_mensagens';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'mensagem',
        'tipo',
        'id_usuario',
        'id_conserto',
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
    public function conserto()
    {        
        return $this->belongsTo('App\Conserto', 'id_conserto');
    }
}
