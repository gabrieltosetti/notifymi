<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    public $timestamps = true;

    protected $table = 'cargos';

    public function assistencias()
    {
        return $this->hasMany('App\Assistencia');
    }
}
