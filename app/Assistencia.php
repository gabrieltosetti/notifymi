<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assistencia extends Model
{
    public $timestamps = true;

    protected $table = 'assistencias';

    public function cargos()
    {
        return $this->belongsTo('App\Cargo');
    }
}
