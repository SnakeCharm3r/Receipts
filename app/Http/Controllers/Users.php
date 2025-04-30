<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Hash;

class Users extends Controller
{
    //store function Registered values from the table of users
    public function store(User $user, Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:clients,email',
            'phone' => 'required',
            'password' => 'required|min:6',
            'business_id' => 'required|exists:businesses,id',
        ]);
    
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'business_id' => $request->business_id,
        ]);
    
        return response()->json($user, 201);
    }
}
