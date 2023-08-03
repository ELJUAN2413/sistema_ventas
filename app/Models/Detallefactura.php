<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detallefactura extends Model
{
    use HasFactory;

    protected $fillable = ['factura_id','cantidad','precio'];

    public function factura(){
        return $this->hasMany(Factura::class);
    }
}
