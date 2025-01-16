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
        $request->validate([
            'Section_pera' => 'nullable|string',
            'Section_hedding' => 'nullable|string',
            'Section_img' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:3048', // For image validation
        ]);

        try {
            // Update the Section heading if provided
            if ($request->filled('Section_hedding')) {
                IndexPage::updateOrCreate(
                    ['label' => 'Section_hedding'], // Corrected from 'lable' to 'label'
                    ['value' => $request->input('Section_hedding')]
                );
            }

            // Update the Section paragraph if provided
            if ($request->filled('Section_pera')) {
                IndexPage::updateOrCreate(
                    ['label' => 'Section_pera'], // Corrected from 'lable' to 'label'
                    ['value' => $request->input('Section_pera')]
                );
            }

            // Update the Section image if provided
            if ($request->hasFile('Section_img')) {
                // Store the image in the public storage
                $imagePath = $request->file('Section_img')->store('section_images', 'public');
                IndexPage::updateOrCreate(
                    ['label' => 'Section_img'], // Corrected from 'lable' to 'label'
                    ['value' => $imagePath]
                );
            }
            // Redirect back with a success message
            return redirect()->back()->with('success', 'Section updated successfully.');

        } catch (\Exception $e) {
            // Log the error for debugging purposes
            Log::error('Error updating section: ' . $e->getMessage());
            
            // Redirect back with an error message
            return redirect()->back()->with('error', 'Failed to update section. Please try again.');
        }
    }
}
