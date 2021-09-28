<?php

namespace App\Http\Controllers;

use App\Http\functions\imageTrait;
use Intervention\Image\Facades\Image;
use App\Http\Requests\storePostRequest;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;


class PostController extends Controller
{   
    use imageTrait;



    public function create(){
        return view ("posts.create");
    }



    public function store(storePostRequest $r){
         
        $user_id = auth()->user()->id;
        $image_path = $this->saveImage($r->image,"postsImages","public");
        $this->resizingImage($image_path,300,300);
     
        User::find($user_id)->posts()->create(
              [ "caption" =>$r->caption,
                "image"=> $image_path ]
          );  
  
        return redirect ("profile/".$user_id);
    }

    public function show ($post_id){    
     
       $post = Post::find($post_id);
     
       return view("posts.show",compact("post"));
    }

}
