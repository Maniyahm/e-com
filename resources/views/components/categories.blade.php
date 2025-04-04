{{-- resources/views/components/categories.blade.php --}}

<div>
    {{-- Sidebar Categories Section --}}
    <div class="categories-sidebar">
        <div class="categories-header">
            <i class="fas fa-bars"></i>
            <span>Categories</span>
        </div>
        <ul class="categories-list">
            <li><a href="{{ route('category.show', 'pro-glasses') }}">Pro Glasses</a></li>
            <li><a href="{{ route('category.show', 'casual-shoes') }}">Casual Shoes</a></li>
            <li><a href="{{ route('category.show', 'gift-sets') }}">Gift Sets</a></li>
            <li><a href="{{ route('category.show', 'plastic-gifts') }}">Plastic Gifts</a></li>
            <li><a href="{{ route('category.show', 'handy-cream') }}">Handy Cream</a></li>
            <li><a href="{{ route('category.show', 'cosmetics') }}">Cosmetics</a></li>
            <li><a href="{{ route('category.show', 'silk-accessories') }}">Silk Accessories</a></li>
            <li><a href="{{ route('category.show', 'finest-skincare-lotions') }}">Finest Skincare Lotions</a></li>
            <li><a href="{{ route('category.show', 'bags-purses') }}">Bags & Purses</a></li>
            <li><a href="{{ route('category.show', 'sunglasses') }}">Sunglasses</a></li>
        </ul>
    </div>

    {{-- Top Categories Section --}}
    <div class="top-categories-section">
        <div class="section-header">
            <h2>Top <span>Categories</span></h2>
        </div>
        
        <div class="top-categories-grid">
            <div class="category-item">
                <div class="category-icon">
                    <img src="{{ asset('images/icons/gift-sets.svg') }}" alt="Gift Sets">
                </div>
                <span class="category-counter">7</span>
                <h3 class="category-name">Gift Sets</h3>
            </div>
            
            <div class="category-item">
                <div class="category-icon">
                    <img src="{{ asset('images/icons/plastic-gifts.svg') }}" alt="Plastic Gifts">
                </div>
                <span class="category-counter">6</span>
                <h3 class="category-name">Plastic Gifts</h3>
            </div>
            
            <div class="category-item">
                <div class="category-icon">
                    <img src="{{ asset('images/icons/handy-cream.svg') }}" alt="Handy Cream">
                </div>
                <span class="category-counter">8</span>
                <h3 class="category-name">Handy Cream</h3>
            </div>
            
            <div class="category-item">
                <div class="category-icon">
                    <img src="{{ asset('images/icons/cosmetics.svg') }}" alt="Cosmetics">
                </div>
                <span class="category-counter">5</span>
                <h3 class="category-name">Cosmetics</h3>
            </div>
            
            <div class="category-item">
                <div class="category-icon">
                    <img src="{{ asset('images/icons/silk-accessories.svg') }}" alt="Silk Accessories">
                </div>
                <span class="category-counter">3</span>
                <h3 class="category-name">Silk Accessories</h3>
            </div>
            
            <div class="category-item">
                <div class="category-icon">
                    <img src="{{ asset('images/icons/finest-skincare-lotions.svg') }}" alt="Finest Skincare Lotions">
                </div>
                <span class="category-counter">0</span>
                <h3 class="category-name">Finest Skincare Lotions</h3>
            </div>
        </div>
    </div>
</div>