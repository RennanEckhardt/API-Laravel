<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Rectangle;
use App\Models\Triangle;
use Illuminate\Routing\Controller as BaseController;

class PoligonosController extends BaseController
{
    
    public function triangle(Request $request)
    {

        $base = $request->base;
        $height = $request->height;

        $triangle = new Triangle;
        $area_triangle = $triangle->getAreaTriangle($base, $height);
        
        $triangle->base = $base;
        $triangle->height = $height;
        $triangle->area = $area_triangle;
        $this->savePoligonos($triangle);
    }

    public function rectangle(Request $request)
    {
        $base = $request->base;
        $height = $request->height;

        $rectangle = new Rectangle;
        
        $area_rectangle = $rectangle->getAreaRectangle($base, $height);
        
        $rectangle->base = $base;
        $rectangle->height = $height;
        $rectangle->area = $area_rectangle;
        $this->savePoligonos($rectangle);
    }

    public function savePoligonos($Poligono){
        $Poligono->save();
    }


    public function result()
    {
        $triangles = Triangle::all();
        $rectangles = Rectangle::all();
        $result_triangle = 0;
        $result_rectangle = 0;
        $final_result = [];

        foreach($triangles as $triangle){
            $result_triangle += $triangle->area;
        }

        foreach($rectangles as $rectangle){
            $result_rectangle += $rectangle->area;
        }

        $final_result[0] = "O valor da soma das áreas de todos os polígonos cadastrados. ".$result_triangle + $result_rectangle;
        
        return $final_result;
    }


}
