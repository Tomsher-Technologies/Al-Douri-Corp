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
                @can('categories')
                <li class="{{ request()->routeIs('admin.category*') ? 'active' : '' }}">
                    <a href="{{ route('admin.category.index') }}">
                        <i class="simple-icon-layers"></i> Categories
                    </a>
                </li>
                @endcan

                    @can('products')
                        <li class="{{ request()->routeIs('admin.products*') ? 'active' : '' }}">
                            <a href="{{ route('admin.products.index') }}">
                                <i class="simple-icon-basket"></i> Products
                            </a>
                        </li>
                    @endcan

                    @can('divisions')
                        <li class="{{ request()->routeIs('admin.divisions*') ? 'active' : '' }}">
                            <a href="{{ route('admin.divisions.index') }}">
                                <i class="simple-icon-grid"></i> Divisions
                            </a>
                        </li>
                    @endcan

                    @can('banners')
                        <li class="{{ request()->routeIs('admin.banner*') ? 'active' : '' }}">
                            <a href="{{ route('admin.banner.index') }}">
                                <i class="simple-icon-picture"></i> Home Banners
                            </a>
                        </li>
                    @endcan

                    @can('brands')
                        <li class="{{ request()->routeIs('admin.brand*') ? 'active' : '' }}">
                            <a href="{{ route('admin.brand.index') }}">
                                <i class="simple-icon-picture"></i> Brands
                            </a>
                        </li>
                    @endcan

                    @can('news')
                        <li class="{{ request()->routeIs('admin.blogs*') ? 'active' : '' }}">
                            <a href="{{ route('admin.blogs.index') }}">
                                <i class="iconsminds-newspaper"></i>News
                            </a>
                        </li>
                    @endcan

                    @can('career')
                        <li class="{{ request()->routeIs('admin.careers*') ? 'active' : '' }}">
                            <a href="{{ route('admin.careers.index') }}">
                                <i class="simple-icon-graduation"></i>Career
                            </a>
                        </li>
                    @endcan

                    @can('branches')
                        <li class="{{ request()->routeIs('admin.branch*') ? 'active' : '' }}">
                            <a href="{{ route('admin.branch.index') }}">
                                <i class="simple-icon-location-pin"></i>Branches
                            </a>
                        </li>
                    @endcan

                    @can('general_settings')
                    <li class="{{ request()->routeIs('admin.settings') ? 'active' : '' }}">
                        <a href="{{ route('admin.settings') }}">
                            <i class="simple-icon-wrench"></i> General Settings
                        </a>
                    </li>
                    @endcan

                    @can('page_settings')
                        <li class="{{ request()->routeIs('admin.page*') ? 'active' : '' }}">
                            <a href="#pages">
                                <i class="simple-icon-settings"></i> Page Settings
                            </a>
                        </li>
                    @endcan

                    @can('roles')
                        <li class="{{ request()->routeIs('admin.roles*') ? 'active' : '' }}">
                            <a href="{{ route('admin.roles.index') }}">
                                <i class="simple-icon-lock-open"></i>Roles
                            </a>
                        </li>
                    @endcan
                    
                    @can('users')
                        <li class="{{ request()->routeIs('admin.users*') ? 'active' : '' }}">
                            <a href="{{ route('admin.users.index') }}">
                                <i class="simple-icon-user"></i> Users
                            </a>
                        </li>
                    @endcan

                    @can('enquiries')
                        <li class="{{ request()->routeIs('admin.enquiries*') ? 'active' : '' }}">
                            <a href="{{ route('admin.enquiries') }}">
                                <i class="simple-icon-bubbles"></i>Enquiries
                            </a>
                        </li>
                    @endcan
            </ul>
        </div>
    </div>

    <div class="sub-menu">
        <div class="scroll">
            <ul class="list-unstyled" data-link="pages">
                <li class="{{ (request()->routeIs('admin.page.about') ) ? 'active' : '' }}">
                    <a href="{{ route('admin.page.about') }}">
                        <i class="simple-icon-doc"></i> <span class="d-inline-block">About Us</span>
                    </a>
                </li>

                <li class="{{ (request()->routeIs('admin.page.career') ) ? 'active' : '' }}">
                    <a href="{{ route('admin.page.career') }}">
                        <i class="simple-icon-doc"></i> <span class="d-inline-block">Career</span>
                    </a>
                </li>

                <li class="{{ (request()->routeIs('admin.page.message') ) ? 'active' : '' }}">
                    <a href="{{ route('admin.page.message') }}">
                        <i class="simple-icon-doc"></i> <span class="d-inline-block">Chairman's Message</span>
                    </a>
                </li>

                <li class="{{ (request()->routeIs('admin.page.contact') ) ? 'active' : '' }}">
                    <a href="{{ route('admin.page.contact') }}">
                        <i class="simple-icon-doc"></i> <span class="d-inline-block">Contact Us</span>
                    </a>
                </li>

                <li class="{{ (request()->routeIs('admin.page.home') ) ? 'active' : '' }}">
                    <a href="{{ route('admin.page.home') }}">
                        <i class="simple-icon-doc"></i> <span class="d-inline-block">Home</span>
                    </a>
                </li>

                <li class="{{ (request()->routeIs('admin.page.mission') ) ? 'active' : '' }}">
                    <a href="{{ route('admin.page.mission') }}">
                        <i class="simple-icon-doc"></i> <span class="d-inline-block">Mission & Vision</span>
                    </a>
                </li>

                <li class="{{ (request()->routeIs('admin.page.news') ) ? 'active' : '' }}">
                    <a href="{{ route('admin.page.news') }}">
                        <i class="simple-icon-doc"></i> <span class="d-inline-block">News</span>
                    </a>
                </li>

                <li class="{{ (request()->routeIs('admin.page.heritage') ) ? 'active' : '' }}">
                    <a href="{{ route('admin.page.heritage') }}">
                        <i class="simple-icon-doc"></i> <span class="d-inline-block">Our Heritage</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>
