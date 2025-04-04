@extends('components.layout')

@section('content')
<div class="bg-white">
    <!-- Contact Hero Section -->
    <section class="container mx-auto px-4 py-16 grid md:grid-cols-2 gap-12 items-center">
        <div>
            <h1 class="text-4xl font-bold text-gray-800 mb-6">Contact Us</h1>
            <p class="text-gray-600 mb-8 leading-relaxed">
                We're here to help and answer any question you might have. We look forward to hearing from you!
            </p>
            
            <!-- Contact Information -->
            <div class="space-y-6">
                <div class="flex items-center">
                    <i class="fas fa-map-marker-alt text-pink-600 text-2xl mr-4"></i>
                    <div>
                        <h3 class="font-semibold text-gray-800">Address</h3>
                        <p class="text-gray-600">123 Ninico Street, Business Bay, City, Country</p>
                    </div>
                </div>
                
                <div class="flex items-center">
                    <i class="fas fa-phone text-pink-600 text-2xl mr-4"></i>
                    <div>
                        <h3 class="font-semibold text-gray-800">Phone</h3>
                        <p class="text-gray-600">+1 (908) 408-501-89</p>
                    </div>
                </div>
                
                <div class="flex items-center">
                    <i class="fas fa-envelope text-pink-600 text-2xl mr-4"></i>
                    <div>
                        <h3 class="font-semibold text-gray-800">Email</h3>
                        <p class="text-gray-600">support@ninico.com</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="bg-gray-50 p-8 rounded-lg shadow-md">
            {{-- <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                @csrf
                <div>
                    <label for="name" class="block text-gray-700 mb-2">Full Name</label>
                    <input 
                        type="text" 
                        id="name" 
                        name="name" 
                        required 
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-pink-500"
                        placeholder="Enter your full name"
                    >
                </div>

                <div>
                    <label for="email" class="block text-gray-700 mb-2">Email Address</label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        required 
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-pink-500"
                        placeholder="Enter your email address"
                    >
                </div>

                <div>
                    <label for="phone" class="block text-gray-700 mb-2">Phone Number</label>
                    <input 
                        type="tel" 
                        id="phone" 
                        name="phone" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-pink-500"
                        placeholder="Enter your phone number"
                    >
                </div>

                <div>
                    <label for="subject" class="block text-gray-700 mb-2">Subject</label>
                    <select 
                        id="subject" 
                        name="subject" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-pink-500"
                    >
                        <option value="">Select a subject</option>
                        <option value="general">General Inquiry</option>
                        <option value="support">Customer Support</option>
                        <option value="partnership">Partnership</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <div>
                    <label for="message" class="block text-gray-700 mb-2">Your Message</label>
                    <textarea 
                        id="message" 
                        name="message" 
                        rows="5" 
                        required 
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-pink-500"
                        placeholder="Write your message here..."
                    ></textarea>
                </div>

                <button 
                    type="submit" 
                    class="w-full bg-pink-600 text-white py-3 rounded-md hover:bg-pink-700 transition duration-300"
                >
                    Send Message
                </button>
            </form> --}}
        </div>
    </section>

    <!-- Google Maps Section -->
    <section class="container mx-auto px-4 py-16">
        <h2 class="text-3xl font-bold text-center mb-8 text-gray-800">Our Location</h2>
        <div class="w-full h-96 bg-gray-200">
            <!-- Placeholder for Google Maps -->
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.982135367612!2d-73.98823412400784!3d40.748814471486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259a9b3117469%3A0xd134e199a405a163!2sEmpire%20State%20Building!5e0!3m2!1sen!2sus!4v1683308071323!5m2!1sen!2sus" 
                width="100%" 
                height="100%" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy"
            ></iframe>
        </div>
    </section>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('form');
        form.addEventListener('submit', function(e) {
            // Basic form validation
            const requiredFields = form.querySelectorAll('[required]');
            let isValid = true;

            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    isValid = false;
                    field.classList.add('border-red-500');
                } else {
                    field.classList.remove('border-red-500');
                }
            });

            if (!isValid) {
                e.preventDefault();
                alert('Please fill in all required fields.');
            }
        });
    });
</script>
@endpush