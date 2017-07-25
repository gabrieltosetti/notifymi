<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atividade extends Model
{
    public $timestamps = true;

    protected $table = 'atividades';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'status',
        'iniciada',
        'finalizada',
        'titulo',
        'descricao',
        'id_usuario',
        'id_conserto',
    ];

    protected $guarded = ['id'];
    protected $dates = ['iniciada', 'finalizada'];

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
        return $this->hasOne('App\Usuario', 'id_usuario');
    }
    public function conserto()
    {        
        return $this->belongsTo('App\Conserto', 'id_conserto');
    }
}
