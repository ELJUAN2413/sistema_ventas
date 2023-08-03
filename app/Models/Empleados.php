<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    use HasFactory;

    protected $fillable = ['ciudad_id','pais_id','departamento_id' ,'nombre','apellido','cedula','correo','telefono','direccion','cargo'];

    public function ciudad(){
        return $this->hasMany(Ciudad::class);

    }
    public function pais(){
        return $this->hasMany(Pais::class);
    }
    public function departamento(){
        return $this->hasMany(Departamento::class);

    }
}
