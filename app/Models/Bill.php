<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;


protected $fillable = ['nombre','employees_id','precio','nombre','apellido','productos' ,'fecha'];

    public function employees(){
        return $this->hasMany(Employee::class);
    }
}

