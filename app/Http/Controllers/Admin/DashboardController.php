<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        // Middleware is applied in routes/web.php
    }

    /**
     * Admin dashboard
     */
    public function index()
    {
        $stats = [
            'total_properties' => Property::count(),
            'available_properties' => Property::where('is_available', true)->count(),
            'featured_properties' => Property::where('is_featured', true)->count(),
            'total_users' => User::count(),
            'property_owners' => User::where('role', 'property_owner')->count(),
            'agents' => User::where('role', 'agent')->count(),
            'recent_properties' => Property::latest()->take(5)->get(),
            'recent_users' => User::latest()->take(5)->get(),
        ];

        return view('admin.dashboard', compact('stats'));
    }

    /**
     * Manage users
     */
    public function users()
    {
        $users = User::with('properties')->paginate(15);
        return view('admin.users', compact('users'));
    }

    /**
     * Manage properties
     */
    public function properties()
    {
        $properties = Property::with('user')->paginate(15);
        return view('admin.properties', compact('properties'));
    }

    /**
     * Update user role
     */
    public function updateUserRole(Request $request, User $user)
    {
        $request->validate([
            'role' => 'required|in:user,property_owner,agent,admin'
        ]);

        $user->update(['role' => $request->role]);

        return back()->with('success', 'User role updated successfully.');
    }

    /**
     * Toggle property featured status
     */
    public function togglePropertyFeatured(Property $property)
    {
        $property->update(['is_featured' => !$property->is_featured]);
        
        $status = $property->is_featured ? 'featured' : 'unfeatured';
        return back()->with('success', "Property {$status} successfully.");
    }

    /**
     * Toggle property availability
     */
    public function togglePropertyAvailability(Property $property)
    {
        $property->update(['is_available' => !$property->is_available]);
        
        $status = $property->is_available ? 'available' : 'unavailable';
        return back()->with('success', "Property marked as {$status} successfully.");
    }
}


