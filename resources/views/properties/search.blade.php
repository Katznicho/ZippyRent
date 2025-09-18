<x-app-layout title="Search Properties - ZippyRent" description="Find your perfect property with our advanced search and filtering options.">
    <div class="bg-gray-50 min-h-screen">
        <!-- Search Header -->
        <div class="bg-white shadow-sm border-b">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
                <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between">
                    <div class="mb-4 lg:mb-0">
                        <h1 class="text-2xl sm:text-3xl font-bold text-gray-900">Search Properties</h1>
                        <p class="text-gray-600 mt-1">Find your perfect home with our advanced search</p>
                    </div>
                    <div class="flex items-center space-x-4">
                        <span class="text-sm text-gray-600">{{ $properties->total() }} properties found</span>
                        <button id="toggle-filters" class="lg:hidden bg-blue-600 text-white px-4 py-2 rounded-lg font-medium">
                            <svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.414A1 1 0 013 6.707V4z"></path>
                            </svg>
                            Filters
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
            <div class="flex flex-col lg:flex-row gap-6">
                <!-- Search Filters Sidebar -->
                <div class="lg:w-1/4">
                    <div id="filters-sidebar" class="bg-white rounded-lg shadow-sm p-6 lg:block hidden">
                        <h2 class="text-lg font-semibold text-gray-900 mb-4">Search Filters</h2>
                        
                        <form method="GET" action="{{ route('properties.search') }}" class="space-y-6">
                            <!-- Keyword Search -->
                            <div>
                                <label for="keyword" class="block text-sm font-medium text-gray-700 mb-2">Keyword</label>
                                <input type="text" id="keyword" name="keyword" value="{{ request('keyword') }}"
                                       class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                       placeholder="Search by title, description, or location">
                            </div>

                            <!-- Property Type -->
                            <div>
                                <label for="type" class="block text-sm font-medium text-gray-700 mb-2">Property Type</label>
                                <select id="type" name="type" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                    <option value="">All Types</option>
                                    @foreach($filterOptions['types'] as $type)
                                        <option value="{{ $type }}" {{ request('type') == $type ? 'selected' : '' }}>
                                            {{ ucfirst($type) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Location -->
                            <div>
                                <label for="location" class="block text-sm font-medium text-gray-700 mb-2">Location</label>
                                <select id="location" name="location" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                    <option value="">All Locations</option>
                                    @foreach($filterOptions['locations'] as $location)
                                        <option value="{{ $location }}" {{ request('location') == $location ? 'selected' : '' }}>
                                            {{ $location }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Price Range -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Price Range (UGX)</label>
                                <div class="grid grid-cols-2 gap-2">
                                    <input type="number" name="min_price" value="{{ request('min_price') }}"
                                           class="px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                           placeholder="Min Price">
                                    <input type="number" name="max_price" value="{{ request('max_price') }}"
                                           class="px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                           placeholder="Max Price">
                                </div>
                                <div class="text-xs text-gray-500 mt-1">
                                    Range: UGX {{ number_format($filterOptions['price_range']['min']) }} - UGX {{ number_format($filterOptions['price_range']['max']) }}
                                </div>
                            </div>

                            <!-- Bedrooms -->
                            <div>
                                <label for="bedrooms" class="block text-sm font-medium text-gray-700 mb-2">Minimum Bedrooms</label>
                                <select id="bedrooms" name="bedrooms" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                    <option value="">Any</option>
                                    @foreach($filterOptions['bedroom_counts'] as $bedrooms)
                                        <option value="{{ $bedrooms }}" {{ request('bedrooms') == $bedrooms ? 'selected' : '' }}>
                                            {{ $bedrooms }}+ Bedrooms
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Bathrooms -->
                            <div>
                                <label for="bathrooms" class="block text-sm font-medium text-gray-700 mb-2">Minimum Bathrooms</label>
                                <select id="bathrooms" name="bathrooms" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                    <option value="">Any</option>
                                    @foreach($filterOptions['bathroom_counts'] as $bathrooms)
                                        <option value="{{ $bathrooms }}" {{ request('bathrooms') == $bathrooms ? 'selected' : '' }}>
                                            {{ $bathrooms }}+ Bathrooms
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Area Range -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Area Range (sq ft)</label>
                                <div class="grid grid-cols-2 gap-2">
                                    <input type="number" name="min_area" value="{{ request('min_area') }}"
                                           class="px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                           placeholder="Min Area">
                                    <input type="number" name="max_area" value="{{ request('max_area') }}"
                                           class="px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                           placeholder="Max Area">
                                </div>
                            </div>

                            <!-- Featured Only -->
                            <div class="flex items-center">
                                <input type="checkbox" id="featured" name="featured" value="1" {{ request('featured') ? 'checked' : '' }}
                                       class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                <label for="featured" class="ml-2 block text-sm text-gray-700">
                                    Featured Properties Only
                                </label>
                            </div>

                            <!-- Search Buttons -->
                            <div class="flex flex-col space-y-2">
                                <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg font-medium transition-colors">
                                    <svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                    </svg>
                                    Search Properties
                                </button>
                                <a href="{{ route('properties.search') }}" class="w-full bg-gray-200 hover:bg-gray-300 text-gray-800 px-4 py-2 rounded-lg font-medium transition-colors text-center">
                                    Clear Filters
                                </a>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Search Results -->
                <div class="lg:w-3/4">
                    <!-- Sort Options -->
                    <div class="bg-white rounded-lg shadow-sm p-4 mb-6">
                        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between">
                            <div class="mb-2 sm:mb-0">
                                <span class="text-sm text-gray-600">Sort by:</span>
                            </div>
                            <div class="flex space-x-2">
                                <a href="{{ request()->fullUrlWithQuery(['sort' => 'latest']) }}" 
                                   class="px-3 py-1 text-sm rounded-full {{ request('sort', 'latest') == 'latest' ? 'bg-blue-100 text-blue-800' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}">
                                    Latest
                                </a>
                                <a href="{{ request()->fullUrlWithQuery(['sort' => 'price_low']) }}" 
                                   class="px-3 py-1 text-sm rounded-full {{ request('sort') == 'price_low' ? 'bg-blue-100 text-blue-800' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}">
                                    Price: Low to High
                                </a>
                                <a href="{{ request()->fullUrlWithQuery(['sort' => 'price_high']) }}" 
                                   class="px-3 py-1 text-sm rounded-full {{ request('sort') == 'price_high' ? 'bg-blue-100 text-blue-800' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}">
                                    Price: High to Low
                                </a>
                                <a href="{{ request()->fullUrlWithQuery(['sort' => 'area_large']) }}" 
                                   class="px-3 py-1 text-sm rounded-full {{ request('sort') == 'area_large' ? 'bg-blue-100 text-blue-800' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}">
                                    Largest Area
                                </a>
                                <a href="{{ request()->fullUrlWithQuery(['sort' => 'views']) }}" 
                                   class="px-3 py-1 text-sm rounded-full {{ request('sort') == 'views' ? 'bg-blue-100 text-blue-800' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}">
                                    Most Viewed
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Properties Grid -->
                    @if($properties->count() > 0)
                        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6 mb-8">
                            @foreach($properties as $property)
                                <div class="bg-white rounded-2xl shadow-lg overflow-hidden transition-shadow hover:shadow-xl">
                                    <!-- Property Image -->
                                    <div class="h-64 bg-gradient-to-br from-gray-100 to-gray-200 relative overflow-hidden">
                                        @if($property->main_image)
                                            <img src="{{ Storage::url($property->main_image) }}" alt="{{ $property->title }}" class="w-full h-full object-cover transition-transform duration-300 hover:scale-105">
                                        @else
                                            <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-blue-50 to-indigo-100">
                                                <div class="text-center">
                                                    <svg class="w-16 h-16 text-gray-400 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                                    </svg>
                                                    <p class="text-gray-500 text-sm">No image available</p>
                                                </div>
                                            </div>
                                        @endif
                                        
                                        <!-- Property Type Badge -->
                                        <div class="absolute top-4 left-4">
                                            <span class="bg-blue-600 text-white px-3 py-1 rounded-full text-xs font-semibold uppercase tracking-wide">
                                                {{ ucfirst($property->type) }}
                                            </span>
                                        </div>
                                        
                                        <!-- Featured Badge -->
                                        @if($property->is_featured)
                                            <div class="absolute top-4 right-4">
                                                <span class="bg-gradient-to-r from-orange-500 to-red-500 text-white px-3 py-1 rounded-full text-xs font-bold shadow-lg">
                                                    ⭐ Featured
                                                </span>
                                            </div>
                                        @endif
                                        
                                        <!-- Price Overlay -->
                                        <div class="absolute bottom-4 left-4 right-4">
                                            <div class="bg-white/95 backdrop-blur-sm rounded-xl p-3 shadow-lg">
                                                <div class="flex items-center justify-between">
                                                    <div>
                                                        <p class="text-2xl font-bold text-gray-900">{{ $property->formatted_price }}</p>
                                                        <p class="text-sm text-gray-600">per month</p>
                                                    </div>
                                                    <div class="text-right">
                                                        <p class="text-xs text-gray-500">Visiting Fee</p>
                                                        <p class="text-sm font-semibold text-purple-600">UGX 50,000</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Property Details -->
                                    <div class="p-6">
                                        <!-- Title and Location -->
                                        <div class="mb-4">
                                            <h3 class="text-xl font-bold text-gray-900 mb-2 leading-tight">{{ $property->title }}</h3>
                                            <div class="flex items-center text-gray-600 mb-2">
                                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                </svg>
                                                <span class="text-sm font-medium">{{ $property->location }}</span>
                                            </div>
                                            <p class="text-gray-600 text-sm leading-relaxed">{{ Str::limit($property->description, 100) }}</p>
                                        </div>
                                        
                                        <!-- Property Features -->
                                        <div class="flex items-center justify-between py-3 border-y border-gray-100 mb-4">
                                            <div class="flex items-center space-x-4">
                                                <div class="flex items-center text-gray-600">
                                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5a2 2 0 012-2h4a2 2 0 012 2v2H8V5z"></path>
                                                    </svg>
                                                    <span class="text-sm font-medium">{{ $property->bedrooms }} Bed{{ $property->bedrooms > 1 ? 's' : '' }}</span>
                                                </div>
                                                <div class="flex items-center text-gray-600">
                                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"></path>
                                                    </svg>
                                                    <span class="text-sm font-medium">{{ $property->bathrooms }} Bath{{ $property->bathrooms > 1 ? 's' : '' }}</span>
                                                </div>
                                                <div class="flex items-center text-gray-600">
                                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4"></path>
                                                    </svg>
                                                    <span class="text-sm font-medium">{{ $property->area }} sq ft</span>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Property Stats -->
                                        <div class="flex items-center justify-between text-sm text-gray-500 mb-6">
                                            <div class="flex items-center">
                                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                                <span>Posted {{ $property->created_at->diffForHumans() }}</span>
                                            </div>
                                            <div class="flex items-center">
                                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                                </svg>
                                                <span>{{ $property->views ?? 0 }} views</span>
                                            </div>
                                        </div>
                                        
                                        <!-- Action Buttons -->
                                        <div class="flex space-x-2">
                                            @if($property->video_url || $property->video_path)
                                                <a href="{{ route('properties.show', $property) }}#video" class="bg-red-500 hover:bg-red-600 text-white p-3 rounded-xl transition-all duration-200 transform hover:scale-105 shadow-lg hover:shadow-xl flex items-center justify-center" title="Watch Video">
                                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                                        <path d="M8 5v14l11-7z"/>
                                                    </svg>
                                                </a>
                                            @endif
                                            <a href="{{ route('properties.show', $property) }}" class="flex-1 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white text-center py-3 px-4 rounded-xl text-sm font-semibold transition-all duration-200 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                                View Details
                                            </a>
                                            <a href="https://wa.me/256759983853?text=Hi%20I%20would%20like%20to%20book%20a%20tour%20for%20{{ urlencode($property->title) }}" target="_blank" class="flex-1 bg-gradient-to-r from-green-500 to-green-600 hover:from-green-600 hover:to-green-700 text-white text-center py-3 px-4 rounded-xl text-sm font-semibold transition-all duration-200 transform hover:scale-105 shadow-lg hover:shadow-xl inline-flex items-center justify-center gap-2">
                                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
                                                </svg>
                                                Book Tour
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- Pagination -->
                        <div class="flex justify-center">
                            {{ $properties->links() }}
                        </div>
                    @else
                        <!-- No Results -->
                        <div class="bg-white rounded-lg shadow-sm p-12 text-center">
                            <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">No Properties Found</h3>
                            <p class="text-gray-600 mb-4">Try adjusting your search criteria or browse all properties.</p>
                            <a href="{{ route('properties.index') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-medium transition-colors">
                                Browse All Properties
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <script>
        // Mobile filter toggle
        document.getElementById('toggle-filters').addEventListener('click', function() {
            const sidebar = document.getElementById('filters-sidebar');
            sidebar.classList.toggle('hidden');
        });
    </script>
</x-app-layout>


