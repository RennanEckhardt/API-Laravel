<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Triangle extends Model
{
    use HasFactory;

    public function getAreaTriangle($base, $height){
        $area = ($base * $height) /2;
        return $area;
    }
}
