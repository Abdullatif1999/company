<?php

namespace App\Http\Controllers;

use App\Http\functions\imageTrait;
use App\Http\functions\profileTrait;
use App\Http\functions\profileTrite;
use App\Http\Requests\ProfileStoreRequest;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{   use imageTrait , profileTrait;
    public function index($user_id)
    {   
         $user = User::find($user_id);
        return view('home',compact('user'));
    }

    public function edit ($profile_id){
       
        $profile = $this->getProfile();
       $this->authorize("update",$profile);
        return view("profile/edit",compact("profile"));
        
    }

    public function storeEdit(ProfileStoreRequest $q,$profile_id)
    {   $profile = $this->getProfile();

        $profile->user->name = $q->name;
        $profile->user->save();
        $profile->title = $q->title;
        $profile->dicsription =$q->description;

        if ($q->image){
        $image = $this->saveImage($q->image,"profilesImages","public");
        $this->resizingImage($image,300,300);
        $profile->image= $image;
        }
       
        $profile->url= $q->url;
        $profile->save();
     
        return redirect ("/profile/".$profile->id);
    }
}
