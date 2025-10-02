<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'RisiRent - Premium Property Rentals in Uganda' }}</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-50">
    <!-- Main Navigation -->
    <nav class="bg-white shadow-lg border-b border-gray-200 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16 lg:h-20">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="flex items-center space-x-3">
                        <div class="flex-shrink-0">
                            <svg class="h-8 w-8 lg:h-10 lg:w-10 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/>
                                <path d="M18 4l-2 2 2 2 2-2-2-2z" opacity="0.7"/>
                                <path d="M15 6l-1 1 1 1 1-1-1-1z" opacity="0.5"/>
                            </svg>
                        </div>
                        <div class="hidden sm:block">
                            <h1 class="text-xl lg:text-2xl font-bold text-gray-900">RisiRent</h1>
                            <p class="text-xs text-gray-600 -mt-1">Premium Properties</p>
                        </div>
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden lg:flex items-center space-x-8">
                    <a href="{{ route('home') }}" class="text-gray-700 hover:text-blue-600 font-medium transition-colors duration-200 {{ request()->routeIs('home') ? 'text-blue-600' : '' }}">
                        Home
                    </a>
                    <a href="{{ route('properties.index') }}" class="text-gray-700 hover:text-blue-600 font-medium transition-colors duration-200 {{ request()->routeIs('properties.*') ? 'text-blue-600' : '' }}">
                        Properties
                    </a>
                    <a href="{{ route('about') }}" class="text-gray-700 hover:text-blue-600 font-medium transition-colors duration-200 {{ request()->routeIs('about') ? 'text-blue-600' : '' }}">
                        About Us
                    </a>
                    <a href="{{ route('contact') }}" class="text-gray-700 hover:text-blue-600 font-medium transition-colors duration-200 {{ request()->routeIs('contact') ? 'text-blue-600' : '' }}">
                        Contact
                    </a>
                </div>

                <!-- User Actions -->
                <div class="flex items-center space-x-4">
                    @auth
                        <div class="flex items-center space-x-2 text-gray-700">
                            <div class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center">
                                <span class="text-white text-sm font-semibold">{{ substr(Auth::user()->name, 0, 1) }}</span>
                            </div>
                            <span class="hidden sm:block font-medium">{{ Auth::user()->name }}</span>
                        </div>
                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf
                            <button type="submit" class="text-gray-700 hover:text-blue-600 font-medium transition-colors duration-200">
                                Sign Out
                            </button>
                        </form>
                    @else
                        <div class="hidden sm:flex items-center space-x-3">
                            <a href="{{ route('login') }}" class="text-gray-700 hover:text-blue-600 font-medium transition-colors duration-200">
                                Sign In
                            </a>
                            <a href="{{ route('register') }}" class="bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white px-4 py-2 rounded-lg font-medium transition-all duration-200">
                                Get Started
                            </a>
                        </div>
                    @endauth

                    <!-- Mobile Menu Button -->
                    <button id="mobile-menu-button" class="lg:hidden p-2 rounded-md text-gray-700 hover:text-blue-600 hover:bg-gray-100 transition-colors duration-200">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <main class="min-h-screen">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p>&copy; {{ date('Y') }} RisiRent. All rights reserved. | Premium Property Rentals in Uganda</p>
        </div>
    </footer>

    <!-- Mobile Menu JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');

            if (mobileMenuButton && mobileMenu) {
                mobileMenuButton.addEventListener('click', function() {
                    mobileMenu.classList.toggle('hidden');
                });
            }
        });
    </script>
</body>
</html>


