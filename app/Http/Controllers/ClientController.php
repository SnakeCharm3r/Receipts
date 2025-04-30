<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return response()->json($clients);
    }

    // ✅ Store a new client
    public function store(Request $request)
    {
        $request->validate([
            'business_id' => 'required|exists:businesses,id',
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255|unique:clients,email',
            'phone' => 'nullable|string|max:20',
            'password' => 'required|min:6',
            'company_name' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
        ]);

        $client = Client::create([
            'business_id' => $request->business_id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'company_name' => $request->company_name,
            'address' => $request->address,
        ]);

        return response()->json([
            'message' => 'Client created successfully.',
            'data' => $client
        ], 201);
}
}
