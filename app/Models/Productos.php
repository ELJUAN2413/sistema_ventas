<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;

    protected $fillable =['category_id', 'name', 'description',''];

    public function category(){
        return $this->belogsTo(Category::class);
    }
}
