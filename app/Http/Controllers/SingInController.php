<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingInController extends Controller
{
    public function index(){
        return view("signin");
    }
}
