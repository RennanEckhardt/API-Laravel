<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rectangle extends Model
{
    use HasFactory;

    public function getAreaRectangle($base, $height){
        $area = ($base * $height);
        return $area;
    }
    
}
