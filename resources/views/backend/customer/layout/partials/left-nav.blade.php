<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow " data-scroll-to-active="true"
     data-img="{{asset('vendor/theme-assets/images/backgrounds/02.jpg')}}">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto">
                <a class="navbar-brand" href="{{url('/')}}">
                     <img class="brand-logo"
                          alt="Chameleon admin logo" 
                         src="{{asset('img/logo.png')}}"/>
                    <h3 class="brand-text">MadeInPak.com</h3>
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
                <a href="{{route('buyer.dashboard')}}"><i class="ft-home"></i>
                    <span class="menu-title" data-i18n="">Dashboard</span></a>
            </li>

            <li class=""><a href="{{route('buyer.rfq')}}"><i class="ft-home"></i><span
            class="menu-title" data-i18n="">RFQ's</span></a>
            </li>
            <li class=""><a href="{{ url('customer/order') }}"><i class="ft-home"></i><span
            class="menu-title" data-i18n="">Order</span></a>
            </li>
            <li class=" nav-item"><a href="{{ url('customer/offer') }}"><i class="ft-pie-chart"></i><span
            class="menu-title"
            data-i18n="">Offers</span></a>
            </li>
            <li class=" nav-item"><a href="{{route('private')}}"><i class="ft-pie-chart"></i><span
            class="menu-title"
            data-i18n="">Chat</span></a>
            </li>
        </ul>
    </div>
    <div class="navigation-background"></div>
</div>

