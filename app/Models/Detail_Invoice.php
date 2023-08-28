<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_Invoice extends Model
{
    use HasFactory;
    protected $fillable =['cantidad','precio','bilss_id'];

    public function bills(){
        return $this->hasMany(Bill::class);
    }
}
