<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow " data-scroll-to-active="true"
     data-img="{{asset('vendor/theme-assets/images/backgrounds/02.jpg')}}">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto">
                <a class="navbar-brand" href="{{ url('/dashboard') }}">
                    <img class="brand-logo"
                         alt="Chameleon admin logo"
                         src="{{asset('img/logo.png')}}"/>
                    <h3 class="brand-text">MadeInPak.Co</h3>
                </a>
            </li>
            <li class="nav-item d-md-none">
                <a class="nav-link close-navbar"><i class="ft-x"></i></a>
            </li>
        </ul>
    </div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="active">
                <a href="{{url('/dashboard')}}"><i class="ft-home"></i>
                    <span class="menu-title" data-i18n="">Dashboard</span></a>
            </li>

            <li class=""><a href="{{route('superadmin.rfq.index')}}"><i class="ft-file"></i><span
            class="menu-title" data-i18n="">RFQ's</span></a>
            </li>
            <li class=" nav-item"><a href="{{route('superadmin.buyers')}}"><i class="ft-users"></i><span
            class="menu-title"
            data-i18n="">Buyers</span></a>
            </li>
            <li class=" nav-item"><a href="{{route('superadmin.sellers.index')}}"><i class="ft-user"></i><span
            class="menu-title"
            data-i18n="">Sellers</span></a>
            </li>
            <li class=" nav-item"><a href="{{route('superadmin.approval.index')}}"><i class="ft-box"></i><span
            class="menu-title"
            data-i18n="">Products</span></a>
            </li>
            {{-- <li class=" nav-item"><a href="{{route('admin.roles.index')}}"><i class="ft-pie-chart"></i><span
            class="menu-title"
            data-i18n="">Roles</span></a>
            </li>
            <li class=" nav-item"><a href="{{route('admin.permissions.index')}}"><i class="ft-pie-chart"></i><span
            class="menu-title"
            data-i18n="">Permissions</span></a>
            </li>
            <li class=" nav-item"><a href="{{route('admin.assign-roles-and-permissions.index')}}"><i class="ft-pie-chart"></i><span
            class="menu-title"
            data-i18n="">Assign Roles</span></a>
            </li> --}}
            {{-- <li class=" nav-item"><a href="{{route('offer.index')}}"><i class="ft-file-text"></i><span
            class="menu-title"
            data-i18n="">Offers</span></a>
            </li> --}}
            <li class=" nav-item"><a href="{{route('superadmin.order.index')}}"><i class="ft-shopping-cart"></i><span
            class="menu-title"
            data-i18n="">Orders</span></a>
            </li>
            <li class=" nav-item"><a href="{{route('superadmin.reviews.index')}}"><i class="ft-thumbs-up"></i><span
            class="menu-title"
            data-i18n="">Review & Ratings</span></a>
            </li>
            <li class=" nav-item"><a href="{{route('superadmin.category.index')}}"><i class="ft-list"></i><span
            class="menu-title"
            data-i18n="">Category</span></a>
            </li>
            <li class=" nav-item"><a href="{{route('superadmin.items.index')}}"><i class="ft-package"></i><span
            class="menu-title"
            data-i18n="">Items</span></a>
            </li>
            <li class=" nav-item"><a href="{{route('superadmin.landing.index')}}"><i class="ft-settings"></i><span
            class="menu-title"
            data-i18n="">Site Settings</span></a>
            </li>
            
            

        </ul>
    </div>
    <div class="navigation-background"></div>
</div>

