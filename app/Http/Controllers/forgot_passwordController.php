<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class forgot_passwordController extends Controller
{
    public function index(){
        return view("forgot");
    }
}
