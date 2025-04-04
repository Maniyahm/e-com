@extends('components.layout')

@section('content')
@section('content')
    <div class="bg-white">
        <!-- Hero Section -->
        <section class="container mx-auto px-4 py-16 grid md:grid-cols-2 items-center gap-12 text-center">
            <div class="text-center">
                <h1 class="text-4xl font-bold text-gray-800 mb-6">
                    About Ninico: Crafting Exceptional Experiences
                </h1>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Founded in 2015, Ninico is more than just an e-commerce platform. We're a passionate team dedicated to
                    bringing unique, high-quality products to discerning customers who appreciate creativity, innovation,
                    and style.
                </p>
                <div class="grid md:grid-cols-2 gap-4">
                    <div>
                        <h3 class="text-2xl font-bold text-pink-600">5+</h3>
                        <p class="text-gray-600">Years of Experience</p>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-pink-600">10K+</h3>
                        <p class="text-gray-600">Happy Customers</p>
                    </div>
                </div>
            </div>

        </section>

        <!-- Our Mission Section -->
        <section class="bg-gray-50 py-16">
            <div class="container mx-auto px-4 text-center">
                <h2 class="text-3xl font-bold mb-6 text-gray-800">Our Mission</h2>
                <p class="max-w-3xl mx-auto text-gray-600 leading-relaxed">
                    At Ninico, we believe in empowering creativity and self-expression through carefully curated products.
                    Our mission is to provide unique, high-quality accessories and crafts that inspire and delight our
                    customers, while maintaining exceptional customer service and sustainable practices.
                </p>
            </div>
        </section>

        <!-- Core Values Section -->
        <section class="container mx-auto px-4 py-16">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Our Core Values</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <i class="fas fa-heart text-4xl text-pink-600 mb-4"></i>
                    <h3 class="text-xl font-semibold mb-4">Quality First</h3>
                    <p class="text-gray-600">
                        We never compromise on product quality. Each item is carefully selected and vetted to ensure it
                        meets our high standards.
                    </p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <i class="fas fa-globe text-4xl text-pink-600 mb-4"></i>
                    <h3 class="text-xl font-semibold mb-4">Sustainability</h3>
                    <p class="text-gray-600">
                        We are committed to environmentally friendly practices and supporting sustainable product creation.
                    </p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <i class="fas fa-users text-4xl text-pink-600 mb-4"></i>
                    <h3 class="text-xl font-semibold mb-4">Customer Passion</h3>
                    <p class="text-gray-600">
                        Our customers are at the heart of everything we do. We strive to create exceptional shopping
                        experiences.
                    </p>
                </div>
            </div>
        </section>



        <!-- Contact CTA -->
        <section class="bg-pink-600 text-white py-16 text-center">
            <h2 class="text-3xl font-bold mb-6">Let's Create Something Amazing Together</h2>
            <p class="max-w-2xl mx-auto mb-8 text-white/90">
                Whether you're looking for unique accessories, creative gifts, or inspirational crafts, Ninico is here to
                help you express your style.
            </p>
            <a href="{{ route('contact') }}"
                class="bg-white text-pink-600 px-8 py-3 rounded-full font-semibold hover:bg-gray-100 transition">
                Contact Us
            </a>
        </section>
    </div>
@endsection

@push('scripts')
    <script>
        // Optional: Add any page-specific JavaScript
        document.addEventListener('DOMContentLoaded', () => {
            // Example: Animate elements on scroll
            const observerOptions = {
                threshold: 0.1
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-fadeIn');
                    }
                });
            }, observerOptions);

            // Observe sections for animations
            document.querySelectorAll('section').forEach(section => {
                observer.observe(section);
            });
        });
    </script>
@endpush

@push('styles')
    <style>
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fadeIn {
            animation: fadeIn 1s ease-out;
        }
    </style>
@endpush
@endsection
