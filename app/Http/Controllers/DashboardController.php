<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\DashBoardMiddleware;

class DashBoardController extends Controller
{

    public function index()
    {
        if (Auth::check()) {
            return view('dashboard');
        } else {
            return redirect('login')->with('error', 'Please login to access the dashboard.');
        }
    }
}
