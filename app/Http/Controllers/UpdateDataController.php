<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IndexPage;
use Illuminate\Support\Facades\Log;

class UpdateDataController extends Controller
{
    public function update(Request $request)
    {
    
        // Validate the request
        $validated = $request->validate([
            'Section_pera' => 'nullable|string|max:1000',
            'Section_hedding' => 'nullable|string|max:255',
            'Section_img' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:3048',
        ]);
    
        if (empty($validated)) {
            return redirect()->back()->with('error', 'No data provided to update.');
        }
    
        try {
            // Update data
            if (!empty($validated['Section_hedding'])) {
                IndexPage::updateOrCreate(['lable' => 'Section_hedding'], ['value' => $validated['Section_hedding']]);
            }
    
            if (!empty($validated['Section_pera'])) {
                IndexPage::updateOrCreate(['lable' => 'Section_pera'], ['value' => $validated['Section_pera']]);
            }
    
            if (!empty($validated['Section_img'])) {
                // Store the uploaded image in the 'public' disk (e.g., storage/app/public)
                $imagePath = $validated['Section_img']->store('assets/home_page_img', 'public');
            
                // Update or create the record in the database with the new image path
                IndexPage::updateOrCreate(
                    ['lable' => 'Section_img'], 
                    ['value' => $imagePath]
                );
            }
            
            
        
            return redirect()->back()->with('success', 'Section updated successfully.');
    
        } catch (\Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with('error', 'Failed to update section. Please try again.');
        }
    }
    
}
