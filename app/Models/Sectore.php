<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Sectore extends Model
{
    
    static $rules = [
		'sectores' => 'required',
    ];

    protected $perPage = 20;

    protected $fillable = ['sectores'];

    public function Requerimientos(){
        return $this->hasMany(Requerimiento::class,'id');
    }

}
