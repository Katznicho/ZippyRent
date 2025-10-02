<x-app-layout title="RisiRent - Find Your Perfect Property" description="Discover amazing properties for rent. Browse, tour, and rent with ease on RisiRent.">
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-blue-600 via-blue-700 to-blue-800 text-white overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 left-0 w-full h-full" style="background-image: url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.1"%3E%3Ccircle cx="30" cy="30" r="2"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        </div>
        
        <!-- Decorative Elements -->
        <div class="absolute top-10 right-10 w-32 h-32 bg-orange-400 rounded-full opacity-20 animate-pulse"></div>
        <div class="absolute bottom-20 left-10 w-24 h-24 bg-white rounded-full opacity-10 animate-bounce"></div>
        <div class="absolute top-1/3 left-1/4 w-16 h-16 bg-yellow-400 rounded-full opacity-15 animate-ping"></div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-24">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Left Content -->
                <div class="text-center lg:text-left">
                    <div class="inline-flex items-center bg-white/10 backdrop-blur-sm rounded-full px-4 py-2 mb-6 text-sm font-medium">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/>
                        </svg>
                        Uganda's Premier Property Platform
                    </div>
                    <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold mb-6 leading-tight">
                        Find Your Perfect
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-400 to-yellow-400">Home</span>
                    </h1>
                    <p class="text-xl sm:text-2xl mb-8 text-blue-100 leading-relaxed">
                        Discover amazing properties, take virtual tours, and rent with confidence. 
                        <span class="text-orange-300 font-semibold">Your dream home awaits!</span>
                    </p>
                    <!-- Quick Search -->
                    <div class="mb-8">
                        <form action="{{ route('properties.search') }}" method="GET" class="max-w-2xl mx-auto lg:mx-0">
                            <div class="flex flex-col sm:flex-row gap-3">
                                <div class="flex-1 relative">
                                    <input type="text" name="keyword" value="{{ request('keyword') }}" placeholder="Search by location, type, or features..." class="w-full px-4 py-3 pl-12 rounded-xl text-gray-900 bg-white border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-300 focus:border-orange-300 text-sm sm:text-base" style="background-color: white !important; border-color: #d1d5db !important; color: #111827 !important;">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <button type="submit" class="bg-white text-blue-600 px-6 py-3 rounded-xl font-semibold hover:bg-gray-100 transition-colors duration-200 text-sm sm:text-base">
                                    Search
                                </button>
                            </div>
                        </form>
                    </div>
                    
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="{{ route('properties.index') }}" class="group bg-gradient-to-r from-orange-500 to-orange-600 hover:from-orange-600 hover:to-orange-700 text-white px-8 py-4 rounded-xl text-lg font-semibold transition-all duration-300 transform hover:scale-105 shadow-xl hover:shadow-2xl">
                            <span class="flex items-center justify-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                                Browse Properties
                            </span>
                        </a>
                            <a href="{{ route('about') }}" class="group border-2 border-white text-white hover:bg-white hover:text-blue-600 px-8 py-4 rounded-xl text-lg font-semibold transition-all duration-300 transform hover:scale-105 backdrop-blur-sm">
                                <span class="flex items-center justify-center">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    Learn More
                                </span>
                            </a>
                    </div>
                </div>
                
                <!-- Right Visual -->
                <div class="relative">
                    <div class="relative bg-white/10 backdrop-blur-sm rounded-3xl p-8 border border-white/20">
                        <!-- Property Card Preview -->
                        <div class="bg-white rounded-2xl shadow-2xl overflow-hidden">
                            <div class="h-48 bg-gradient-to-br from-blue-400 to-purple-500 relative">
                                <div class="absolute top-4 right-4 bg-orange-500 text-white px-3 py-1 rounded-full text-sm font-bold">
                                    Featured
                                </div>
                                <div class="absolute bottom-4 left-4 text-white">
                                    <p class="text-2xl font-bold">UGX 1,200,000</p>
                                    <p class="text-sm opacity-90">per month</p>
                                </div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Modern Apartment</h3>
                                <p class="text-gray-600 mb-4">2 Bedrooms • 2 Bathrooms • 1200 sq ft</p>
                                <div class="flex justify-end">
                                    <button class="bg-green-500 text-white px-4 py-2 rounded-lg text-sm font-semibold">
                                        Book Tour
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Floating Elements -->
                        <div class="absolute -top-4 -right-4 bg-orange-500 text-white p-3 rounded-full shadow-lg">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                        </div>
                        <div class="absolute -bottom-4 -left-4 bg-green-500 text-white p-3 rounded-full shadow-lg">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="py-16 bg-white relative overflow-hidden">
        <!-- Background Graphics -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-10 left-10 w-32 h-32 bg-blue-500 rounded-full"></div>
            <div class="absolute top-32 right-20 w-24 h-24 bg-orange-500 rounded-full"></div>
            <div class="absolute bottom-20 left-1/4 w-20 h-20 bg-green-500 rounded-full"></div>
            <div class="absolute bottom-32 right-1/3 w-28 h-28 bg-purple-500 rounded-full"></div>
        </div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <div class="inline-flex items-center bg-blue-100 text-blue-800 rounded-full px-4 py-2 mb-4 text-sm font-semibold">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                    Trusted Platform
                </div>
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-800 mb-4">Why Choose RisiRent?</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">We're Uganda's leading property platform with unmatched service and reliability.</p>
            </div>
            
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Stat 1 -->
                <div class="text-center group">
                    <div class="relative bg-gradient-to-br from-blue-500 to-blue-600 w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg group-hover:shadow-xl transition-all duration-300 transform group-hover:scale-110">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                    </div>
                    <div class="text-3xl font-bold text-gray-800 mb-2">500+</div>
                    <div class="text-sm text-gray-600 font-medium">Premium Properties</div>
                </div>
                
                <!-- Stat 2 -->
                <div class="text-center group">
                    <div class="relative bg-gradient-to-br from-orange-500 to-orange-600 w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg group-hover:shadow-xl transition-all duration-300 transform group-hover:scale-110">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <div class="text-3xl font-bold text-gray-800 mb-2">10K+</div>
                    <div class="text-sm text-gray-600 font-medium">Happy Customers</div>
                </div>
                
                <!-- Stat 3 -->
                <div class="text-center group">
                    <div class="relative bg-gradient-to-br from-green-500 to-green-600 w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg group-hover:shadow-xl transition-all duration-300 transform group-hover:scale-110">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <div class="text-3xl font-bold text-gray-800 mb-2">50+</div>
                    <div class="text-sm text-gray-600 font-medium">Cities Covered</div>
                </div>
                
                <!-- Stat 4 -->
                <div class="text-center group">
                    <div class="relative bg-gradient-to-br from-purple-500 to-purple-600 w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg group-hover:shadow-xl transition-all duration-300 transform group-hover:scale-110">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div class="text-3xl font-bold text-gray-800 mb-2">24/7</div>
                    <div class="text-sm text-gray-600 font-medium">Support Available</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Search Section -->
    <section class="py-8 sm:py-16 bg-gradient-to-br from-gray-50 to-blue-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-12">
                <div class="inline-flex items-center bg-blue-100 text-blue-800 rounded-full px-4 py-2 mb-4 text-sm font-semibold">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                    Smart Search
                </div>
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-800 mb-4">Find Your Dream Property</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">Use our advanced search filters to find the perfect property that matches your needs and budget.</p>
            </div>

            <!-- Search Form -->
            <div class="bg-white rounded-3xl p-6 sm:p-8 shadow-2xl border border-gray-100">
                <form action="{{ route('properties.search') }}" method="GET" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4 sm:gap-6">
                    <div class="lg:col-span-2 relative">
                        <label class="block text-sm font-semibold text-gray-700 mb-3">Search Properties</label>
                        <div class="relative">
                            <input type="text" name="keyword" value="{{ request('keyword') }}" placeholder="Search by title, description, or location" class="w-full px-4 py-3 pl-12 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm sm:text-base transition-all bg-white text-gray-900" style="background-color: white !important; border-color: #d1d5db !important; color: #111827 !important;">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="relative">
                        <label class="block text-sm font-semibold text-gray-700 mb-3">Location</label>
                        <div class="relative">
                            <select name="location" class="w-full px-4 py-3 pl-12 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm sm:text-base appearance-none bg-white">
                                <option value="">All Locations</option>
                                <option value="Kampala Central">Kampala Central</option>
                                <option value="Kololo">Kololo</option>
                                <option value="Nakawa">Nakawa</option>
                                <option value="Ntinda">Ntinda</option>
                                <option value="Bugolobi">Bugolobi</option>
                                <option value="Muyenga">Muyenga</option>
                                <option value="Nakasero">Nakasero</option>
                                <option value="Makerere">Makerere</option>
                            </select>
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-3">Property Type</label>
                        <div class="relative">
                            <select name="type" class="w-full px-4 py-3 pl-12 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm sm:text-base appearance-none bg-white">
                                <option value="">All Types</option>
                                <option value="apartment">Apartment</option>
                                <option value="house">House</option>
                                <option value="villa">Villa</option>
                                <option value="studio">Studio</option>
                            </select>
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                </svg>
                            </div>
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end">
                        <button type="submit" class="w-full bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white px-6 py-3 rounded-xl font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl text-sm sm:text-base">
                            <span class="flex items-center justify-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                                Search Properties
                            </span>
                        </button>
                    </div>
                </form>
                
                <!-- Quick Filters -->
                <div class="mt-6 pt-6 border-t border-gray-100">
                    <p class="text-sm font-medium text-gray-700 mb-3">Quick Filters:</p>
                    <div class="flex flex-wrap gap-2">
                        <a href="{{ route('properties.search', ['type' => 'apartment']) }}" class="px-4 py-2 bg-gray-100 text-gray-700 rounded-full text-sm font-medium hover:bg-blue-100 hover:text-blue-700 transition-colors">
                            Apartments
                        </a>
                        <a href="{{ route('properties.search', ['type' => 'house']) }}" class="px-4 py-2 bg-gray-100 text-gray-700 rounded-full text-sm font-medium hover:bg-blue-100 hover:text-blue-700 transition-colors">
                            Houses
                        </a>
                        <a href="{{ route('properties.search', ['type' => 'villa']) }}" class="px-4 py-2 bg-gray-100 text-gray-700 rounded-full text-sm font-medium hover:bg-blue-100 hover:text-blue-700 transition-colors">
                            Villas
                        </a>
                        <a href="{{ route('properties.search', ['type' => 'studio']) }}" class="px-4 py-2 bg-gray-100 text-gray-700 rounded-full text-sm font-medium hover:bg-blue-100 hover:text-blue-700 transition-colors">
                            Studios
                        </a>
                        <a href="{{ route('properties.search', ['featured' => '1']) }}" class="px-4 py-2 bg-orange-100 text-orange-700 rounded-full text-sm font-medium hover:bg-orange-200 hover:text-orange-800 transition-colors">
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                </svg>
                                Featured
                            </span>
                        </a>
                        <a href="{{ route('properties.search') }}" class="px-4 py-2 bg-blue-100 text-blue-700 rounded-full text-sm font-medium hover:bg-blue-200 hover:text-blue-800 transition-colors">
                            Advanced Search
                        </a>
                        <button class="px-4 py-2 bg-orange-100 text-orange-700 rounded-full text-sm font-medium hover:bg-orange-200 transition-colors">
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Newly Added
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16 bg-gradient-to-br from-gray-50 to-white relative overflow-hidden">
        <!-- Background Graphics -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-20 left-10 w-40 h-40 bg-gradient-to-br from-blue-400 to-purple-500 rounded-full blur-3xl"></div>
            <div class="absolute bottom-20 right-10 w-32 h-32 bg-gradient-to-br from-orange-400 to-pink-500 rounded-full blur-3xl"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-60 h-60 bg-gradient-to-br from-green-400 to-blue-500 rounded-full blur-3xl"></div>
        </div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <div class="inline-flex items-center bg-gradient-to-r from-blue-100 to-purple-100 text-blue-800 rounded-full px-4 py-2 mb-4 text-sm font-semibold">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                    Advanced Features
                </div>
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-800 mb-4">Everything You Need</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">Discover the powerful features that make RisiRent the best choice for property rentals.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="group bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="bg-gradient-to-br from-blue-500 to-blue-600 w-16 h-16 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Virtual Tours</h3>
                    <p class="text-gray-600 leading-relaxed">Experience properties from anywhere with our high-quality virtual tour technology.</p>
                </div>
                
                <!-- Feature 2 -->
                <div class="group bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="bg-gradient-to-br from-green-500 to-green-600 w-16 h-16 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Verified Properties</h3>
                    <p class="text-gray-600 leading-relaxed">All properties are verified and inspected to ensure quality and accuracy.</p>
                </div>
                
                <!-- Feature 3 -->
                <div class="group bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="bg-gradient-to-br from-purple-500 to-purple-600 w-16 h-16 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Transparent Pricing</h3>
                    <p class="text-gray-600 leading-relaxed">No hidden fees. Clear, upfront pricing with all costs transparently displayed.</p>
                </div>
                
                <!-- Feature 4 -->
                <div class="group bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="bg-gradient-to-br from-orange-500 to-orange-600 w-16 h-16 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">24/7 Support</h3>
                    <p class="text-gray-600 leading-relaxed">Round-the-clock customer support to help you with any questions or concerns.</p>
                </div>
                
                <!-- Feature 5 -->
                <div class="group bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="bg-gradient-to-br from-pink-500 to-pink-600 w-16 h-16 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Smart Location</h3>
                    <p class="text-gray-600 leading-relaxed">Advanced location-based search to find properties in your preferred areas.</p>
                </div>
                
                <!-- Feature 6 -->
                <div class="group bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="bg-gradient-to-br from-indigo-500 to-indigo-600 w-16 h-16 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Secure Platform</h3>
                    <p class="text-gray-600 leading-relaxed">Bank-level security to protect your personal information and transactions.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Properties -->
    <section class="py-8 sm:py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-8 sm:mb-12">
                <div class="inline-flex items-center bg-orange-100 text-orange-800 rounded-full px-3 py-1.5 sm:px-4 sm:py-2 mb-3 sm:mb-4 text-xs sm:text-sm font-semibold">
                    <svg class="w-3 h-3 sm:w-4 sm:h-4 mr-1 sm:mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                    </svg>
                    Featured Collection
                </div>
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-gray-900 mb-3 sm:mb-4 px-4">Premium Properties</h2>
                <p class="text-base sm:text-lg text-gray-600 max-w-2xl mx-auto px-4">Discover our handpicked selection of premium properties that offer exceptional value and outstanding amenities.</p>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Property Card 1 -->
                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-100 group">
                    <!-- Property Header with Color -->
                    <div class="relative h-48 overflow-hidden bg-gradient-to-br from-blue-500 to-blue-600">
                        <div class="w-full h-full flex items-center justify-center">
                            <div class="text-center text-white">
                                <div class="w-16 h-16 bg-white/20 rounded-2xl flex items-center justify-center mx-auto mb-3">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                    </svg>
                                </div>
                                <p class="text-white/80 text-sm font-medium">Modern Apartment</p>
                            </div>
                        </div>
                        
                        <!-- Property Type Badge -->
                        <div class="absolute top-4 left-4">
                            <span class="bg-blue-600 text-white px-3 py-1.5 rounded-full text-xs font-bold uppercase tracking-wide">
                                Apartment
                            </span>
                        </div>
                        
                        <!-- Featured Badge -->
                        <div class="absolute top-4 right-4">
                            <span class="bg-orange-500 text-white px-3 py-1.5 rounded-full text-xs font-bold shadow-lg">
                                ⭐ Featured
                            </span>
                        </div>
                        
                        <!-- Price Overlay -->
                        <div class="absolute bottom-4 left-4 right-4">
                            <div class="bg-white rounded-2xl p-4 shadow-xl">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <p class="text-2xl font-bold text-gray-900">UGX 1,200,000</p>
                                        <p class="text-sm text-gray-600">per month</p>
                                    </div>
                                    <div class="text-right">
                                        <p class="text-xs text-gray-500">Visiting Fee</p>
                                        <p class="text-sm font-bold text-purple-600">UGX 50,000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Property Content -->
                    <div class="p-6">
                        <!-- Title and Location -->
                        <div class="mb-5">
                            <h3 class="text-lg font-bold text-gray-900 mb-3 line-clamp-2">Modern Apartment in Kampala</h3>
                            <div class="flex items-center text-gray-600 mb-3">
                                <svg class="w-4 h-4 mr-1 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <span class="text-sm">Kampala Central</span>
                            </div>
                            <p class="text-gray-600 text-sm line-clamp-2">Located in the heart of Kampala with modern amenities and stunning city views.</p>
                        </div>
                        
                        <!-- Property Features -->
                        <div class="flex items-center justify-between py-4 border-t border-b border-gray-100 mb-5">
                            <div class="flex items-center text-gray-600">
                                <svg class="w-4 h-4 mr-1 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5a2 2 0 012-2h4a2 2 0 012 2v2H8V5z"></path>
                                </svg>
                                <span class="text-sm font-medium">2 Bed{{ 2 > 1 ? 's' : '' }}</span>
                            </div>
                            <div class="flex items-center text-gray-600">
                                <svg class="w-4 h-4 mr-1 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"></path>
                                </svg>
                                <span class="text-sm font-medium">2 Bath{{ 2 > 1 ? 's' : '' }}</span>
                            </div>
                            <div class="flex items-center text-gray-600">
                                <svg class="w-4 h-4 mr-1 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4"></path>
                                </svg>
                                <span class="text-sm font-medium">1200 sq ft</span>
                            </div>
                        </div>
                        
                        <!-- Touring Fee -->
                        <div class="bg-purple-50 border border-purple-200 rounded-lg p-4 mb-5">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm font-medium text-purple-800">Touring Fee</p>
                                    <p class="text-xs text-purple-600">One-time fee</p>
                                </div>
                                <p class="text-lg font-bold text-purple-600">UGX 50,000</p>
                            </div>
                        </div>
                        
                        <!-- Action Buttons -->
                        <div class="flex space-x-3 mb-5 mt-2">
                            <button onclick="playAudio('home-1', 'Modern Apartment in Kampala', 'Located in the heart of Kampala with modern amenities and stunning city views.')" class="flex-1 bg-purple-500 hover:bg-purple-600 text-white py-3 px-4 rounded-lg text-base font-medium transition-colors duration-200 flex items-center justify-center shadow-md hover:shadow-lg">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 14.5v-9l6 4.5-6 4.5z"/>
                                </svg>
                                Audio
                            </button>
                            <a href="{{ route('properties.index') }}" class="flex-1 bg-blue-500 hover:bg-blue-600 text-white py-3 px-4 rounded-lg text-base font-medium transition-colors duration-200 flex items-center justify-center shadow-md hover:shadow-lg">
                                View Details
                            </a>
                        </div>
                        
                        <!-- WhatsApp Button -->
                        <div class="mt-2">
                            <a href="https://wa.me/256759983853?text=Hi%20I%20would%20like%20to%20book%20a%20tour%20for%20Modern%20Apartment%20in%20Kampala" target="_blank" class="w-full bg-green-500 hover:bg-green-600 text-white py-3 px-4 rounded-lg text-base font-semibold transition-colors duration-200 flex items-center justify-center shadow-md hover:shadow-lg">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
                                </svg>
                                Book Tour
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Property Card 2 -->
                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-100 group">
                    <!-- Property Header with Color -->
                    <div class="relative h-48 overflow-hidden bg-gradient-to-br from-green-500 to-green-600">
                        <div class="w-full h-full flex items-center justify-center">
                            <div class="text-center text-white">
                                <div class="w-16 h-16 bg-white/20 rounded-2xl flex items-center justify-center mx-auto mb-3">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                    </svg>
                                </div>
                                <p class="text-white/80 text-sm font-medium">Cozy Studio</p>
                            </div>
                        </div>
                        
                        <!-- Property Type Badge -->
                        <div class="absolute top-4 left-4">
                            <span class="bg-green-600 text-white px-3 py-1.5 rounded-full text-xs font-bold uppercase tracking-wide">
                                Studio
                            </span>
                        </div>
                        
                        <!-- New Badge -->
                        <div class="absolute top-4 right-4">
                            <span class="bg-emerald-500 text-white px-3 py-1.5 rounded-full text-xs font-bold shadow-lg">
                                🆕 New
                            </span>
                        </div>
                        
                        <!-- Price Overlay -->
                        <div class="absolute bottom-4 left-4 right-4">
                            <div class="bg-white rounded-2xl p-4 shadow-xl">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <p class="text-2xl font-bold text-gray-900">UGX 600,000</p>
                                        <p class="text-sm text-gray-600">per month</p>
                                    </div>
                                    <div class="text-right">
                                        <p class="text-xs text-gray-500">Visiting Fee</p>
                                        <p class="text-sm font-bold text-purple-600">UGX 50,000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Property Content -->
                    <div class="p-6">
                        <!-- Title and Location -->
                        <div class="mb-5">
                            <h3 class="text-lg font-bold text-gray-900 mb-3 line-clamp-2">Cozy Studio Apartment</h3>
                            <div class="flex items-center text-gray-600 mb-3">
                                <svg class="w-4 h-4 mr-1 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <span class="text-sm">Nakawa</span>
                            </div>
                            <p class="text-gray-600 text-sm line-clamp-2">Perfect for young professionals in the heart of the city.</p>
                        </div>
                        
                        <!-- Property Features -->
                        <div class="flex items-center justify-between py-4 border-t border-b border-gray-100 mb-5">
                            <div class="flex items-center text-gray-600">
                                <svg class="w-4 h-4 mr-1 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5a2 2 0 012-2h4a2 2 0 012 2v2H8V5z"></path>
                                </svg>
                                <span class="text-sm font-medium">1 Bed</span>
                            </div>
                            <div class="flex items-center text-gray-600">
                                <svg class="w-4 h-4 mr-1 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"></path>
                                </svg>
                                <span class="text-sm font-medium">1 Bath</span>
                            </div>
                            <div class="flex items-center text-gray-600">
                                <svg class="w-4 h-4 mr-1 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4"></path>
                                </svg>
                                <span class="text-sm font-medium">600 sq ft</span>
                            </div>
                        </div>
                        
                        <!-- Touring Fee -->
                        <div class="bg-purple-50 border border-purple-200 rounded-lg p-4 mb-5">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm font-medium text-purple-800">Touring Fee</p>
                                    <p class="text-xs text-purple-600">One-time fee</p>
                                </div>
                                <p class="text-lg font-bold text-purple-600">UGX 50,000</p>
                            </div>
                        </div>
                        
                        <!-- Action Buttons -->
                        <div class="flex space-x-3 mb-5 mt-2">
                            <button onclick="playAudio('home-2', 'Cozy Studio Apartment', 'Perfect for young professionals in the heart of the city.')" class="flex-1 bg-purple-500 hover:bg-purple-600 text-white py-3 px-4 rounded-lg text-base font-medium transition-colors duration-200 flex items-center justify-center shadow-md hover:shadow-lg">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 14.5v-9l6 4.5-6 4.5z"/>
                                </svg>
                                Audio
                            </button>
                            <a href="{{ route('properties.index') }}" class="flex-1 bg-blue-500 hover:bg-blue-600 text-white py-3 px-4 rounded-lg text-base font-medium transition-colors duration-200 flex items-center justify-center shadow-md hover:shadow-lg">
                                View Details
                            </a>
                        </div>
                        
                        <!-- WhatsApp Button -->
                        <div class="mt-2">
                            <a href="https://wa.me/256759983853?text=Hi%20I%20would%20like%20to%20book%20a%20tour%20for%20Cozy%20Studio%20Apartment" target="_blank" class="w-full bg-green-500 hover:bg-green-600 text-white py-3 px-4 rounded-lg text-base font-semibold transition-colors duration-200 flex items-center justify-center shadow-md hover:shadow-lg">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
                                </svg>
                                Book Tour
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Property Card 3 -->
                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-100 group">
                    <!-- Property Header with Color -->
                    <div class="relative h-48 overflow-hidden bg-gradient-to-br from-amber-600 to-amber-700">
                        <div class="w-full h-full flex items-center justify-center">
                            <div class="text-center text-white">
                                <div class="w-16 h-16 bg-white/20 rounded-2xl flex items-center justify-center mx-auto mb-3">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                    </svg>
                                </div>
                                <p class="text-white/80 text-sm font-medium">Luxury Villa</p>
                            </div>
                        </div>
                        
                        <!-- Property Type Badge -->
                        <div class="absolute top-4 left-4">
                            <span class="bg-amber-600 text-white px-3 py-1.5 rounded-full text-xs font-bold uppercase tracking-wide">
                                Villa
                            </span>
                        </div>
                        
                        <!-- Premium Badge -->
                        <div class="absolute top-4 right-4">
                            <span class="bg-amber-500 text-white px-3 py-1.5 rounded-full text-xs font-bold shadow-lg">
                                👑 Premium
                            </span>
                        </div>
                        
                        <!-- Price Overlay -->
                        <div class="absolute bottom-4 left-4 right-4">
                            <div class="bg-white rounded-2xl p-4 shadow-xl">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <p class="text-2xl font-bold text-gray-900">UGX 2,500,000</p>
                                        <p class="text-sm text-gray-600">per month</p>
                                    </div>
                                    <div class="text-right">
                                        <p class="text-xs text-gray-500">Visiting Fee</p>
                                        <p class="text-sm font-bold text-purple-600">UGX 50,000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2 leading-tight group-hover:text-purple-600 transition-colors duration-200">Luxury Villa with Pool</h3>
                        <div class="flex items-center text-gray-600 mb-3">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span class="text-sm font-medium">Kampala Central</span>
                        </div>
                        <p class="text-gray-600 text-sm leading-relaxed mb-4">Spacious villa with private pool, garden, and premium finishes throughout.</p>
                        
                        <!-- Property Features -->
                        <div class="flex items-center justify-between py-3 border-y border-gray-100 mb-4">
                            <div class="flex items-center space-x-4">
                                <div class="flex items-center text-gray-600">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                                    </svg>
                                    <span class="text-sm font-medium">4 Beds</span>
                                </div>
                                <div class="flex items-center text-gray-600">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"></path>
                                    </svg>
                                    <span class="text-sm font-medium">3 Baths</span>
                                </div>
                                <div class="flex items-center text-gray-600">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4"></path>
                                    </svg>
                                    <span class="text-sm font-medium">2500 sq ft</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Touring Fee -->
                        <div class="bg-purple-50 border border-purple-200 rounded-lg p-4 mb-5">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm font-medium text-purple-800">Touring Fee</p>
                                    <p class="text-xs text-purple-600">One-time fee</p>
                                </div>
                                <p class="text-lg font-bold text-purple-600">UGX 50,000</p>
                            </div>
                        </div>
                        
                        <!-- Action Buttons -->
                        <div class="flex space-x-3 mb-5 mt-2" onclick="event.stopPropagation()">
                            <button onclick="playAudio('home-3', 'Luxury Villa with Pool', 'Spacious family home with modern amenities and private pool.')" class="flex-1 bg-purple-500 hover:bg-purple-600 text-white py-3 px-4 rounded-lg text-base font-medium transition-colors duration-200 flex items-center justify-center shadow-md hover:shadow-lg">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 14.5v-9l6 4.5-6 4.5z"/>
                                </svg>
                                Audio
                            </button>
                            <a href="{{ route('properties.index') }}" class="flex-1 bg-blue-500 hover:bg-blue-600 text-white py-3 px-4 rounded-lg text-base font-medium transition-colors duration-200 flex items-center justify-center shadow-md hover:shadow-lg">
                                View Details
                            </a>
                        </div>
                        
                        <!-- WhatsApp Button -->
                        <div class="mt-2" onclick="event.stopPropagation()">
                            <a href="https://wa.me/256759983853?text=Hi%20I%20would%20like%20to%20book%20a%20tour%20for%20Luxury%20Villa%20with%20Pool" target="_blank" class="w-full bg-green-500 hover:bg-green-600 text-white py-3 px-4 rounded-lg text-base font-semibold transition-colors duration-200 flex items-center justify-center shadow-md hover:shadow-lg">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
                                </svg>
                                Book Tour
                            </a>
                        </div>
                    </div>
                </a>
            </div>
            
            <div class="text-center mt-12">
                <a href="{{ route('properties.index') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg text-lg font-semibold transition-colors">
                    View All Properties
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-16 bg-gradient-to-br from-blue-50 to-indigo-100 relative overflow-hidden">
        <!-- Background Graphics -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-0 left-0 w-full h-full" style="background-image: url('data:image/svg+xml,%3Csvg width="100" height="100" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="%23000000" fill-opacity="0.1"%3E%3Cpath d="M50 50c0-13.8-11.2-25-25-25s-25 11.2-25 25 11.2 25 25 25 25-11.2 25-25zm50 0c0-13.8-11.2-25-25-25s-25 11.2-25 25 11.2 25 25 25 25-11.2 25-25z"/%3E%3C/g%3E%3C/svg%3E');"></div>
        </div>
        
        <!-- Floating Graphics -->
        <div class="absolute top-10 right-10 w-24 h-24 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-full opacity-20 animate-pulse"></div>
        <div class="absolute bottom-10 left-10 w-32 h-32 bg-gradient-to-br from-pink-400 to-purple-500 rounded-full opacity-15 animate-bounce"></div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <div class="inline-flex items-center bg-gradient-to-r from-yellow-100 to-orange-100 text-orange-800 rounded-full px-4 py-2 mb-4 text-sm font-semibold">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z"/>
                    </svg>
                    Customer Reviews
                </div>
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-800 mb-4">What Our Customers Say</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">Don't just take our word for it. Here's what our satisfied customers have to say about their experience.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-white rounded-2xl p-8 shadow-xl border border-gray-100 relative">
                    <div class="absolute -top-4 left-8 bg-gradient-to-br from-blue-500 to-blue-600 w-12 h-12 rounded-full flex items-center justify-center shadow-lg">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                        </svg>
                    </div>
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6 leading-relaxed">"RisiRent made finding my dream apartment so easy! The virtual tour feature was amazing and saved me so much time. Highly recommended!"</p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-gradient-to-br from-blue-400 to-blue-600 rounded-full flex items-center justify-center text-white font-bold text-lg mr-4">
                            SM
                        </div>
                        <div>
                            <div class="font-semibold text-gray-800">Sarah Mukisa</div>
                            <div class="text-sm text-gray-500">Kampala</div>
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 2 -->
                <div class="bg-white rounded-2xl p-8 shadow-xl border border-gray-100 relative">
                    <div class="absolute -top-4 left-8 bg-gradient-to-br from-green-500 to-green-600 w-12 h-12 rounded-full flex items-center justify-center shadow-lg">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                        </svg>
                    </div>
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6 leading-relaxed">"The customer service is outstanding! They helped me find the perfect house in Ntinda within just a week. The platform is so user-friendly."</p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-gradient-to-br from-green-400 to-green-600 rounded-full flex items-center justify-center text-white font-bold text-lg mr-4">
                            JK
                        </div>
                        <div>
                            <div class="font-semibold text-gray-800">John Kato</div>
                            <div class="text-sm text-gray-500">Ntinda</div>
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 3 -->
                <div class="bg-white rounded-2xl p-8 shadow-xl border border-gray-100 relative">
                    <div class="absolute -top-4 left-8 bg-gradient-to-br from-purple-500 to-purple-600 w-12 h-12 rounded-full flex items-center justify-center shadow-lg">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                        </svg>
                    </div>
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6 leading-relaxed">"As a property owner, RisiRent has been fantastic for listing my properties. The platform is professional and I've had great success finding quality tenants."</p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-gradient-to-br from-purple-400 to-purple-600 rounded-full flex items-center justify-center text-white font-bold text-lg mr-4">
                            MN
                        </div>
                        <div>
                            <div class="font-semibold text-gray-800">Mary Namukasa</div>
                            <div class="text-sm text-gray-500">Property Owner</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section id="how-it-works" class="py-16 bg-gradient-to-br from-blue-50 to-indigo-100 relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-0 left-0 w-full h-full" style="background-image: url('data:image/svg+xml,%3Csvg width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="%23000000" fill-opacity="0.1"%3E%3Cpath d="M20 20c0-5.5-4.5-10-10-10s-10 4.5-10 10 4.5 10 10 10 10-4.5 10-10zm10 0c0-5.5-4.5-10-10-10s-10 4.5-10 10 4.5 10 10 10 10-4.5 10-10z"/%3E%3C/g%3E%3C/svg%3E');"></div>
        </div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <div class="inline-flex items-center bg-blue-100 text-blue-800 rounded-full px-4 py-2 mb-4 text-sm font-semibold">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                    Simple Process
                </div>
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-800 mb-4">How RisiRent Works</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">Get started in just three simple steps and find your perfect property in no time.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-12">
                <div class="relative text-center group">
                    <!-- Connection Line -->
                    <div class="hidden md:block absolute top-16 left-1/2 w-full h-0.5 bg-gradient-to-r from-blue-300 to-orange-300 transform translate-x-1/2 z-0"></div>
                    
                    <div class="relative bg-white rounded-2xl p-8 shadow-xl border border-gray-100 group-hover:shadow-2xl transition-all duration-300 transform group-hover:-translate-y-2">
                        <div class="bg-gradient-to-br from-blue-500 to-blue-600 w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-lg">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                        <div class="absolute -top-4 left-1/2 transform -translate-x-1/2 bg-blue-600 text-white w-8 h-8 rounded-full flex items-center justify-center text-sm font-bold shadow-lg">
                            1
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-4">Browse Properties</h3>
                        <p class="text-gray-600 leading-relaxed">Search through our extensive collection of verified properties with detailed photos, virtual tours, and comprehensive information.</p>
                    </div>
                </div>
                
                <div class="relative text-center group">
                    <!-- Connection Line -->
                    <div class="hidden md:block absolute top-16 left-1/2 w-full h-0.5 bg-gradient-to-r from-orange-300 to-green-300 transform translate-x-1/2 z-0"></div>
                    
                    <div class="relative bg-white rounded-2xl p-8 shadow-xl border border-gray-100 group-hover:shadow-2xl transition-all duration-300 transform group-hover:-translate-y-2">
                        <div class="bg-gradient-to-br from-orange-500 to-orange-600 w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-lg">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div class="absolute -top-4 left-1/2 transform -translate-x-1/2 bg-orange-600 text-white w-8 h-8 rounded-full flex items-center justify-center text-sm font-bold shadow-lg">
                            2
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-4">Book a Tour</h3>
                        <p class="text-gray-600 leading-relaxed">Schedule a virtual or in-person tour to see the property firsthand and ask any questions you might have.</p>
                    </div>
                </div>
                
                <div class="relative text-center group">
                    <div class="relative bg-white rounded-2xl p-8 shadow-xl border border-gray-100 group-hover:shadow-2xl transition-all duration-300 transform group-hover:-translate-y-2">
                        <div class="bg-gradient-to-br from-green-500 to-green-600 w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-lg">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div class="absolute -top-4 left-1/2 transform -translate-x-1/2 bg-green-600 text-white w-8 h-8 rounded-full flex items-center justify-center text-sm font-bold shadow-lg">
                            3
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-4">Rent with Confidence</h3>
                        <p class="text-gray-600 leading-relaxed">Complete your rental application and move into your new home with our secure, transparent process.</p>
                    </div>
                </div>
            </div>
            
            <!-- Call to Action -->
            <div class="text-center mt-12">
                <a href="{{ route('properties.index') }}" class="inline-flex items-center bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white px-8 py-4 rounded-xl text-lg font-semibold transition-all duration-300 transform hover:scale-105 shadow-xl hover:shadow-2xl">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                    Start Your Search Now
                </a>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-gradient-to-br from-blue-600 via-blue-700 to-blue-800 text-white relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 left-0 w-full h-full" style="background-image: url('data:image/svg+xml,%3Csvg width="80" height="80" viewBox="0 0 80 80" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="%23ffffff" fill-opacity="0.1"%3E%3Ccircle cx="40" cy="40" r="3"/%3E%3C/g%3E%3C/svg%3E');"></div>
        </div>
        
        <!-- Decorative Elements -->
        <div class="absolute top-20 right-20 w-40 h-40 bg-orange-400 rounded-full opacity-20 animate-pulse"></div>
        <div class="absolute bottom-20 left-20 w-32 h-32 bg-yellow-400 rounded-full opacity-15 animate-bounce"></div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="inline-flex items-center bg-white/10 backdrop-blur-sm rounded-full px-4 py-2 mb-6 text-sm font-medium">
                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                </svg>
                Join 10,000+ Happy Customers
            </div>
            
            <h2 class="text-4xl sm:text-5xl font-bold mb-6 leading-tight">
                Ready to Find Your
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-400 to-yellow-400">Perfect Property?</span>
            </h2>
            <p class="text-xl sm:text-2xl mb-10 text-blue-100 max-w-3xl mx-auto leading-relaxed">
                Join thousands of satisfied customers who found their dream homes with RisiRent. 
                <span class="text-orange-300 font-semibold">Your perfect property is just a click away!</span>
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="{{ route('properties.index') }}" class="group bg-gradient-to-r from-orange-500 to-orange-600 hover:from-orange-600 hover:to-orange-700 text-white px-10 py-4 rounded-xl text-lg font-semibold transition-all duration-300 transform hover:scale-105 shadow-xl hover:shadow-2xl">
                    <span class="flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                        Browse Properties Now
                    </span>
                </a>
                <a href="{{ route('contact') }}" class="group border-2 border-white text-white hover:bg-white hover:text-blue-600 px-10 py-4 rounded-xl text-lg font-semibold transition-all duration-300 transform hover:scale-105 backdrop-blur-sm">
                    <span class="flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        Contact Us
                    </span>
                </a>
            </div>
            
            <!-- Trust Indicators -->
            <div class="mt-12 pt-8 border-t border-white/20">
                <p class="text-sm text-blue-200 mb-4">Trusted by property owners and renters across Uganda</p>
                <div class="flex justify-center items-center space-x-8 opacity-60">
                    <div class="text-center">
                        <div class="text-2xl font-bold text-white">500+</div>
                        <div class="text-xs text-blue-200">Properties</div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl font-bold text-white">10K+</div>
                        <div class="text-xs text-blue-200">Happy Customers</div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl font-bold text-white">50+</div>
                        <div class="text-xs text-blue-200">Cities</div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl font-bold text-white">24/7</div>
                        <div class="text-xs text-blue-200">Support</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Floating WhatsApp Button -->
    <div class="fixed bottom-6 right-6 z-50">
        <a href="https://wa.me/256759983853?text=Hi%20I%20would%20like%20to%20know%20more%20about%20RisiRent%20properties" 
           target="_blank" 
           class="bg-green-500 hover:bg-green-600 text-white p-4 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-110 animate-pulse">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
            </svg>
        </a>
        
        <!-- Tooltip -->
        <div class="absolute bottom-full right-0 mb-2 hidden group-hover:block">
            <div class="bg-gray-800 text-white text-xs rounded py-1 px-2 whitespace-nowrap">
                Chat with us on WhatsApp
            </div>
        </div>
    </div>
</x-app-layout>
