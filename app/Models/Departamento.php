<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;

    protected $fillable = ['pais_id','nombre'];

    public function pais(){
        return $this->hasMany(Pais::class);
    }
}
