<?php
namespace App\Http\functions;

use App\Models\User;
use Intervention\Image\Facades\Image;

trait profileTrait{


    function getProfile (){
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $profile = $user->profile;
        return $profile;
    }
}