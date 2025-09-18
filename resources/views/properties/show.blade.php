<x-app-layout title="{{ $property->title }} - ZippyRent" description="{{ Str::limit($property->description, 160) }}">
    <div class="bg-gray-50 min-h-screen">
        <!-- Property Header -->
        <div class="bg-white shadow-sm">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 sm:py-6">
                <nav class="flex" aria-label="Breadcrumb">
                    <ol class="flex items-center space-x-2 sm:space-x-4 overflow-x-auto">
                        <li class="flex-shrink-0">
                            <a href="{{ route('home') }}" class="text-gray-400 hover:text-gray-500 text-sm sm:text-base">Home</a>
                        </li>
                        <li class="flex-shrink-0">
                            <div class="flex items-center">
                                <svg class="flex-shrink-0 h-4 w-4 sm:h-5 sm:w-5 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <a href="{{ route('properties.index') }}" class="ml-2 sm:ml-4 text-gray-400 hover:text-gray-500 text-sm sm:text-base">Properties</a>
                            </div>
                        </li>
                        <li class="flex-shrink-0">
                            <div class="flex items-center">
                                <svg class="flex-shrink-0 h-4 w-4 sm:h-5 sm:w-5 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="ml-2 sm:ml-4 text-gray-500 text-sm sm:text-base truncate max-w-[150px] sm:max-w-none">{{ $property->title }}</span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 sm:py-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 sm:gap-8">
                <!-- Main Content -->
                <div class="lg:col-span-2">
                    <!-- Property Images -->
                    <div class="bg-white rounded-lg shadow-sm overflow-hidden mb-8">
                        @if($property->images && count($property->images) > 0)
                            <div class="relative">
                                <img src="{{ Storage::url($property->images[0]) }}" alt="{{ $property->title }}" class="w-full h-96 object-cover">
                                @if($property->is_featured)
                                    <div class="absolute top-4 right-4 bg-orange-500 text-white px-3 py-1 rounded-full text-sm font-semibold">
                                        Featured
                                    </div>
                                @endif
                            </div>
                            
                            @if(count($property->images) > 1)
                                <div class="p-4">
                                    <div class="grid grid-cols-4 gap-2">
                                        @foreach($property->images as $index => $image)
                                            <img src="{{ Storage::url($image) }}" alt="{{ $property->title }}" class="w-full h-20 object-cover rounded cursor-pointer hover:opacity-75">
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                        @else
                            <div class="h-96 bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center">
                                <div class="text-center text-white">
                                    <svg class="mx-auto h-12 w-12 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                    </svg>
                                    <p class="text-lg">No images available</p>
                                </div>
                            </div>
                        @endif
                    </div>

                    <!-- Video Section -->
                    @if($property->video_url || $property->video_path)
                        <div id="video" class="bg-white rounded-lg shadow-sm p-6 mb-8">
                            <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                                <svg class="w-6 h-6 mr-2 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8 5v14l11-7z"/>
                                </svg>
                                Property Video Tour
                            </h2>
                            
                            @php
                                $videoUrl = $property->video_url;
                                $isYouTube = false;
                                $youtubeEmbedUrl = null;
                                
                                // Check if it's a YouTube URL
                                if (strpos($videoUrl, 'youtube.com/watch') !== false || strpos($videoUrl, 'youtu.be/') !== false) {
                                    $isYouTube = true;
                                    // Extract video ID from YouTube URL
                                    if (strpos($videoUrl, 'youtube.com/watch') !== false) {
                                        parse_str(parse_url($videoUrl, PHP_URL_QUERY), $query);
                                        $videoId = $query['v'] ?? null;
                                    } else {
                                        $videoId = substr(parse_url($videoUrl, PHP_URL_PATH), 1);
                                    }
                                    
                                    if ($videoId) {
                                        $youtubeEmbedUrl = "https://www.youtube.com/embed/{$videoId}";
                                    }
                                }
                            @endphp
                            
                            @if($isYouTube && $youtubeEmbedUrl)
                                <!-- YouTube Video Embed -->
                                <div class="relative bg-black rounded-lg overflow-hidden">
                                    <div class="aspect-w-16 aspect-h-9">
                                        <iframe 
                                            src="{{ $youtubeEmbedUrl }}" 
                                            class="w-full h-64 sm:h-80 lg:h-96"
                                            frameborder="0" 
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                            allowfullscreen
                                            loading="lazy"
                                        ></iframe>
                                    </div>
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent pointer-events-none"></div>
                                </div>
                                <p class="text-sm text-gray-600 mt-3">
                                    <svg class="w-4 h-4 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                    </svg>
                                    Watch the full property tour on YouTube
                                </p>
                                <div class="mt-4">
                                    <a href="{{ $videoUrl }}" target="_blank" class="inline-flex items-center text-red-600 hover:text-red-700 font-medium">
                                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                                        </svg>
                                        View on YouTube
                                    </a>
                                </div>
                            @elseif($property->video_path)
                                <!-- Local Video File -->
                                <div class="relative bg-black rounded-lg overflow-hidden">
                                    <video 
                                        class="w-full h-48 sm:h-64 lg:h-96 object-cover" 
                                        controls 
                                        preload="metadata"
                                        poster="{{ $property->main_image ? Storage::url($property->main_image) : '' }}"
                                    >
                                        <source src="{{ Storage::url($property->video_path) }}" type="video/mp4">
                                        <source src="{{ Storage::url($property->video_path) }}" type="video/webm">
                                        <source src="{{ Storage::url($property->video_path) }}" type="video/ogg">
                                        Your browser does not support the video tag.
                                    </video>
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent pointer-events-none"></div>
                                </div>
                                <p class="text-sm text-gray-600 mt-3">
                                    <svg class="w-4 h-4 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                    </svg>
                                    Take a virtual tour of this property
                                </p>
                            @elseif($videoUrl)
                                <!-- Direct Video URL -->
                                <div class="relative bg-black rounded-lg overflow-hidden">
                                    <video 
                                        class="w-full h-48 sm:h-64 lg:h-96 object-cover" 
                                        controls 
                                        preload="metadata"
                                        poster="{{ $property->main_image ? Storage::url($property->main_image) : '' }}"
                                    >
                                        <source src="{{ $videoUrl }}" type="video/mp4">
                                        <source src="{{ $videoUrl }}" type="video/webm">
                                        <source src="{{ $videoUrl }}" type="video/ogg">
                                        Your browser does not support the video tag.
                                    </video>
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent pointer-events-none"></div>
                                </div>
                                <p class="text-sm text-gray-600 mt-3">
                                    <svg class="w-4 h-4 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                    </svg>
                                    Take a virtual tour of this property
                                </p>
                            @endif
                        </div>
                    @endif

                    <!-- Property Details -->
                    <div class="bg-white rounded-lg shadow-sm p-4 sm:p-6 mb-6 sm:mb-8">
                        <h1 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">{{ $property->title }}</h1>
                        <div class="flex flex-col sm:flex-row sm:items-center space-y-2 sm:space-y-0 sm:space-x-6 mb-6">
                            <div class="flex items-center text-gray-600">
                                <svg class="w-4 h-4 sm:w-5 sm:h-5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <span class="text-sm sm:text-base">{{ $property->location }}</span>
                            </div>
                            <div class="flex items-center text-gray-600">
                                <svg class="w-4 h-4 sm:w-5 sm:h-5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                </svg>
                                <span class="text-sm sm:text-base">{{ ucfirst($property->type) }}</span>
                            </div>
                        </div>
                        
                        <div class="prose max-w-none">
                            <p class="text-gray-700 leading-relaxed">{{ $property->description }}</p>
                        </div>
                    </div>


                    <!-- Social Sharing -->
                    <div class="bg-white rounded-lg shadow-sm p-4 sm:p-6">
                        <h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-4">Share this Property</h2>
                        <div class="flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-4">
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}" target="_blank" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition-colors flex items-center space-x-2">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                </svg>
                                <span>Facebook</span>
                            </a>
                            <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->url()) }}&text={{ urlencode($property->title) }}" target="_blank" class="bg-blue-400 hover:bg-blue-500 text-white px-4 py-2 rounded-lg transition-colors flex items-center space-x-2">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                </svg>
                                <span>Twitter</span>
                            </a>
                            <a href="https://wa.me/?text={{ urlencode($property->title . ' - ' . request()->url()) }}" target="_blank" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg transition-colors flex items-center space-x-2">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
                                </svg>
                                <span>WhatsApp</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="lg:col-span-1 order-first lg:order-last">
                    <!-- Price & Contact -->
                    <div class="bg-white rounded-lg shadow-sm p-4 sm:p-6 mb-4 sm:mb-6 lg:sticky lg:top-6">
                        <div class="text-center mb-4 sm:mb-6">
                            <p class="text-3xl sm:text-4xl font-bold text-gray-900">{{ $property->formatted_price }}</p>
                            <p class="text-gray-600 text-sm sm:text-base">per month</p>
                        </div>
                        
                        <!-- Touring Fee -->
                        <div class="bg-purple-50 border border-purple-200 rounded-xl p-5 mb-6">
                            <div class="text-center">
                                <h3 class="text-lg font-semibold text-purple-800 mb-3">Touring Fee</h3>
                                <p class="text-2xl font-bold text-purple-600">UGX 50,000</p>
                                <p class="text-sm text-purple-600 mt-2">One-time fee</p>
                            </div>
                        </div>
                        
                        <div class="space-y-4 mt-6">
                            <button class="w-full bg-orange-500 hover:bg-orange-600 text-white py-4 px-6 rounded-xl font-semibold transition-colors text-base shadow-lg hover:shadow-xl transform hover:scale-105">
                                Book a Tour
                            </button>
                            <a href="https://wa.me/256759983853?text={{ urlencode('Hi, I am interested in this property: ' . $property->title . ' - ' . request()->url()) }}" target="_blank" class="w-full bg-green-500 hover:bg-green-600 text-white py-4 px-6 rounded-xl font-semibold transition-colors flex items-center justify-center space-x-3 text-base shadow-lg hover:shadow-xl transform hover:scale-105">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
                                </svg>
                                <span>Contact via WhatsApp</span>
                            </a>
                        </div>
                    </div>

                    <!-- Property Details -->
                    <div class="bg-white rounded-lg shadow-sm p-4 sm:p-6">
                        <h3 class="text-base sm:text-lg font-semibold text-gray-900 mb-4">Property Details</h3>
                        <div class="space-y-2 sm:space-y-3">
                            <div class="flex justify-between">
                                <span class="text-gray-600 text-sm sm:text-base">Type:</span>
                                <span class="font-medium text-sm sm:text-base">{{ ucfirst($property->type) }}</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600 text-sm sm:text-base">Bedrooms:</span>
                                <span class="font-medium text-sm sm:text-base">{{ $property->bedrooms }}</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600 text-sm sm:text-base">Bathrooms:</span>
                                <span class="font-medium text-sm sm:text-base">{{ $property->bathrooms }}</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600 text-sm sm:text-base">Area:</span>
                                <span class="font-medium text-sm sm:text-base">{{ $property->area }} sq ft</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600 text-sm sm:text-base">Available:</span>
                                <span class="font-medium text-green-600 text-sm sm:text-base">{{ $property->is_available ? 'Yes' : 'No' }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
