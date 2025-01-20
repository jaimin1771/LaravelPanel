<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IndexPage;

class DashboardhomeController extends Controller
{
    public function index()
    {
            $data = IndexPage::all();
            $Section_hedding = IndexPage::where('lable', 'Section_hedding')->value('value') ?? 'Default Page Title';
            $Section_pera = IndexPage::where('lable', 'Section_pera')->value('value') ?? 'Default Page Title';
            $Section_img = IndexPage::where('lable', 'Section_img')->value('value') ?? 'Default Page Title';
            $Section_img_two = IndexPage::where('lable', 'Section_img_two')->value('value') ?? 'Default Page Title';
            $Section_hedding_two = IndexPage::where('lable', 'Section_hedding_two')->value('value') ?? 'Default Page Title';
            $Section_pera_two = IndexPage::where('lable', 'Section_pera_two')->value('value') ?? 'Default Page Title';
            $Section_img_three = IndexPage::where('lable', 'Section_img_three')->value('value') ?? 'Default Page Title';
            $Section_pera_three = IndexPage::where('lable', 'Section_pera_three')->value('value') ?? 'Default Page Title';
            $Section_hedding_three = IndexPage::where('lable', 'Section_hedding_three')->value('value') ?? 'Default Page Title';
            $Section_name = IndexPage::where('lable', 'Section_img')->value('section_name') ?? 'Default Page Title';
            $Section_name_tow = IndexPage::where('lable','Section_img_two')->value('section_name') ?? 'Default Page Title';
            $Section_name_three = IndexPage::where('lable', 'Section_img_three')->value('section_name') ?? 'Default Page Title';
    
            
            return view('admin', compact('Section_hedding','Section_img','Section_pera','Section_img_two','Section_pera_two','Section_hedding_two','Section_img_three','Section_pera_three','Section_hedding_three','Section_name','Section_name_tow','Section_name_three'));
    }  
}
