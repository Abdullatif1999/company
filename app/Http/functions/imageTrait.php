<?php
namespace App\Http\functions;
use Intervention\Image\Facades\Image;

trait imageTrait {

    function saveImage ($image,$path,$kind="public"){
            return $image->store($path,$kind);
           
    }

    function resizingImage ($imagePath,$x,$y){
        $image =  Image::make(public_path("storage/$imagePath"))->fit($x,$y);
        $image->save();
    }

}