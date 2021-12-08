<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grado extends Model
{
    use HasFactory;
    public function scopeSearch($query, $seccion){
        return $query->where('seccion', 'LIKE', "%$seccion%");
    }
}
