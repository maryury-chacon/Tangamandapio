<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    public function scopeSearch($query, $nombre){
        return $query->where('nombres', 'LIKE', "%$nombre%");
    }
}
