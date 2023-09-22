<div class="menu">
    <div class="main-menu">
        <div class="scroll">
            <ul class="list-unstyled">
                <li class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="iconsminds-shop-4"></i>
                        <span>Dashboards</span>
                    </a>
                </li>

                <li class="{{ request()->routeIs('admin.category*') ? 'active' : '' }}">
                    <a href="{{ route('admin.category.index') }}">
                        <i class="simple-icon-picture"></i> Categories
                    </a>
                </li>

                <li class="{{ request()->routeIs('admin.products*') ? 'active' : '' }}">
                    <a href="{{ route('admin.products.index') }}">
                        <i class="simple-icon-picture"></i> Products
                    </a>
                </li>
                <li class="{{ request()->routeIs('admin.divisions*') ? 'active' : '' }}">
                    <a href="{{ route('admin.divisions.index') }}">
                        <i class="simple-icon-picture"></i> Divisions
                    </a>
                </li>

                <li class="{{ request()->routeIs('admin.banner*') ? 'active' : '' }}">
                    <a href="{{ route('admin.banner.index') }}">
                        <i class="simple-icon-picture"></i> Home Banners
                    </a>
                </li>

                <li class="{{ request()->routeIs('admin.brand*') ? 'active' : '' }}">
                    <a href="{{ route('admin.brand.index') }}">
                        <i class="simple-icon-picture"></i> Brands
                    </a>
                </li>

                <li class="{{ request()->routeIs('admin.blogs*') ? 'active' : '' }}">
                    <a href="{{ route('admin.blogs.index') }}">
                        <i class="simple-icon-picture"></i>Blogs
                    </a>
                </li>
                @if (auth()->user()->can('manage-settings'))
                    <li class="{{ request()->routeIs('admin.settings') ? 'active' : '' }}">
                        <a href="{{ route('admin.settings') }}">
                            <i class="simple-icon-notebook"></i> General Settings
                        </a>
                    </li>
                @endif
                @if (auth()->user()->can('manage-settings'))
                    <li class="{{ request()->routeIs('admin.page*') ? 'active' : '' }}">
                        <a href="#pages">
                            <i class="simple-icon-notebook"></i> Page Settings
                        </a>
                    </li>
                @endif


                @if (auth()->user()->can('manage-users'))
                    <li class="{{ request()->routeIs('admin.users*') ? 'active' : '' }}">
                        <a href="{{ route('admin.users.index') }}">
                            <i class="simple-icon-user"></i> Users
                        </a>
                    </li>
                @endif

            </ul>
        </div>
    </div>

    <div class="sub-menu">
        <div class="scroll">
            <ul class="list-unstyled" data-link="pages">
                <li class="{{ (request()->routeIs('admin.page.about') ) ? 'active' : '' }}">
                    <a href="{{ route('admin.page.about') }}">
                        <i class="simple-icon-doc"></i> <span class="d-inline-block">ABOUT US</span>
                    </a>
                </li>

                <li class="{{ (request()->routeIs('admin.page.message') ) ? 'active' : '' }}">
                    <a href="{{ route('admin.page.message') }}">
                        <i class="simple-icon-doc"></i> <span class="d-inline-block">CHAIRMAN'S MESSAGE</span>
                    </a>
                </li>

                <li class="{{ (request()->routeIs('admin.page.contact') ) ? 'active' : '' }}">
                    <a href="{{ route('admin.page.contact') }}">
                        <i class="simple-icon-doc"></i> <span class="d-inline-block">CONTACT US</span>
                    </a>
                </li>

                <li class="{{ (request()->routeIs('admin.page.home') ) ? 'active' : '' }}">
                    <a href="{{ route('admin.page.home') }}">
                        <i class="simple-icon-doc"></i> <span class="d-inline-block">HOME</span>
                    </a>
                </li>

                <li class="{{ (request()->routeIs('admin.page.mission') ) ? 'active' : '' }}">
                    <a href="{{ route('admin.page.mission') }}">
                        <i class="simple-icon-doc"></i> <span class="d-inline-block">MISSION & VISION</span>
                    </a>
                </li>

                <li class="{{ (request()->routeIs('admin.page.heritage') ) ? 'active' : '' }}">
                    <a href="{{ route('admin.page.heritage') }}">
                        <i class="simple-icon-doc"></i> <span class="d-inline-block">OUR HERITAGE</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>
