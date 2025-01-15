<?php
namespace App\Http\Controllers;

use App\Models\IndexPage;
use Illuminate\Http\Request;

class UpdateDataController extends Controller
{
    public function update(Request $request, $id)
    {
        // Find the specific record by ID or throw a 404 exception
        $data = IndexPage::findOrFail($id);

        $validatedData = $request->validate([
            'label' => 'required|string|max:255',
            'value' => 'required|string',
            'details' => 'required|string',
        ]);

        $data->update($validatedData);

        return redirect()->route('Index')->with('success', 'Data updated successfully!');
    }
}
