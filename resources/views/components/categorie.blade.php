<div>
    {{-- Sidebar Categories Section --}}
    <div class="categories-sidebar">
        <div class="categories-header">
            <i class="fas fa-bars"></i>
            <span>Categories</span>
        </div>
        <ul class="categories-list">
            @foreach($categories as $category)
                <li>
                    <a href="{{ url('category/' . $category->slug) }}">
                        {{ $category->name }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>

    {{-- Top Categories Section --}}
    <div class="top-categories-section">
        <div class="section-header">
            <h2>Top <span>Categories</span></h2>
        </div>
        
        <div class="top-categories-grid">
            @php
                // Since we don't have product_count, we'll just display the first 6 categories
                $topCategoriesCount = min(6, count($categories));
                $topCategories = $categories->take($topCategoriesCount);
                
                // Assign some example counts for visual purposes
                $counts = [7, 6, 8, 5, 3, 0];
                // Default icons (you'll need to add these icons to your project)
                $icons = [
                    'gift-sets.svg',
                    'plastic-gifts.svg',
                    'handy-cream.svg',
                    'cosmetics.svg',
                    'silk-accessories.svg',
                    'finest-skincare-lotions.svg'
                ];
            @endphp
            
            @foreach($topCategories as $index => $category)
                <div class="category-item">
                    <a href="{{ url('category/' . $category->slug) }}">
                        <div class="category-icon">
                            <img src="{{ asset('images/icons/' . ($icons[$index] ?? 'default.svg')) }}" alt="{{ $category->name }}">
                        </div>
                        <span class="category-counter">{{ $counts[$index] ?? 0 }}</span>
                        <h3 class="category-name">{{ $category->name }}</h3>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
<style>

.categories-sidebar {
    width: 100%;
    max-width: 300px;
    border: 1px solid #eee;
    border-radius: 4px;
    overflow: hidden;
    margin-bottom: 30px;
    background-color: #fff;
}

.categories-header {
    display: flex;
    align-items: center;
    background-color: #e91e63;
    color: white;
    padding: 12px 15px;
    font-weight: bold;
}

.categories-header i {
    margin-right: 10px;
}

.categories-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.categories-list li {
    border-bottom: 1px solid #eee;
}

.categories-list li:last-child {
    border-bottom: none;
}

.categories-list li a {
    display: block;
    padding: 12px 15px;
    color: #333;
    text-decoration: none;
    transition: background-color 0.2s;
}

.categories-list li a:hover {
    background-color: #f5f5f5;
    color: #e91e63;
}

/* Top Categories Section Styling */
.top-categories-section {
    margin: 50px 0;
}

.section-header {
    display: flex;
    align-items: center;
    margin-bottom: 30px;
}

.section-header h2 {
    font-size: 24px;
    font-weight: 600;
    color: #333;
    margin: 0;
    position: relative;
}

.section-header h2 span {
    color: #e91e63;
}

.top-categories-grid {
    display: grid;
    grid-template-columns: repeat(6, 1fr);
    gap: 20px;
}

@media (max-width: 1200px) {
    .top-categories-grid {
        grid-template-columns: repeat(3, 1fr);
    }
}

@media (max-width: 768px) {
    .top-categories-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

.category-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    position: relative;
    padding: 20px;
    border: 1px solid #eee;
    border-radius: 4px;
    transition: transform 0.3s, box-shadow 0.3s;
    background-color: #fff;
}

.category-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

.category-item a {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-decoration: none;
    width: 100%;
    height: 100%;
}

.category-icon {
    width: 60px;
    height: 60px;
    margin-bottom: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.category-icon img {
    width: 100%;
    height: 100%;
    object-fit: contain;
}

.category-counter {
    position: absolute;
    top: 10px;
    right: 10px;
    background-color: #e91e63;
    color: white;
    border-radius: 50%;
    width: 24px;
    height: 24px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 12px;
    font-weight: bold;
}

.category-name {
    font-size: 14px;
    font-weight: 500;
    color: #333;
    text-align: center;
    margin: 0;
}
</style>