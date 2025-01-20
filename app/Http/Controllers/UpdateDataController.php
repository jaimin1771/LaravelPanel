<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IndexPage;
use Illuminate\Support\Facades\Log;

class UpdateDataController extends Controller
{
    public function update(Request $request)
{
    try {
        // Validate input fields
        $validated = $request->validate([
            'Section_hedding' => 'nullable|string|max:255',
            'Section_pera' => 'nullable|string',
            'Section_hedding_two' => 'nullable|string|max:255',
            'Section_pera_two' => 'nullable|string',
            'Section_hedding_three' => 'nullable|string|max:255',
            'Section_pera_three' => 'nullable|string',
            'Section_img' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048', // 2MB max
        ]);

        // Loop through validated fields to update or create records
        foreach ($validated as $key => $value) {
            if (!empty($value) && $key !== 'Section_img') { // Skip the file field here
                IndexPage::updateOrCreate(['lable' => $key], ['value' => $value]);
            }
        }

        // Process the banner image upload
        if ($request->hasFile('Section_img')) {
            $image = $request->file('Section_img');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            $destinationPath = storage_path('app/private');
            
            // Ensure the directory exists
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }

            // Move the uploaded file
            $image->move($destinationPath, $imageName);

            // Store the relative path in the database
            $imagePath = 'storage/app/private/' . $imageName;
            IndexPage::updateOrCreate(['lable' => 'Section_img'], ['value' => $imagePath]);
        }

        // Success message
        return redirect()->back()->with('success', 'Section updated successfully.');
    } catch (\Exception $e) {
        // Log the error
        Log::error('Failed to update section: ' . $e->getMessage());

        // Redirect back with error message
        return redirect()->back()->with('error', 'Failed to update section. Please try again.');
    }
}

    
}
