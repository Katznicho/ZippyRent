<x-app-layout title="Properties - ZippyRent" description="Browse our premium selection of rental properties in Uganda. Find your perfect home with ZippyRent.">
    <div class="min-h-screen bg-gray-50">
        <!-- Hero Section -->
        <div class="bg-gradient-to-r from-blue-600 to-blue-700 text-white py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <h1 class="text-4xl md:text-5xl font-bold mb-4">Premium Properties</h1>
                    <p class="text-xl text-blue-100 mb-8">Discover your perfect home in Uganda</p>
                    
                    <!-- Search Bar -->
                    <div class="max-w-2xl mx-auto">
                        <form action="{{ route('properties.search') }}" method="GET" class="flex flex-col sm:flex-row gap-4">
                            <div class="flex-1">
                                <input type="text" name="keyword" value="{{ request('keyword') }}" placeholder="Search by location, type, or features..." 
                                       class="w-full px-4 py-3 rounded-lg text-gray-900 bg-white border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-300 focus:border-blue-300" style="background-color: white !important; border-color: #d1d5db !important; color: #111827 !important;">
                            </div>
                            <button type="submit" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors duration-200">
                                Search
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Search Results Info -->
        @if(request('keyword'))
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
                <div class="bg-blue-50 border border-blue-200 rounded-lg p-4">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-lg font-semibold text-blue-800">Search Results</h3>
                            <p class="text-blue-600">Found {{ $properties->total() }} properties for "{{ request('keyword') }}"</p>
                        </div>
                        <a href="{{ route('properties.index') }}" class="text-blue-600 hover:text-blue-800 font-medium">
                            Clear Search
                        </a>
                    </div>
                </div>
            </div>
        @endif

        <!-- Properties Grid -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            @if($properties->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($properties as $property)
                        <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-100 group">
                            <!-- Property Header with Color -->
                            <div class="relative h-48 overflow-hidden {{ $property->type === 'apartment' ? 'bg-gradient-to-br from-blue-500 to-blue-600' : ($property->type === 'villa' ? 'bg-gradient-to-br from-amber-600 to-amber-700' : 'bg-gradient-to-br from-blue-500 to-blue-600') }}">
                                @if($property->main_image)
                                    <img src="{{ Storage::url($property->main_image) }}" alt="{{ $property->title }}" class="w-full h-full object-cover opacity-80">
                                @else
                                    <div class="w-full h-full flex items-center justify-center">
                                        <div class="text-center text-white">
                                            <div class="w-16 h-16 bg-white/20 rounded-2xl flex items-center justify-center mx-auto mb-3">
                                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                                </svg>
                                            </div>
                                            <p class="text-white/80 text-sm font-medium">No image available</p>
                                        </div>
                                    </div>
                                @endif
                                
                                <!-- Property Type Badge -->
                                <div class="absolute top-4 left-4">
                                    <span class="{{ $property->type === 'apartment' ? 'bg-blue-600' : ($property->type === 'villa' ? 'bg-amber-600' : 'bg-blue-600') }} text-white px-3 py-1.5 rounded-full text-xs font-bold uppercase tracking-wide">
                                        {{ ucfirst($property->type) }}
                                    </span>
                                </div>
                                
                                <!-- Featured Badge -->
                                @if($property->is_featured)
                                    <div class="absolute top-4 right-4">
                                        <span class="bg-orange-500 text-white px-3 py-1.5 rounded-full text-xs font-bold shadow-lg">
                                            ⭐ Featured
                                        </span>
                                    </div>
                                @endif
                                
                                <!-- Price Overlay -->
                                <div class="absolute bottom-4 left-4 right-4">
                                    <div class="bg-white rounded-2xl p-4 shadow-xl">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <p class="text-2xl font-bold text-gray-900">{{ $property->formatted_price }}</p>
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
                                    <h3 class="text-lg font-bold text-gray-900 mb-3 line-clamp-2">{{ $property->title }}</h3>
                                    <div class="flex items-center text-gray-600 mb-3">
                                        <svg class="w-4 h-4 mr-1 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                        <span class="text-sm">{{ $property->location }}</span>
                                    </div>
                                    <p class="text-gray-600 text-sm line-clamp-2">{{ Str::limit($property->description, 80) }}</p>
                                </div>
                                
                                <!-- Property Features -->
                                <div class="flex items-center justify-between py-4 border-t border-b border-gray-100 mb-5">
                                    <div class="flex items-center text-gray-600">
                                        <svg class="w-4 h-4 mr-1 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5a2 2 0 012-2h4a2 2 0 012 2v2H8V5z"></path>
                                        </svg>
                                        <span class="text-sm font-medium">{{ $property->bedrooms }}</span>
                                    </div>
                                    <div class="flex items-center text-gray-600">
                                        <svg class="w-4 h-4 mr-1 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"></path>
                                        </svg>
                                        <span class="text-sm font-medium">{{ $property->bathrooms }}</span>
                                    </div>
                                    <div class="flex items-center text-gray-600">
                                        <svg class="w-4 h-4 mr-1 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4"></path>
                                        </svg>
                                        <span class="text-sm font-medium">{{ $property->area }} sq ft</span>
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
                                    <button onclick="playAudio('{{ $property->id }}', '{{ addslashes($property->title) }}', '{{ addslashes($property->description) }}')" class="flex-1 bg-purple-500 hover:bg-purple-600 text-white py-3 px-4 rounded-lg text-base font-medium transition-colors duration-200 flex items-center justify-center shadow-md hover:shadow-lg">
                                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 14.5v-9l6 4.5-6 4.5z"/>
                                        </svg>
                                        Audio
                                    </button>
                                    @if($property->video_url || $property->video_path)
                                        <a href="{{ route('properties.show', $property) }}#video" class="flex-1 bg-red-500 hover:bg-red-600 text-white py-3 px-4 rounded-lg text-base font-medium transition-colors duration-200 flex items-center justify-center shadow-md hover:shadow-lg">
                                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M8 5v14l11-7z"/>
                                            </svg>
                                            Video
                                        </a>
                                    @endif
                                    <a href="{{ route('properties.show', $property) }}" class="flex-1 bg-blue-500 hover:bg-blue-600 text-white py-3 px-4 rounded-lg text-base font-medium transition-colors duration-200 flex items-center justify-center shadow-md hover:shadow-lg">
                                        View Details
                                    </a>
                                </div>
                                
                                <!-- WhatsApp Button -->
                                <div class="mt-2">
                                    <a href="https://wa.me/256759983853?text=Hi%20I%20would%20like%20to%20book%20a%20tour%20for%20{{ urlencode($property->title) }}" target="_blank" class="w-full bg-green-500 hover:bg-green-600 text-white py-3 px-4 rounded-lg text-base font-semibold transition-colors duration-200 flex items-center justify-center shadow-md hover:shadow-lg">
                                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
                                        </svg>
                                        Book Tour
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-12">
                    <svg class="w-24 h-24 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                    @if(request('keyword'))
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">No Properties Found</h3>
                        <p class="text-gray-600 mb-4">No properties match your search for "{{ request('keyword') }}". Try different keywords or browse all properties.</p>
                        <a href="{{ route('properties.index') }}" class="inline-flex items-center bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition-colors">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                            </svg>
                            Browse All Properties
                        </a>
                    @else
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">No Properties Available</h3>
                        <p class="text-gray-600">We're working on adding more properties. Check back soon!</p>
                    @endif
                </div>
            @endif
        </div>
    </div>

    <!-- Audio Player Script -->
    <script>
        function playAudio(propertyId, title, description) {
            if ('speechSynthesis' in window) {
                const utterance = new SpeechSynthesisUtterance();
                utterance.text = `Property: ${title}. ${description}`;
                utterance.rate = 0.8;
                utterance.pitch = 1;
                speechSynthesis.speak(utterance);
            } else {
                alert('Speech synthesis not supported in this browser.');
            }
        }
    </script>

    <!-- Floating WhatsApp Button -->
    <div class="fixed bottom-6 right-6 z-50 group">
        <a href="https://wa.me/256759983853?text=Hi%20I%20would%20like%20to%20know%20more%20about%20ZippyRent%20properties" 
           target="_blank" 
           class="bg-green-500 hover:bg-green-600 text-white p-4 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-110 animate-pulse">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
            </svg>
        </a>
        
        <!-- Tooltip -->
        <div class="absolute bottom-full right-0 mb-2 opacity-0 group-hover:opacity-100 transition-opacity duration-200">
            <div class="bg-gray-800 text-white text-xs rounded py-1 px-2 whitespace-nowrap">
                Chat with us on WhatsApp
            </div>
        </div>
    </div>
</x-app-layout>