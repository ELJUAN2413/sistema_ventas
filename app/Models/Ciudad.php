<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    use HasFactory;


    protected $fillable = ['departamento_id','nombre'];

    public function departamento(){
        return $this->hasMany(Departamento::class);
    }
}
