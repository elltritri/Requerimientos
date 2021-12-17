<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Estadorequerimiento
 *
 * @property $id
 * @property $estado
 * @property $sectorEstado
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Estadorequerimiento extends Model
{
    
    static $rules = [
		'estado' => 'required',
		'sectorEstado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['estado','sectorEstado'];

    public function Requerimientos(){
      return $this->hasMany(Requerimiento::class,'id');
  }

}
