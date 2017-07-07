<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conserto extends Model
{
    public $timestamps = true;

    protected $table = 'consertos';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'modelo',
        'defeito',
        'orcamento',
        'data_entrega',
        'observacao',
        'id_usuario',
        'id_assistencia',
        'id_cliente',
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

    public function cargo()
    {
        //return $this->hasOne('App\Cargo', 'id_cargo');
        return $this->belongsTo('App\Cargo', 'id_cargo');
    }
        public function assistencia()
        {
            return $this->belongsTo('App\Assistencia', 'id_assistencia');
        }
    }
