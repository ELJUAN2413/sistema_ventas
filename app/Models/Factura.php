<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;

    protected $fillable = ['empleados_id','fecha','productos','direccion'];

    public function empleados(){
        return $this->hasMany(Empleados::class);
    }
}
