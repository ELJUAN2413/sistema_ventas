<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable =['cities_id','departament_id','nombre','apellido','cedula','correo','telefono','direccion','cargo'];

    public function cities(){
        return $this->hasMany(City::class);
    }
    public function departament(){
        return $this->hasMany(Departament::class);
    }
}
