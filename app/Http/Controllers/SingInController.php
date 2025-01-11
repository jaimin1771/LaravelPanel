<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SingInController extends Controller
{
    /**
     * Display the sign-in page.
     */
    public function index()
    {
        if (!Auth::check()) {
            return view("signin");
        } else {
            return redirect()->intended('dashboard');
        }
    }

    /**
     * Handle the registration and login logic.
     */
    public function store(Request $request)
    {
        // Validate the incoming data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|regex:/^[0-9\-\+\(\)\s]+$/|max:20',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        try {
            $validatedData['password'] = bcrypt($validatedData['password']);
            $user = User::create($validatedData);
            Auth::login($user);
            return redirect()->route('dashboard')->with('success', 'Registration successful! You are now logged in.');
        } catch (\Exception $e) {
            return redirect()->route('signin')->with('error', 'An error occurred while registering. Please try again.');
        }
    }
}
