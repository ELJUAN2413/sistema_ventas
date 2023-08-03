<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedores extends Model
{
    use HasFactory;

    protected $fillable =['ciudad_id', 'nombre', 'telefono','direccion','correo' ];

    public function ciudad(){
        return $this->belogsTo(Ciudad::class);
    }
}
