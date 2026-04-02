<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Deploy with Render.com";
});
// Route::get("/",[UserController::class,"index"]);
// Route::post("/login",[UserController::class,"authLogin"]);
// Route::get('/login',function(){
//     return View("auth/login");
// });

