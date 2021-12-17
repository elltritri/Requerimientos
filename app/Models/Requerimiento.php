<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Requerimiento
 *
 * @property $id
 * @property $Area
 * @property $Fecha
 * @property $TareaSolicitada
 * @property $Observaciones
 * @property $estado
 * @property $FechaEntrega
 * @property $Personal
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Requerimiento extends Model
{
    
    static $rules = [
		'Area' => 'required',
		'Fecha' => 'required',
		'TareaSolicitada' => 'required',
		'Observaciones' => 'required',
		'estado' => 'required',
		'FechaEntrega' => 'required',
		'Personal' => 'required',
    ];

    protected $perPage = 20;

    
    protected $fillable = ['Area','Fecha','TareaSolicitada','Observaciones','estado','FechaEntrega','Personal'];

    public function Sectores(){
		return $this->belongsTo(Sectore::class,'id');
	}
	public function Estadorequerimiento(){
		return $this->belongsTo(Estadorequerimiento::class,'id');
	}

}
