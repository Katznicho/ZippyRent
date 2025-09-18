<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    /**
     * Show the about page
     */
    public function about()
    {
        return view('about');
    }

    /**
     * Show the contact page
     */
    public function contact()
    {
        return view('contact');
    }

    /**
     * Handle contact form submission
     */
    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:1000',
        ]);

        // Here you would typically send an email or store the message
        // For now, we'll just redirect with a success message
        
        return redirect()->route('contact')->with('success', 'Thank you for your message! We will get back to you within 24 hours.');
    }

    /**
     * Handle property inquiry form submission
     */
    public function submitPropertyInquiry(Request $request, $propertyId)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string|max:1000',
        ]);

        // Here you would typically send an email or store the inquiry
        // For now, we'll just redirect with a success message
        
        return redirect()->back()->with('success', 'Thank you for your inquiry! We will contact you soon about this property.');
    }
}