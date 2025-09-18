<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $properties = Property::where('is_available', true)
            ->with('user')
            ->latest()
            ->paginate(12);

        return view('properties.index', compact('properties'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Only property owners and admins can create properties
        if (!auth()->user()->canManageProperties()) {
            abort(403, 'Unauthorized. Only property owners and admins can create properties.');
        }
        
        return view('properties.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Only property owners and admins can create properties
        if (!auth()->user()->canManageProperties()) {
            abort(403, 'Unauthorized. Only property owners and admins can create properties.');
        }
        
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'type' => 'required|string|in:apartment,house,villa,studio',
            'price' => 'required|numeric|min:0',
            'location' => 'required|string|max:255',
            'bedrooms' => 'required|integer|min:0',
            'bathrooms' => 'required|integer|min:0',
            'area' => 'required|integer|min:0',
            'images' => 'nullable|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'video_url' => 'nullable|url',
            'video' => 'nullable|file|mimes:mp4,avi,mov,wmv,webm|max:102400', // 100MB max
            'is_featured' => 'boolean',
        ]);

        $validated['user_id'] = auth()->id();
        $validated['is_available'] = true;

        // Handle image uploads
        if ($request->hasFile('images')) {
            $imagePaths = [];
            foreach ($request->file('images') as $image) {
                $path = $image->store('properties', 'public');
                $imagePaths[] = $path;
            }
            $validated['images'] = $imagePaths;
        }

        Property::create($validated);

        return redirect()->route('admin.properties.index')
            ->with('success', 'Property created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Property $property)
    {
        // Increment view count
        $property->incrementViews();
        
        $property->load('user');
        return view('properties.show', compact('property'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Property $property)
    {
        // Only property owners can edit their own properties, admins can edit any
        if (!auth()->user()->isAdmin() && $property->user_id !== auth()->id()) {
            abort(403, 'Unauthorized. You can only edit your own properties.');
        }
        
        return view('properties.edit', compact('property'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Property $property)
    {
        // Only property owners can update their own properties, admins can update any
        if (!auth()->user()->isAdmin() && $property->user_id !== auth()->id()) {
            abort(403, 'Unauthorized. You can only update your own properties.');
        }
        
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'type' => 'required|string|in:apartment,house,villa,studio',
            'price' => 'required|numeric|min:0',
            'location' => 'required|string|max:255',
            'bedrooms' => 'required|integer|min:0',
            'bathrooms' => 'required|integer|min:0',
            'area' => 'required|integer|min:0',
            'images' => 'nullable|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'video_url' => 'nullable|url',
            'is_featured' => 'boolean',
            'is_available' => 'boolean',
        ]);

        // Handle image uploads
        if ($request->hasFile('images')) {
            $imagePaths = [];
            foreach ($request->file('images') as $image) {
                $path = $image->store('properties', 'public');
                $imagePaths[] = $path;
            }
            $validated['images'] = $imagePaths;
        }

        $property->update($validated);

        return redirect()->route('admin.properties.index')
            ->with('success', 'Property updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Property $property)
    {
        // Only property owners can delete their own properties, admins can delete any
        if (!auth()->user()->isAdmin() && $property->user_id !== auth()->id()) {
            abort(403, 'Unauthorized. You can only delete your own properties.');
        }
        
        $property->delete();

        return redirect()->route('admin.properties.index')
            ->with('success', 'Property deleted successfully!');
    }
}
