<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Dotacione
 *
 * @property $id
 * @property $nombreyapellido
 * @property $area
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Dotacione extends Model
{
    
    static $rules = [
		'nombreyapellido' => 'required',
		'area' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombreyapellido','area'];



}
