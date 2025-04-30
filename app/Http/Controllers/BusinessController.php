<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function store(Request $request)
  {
    //storing all the businesses details into the database
    $request->validate([
        'name' => 'required|string|max:255',
        'address' => 'nullable|string|max:255',
        'phone' => 'nullable|string|max:20',
        'email' => 'nullable|email|max:255',
        'logo_path' => 'nullable|string|max:255',
    ]);

    $business = Business::create([
        'name' => $request->name,
        'address' => $request->address,
        'phone' => $request->phone,
        'email' => $request->email,
        'logo_path' => $request->logo_path,
    ]);

    return response()->json([
        'message' => 'Business created successfully!',
        'data' => $business
    ], 201);
  }
} 