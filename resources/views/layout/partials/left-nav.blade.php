@if (isset($message))
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow " data-scroll-to-active="true"
data-img="{{asset('vendor/theme-assets/images/backgrounds/02.jpg')}}">
<div class="navbar-header">
   <ul class="nav navbar-nav flex-row">
       <li class="nav-item mr-auto">
           <a class="navbar-brand" href="{{route('admin.dashboard.index')}}">
               <img class="brand-logo"
                    alt="MadeInPak.com Logo Image"
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
           <a href="{{route('admin.dashboard.index')}}"><i class="ft-home"></i>
               <span class="menu-title" data-i18n="">Dashboard</span></a>
       </li>
    <li class=""><a href="{{url('/stepone')}}"><i class="ft-home"></i><span
       class="menu-title" data-i18n="">
       Add Company
       
   </span></a>
       </li>
       
   </ul>
</div>
<div class="navigation-background"></div>
</div>
   
@else
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow " data-scroll-to-active="true"
data-img="{{asset('vendor/theme-assets/images/backgrounds/02.jpg')}}">
<div class="navbar-header">
   <ul class="nav navbar-nav flex-row">
    <li class="nav-item mr-auto">
        <a class="navbar-brand" href="{{route('home')}}">
            <img class="brand-logo"
                 alt="MadeInPak.com Logo Image"
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
           <a href="{{route('seller.dashboard')}}"><i class="ft-home"></i>
               <span class="menu-title" data-i18n="">Dashboard</span></a>
       </li>

       <li class=""><a href="{{route('rfq.index')}}"><i class="ft-home"></i><span
       class="menu-title" data-i18n="">RFQ's</span></a>
       </li>
       <li class=""><a href="{{url('admin/company-information')}}"><i class="ft-home"></i><span
       class="menu-title" data-i18n="">
       Company Details
       
   </span></a>
       </li>
       <li class=" nav-item"><a href="{{route('admin.buyers.index')}}"><i class="ft-pie-chart"></i><span
       class="menu-title"
       data-i18n="">Buyers</span></a>
       </li>
       <li class=" nav-item"><a href="{{route('admin.product.index')}}"><i class="ft-pie-chart"></i><span
       class="menu-title"
       data-i18n="">Products</span></a>
       </li>
       <li class=" nav-item"><a href="{{route('offer.index')}}"><i class="ft-pie-chart"></i><span
       class="menu-title"
       data-i18n="">Offers</span></a>
       </li>
       <li class=" nav-item"><a href="{{route('tabs.index')}}"><i class="ft-pie-chart"></i><span
       class="menu-title"
       data-i18n="">Orders</span></a>
       </li>
       <li class=" nav-item"><a href="{{route('admin.reviews.index')}}"><i class="ft-pie-chart"></i><span
       class="menu-title"
       data-i18n="">Review & Ratings</span></a>
       </li>
   </ul>
</div>
<div class="navigation-background"></div>
</div>
@endif
