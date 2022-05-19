<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Area extends Model
{
    use HasFactory;
    protected $fillable=[
        'nombre_area',
        'id_centro'
    ];

     public function getNombre_areaAttribute($value)
    {
        return strtoupper($value);
    }
    
    public function setNombre_areaAttribute($value)
    {
       $this->attributes['nombre_area']= strtoupper($value);
    }
}
