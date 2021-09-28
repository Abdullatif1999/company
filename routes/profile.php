<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/profile/{id}', [ProfileController::class, 'index']);
Route::group(["middleware"=>"auth"],function(){
    Route::get("/profile/{id}/edit",[ProfileController::class,"edit"]);
    Route::post("/profile/{profile_id}/storeEdit",[ProfileController::class,"storeEdit"]);
});
