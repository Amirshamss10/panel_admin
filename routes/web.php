<?php
// session_name("sess_app");
// session_start();
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedUser;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get("/", function(){
    return("<h1 style=text-align:center>welcome to website!</h1>");
});

Route::middleware("auth")->group(function(){
    
    Route::get("dashboard", function(){       
         return view('home');
    })->name("dashboard.create");
});

require_once "auth.php";