{{-- resources/views/components/header-nav.blade.php --}}

<header class="site-header">
    <div class="header-container">
        <!-- Logo -->
        <div class="site-logo">
            <a href="{{ route('home') }}">
                <h1>ninico</h1>
            </a>
        </div>

        <!-- Main Navigation -->
        <nav class="main-navigation">
            <ul class="nav-menu">
                <li class="menu-item {{ request()->routeIs('home') ? 'active' : '' }}">
                    <a href="{{ route('dashboard') }}">Home <i class="fas fa-chevron-down"></i></a>
                </li>
                <li class="menu-item {{ request()->routeIs('shop.*') ? 'active' : '' }}">
                    <a href="*">Shop <i class="fas fa-chevron-down"></i></a>
                </li>
                <li class="menu-item {{ request()->routeIs('pages.*') ? 'active' : '' }}">
                    <a href="*">Pages <i class="fas fa-chevron-down"></i></a>
                </li>
                <li class="menu-item {{ request()->routeIs('blog.*') ? 'active' : '' }}">
                    <a href="*">Blog <i class="fas fa-chevron-down"></i></a>
                </li>
                <li class="menu-item {{ request()->routeIs('contact') ? 'active' : '' }}">
                    <a href="*">Contact</a>
                </li>
            </ul>
        </nav>

        <!-- Search and Icons -->
        <div class="header-actions">
            <!-- Search Form -->
            <div class="search-form">
                {{-- <form action="{{ route('search') }}" method="GET">
                    <input type="text" name="q" placeholder="Search products..." value="{{ request('q') }}">
                    <button type="submit" class="search-btn">
                        <i class="fas fa-search"></i>
                    </button>
                </form> --}}
            </div>

            <!-- Icon Links -->
            <div class="icon-links">
                <a href="*" class="icon-link cart-link">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="badge">{{ $cartCount ?? 0 }}</span>
                </a>
                <a href="*" class="icon-link wishlist-link">
                    <i class="fas fa-heart"></i>
                    <span class="badge">{{ $wishlistCount ?? 0 }}</span>
                </a>
                <a href="*" class="icon-link compare-link">
                    <i class="fas fa-exchange-alt"></i>
                    <span class="badge">{{ $compareCount ?? 0 }}</span>
                </a>
                <a href="*" class="icon-link account-link">
                    <i class="fas fa-user"></i>
                </a>
            </div>
        </div>
    </div>
</header>

<style>
    .site-header {
        padding: 20px 0;
        background-color: #fff;
        border-bottom: 1px solid #eee;
    }

    .header-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 15px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    /* Logo Styling */
    .site-logo a {
        text-decoration: none;
    }

    .site-logo h1 {
        font-size: 28px;
        font-weight: 700;
        color: #111;
        margin: 0;
    }

    /* Navigation Styling */
    .main-navigation .nav-menu {
        display: flex;
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .main-navigation .menu-item {
        margin: 0 5px;
        position: relative;
    }

    .main-navigation .menu-item a {
        text-decoration: none;
        color: #333;
        font-size: 15px;
        font-weight: 500;
        padding: 10px;
        display: flex;
        align-items: center;
        transition: color 0.3s;
    }

    .main-navigation .menu-item a i {
        font-size: 10px;
        margin-left: 5px;
    }

    .main-navigation .menu-item.active a,
    .main-navigation .menu-item a:hover {
        color: #e91e63;
    }

    /* Search Form Styling */
    .header-actions {
        display: flex;
        align-items: center;
    }

    .search-form {
        margin-right: 15px;
        position: relative;
    }

    .search-form input {
        background-color: #f5f7fa;
        border: none;
        border-radius: 5px;
        padding: 10px 40px 10px 15px;
        font-size: 14px;
        width: 220px;
        outline: none;
    }

    .search-form .search-btn {
        position: absolute;
        right: 0;
        top: 0;
        height: 100%;
        width: 40px;
        background: none;
        border: none;
        cursor: pointer;
        color: #777;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* Icon Links Styling */
    .icon-links {
        display: flex;
        align-items: center;
    }

    .icon-link {
        margin-left: 15px;
        color: #333;
        font-size: 18px;
        position: relative;
        text-decoration: none;
    }

    .icon-link:hover {
        color: #e91e63;
    }

    .icon-link .badge {
        position: absolute;
        top: -8px;
        right: -8px;
        background-color: #e91e63;
        color: white;
        border-radius: 50%;
        font-size: 10px;
        width: 16px;
        height: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* Mobile Responsive */
    @media (max-width: 992px) {
        .header-container {
            flex-wrap: wrap;
        }

        .main-navigation {
            order: 3;
            width: 100%;
            margin-top: 15px;
        }

        .nav-menu {
            flex-wrap: wrap;
        }

        .search-form input {
            width: 180px;
        }
    }

    @media (max-width: 768px) {
        .main-navigation {
            display: none;
        }

        .search-form input {
            width: 160px;
        }
    }
</style>