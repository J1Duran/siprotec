<?php namespace siprotec;

use Illuminate\Database\Eloquent\Model;

class objeto extends Model {

    protected $table = 'objeto_pase';
    protected $fillable = ['id_pase','nombre','tipo','origen','destino','accion','observacion'];
    public $timestamps = false;
}
