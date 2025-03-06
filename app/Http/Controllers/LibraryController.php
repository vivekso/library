<?php

namespace App\Http\Controllers;

use App\Models\Library;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function index()
    {
        $libraries = Library::where('DeleteStatus', 0)->paginate(10);
        return view('library', compact('libraries'));
    }

    public function create()
    {
        return view('library_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'LibraryName' => 'required|string|max:255',
            'City' => 'required|string|max:100',
            'Address' => 'required|string|max:255',
            'BuyPrice' => 'required|numeric|min:1',
            'AboutLibrary' => 'nullable|string',
            'PinCode' => 'required|digits:6',
        ]);

        Library::create($request->all());

        return redirect()->route('libraries.index')->with('success', 'Library added successfully.');
    }

    public function edit(Library $library)
    {
        return view('library_create', compact('library'));
    }

    public function update(Request $request, Library $library)
    {
        $request->validate([
            'LibraryName' => 'required|string|max:255',
            'City' => 'required|string|max:100',
            'Address' => 'required|string|max:255',
            'BuyPrice' => 'required|numeric|min:1',
            'AboutLibrary' => 'nullable|string',
            'PinCode' => 'required|digits:6',
        ]);

        $library->update($request->all());

        return redirect()->route('libraries.index')->with('success', 'Library updated successfully.');
    }

    public function destroy(Library $library)
    {
        $library->update(['DeleteStatus' => 1]); // Mark as deleted
        return redirect()->route('libraries.index')->with('success', 'Library deleted successfully.');
    }
}
