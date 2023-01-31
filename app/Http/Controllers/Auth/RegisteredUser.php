<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisteredUser extends Controller
{
    public function create()
    {
        return view("Auth.Register");
    }

    public function store(Request $request, User $user)
    {
        $request->validate([
            "name" => ["required", "string", "max:255"], 
            "email" => ["required", "string", "email", "max:255", "unique:users"],
            "password" => ["required","min:8", "max:255", "confirmed"]
        ]);
        $user = $user->create([
            "name" => $request->name, 
            "email"=> $request->email, 
            "password" => Hash::make($request->password)
        ]);
        Auth::login($user); 
        return redirect()->route('dashboard.create');
    }
}
