<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IndexPage;

class HomePageController extends Controller
{
    public function index()
    {
        $data = IndexPage::all();
        return view('home', compact('data'));
    }    
}
