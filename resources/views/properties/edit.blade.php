<x-app-layout title="Edit Property - RisiRent">
    <div class="bg-gray-50 min-h-screen">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="bg-white rounded-lg shadow-sm">
                <div class="px-6 py-4 border-b border-gray-200">
                    <h1 class="text-2xl font-bold text-gray-900">Edit Property</h1>
                    <p class="text-gray-600 mt-1">Update your property listing details</p>
                </div>
                
                <form method="POST" action="{{ route('admin.properties.update', $property) }}" enctype="multipart/form-data" class="p-6 space-y-6">
                    @csrf
                    @method('PUT')
                    
                    <!-- Property Title -->
                    <div>
                        <label for="title" class="block text-sm font-semibold text-gray-700 mb-2">Property Title *</label>
                        <input type="text" id="title" name="title" required 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('title') border-red-500 @enderror" 
                               placeholder="e.g., Modern 2-Bedroom Apartment in Kololo" value="{{ old('title', $property->title) }}">
                        @error('title')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Description -->
                    <div>
                        <label for="description" class="block text-sm font-semibold text-gray-700 mb-2">Description *</label>
                        <textarea id="description" name="description" rows="4" required 
                                  class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('description') border-red-500 @enderror" 
                                  placeholder="Describe the property features, amenities, and highlights...">{{ old('description', $property->description) }}</textarea>
                        @error('description')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Property Type -->
                    <div>
                        <label for="type" class="block text-sm font-semibold text-gray-700 mb-2">Property Type *</label>
                        <select id="type" name="type" required 
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('type') border-red-500 @enderror">
                            <option value="">Select property type</option>
                            <option value="apartment" {{ old('type', $property->type) == 'apartment' ? 'selected' : '' }}>Apartment</option>
                            <option value="house" {{ old('type', $property->type) == 'house' ? 'selected' : '' }}>House</option>
                            <option value="villa" {{ old('type', $property->type) == 'villa' ? 'selected' : '' }}>Villa</option>
                            <option value="studio" {{ old('type', $property->type) == 'studio' ? 'selected' : '' }}>Studio</option>
                        </select>
                        @error('type')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Price -->
                    <div>
                        <label for="price" class="block text-sm font-semibold text-gray-700 mb-2">Monthly Rent (UGX) *</label>
                        <input type="number" id="price" name="price" step="0.01" min="0" required 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('price') border-red-500 @enderror" 
                               placeholder="e.g., 1200000" value="{{ old('price', $property->price) }}">
                        @error('price')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Location -->
                    <div>
                        <label for="location" class="block text-sm font-semibold text-gray-700 mb-2">Location *</label>
                        <input type="text" id="location" name="location" required 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('location') border-red-500 @enderror" 
                               placeholder="e.g., Kololo, Kampala" value="{{ old('location', $property->location) }}">
                        @error('location')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Property Details Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <!-- Bedrooms -->
                        <div>
                            <label for="bedrooms" class="block text-sm font-semibold text-gray-700 mb-2">Bedrooms *</label>
                            <input type="number" id="bedrooms" name="bedrooms" min="0" required 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('bedrooms') border-red-500 @enderror" 
                                   placeholder="2" value="{{ old('bedrooms', $property->bedrooms) }}">
                            @error('bedrooms')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Bathrooms -->
                        <div>
                            <label for="bathrooms" class="block text-sm font-semibold text-gray-700 mb-2">Bathrooms *</label>
                            <input type="number" id="bathrooms" name="bathrooms" min="0" required 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('bathrooms') border-red-500 @enderror" 
                                   placeholder="2" value="{{ old('bathrooms', $property->bathrooms) }}">
                            @error('bathrooms')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Area -->
                        <div>
                            <label for="area" class="block text-sm font-semibold text-gray-700 mb-2">Area (sq ft) *</label>
                            <input type="number" id="area" name="area" min="0" required 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('area') border-red-500 @enderror" 
                                   placeholder="1200" value="{{ old('area', $property->area) }}">
                            @error('area')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Video URL -->
                    <div>
                        <label for="video_url" class="block text-sm font-semibold text-gray-700 mb-2">Video URL</label>
                        <input type="url" id="video_url" name="video_url" 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('video_url') border-red-500 @enderror" 
                               placeholder="https://www.youtube.com/watch?v=..." value="{{ old('video_url', $property->video_url) }}">
                        <p class="mt-2 text-sm text-gray-500">
                            <svg class="w-4 h-4 inline mr-1 text-red-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                            </svg>
                            Supports YouTube URLs (youtube.com or youtu.be) for property tours
                        </p>
                        @error('video_url')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Video Upload -->
                    <div>
                        <label for="video" class="block text-sm font-semibold text-gray-700 mb-2">Video File (Alternative)</label>
                        <input type="file" id="video" name="video" accept="video/*" 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('video') border-red-500 @enderror">
                        @if($property->video_path)
                            <p class="mt-2 text-sm text-green-600">
                                <svg class="w-4 h-4 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Current video file: {{ basename($property->video_path) }}
                            </p>
                        @endif
                        <p class="mt-2 text-sm text-gray-500">
                            <svg class="w-4 h-4 inline mr-1 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                            </svg>
                            Upload a new video file (MP4, WebM, MOV) - Max 100MB
                        </p>
                        @error('video')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Images -->
                    <div>
                        <label for="images" class="block text-sm font-semibold text-gray-700 mb-2">Property Images</label>
                        <input type="file" id="images" name="images[]" multiple accept="image/*" 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('images') border-red-500 @enderror">
                        @if($property->images && count($property->images) > 0)
                            <p class="mt-2 text-sm text-green-600">
                                <svg class="w-4 h-4 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                {{ count($property->images) }} image(s) currently uploaded
                            </p>
                        @endif
                        <p class="mt-2 text-sm text-gray-500">
                            <svg class="w-4 h-4 inline mr-1 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            Upload new images (JPEG, PNG, GIF) - Max 2MB each
                        </p>
                        @error('images')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Featured Property -->
                    <div class="flex items-center">
                        <input type="checkbox" id="is_featured" name="is_featured" value="1" {{ old('is_featured', $property->is_featured) ? 'checked' : '' }}
                               class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <label for="is_featured" class="ml-2 block text-sm font-medium text-gray-700">
                            <svg class="w-4 h-4 inline mr-1 text-orange-500" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                            Mark as Featured Property
                        </label>
                    </div>

                    <!-- Available -->
                    <div class="flex items-center">
                        <input type="checkbox" id="is_available" name="is_available" value="1" {{ old('is_available', $property->is_available) ? 'checked' : '' }}
                               class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <label for="is_available" class="ml-2 block text-sm font-medium text-gray-700">
                            <svg class="w-4 h-4 inline mr-1 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Property is Available for Rent
                        </label>
                    </div>

                    <!-- Submit Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 pt-6 border-t border-gray-200">
                        <button type="submit" 
                                class="flex-1 bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-semibold transition-colors flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Update Property
                        </button>
                        <a href="{{ route('dashboard') }}" 
                           class="flex-1 bg-gray-200 hover:bg-gray-300 text-gray-800 px-6 py-3 rounded-lg font-semibold transition-colors text-center">
                            Cancel
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>


