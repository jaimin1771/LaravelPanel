<?php
namespace App\Http\Controllers;

use App\Models\IndexPage;
use Illuminate\Http\Request;

class UpdateDataController extends Controller
{
    public function update(Request $request, $id)
    {
        $data = IndexPage::where('id', $id)->firstOrFail();

        $validatedData = $request->validate([
            'label' => 'required|string|max:255',
            'value' => 'required|string',
            'details' => 'required|string',
        ]);

        $data->update($validatedData);

        return redirect()->route('Index')->with('success', 'Data updated successfully!');
    }
}
