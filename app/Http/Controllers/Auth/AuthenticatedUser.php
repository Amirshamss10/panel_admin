<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\Auth\loginRequestValidation;

class AuthenticatedUser extends Controller
{
    public function create() 
    {
        return view("Auth.login");
    }

    public function store(loginRequestValidation $request, User $user)
    {
        $credentials = $request->only("email", "password");
  
        if(Auth::attempt($credentials, $request->filled("remember"))) 
        {
            return redirect()->intended(RouteServiceProvider::HOME); 
        }
  
        return back()->with("wrongCredentials", true);
    }
    
    public function logout(Request $request) 
    {
        Auth::guard("web")->logout();
        
        $request->session()->invalidate();

        return redirect("/");
    }

}
