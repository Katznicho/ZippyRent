<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    /**
     * Generate XML sitemap
     */
    public function index()
    {
        $properties = Property::where('is_available', true)->get();
        
        $sitemap = '<?xml version="1.0" encoding="UTF-8"?>';
        $sitemap .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
        
        // Homepage
        $sitemap .= '<url>';
        $sitemap .= '<loc>' . url('/') . '</loc>';
        $sitemap .= '<lastmod>' . now()->toISOString() . '</lastmod>';
        $sitemap .= '<changefreq>daily</changefreq>';
        $sitemap .= '<priority>1.0</priority>';
        $sitemap .= '</url>';
        
        // Properties index
        $sitemap .= '<url>';
        $sitemap .= '<loc>' . route('properties.index') . '</loc>';
        $sitemap .= '<lastmod>' . now()->toISOString() . '</lastmod>';
        $sitemap .= '<changefreq>daily</changefreq>';
        $sitemap .= '<priority>0.9</priority>';
        $sitemap .= '</url>';
        
        // About page
        $sitemap .= '<url>';
        $sitemap .= '<loc>' . route('about') . '</loc>';
        $sitemap .= '<lastmod>' . now()->toISOString() . '</lastmod>';
        $sitemap .= '<changefreq>monthly</changefreq>';
        $sitemap .= '<priority>0.7</priority>';
        $sitemap .= '</url>';
        
        // Contact page
        $sitemap .= '<url>';
        $sitemap .= '<loc>' . route('contact') . '</loc>';
        $sitemap .= '<lastmod>' . now()->toISOString() . '</lastmod>';
        $sitemap .= '<changefreq>monthly</changefreq>';
        $sitemap .= '<priority>0.7</priority>';
        $sitemap .= '</url>';
        
        // Individual properties
        foreach ($properties as $property) {
            $sitemap .= '<url>';
            $sitemap .= '<loc>' . route('properties.show', $property) . '</loc>';
            $sitemap .= '<lastmod>' . $property->updated_at->toISOString() . '</lastmod>';
            $sitemap .= '<changefreq>weekly</changefreq>';
            $sitemap .= '<priority>0.8</priority>';
            $sitemap .= '</url>';
        }
        
        $sitemap .= '</urlset>';
        
        return response($sitemap, 200, [
            'Content-Type' => 'application/xml'
        ]);
    }
}