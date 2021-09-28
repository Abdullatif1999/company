<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
Route::group(["middleware"=>"auth"],function(){
    
    Route::get("/p/create",[PostController::class,"create"]);
    Route::post("/p/store",[PostController::class,"store"]);
    
});
Route::get("/p/show/{post_id}",[PostController::class,"show"]);
