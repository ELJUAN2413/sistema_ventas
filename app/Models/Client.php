<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = ['cities_id','nombre','cedula','correo','telefono','direccion'];

    public function city(){
        return $this->belongsTo(City::class);
    }
}
