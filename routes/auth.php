<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUser;
use App\Http\Controllers\Auth\AuthenticatedUser;

Route::prefix("auth")->group(function(){
    
    Route::get("register", [RegisteredUser::class, "create"])->name("register.create");
    
    Route::post("register", [RegisteredUser::class, "store"])->name("register.store");

    Route::get("login", [AuthenticatedUser::class, "create"])->name("login.create");

    // Route::get("login", [AuthenticatedUser::class, "create"])->name("login.create")->middleware("throttle:test");


    Route::post("login", [AuthenticatedUser::class, "store"])->name("login.store");

    Route::get("logout", [AuthenticatedUser::class, "logout"])->name("user.logout");

});
