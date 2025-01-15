<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IndexPage;

class DashboardhomeController extends Controller
{
    public function index()
    {
        $data = IndexPage::all();
        return view('admin', compact('data'));
    }  
}
