<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SingInController extends Controller
{
    public function index(){
        return view("signin");
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|regex:/^[0-9\-\+\(\)\s]+$/|max:20',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);
    
        try {
            $validatedData['password'] = bcrypt($validatedData['password']);
            User::create($validatedData);
            return redirect()->route('dashboard')->with('success', 'Form submitted successfully!');
        } catch (\Exception $e) {
            return redirect()->route('signin')->with('error', 'An error occurred while submitting the form.');
        }
    }
    
}
