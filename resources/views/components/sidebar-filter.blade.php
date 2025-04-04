{{-- resources/views/components/categories-sidebar.blade.php --}}

<div class="categories-sidebar ml-25" style="margin-top:20px">
    <!-- Categories Section -->
    <div class="sidebar-section">
        <h3 class="sidebar-title">Categories</h3>
        <ul class="sidebar-list categories-list">
            @foreach ($categories as $category)

            <li class="sidebar-item {{ request()->is('category/' . $category->slug) ? 'active' : '' }}">
                <a href="{{ route('category.show', ['slug' => $category->slug]) }}" class="sidebar-link">
                    <i class="far fa-folder"></i> {{ $category->name }}
                </a>
            </li>
        @endforeach
        </ul>
    </div>
</div>

<style>
.categories-sidebar {
    width: 100%;
    max-width: 200px;
    padding: 0;
    box-sizing: border-box;
}

.sidebar-section {
    background-color: #f9f9f9;
    border-radius: 4px;
    padding: 15px;
    margin-bottom: 20px;
}

.sidebar-title {
    color: #333;
    font-size: 16px;
    font-weight: 600;
    margin: 0 0 15px 0;
    padding-bottom: 10px;
    border-bottom: 1px solid #eee;
}

.sidebar-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.sidebar-item {
    margin-bottom: 8px;
    position: relative;
    display: flex;
    align-items: center;
}
.ml-25 {
    margin-left: 350px;
}
.sidebar-link {
    color: #555;
    text-decoration: none;
    font-size: 14px;
    padding: 5px 0;
    display: flex;
    align-items: center;
    transition: color 0.2s;
    flex: 1;
}

.sidebar-link i {
    margin-right: 8px;
    color: #999;
}

.sidebar-link:hover {
    color: #000;
}

.sidebar-item.active .sidebar-link {
    color: #000;
    font-weight: 500;
}

.sidebar-item.active .sidebar-link i {
    color: #000;
}
categories-sidebar
.expand-icon {
    width: 20px;
    height: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    font-size: 14px;
    color: #999;
}

/* Checkbox styling */
.checkbox-label {
    display: flex;
    align-items: center;
    cursor: pointer;
    width: 100%;
    font-size: 14px;
    color: #555;
}

.checkbox-label input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
    height: 0;
    width: 0;
}

.checkmark {
    position: relative;
    height: 16px;
    width: 16px;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 2px;
    margin-right: 8px;
    flex-shrink: 0;
}

.checkbox-label:hover input ~ .checkmark {
    border-color: #ccc;
}

.checkbox-label input:checked ~ .checkmark {
    background-color: #fff;
    border-color: #ddd;
}

.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

.checkbox-label input:checked ~ .checkmark:after {
    display: block;
}

.checkbox-label .checkmark:after {
    left: 5px;
    top: 2px;
    width: 4px;
    height: 8px;
    border: solid #333;
    border-width: 0 2px 2px 0;
    transform: rotate(45deg);
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Handle expand/collapse for categories with subcategories
    const expandIcons = document.querySelectorAll('.expand-icon');
    
    expandIcons.forEach(icon => {
        icon.addEventListener('click', function() {
            const parentItem = this.parentElement;
            parentItem.classList.toggle('expanded');
            
            if (parentItem.classList.contains('expanded')) {
                this.textContent = '-';
            } else {
                this.textContent = '+';
            }
        });
    });
});
</script>