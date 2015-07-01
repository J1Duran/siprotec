<?php namespace siprotec;

use Illuminate\Database\Eloquent\Model;

class Pase extends Model {
    protected $table = 'Pase';
    protected $fillable = ['id_imo','tipo_enum','id_especialista','fecha_emision','especificacion','descripcion','ambiente','pase_realizado','fecha_realizado'];
    public $timestamps = false;
	//'id_especialista', 'fecha_emision', 'id_imo','resumen','fecha_revision','fecha_aprobado'

}
