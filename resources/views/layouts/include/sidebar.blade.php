@php($url = url()->full())
<!-- Dashboards -->
<li class="menu-item @if (str_contains($url, '/dashboard')) active @endif">
    <a href="{{ route('dashboard') }}" class="menu-link">
        <i class="menu-icon tf-icons mdi mdi-home-outline"></i>
        <div data-i18n="Dashboard">Dashboard</div>
    </a>
</li>

<!-- Stores -->
<li class="menu-item @if (str_contains($url, '/colors')) active @endif">
    <a href="{{route('colors.index')}}" class="menu-link">
        <i class="menu-icon tf-icons mdi mdi-format-color-fill"></i>
        <div data-i18n="Colors">Colors</div>
    </a>
</li>

<li class="menu-item @if (str_contains($url, '/subscriptions')) active @endif">
    <a href="{{route('sizes.index')}}" class="menu-link">
        <i class="menu-icon tf-icons mdi mdi-cash-check"></i>
        <div data-i18n="Sizes">Sizes</div>
    </a>
</li>

<li class="menu-item @if (str_contains($url, '/suppliers')) active @endif">
    <a href="{{route('suppliers.index')}}" class="menu-link">
        <i class="menu-icon tf-icons mdi mdi-account"></i>
        <div data-i18n="Suppliers">Suppliers</div>
    </a>
</li>

<li class="menu-item {{ str_contains($url, '/packings') ? 'active' : '' }}">
    <a href="{{route('packings.index')}}" class="menu-link">
        <i class="menu-icon tf-icons mdi mdi-package"></i>
        <div data-i18n="Packing">Packing</div>
    </a>
</li>

<li class="menu-item {{ str_contains($url, '/cartoons') ? 'active' : '' }}">
    <a href="{{route('cartoons.index')}}" class="menu-link">
        <i class="menu-icon tf-icons mdi mdi-bag-carry-on"></i>
        <div data-i18n="Cartons">Cartons</div>
    </a>
</li>

<li class="menu-item {{ str_contains($url, '/categories') ? 'active' : '' }}">
    <a href="{{route('categories.index')}}" class="menu-link">
        <i class="menu-icon tf-icons mdi mdi-account-card"></i>
        <div data-i18n="Category">Category</div>
    </a>
</li>

<li class="menu-item {{ str_contains($url, '/product-constructions') ? 'active' : '' }}">
    <a href="{{route('product-constructions.index')}}" class="menu-link">
        <i class="menu-icon tf-icons mdi mdi-order-alphabetical-ascending"></i>
        <div data-i18n="Construction Type">Construction Type</div>
    </a>
</li>

<li class="menu-item {{ str_contains($url, '/orders') ? 'active' : '' }}">
    <a href="{{route('orders.index')}}" class="menu-link">
        <i class="menu-icon tf-icons mdi mdi-cart-check"></i>
        <div data-i18n="Orders">Orders</div>
    </a>
</li>
