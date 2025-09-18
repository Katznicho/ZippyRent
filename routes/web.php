<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Agent\DashboardController as AgentDashboardController;
use App\Http\Controllers\PropertyOwner\DashboardController as PropertyOwnerDashboardController;

// Homepage
Route::get('/', function () {
    return view('home');
})->name('home');

// Properties routes
Route::get('/properties', [PropertyController::class, 'index'])->name('properties.index');
Route::get('/properties/{property}', [PropertyController::class, 'show'])->name('properties.show');

// Search routes
Route::get('/search', [SearchController::class, 'search'])->name('properties.search');

// SEO routes
Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');

// Static pages
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [PageController::class, 'submitContact'])->name('contact.submit');
Route::post('/properties/{property}/inquiry', [PageController::class, 'submitPropertyInquiry'])->name('property.inquiry');

// Authentication routes
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Admin routes
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::get('/users', [AdminDashboardController::class, 'users'])->name('users');
    Route::get('/properties', [AdminDashboardController::class, 'properties'])->name('properties');
    Route::patch('/users/{user}/role', [AdminDashboardController::class, 'updateUserRole'])->name('users.update-role');
    Route::patch('/properties/{property}/featured', [AdminDashboardController::class, 'togglePropertyFeatured'])->name('properties.toggle-featured');
    Route::patch('/properties/{property}/availability', [AdminDashboardController::class, 'togglePropertyAvailability'])->name('properties.toggle-availability');
});

// Agent routes
Route::middleware(['auth', 'agent'])->prefix('agent')->name('agent.')->group(function () {
    Route::get('/dashboard', [AgentDashboardController::class, 'index'])->name('dashboard');
    Route::get('/properties', [AgentDashboardController::class, 'properties'])->name('properties');
    Route::get('/properties/create', [AgentDashboardController::class, 'createProperty'])->name('properties.create');
    Route::post('/properties', [AgentDashboardController::class, 'storeProperty'])->name('properties.store');
    Route::get('/properties/{property}/edit', [AgentDashboardController::class, 'editProperty'])->name('properties.edit');
    Route::put('/properties/{property}', [AgentDashboardController::class, 'updateProperty'])->name('properties.update');
    Route::delete('/properties/{property}', [AgentDashboardController::class, 'deleteProperty'])->name('properties.destroy');
});

// Property Owner routes
Route::middleware(['auth', 'property_owner'])->prefix('property-owner')->name('property-owner.')->group(function () {
    Route::get('/dashboard', [PropertyOwnerDashboardController::class, 'index'])->name('dashboard');
    Route::get('/properties', [PropertyOwnerDashboardController::class, 'properties'])->name('properties');
    Route::get('/properties/create', [PropertyOwnerDashboardController::class, 'createProperty'])->name('properties.create');
    Route::post('/properties', [PropertyOwnerDashboardController::class, 'storeProperty'])->name('properties.store');
    Route::get('/properties/{property}/edit', [PropertyOwnerDashboardController::class, 'editProperty'])->name('properties.edit');
    Route::put('/properties/{property}', [PropertyOwnerDashboardController::class, 'updateProperty'])->name('properties.update');
    Route::delete('/properties/{property}', [PropertyOwnerDashboardController::class, 'deleteProperty'])->name('properties.destroy');
    Route::get('/analytics', [PropertyOwnerDashboardController::class, 'analytics'])->name('analytics');
});

// General authenticated routes
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return redirect()->route('admin.dashboard');
    })->name('dashboard');
});
