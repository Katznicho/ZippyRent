<x-app-layout title="Contact Us - RisiRent">
    <!-- Hero Section -->
    <section class="bg-gradient-to-br from-blue-600 via-blue-700 to-blue-800 text-white py-16 lg:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl lg:text-6xl font-bold mb-6">Contact Us</h1>
                <p class="text-xl lg:text-2xl text-blue-100 max-w-3xl mx-auto">
                    Get in touch with our team. We're here to help you find your perfect home.
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Send us a Message</h2>
                    <p class="text-lg text-gray-600 mb-8">
                        Have questions about our properties or need assistance? Fill out the form below and we'll get back to you within 24 hours.
                    </p>

                    <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                        @csrf
                        
                        <!-- Name -->
                        <div>
                            <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">Full Name</label>
                            <input type="text" id="name" name="name" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors"
                                placeholder="Your full name">
                        </div>

                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Email Address</label>
                            <input type="email" id="email" name="email" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors"
                                placeholder="your.email@example.com">
                        </div>

                        <!-- Phone -->
                        <div>
                            <label for="phone" class="block text-sm font-semibold text-gray-700 mb-2">Phone Number</label>
                            <input type="tel" id="phone" name="phone"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors"
                                placeholder="+256 XXX XXX XXX">
                        </div>

                        <!-- Subject -->
                        <div>
                            <label for="subject" class="block text-sm font-semibold text-gray-700 mb-2">Subject</label>
                            <select id="subject" name="subject" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors">
                                <option value="">Select a subject</option>
                                <option value="property_inquiry">Property Inquiry</option>
                                <option value="general_question">General Question</option>
                                <option value="support">Technical Support</option>
                                <option value="partnership">Partnership</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <!-- Message -->
                        <div>
                            <label for="message" class="block text-sm font-semibold text-gray-700 mb-2">Message</label>
                            <textarea id="message" name="message" rows="5" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors resize-none"
                                placeholder="Tell us how we can help you..."></textarea>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit"
                            class="w-full bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white px-6 py-3 rounded-lg font-semibold transition-all duration-200 transform hover:scale-105 shadow-lg hover:shadow-xl">
                            Send Message
                        </button>
                    </form>
                </div>

                <!-- Contact Information -->
                <div class="lg:pl-8">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Get in Touch</h2>
                    <p class="text-lg text-gray-600 mb-8">
                        We're here to help you find your perfect home. Reach out to us through any of the channels below.
                    </p>

                    <!-- Contact Cards -->
                    <div class="space-y-6">
                        <!-- Phone -->
                        <div class="bg-gray-50 rounded-xl p-6">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900">Phone</h3>
                                    <p class="text-gray-600">Call us directly</p>
                                </div>
                            </div>
                            <a href="tel:+256759983853" class="text-blue-600 hover:text-blue-700 font-medium">
                                +256 759 983 853
                            </a>
                        </div>

                        <!-- Email -->
                        <div class="bg-gray-50 rounded-xl p-6">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900">Email</h3>
                                    <p class="text-gray-600">Send us an email</p>
                                </div>
                            </div>
                            <a href="mailto:info@zippyug.com" class="text-blue-600 hover:text-blue-700 font-medium">
                                info@zippyug.com
                            </a>
                        </div>

                        <!-- WhatsApp -->
                        <div class="bg-gray-50 rounded-xl p-6">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900">WhatsApp</h3>
                                    <p class="text-gray-600">Chat with us instantly</p>
                                </div>
                            </div>
                            <a href="https://wa.me/256759983853" target="_blank" class="text-blue-600 hover:text-blue-700 font-medium">
                                +256 759 983 853
                            </a>
                        </div>

                        <!-- Location -->
                        <div class="bg-gray-50 rounded-xl p-6">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900">Location</h3>
                                    <p class="text-gray-600">Visit our office</p>
                                </div>
                            </div>
                            <p class="text-gray-700">Kampala, Uganda</p>
                        </div>
                    </div>

                    <!-- Business Hours -->
                    <div class="mt-8 bg-blue-50 rounded-xl p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Business Hours</h3>
                        <div class="space-y-2 text-gray-600">
                            <div class="flex justify-between">
                                <span>Monday - Friday</span>
                                <span>8:00 AM - 6:00 PM</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Saturday</span>
                                <span>9:00 AM - 4:00 PM</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Sunday</span>
                                <span>Closed</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 lg:py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6">Frequently Asked Questions</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Quick answers to common questions about our services
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- FAQ 1 -->
                <div class="bg-white rounded-xl p-6 shadow-lg">
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">How do I schedule a property viewing?</h3>
                    <p class="text-gray-600">You can schedule a viewing by clicking the "Book Tour" button on any property listing, or contact us directly via WhatsApp or phone.</p>
                </div>

                <!-- FAQ 2 -->
                <div class="bg-white rounded-xl p-6 shadow-lg">
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">What is the touring fee?</h3>
                    <p class="text-gray-600">Our touring fee is UGX 50,000, which allows you to visit multiple properties for 7 days. This fee helps us provide quality service and verified properties.</p>
                </div>

                <!-- FAQ 3 -->
                <div class="bg-white rounded-xl p-6 shadow-lg">
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">Are all properties verified?</h3>
                    <p class="text-gray-600">Yes, all properties on our platform are personally verified by our team to ensure accuracy and quality standards.</p>
                </div>

                <!-- FAQ 4 -->
                <div class="bg-white rounded-xl p-6 shadow-lg">
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">Do you offer property management services?</h3>
                    <p class="text-gray-600">Yes, we provide comprehensive property management services for property owners, including tenant screening, rent collection, and maintenance coordination.</p>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>


