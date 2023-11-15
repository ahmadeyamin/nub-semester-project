<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\House;
use App\Models\Image;

class HouseController extends Controller
{
    // Display a form for house submission
    public function create()
    {
        // Your implementation
        return view('houses.create');
    }

    // Store a new house in the database
    public function store(Request $request)
    {
        // Your implementation
        $request->validate([
            'address' => 'required|string|max:255',
            // Add other validation rules for house information
        ]);

        $house = auth()->user()->houses()->create($request->all());

        // Handle image uploads
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('house_images', 'public');
                $house->images()->create(['path' => $path]);
            }
        }

        return redirect()->route('houses.show', $house->id)
            ->with('success', 'House created successfully');
    }

    // Display a form to edit the specified house
    public function edit(House $house)
    {
        // Your implementation
        return view('houses.edit', compact('house'));
    }

    // Update the specified house in the database
    public function update(Request $request, House $house)
    {
        // Your implementation
        $request->validate([
            'address' => 'required|string|max:255',
            // Add other validation rules for house information
        ]);

        $house->update($request->all());

        // Handle image updates or deletions
        // Your implementation here

        return redirect()->route('houses.show', $house->id)
            ->with('success', 'House updated successfully');
    }

    // Display the specified house
    public function show(House $house)
    {
        // Your implementation
        return view('houses.show', compact('house'));
    }

    // Search for houses based on various data points
    public function search(Request $request)
    {
        // Your implementation
        $query = House::query();

        // Apply search filters based on request parameters
        // Your implementation here

        $houses = $query->get();

        return view('houses.search', compact('houses'));
    }
}
