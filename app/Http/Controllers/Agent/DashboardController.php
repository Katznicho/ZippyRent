<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('agent');
    }

    /**
     * Agent dashboard
     */
    public function index()
    {
        $stats = [
            'total_properties' => Property::count(),
            'my_properties' => Property::where('user_id', auth()->id())->count(),
            'available_properties' => Property::where('is_available', true)->count(),
            'featured_properties' => Property::where('is_featured', true)->count(),
            'recent_properties' => Property::where('user_id', auth()->id())->latest()->take(5)->get(),
        ];

        return view('agent.dashboard', compact('stats'));
    }

    /**
     * Agent's properties
     */
    public function properties()
    {
        $properties = Property::where('user_id', auth()->id())
                             ->with('user')
                             ->paginate(15);
        return view('agent.properties', compact('properties'));
    }

    /**
     * Create new property
     */
    public function createProperty()
    {
        return view('agent.properties.create');
    }

    /**
     * Store new property
     */
    public function storeProperty(Request $request)
    {
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
            'video' => 'nullable|file|mimes:mp4,avi,mov,wmv,webm|max:102400',
            'is_featured' => 'boolean',
        ]);

        $validated['user_id'] = auth()->id();
        $validated['is_available'] = true;

        // Handle image uploads
        if ($request->hasFile('images')) {
            $imagePaths = [];
            foreach ($request->file('images') as $image) {
                $imagePaths[] = $image->store('properties/images', 'public');
            }
            $validated['images'] = $imagePaths;
        }

        // Handle video upload
        if ($request->hasFile('video')) {
            $validated['video_path'] = $request->file('video')->store('properties/videos', 'public');
        }

        Property::create($validated);

        return redirect()->route('agent.properties')->with('success', 'Property created successfully.');
    }

    /**
     * Edit property
     */
    public function editProperty(Property $property)
    {
        // Ensure agent can only edit their own properties
        if ($property->user_id !== auth()->id()) {
            abort(403, 'Unauthorized. You can only edit your own properties.');
        }

        return view('agent.properties.edit', compact('property'));
    }

    /**
     * Update property
     */
    public function updateProperty(Request $request, Property $property)
    {
        // Ensure agent can only edit their own properties
        if ($property->user_id !== auth()->id()) {
            abort(403, 'Unauthorized. You can only edit your own properties.');
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
            'video' => 'nullable|file|mimes:mp4,avi,mov,wmv,webm|max:102400',
            'is_featured' => 'boolean',
            'is_available' => 'boolean',
        ]);

        // Handle image uploads
        if ($request->hasFile('images')) {
            $imagePaths = [];
            foreach ($request->file('images') as $image) {
                $imagePaths[] = $image->store('properties/images', 'public');
            }
            $validated['images'] = $imagePaths;
        }

        // Handle video upload
        if ($request->hasFile('video')) {
            $validated['video_path'] = $request->file('video')->store('properties/videos', 'public');
        }

        $property->update($validated);

        return redirect()->route('agent.properties')->with('success', 'Property updated successfully.');
    }

    /**
     * Delete property
     */
    public function deleteProperty(Property $property)
    {
        // Ensure agent can only delete their own properties
        if ($property->user_id !== auth()->id()) {
            abort(403, 'Unauthorized. You can only delete your own properties.');
        }

        $property->delete();

        return redirect()->route('agent.properties')->with('success', 'Property deleted successfully.');
    }
}


