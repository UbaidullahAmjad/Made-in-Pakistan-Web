@extends('frontend.layouts.app')
@section('title')
    MadeInPak | Home
@endsection
@section('content')
    <!-- ========== HEADER ========== -->
@section('navbar')
    @include('frontend.partials.navbar1')
@endsection
<!-- ========== END HEADER ========== -->

<!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main">
    <!-- Vertical-Slider-Category-Banner Section -->
    <div class="mb-6 bg-gray-1 pb-4">
        <div class="container">
            <div class="row no-gutters">
                <!-- Vertical Menu -->
                <div class="col-md-auto d-none d-xl-block">
                    <div class="max-width-270 min-width-270">
                        <!-- Basics Accordion -->
                        <div id="basicsAccordion">
                            <!-- Card -->
                            <div class="card border-0">
                                <div class="card-header card-collapse border-0 flex-center-between bg-primary text-lh-1 rounded-0"
                                    id="basicsHeadingOne">
                                    <div class="btn-link btn-remove-focus btn-block pl-4 py-3 card-btn shadow-none rounded-0 border-0 font-weight-bold text-gray-90"
                                        data-toggle="collapse" data-target="#basicsCollapseOne" aria-expanded="true"
                                        aria-controls="basicsCollapseOne">
                                        <span class="pl-1 text-gray-90">Departments</span>
                                    </div>
                                    <a href="#"
                                        class="d-block font-size-13 py-3 pr-4 font-weight-bold text-gray-90 ml-auto flex-shrink-0">View
                                        All</a>
                                </div>
                                <div id="basicsCollapseOne" class="collapse show vertical-menu rounded-0"
                                    aria-labelledby="basicsHeadingOne" data-parent="#basicsAccordion">
                                    <div class="card-body p-0">
                                        <nav
                                            class="js-mega-menu navbar navbar-expand-xl u-header__navbar u-header__navbar--no-space hs-menu-initialized">
                                            <div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse">
                                                <ul class="navbar-nav u-header__navbar-nav">
                                                    <li class="nav-item u-header__nav-item" data-event="hover"
                                                        data-position="left">
                                                        <a href="#"
                                                            class="nav-link u-header__nav-link font-weight-bold">Value
                                                            of the Day</a>
                                                    </li>
                                                    <li class="nav-item u-header__nav-item" data-event="hover"
                                                        data-position="left">
                                                        <a href="#"
                                                            class="nav-link u-header__nav-link font-weight-bold">Top 100
                                                            Offers</a>
                                                    </li>
                                                    <li class="nav-item u-header__nav-item" data-event="hover" id="menu"
                                                        data-position="left">
                                                        <a href="#" 
                                                            class="nav-link u-header__nav-link font-weight-bold">New
                                                            Arrivals</a>
                                                    </li>

                                                    @foreach ($categories as $category)
                                                        <li class="nav-item hs-has-mega-menu u-header__nav-item"
                                                            data-event="hover" data-animation-in="slideInUp"
                                                            data-animation-out="fadeOut" data-position="left" category-id="{{ $category->id }}">
                                                            <a id="basicMegaMenu"
                                                                class=" basicMegaMenu nav-link u-header__nav-link u-header__nav-link-toggle"
                                                                href="/products" aria-haspopup="true"
                                                                aria-expanded="false" category-id="{{ $category->id }}">{{ $category->name }}</a>

                                                            <!-- Nav Item - Mega Menu -->
                                                            @foreach ($category->childrenCategories as $childCategory)
                                                                <!-- Nav Item - Mega Menu -->
                                                                <div class="hs-mega-menu vmm-tfw u-header__sub-menu"
                                                                    aria-labelledby="basicMegaMenu">
                                                                    <div class="vmm-bg">
                                                                        <img class="img-fluid"
                                                                            src="assets/img/500X400/img1.png"
                                                                            alt="Image Description">
                                                                    </div>
                                                                    <div class="row u-header__mega-menu-wrapper">
                                                                        <div class="col mb-3 mb-sm-0">
                                                                            <span>
                                                                        </span>

                                                                            <ul class="subcategory">
                                                                                {{ $childCategory->name }}
                                                                            </ul>

                                                                        </div>

                                                                        <div class="col mb-3 mb-sm-0">
                                                                            <span
                                                                                class="u-header__sub-menu-title">Office
                                                                                &
                                                                                Stationery</span>
                                                                            <ul class="u-header__sub-menu-nav-group">
                                                                                <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                        href="#">All Office &
                                                                                        Stationery</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- End Nav Item - Mega Menu -->

                                                            @endforeach

                                                            <!-- End Nav Item - Mega Menu -->
                                                        </li>
                                                    @endforeach

                                                    <!-- Nav Item MegaMenu -->
                                                    <li class="nav-item hs-has-mega-menu u-header__nav-item"
                                                        data-event="hover" data-animation-in="slideInUp"
                                                        data-animation-out="fadeOut" data-position="left">
                                                        <a id="basicMegaMenu"
                                                            class="nav-link u-header__nav-link u-header__nav-link-toggle"
                                                            href="javascript:;" aria-haspopup="true"
                                                            aria-expanded="false">Computers & Accessories</a>

                                                        <!-- Nav Item - Mega Menu -->
                                                        <div class="hs-mega-menu vmm-tfw u-header__sub-menu"
                                                            aria-labelledby="basicMegaMenu">
                                                            <div class="vmm-bg">
                                                                <img class="img-fluid" src="assets/img/500X400/img1.png"
                                                                    alt="Image Description">
                                                            </div>
                                                            <div class="row u-header__mega-menu-wrapper">
                                                                <div class="col mb-3 mb-sm-0">
                                                                    <span class="u-header__sub-menu-title">Computers &
                                                                        Accessories</span>
                                                                    <ul class="u-header__sub-menu-nav-group mb-3">
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">All Computers & Accessories</a>
                                                                        </li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Laptops, Desktops &
                                                                                Monitors</a></li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Printers & Ink</a></li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Networking & Internet
                                                                                Devices</a></li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Computer Accessories</a></li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Software</a></li>
                                                                        <li>
                                                                            <a class="nav-link u-header__sub-menu-nav-link u-nav-divider border-top pt-2 flex-column align-items-start"
                                                                                href="#">
                                                                                <div class="">All Electronics</div>
                                                                                <div
                                                                                    class="u-nav-subtext font-size-11 text-gray-30">
                                                                                    Discover more products</div>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>

                                                                <div class="col mb-3 mb-sm-0">
                                                                    <span class="u-header__sub-menu-title">Office &
                                                                        Stationery</span>
                                                                    <ul class="u-header__sub-menu-nav-group">
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">All Office & Stationery</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Nav Item - Mega Menu -->
                                                    </li>
                                                    <!-- End Nav Item MegaMenu-->
                                                    <!-- Nav Item MegaMenu -->
                                                    <li class="nav-item hs-has-mega-menu u-header__nav-item"
                                                        data-event="hover" data-position="left">
                                                        <a id="basicMegaMenu1"
                                                            class="nav-link u-header__nav-link u-header__nav-link-toggle"
                                                            href="javascript:;" aria-haspopup="true"
                                                            aria-expanded="false">Cameras, Audio & Video</a>

                                                        <!-- Nav Item - Mega Menu -->
                                                        <div class="hs-mega-menu vmm-tfw u-header__sub-menu"
                                                            aria-labelledby="basicMegaMenu1">
                                                            <div class="vmm-bg">
                                                                <img class="img-fluid" src="assets/img/500X400/img4.png"
                                                                    alt="Image Description">
                                                            </div>
                                                            <div class="row u-header__mega-menu-wrapper">
                                                                <div class="col mb-3 mb-sm-0">
                                                                    <span class="u-header__sub-menu-title">Cameras &
                                                                        Photography</span>
                                                                    <ul class="u-header__sub-menu-nav-group mb-3">
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Lenses</a></li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Camera Accessories</a></li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Security & Surveillance</a>
                                                                        </li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Binoculars & Telescopes</a>
                                                                        </li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Camcorders</a></li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Software</a></li>
                                                                        <li>
                                                                            <a class="nav-link u-header__sub-menu-nav-link u-nav-divider border-top pt-2 flex-column align-items-start"
                                                                                href="#">
                                                                                <div class="">All Electronics</div>
                                                                                <div
                                                                                    class="u-nav-subtext font-size-11 text-gray-30">
                                                                                    Discover more products</div>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>

                                                                <div class="col mb-3 mb-sm-0">
                                                                    <span class="u-header__sub-menu-title">Audio &
                                                                        Video</span>
                                                                    <ul class="u-header__sub-menu-nav-group">
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">All Audio & Video</a></li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Headphones & Speakers</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Nav Item - Mega Menu -->
                                                    </li>
                                                    <!-- End Nav Item MegaMenu-->
                                                    <!-- Nav Item MegaMenu -->
                                                    <li class="nav-item hs-has-mega-menu u-header__nav-item"
                                                        data-event="hover" data-position="left">
                                                        <a id="basicMegaMenu2"
                                                            class="nav-link u-header__nav-link u-header__nav-link-toggle"
                                                            href="javascript:;" aria-haspopup="true"
                                                            aria-expanded="false">Mobiles & Tablets</a>

                                                        <!-- Nav Item - Mega Menu -->
                                                        <div class="hs-mega-menu vmm-tfw u-header__sub-menu vmm-bg-extended"
                                                            aria-labelledby="basicMegaMenu2">
                                                            <div class="vmm-bg">
                                                                <img class="img-fluid" src="assets/img/500X400/img3.png"
                                                                    alt="Image Description">
                                                            </div>
                                                            <div class="row u-header__mega-menu-wrapper">
                                                                <div class="col mb-3 mb-sm-0">
                                                                    <span class="u-header__sub-menu-title">Mobiles &
                                                                        Tablets</span>
                                                                    <ul class="u-header__sub-menu-nav-group mb-3">
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">All Mobile Phones</a></li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Smartphones</a></li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Refurbished Mobiles</a></li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link border-top pt-2"
                                                                                href="#">All Mobile Accessories</a></li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Cases & Covers</a></li>
                                                                        <li>
                                                                            <a class="nav-link u-header__sub-menu-nav-link u-nav-divider border-top pt-2 flex-column align-items-start"
                                                                                href="#">
                                                                                <div class="">All Electronics</div>
                                                                                <div
                                                                                    class="u-nav-subtext font-size-11 text-gray-30">
                                                                                    Discover more products</div>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>

                                                                <div class="col mb-3 mb-sm-0">
                                                                    <ul class="u-header__sub-menu-nav-group">
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">All Tablets</a></li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Tablet Accessories</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Nav Item - Mega Menu -->
                                                    </li>
                                                    <!-- End Nav Item MegaMenu-->
                                                    <!-- Nav Item MegaMenu -->
                                                    <li class="nav-item hs-has-mega-menu u-header__nav-item"
                                                        data-event="hover" data-position="left">
                                                        <a id="basicMegaMenu3"
                                                            class="nav-link u-header__nav-link u-header__nav-link-toggle"
                                                            href="javascript:;" aria-haspopup="true"
                                                            aria-expanded="false">Movies, Music & Video Game</a>

                                                        <!-- Nav Item - Mega Menu -->
                                                        <div class="hs-mega-menu vmm-tfw u-header__sub-menu"
                                                            aria-labelledby="basicMegaMenu3">
                                                            <div class="vmm-bg">
                                                                <img class="img-fluid" src="assets/img/500X400/img2.png"
                                                                    alt="Image Description">
                                                            </div>
                                                            <div class="row u-header__mega-menu-wrapper">
                                                                <div class="col mb-3 mb-sm-0">
                                                                    <span class="u-header__sub-menu-title">Movies & TV
                                                                        Shows</span>
                                                                    <ul class="u-header__sub-menu-nav-group mb-3">
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">All Movies & TV Shows</a></li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">All English</a></li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link border-bottom pb-3"
                                                                                href="#">All Hindi</a></li>
                                                                    </ul>
                                                                    <span class="u-header__sub-menu-title">Video
                                                                        Games</span>
                                                                    <ul class="u-header__sub-menu-nav-group">
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">PC Games</a></li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Consoles</a></li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Accessories</a></li>
                                                                    </ul>
                                                                </div>

                                                                <div class="col mb-3 mb-sm-0">
                                                                    <span class="u-header__sub-menu-title">Music</span>
                                                                    <ul class="u-header__sub-menu-nav-group">
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">All Music</a></li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Indian Classical</a></li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Musical Instruments</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Nav Item - Mega Menu -->
                                                    </li>
                                                    <!-- End Nav Item MegaMenu-->
                                                    <!-- Nav Item MegaMenu -->
                                                    <li class="nav-item hs-has-mega-menu u-header__nav-item"
                                                        data-event="hover" data-position="left">
                                                        <a id="basicMegaMenu4"
                                                            class="nav-link u-header__nav-link u-header__nav-link-toggle"
                                                            href="javascript:;" aria-haspopup="true"
                                                            aria-expanded="false">TV & Audio</a>

                                                        <!-- Nav Item - Mega Menu -->
                                                        <div class="hs-mega-menu vmm-tfw u-header__sub-menu"
                                                            aria-labelledby="basicMegaMenu4">
                                                            <div class="vmm-bg">
                                                                <img class="img-fluid" src="assets/img/500X400/img5.png"
                                                                    alt="Image Description">
                                                            </div>
                                                            <div class="row u-header__mega-menu-wrapper">
                                                                <div class="col mb-3 mb-sm-0">
                                                                    <span class="u-header__sub-menu-title">Audio &
                                                                        Video</span>
                                                                    <ul class="u-header__sub-menu-nav-group mb-3">
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">All Audio & Video</a></li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Televisions</a></li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Headphones</a></li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Speakers</a></li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Audio & Video Accessories</a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="nav-link u-header__sub-menu-nav-link u-nav-divider border-top pt-2 flex-column align-items-start"
                                                                                href="#">
                                                                                <div class="">Electro Home Appliances
                                                                                </div>
                                                                                <div
                                                                                    class="u-nav-subtext font-size-11 text-gray-30">
                                                                                    Available in select cities</div>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>

                                                                <div class="col mb-3 mb-sm-0">
                                                                    <span class="u-header__sub-menu-title">Music</span>
                                                                    <ul class="u-header__sub-menu-nav-group">
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Televisions</a></li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Headphones</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Nav Item - Mega Menu -->
                                                    </li>
                                                    <!-- End Nav Item MegaMenu-->
                                                    <!-- Nav Item MegaMenu -->
                                                    <li class="nav-item hs-has-mega-menu u-header__nav-item"
                                                        data-event="hover" data-position="left">
                                                        <a id="basicMegaMenu5"
                                                            class="nav-link u-header__nav-link u-header__nav-link-toggle"
                                                            href="javascript:;" aria-haspopup="true"
                                                            aria-expanded="false">Watches & Eyewear</a>

                                                        <!-- Nav Item - Mega Menu -->
                                                        <div class="hs-mega-menu vmm-tfw u-header__sub-menu"
                                                            aria-labelledby="basicMegaMenu5">
                                                            <div class="vmm-bg">
                                                                <img class="img-fluid" src="assets/img/500X400/img6.png"
                                                                    alt="Image Description">
                                                            </div>
                                                            <div class="row u-header__mega-menu-wrapper">
                                                                <div class="col mb-3 mb-sm-0">
                                                                    <span
                                                                        class="u-header__sub-menu-title">Watches</span>
                                                                    <ul class="u-header__sub-menu-nav-group mb-3">
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">All Watches</a></li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Men's Watches</a></li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Women's Watches</a></li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Premium Watches</a></li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Deals on Watches</a></li>
                                                                    </ul>
                                                                </div>

                                                                <div class="col mb-3 mb-sm-0">
                                                                    <span
                                                                        class="u-header__sub-menu-title">Eyewear</span>
                                                                    <ul class="u-header__sub-menu-nav-group">
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Men's Sunglasses</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Nav Item - Mega Menu -->
                                                    </li>
                                                    <!-- End Nav Item MegaMenu-->
                                                    <!-- Nav Item MegaMenu -->
                                                    <li class="nav-item hs-has-mega-menu u-header__nav-item"
                                                        data-event="hover" data-position="left">
                                                        <a id="basicMegaMenu3"
                                                            class="nav-link u-header__nav-link u-header__nav-link-toggle"
                                                            href="javascript:;" aria-haspopup="true"
                                                            aria-expanded="false">Car, Motorbike & Industrial</a>

                                                        <!-- Nav Item - Mega Menu -->
                                                        <div class="hs-mega-menu vmm-tfw u-header__sub-menu"
                                                            aria-labelledby="basicMegaMenu3">
                                                            <div class="vmm-bg">
                                                                <img class="img-fluid" src="assets/img/500X400/img7.png"
                                                                    alt="Image Description">
                                                            </div>
                                                            <div class="row u-header__mega-menu-wrapper">
                                                                <div class="col mb-3 mb-sm-0">
                                                                    <span class="u-header__sub-menu-title">Car &
                                                                        Motorbike</span>
                                                                    <ul class="u-header__sub-menu-nav-group mb-3">
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">All Cars & Bikes</a></li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Car & Bike Care</a></li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link border-bottom pb-3"
                                                                                href="#">Lubricants</a></li>
                                                                    </ul>
                                                                    <span class="u-header__sub-menu-title">Shop for
                                                                        Bike</span>
                                                                    <ul class="u-header__sub-menu-nav-group">
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Helmets & Gloves</a></li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Bike Parts</a></li>
                                                                    </ul>
                                                                </div>

                                                                <div class="col mb-3 mb-sm-0">
                                                                    <span class="u-header__sub-menu-title">Industrial
                                                                        Supplies</span>
                                                                    <ul class="u-header__sub-menu-nav-group">
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">All Industrial Supplies</a>
                                                                        </li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Lab & Scientific</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Nav Item - Mega Menu -->
                                                    </li>
                                                    <!-- End Nav Item MegaMenu-->
                                                    <!-- Nav Item MegaMenu -->
                                                    <li class="nav-item hs-has-mega-menu u-header__nav-item"
                                                        data-event="hover" data-animation-in="slideInUp"
                                                        data-animation-out="fadeOut" data-position="left">
                                                        <a id="basicMegaMenu9"
                                                            class="nav-link u-header__nav-link u-header__nav-link-toggle"
                                                            href="javascript:;" aria-haspopup="true"
                                                            aria-expanded="false">Gadgets</a>

                                                        <!-- Nav Item - Mega Menu -->
                                                        <div class="hs-mega-menu vmm-tfw u-header__sub-menu"
                                                            aria-labelledby="basicMegaMenu9">
                                                            <div class="vmm-bg">
                                                                <img class="img-fluid" src="assets/img/500X400/img1.png"
                                                                    alt="Image Description">
                                                            </div>
                                                            <div class="row u-header__mega-menu-wrapper">
                                                                <div class="col mb-3 mb-sm-0">
                                                                    <span class="u-header__sub-menu-title">Computers &
                                                                        Accessories</span>
                                                                    <ul class="u-header__sub-menu-nav-group mb-3">
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">All Computers & Accessories</a>
                                                                        </li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Laptops, Desktops &
                                                                                Monitors</a></li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Printers & Ink</a></li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Networking & Internet
                                                                                Devices</a></li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Computer Accessories</a></li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Software</a></li>
                                                                        <li>
                                                                            <a class="nav-link u-header__sub-menu-nav-link u-nav-divider border-top pt-2 flex-column align-items-start"
                                                                                href="#">
                                                                                <div class="">All Electronics</div>
                                                                                <div
                                                                                    class="u-nav-subtext font-size-11 text-gray-30">
                                                                                    Discover more products</div>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>

                                                                <div class="col mb-3 mb-sm-0">
                                                                    <span class="u-header__sub-menu-title">Office &
                                                                        Stationery</span>
                                                                    <ul class="u-header__sub-menu-nav-group">
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">All Office & Stationery</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Nav Item - Mega Menu -->
                                                    </li>
                                                    <!-- End Nav Item MegaMenu-->
                                                    <!-- Nav Item MegaMenu -->
                                                    <li class="nav-item hs-has-mega-menu u-header__nav-item"
                                                        data-event="hover" data-position="left">
                                                        <a id="basicMegaMenu5"
                                                            class="nav-link u-header__nav-link u-header__nav-link-toggle"
                                                            href="javascript:;" aria-haspopup="true"
                                                            aria-expanded="false">Printers & Inks</a>

                                                        <!-- Nav Item - Mega Menu -->
                                                        <div class="hs-mega-menu vmm-tfw u-header__sub-menu"
                                                            aria-labelledby="basicMegaMenu5">
                                                            <div class="vmm-bg">
                                                                <img class="img-fluid" src="assets/img/500X400/img2.png"
                                                                    alt="Image Description">
                                                            </div>
                                                            <div class="row u-header__mega-menu-wrapper">
                                                                <div class="col mb-3 mb-sm-0">
                                                                    <span class="u-header__sub-menu-title">Movies & TV
                                                                        Shows</span>
                                                                    <ul class="u-header__sub-menu-nav-group mb-3">
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">All Movies & TV Shows</a></li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">All English</a></li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link border-bottom pb-3"
                                                                                href="#">All Hindi</a></li>
                                                                    </ul>
                                                                    <span class="u-header__sub-menu-title">Video
                                                                        Games</span>
                                                                    <ul class="u-header__sub-menu-nav-group">
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">PC Games</a></li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Consoles</a></li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Accessories</a></li>
                                                                    </ul>
                                                                </div>

                                                                <div class="col mb-3 mb-sm-0">
                                                                    <span class="u-header__sub-menu-title">Music</span>
                                                                    <ul class="u-header__sub-menu-nav-group">
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">All Music</a></li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Indian Classical</a></li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Musical Instruments</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Nav Item - Mega Menu -->
                                                    </li>
                                                    <!-- End Nav Item MegaMenu-->
                                                    <!-- Nav Item -->
                                                    <li class="nav-item hs-has-sub-menu u-header__nav-item"
                                                        data-event="click" data-animation-in="slideInUp"
                                                        data-animation-out="fadeOut" data-position="left">
                                                        <a id="homeMegaMenu"
                                                            class="nav-link u-header__nav-link u-header__nav-link-toggle u-header__nav-link-toggle"
                                                            href="javascript:;" aria-haspopup="true"
                                                            aria-expanded="false"
                                                            aria-labelledby="homeSubMenu">Accessories</a>

                                                        <!-- Home - Submenu -->
                                                        <ul id="homeSubMenu"
                                                            class="hs-sub-menu u-header__sub-menu animated hs-position-left fadeOut"
                                                            aria-labelledby="homeMegaMenu"
                                                            style="min-width: 230px; display: none;">
                                                            <!-- Home-v1 -->
                                                            <li class="hs-has-sub-menu">
                                                                <a class="nav-link u-header__sub-menu-nav-link "
                                                                    href="index.html">Home-v1</a>
                                                            </li>
                                                            <!-- End Home-v1 -->

                                                            <!-- Home-v2 -->
                                                            <li class="hs-has-sub-menu">
                                                                <a class="nav-link u-header__sub-menu-nav-link "
                                                                    href="home-v2.html">Home-v2</a>
                                                            </li>
                                                            <!-- End Home-v2 -->

                                                            <!-- Home-v3 -->
                                                            <li class="hs-has-sub-menu">
                                                                <a class="nav-link u-header__sub-menu-nav-link "
                                                                    href="home-v3.html">Home-v3</a>
                                                            </li>
                                                            <!-- End Home-v3 -->

                                                            <!-- Home-v4 -->
                                                            <li class="hs-has-sub-menu">
                                                                <a class="nav-link u-header__sub-menu-nav-link "
                                                                    href="home-v4.html">Home-v4</a>
                                                            </li>
                                                            <!-- End Home-v4 -->
                                                        </ul>
                                                        <!-- End Home - Submenu -->
                                                    </li>
                                                    <!-- End Nav Item -->
                                                </ul>
                                            </div>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <!-- End Card -->
                        </div>
                        <!-- End Basics Accordion -->
                    </div>
                </div>
                <!-- End Vertical Menu -->
                <!-- Slider-Category Section -->
                <div class="col">
                    <div class="max-width-890-wd max-width-660-xl">
                        <!-- Slider -->
                        <div class="slider-bg max-height-345-xl max-height-348-wd">
                            <div class="overflow-hidden">
                                <div class="js-slick-carousel u-slick"
                                    data-pagi-classes="text-center position-absolute right-0 bottom-0 left-0 u-slick__pagination u-slick__pagination--long justify-content-start mb-3 mb-md-5 ml-3 ml-md-4 ml-lg-9 ml-xl-4 ml-wd-9">
                                    <div class="js-slide">
                                        <div class="py-6 py-md-4 px-3 px-md-4 px-lg-9 px-xl-4 px-wd-9">
                                            <div class="row no-gutters">
                                                <div class="col-xl-6 col-6 mt-md-5">
                                                    <h1 class="font-size-58-sm text-lh-57 font-weight-light"
                                                        data-scs-animation-in="fadeInUp">
                                                        THE NEW <span class="d-block font-size-58-sm">STANDARD</span>
                                                    </h1>
                                                    <h6 class="font-size-15-sm font-weight-bold mb-2 mb-md-3"
                                                        data-scs-animation-in="fadeInUp" data-scs-animation-delay="200">
                                                        UNDER FAVORABLE SMARTWATCHES
                                                    </h6>
                                                    <div class="mb-2 mb-md-4" data-scs-animation-in="fadeInUp"
                                                        data-scs-animation-delay="300">
                                                        <span class="font-size-13">FROM</span>
                                                        <div class="font-size-50 font-weight-bold text-lh-45">$749</div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-6 d-flex align-items-center"
                                                    data-scs-animation-in="zoomIn" data-scs-animation-delay="400">
                                                    <img class="img-fluid max-width-300-md"
                                                        src="assets/img/416X420/img1.png" alt="Image Description">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="js-slide">
                                        <div class="py-6 py-md-4 px-3 px-md-4 px-lg-9 px-xl-4 px-wd-9">
                                            <div class="row no-gutters">
                                                <div class="col-xl-6 col-6 mt-md-5">
                                                    <h1 class="font-size-58-sm text-lh-57 font-weight-light"
                                                        data-scs-animation-in="slideInLeft">
                                                        THE NEW <span class="d-block font-size-58-sm">STANDARD</span>
                                                    </h1>
                                                    <h6 class="font-size-15-sm font-weight-bold mb-2 mb-md-3"
                                                        data-scs-animation-in="slideInLeft"
                                                        data-scs-animation-delay="200">UNDER FAVORABLE SMARTWATCHES
                                                    </h6>
                                                    <div class="mb-2 mb-md-4" data-scs-animation-in="slideInLeft"
                                                        data-scs-animation-delay="300">
                                                        <span class="font-size-13">FROM</span>
                                                        <div class="font-size-50 font-weight-bold text-lh-45">$749</div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-6 d-flex align-items-center"
                                                    data-scs-animation-in="slideInRight" data-scs-animation-delay="400">
                                                    <img class="img-fluid max-width-300-md"
                                                        src="assets/img/400X400/img2.png" alt="Image Description">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="js-slide">
                                        <div class="py-6 py-md-4 px-3 px-md-4 px-lg-9 px-xl-4 px-wd-9">
                                            <div class="row no-gutters">
                                                <div class="col-xl-6 col-6 mt-md-5">
                                                    <h1 class="font-size-58-sm text-lh-57 font-weight-light"
                                                        data-scs-animation-in="fadeInUp">
                                                        THE NEW <span class="d-block font-size-58-sm">STANDARD</span>
                                                    </h1>
                                                    <h6 class="font-size-15-sm font-weight-bold mb-2 mb-md-3"
                                                        data-scs-animation-in="fadeInUp" data-scs-animation-delay="200">
                                                        UNDER FAVORABLE SMARTWATCHES
                                                    </h6>
                                                    <div class="mb-2 mb-md-4" data-scs-animation-in="fadeInUp"
                                                        data-scs-animation-delay="300">
                                                        <span class="font-size-13">FROM</span>
                                                        <div class="font-size-50 font-weight-bold text-lh-45">$749</div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-6 d-flex align-items-center"
                                                    data-scs-animation-in="zoomIn" data-scs-animation-delay="400">
                                                    <img class="img-fluid max-width-300-md"
                                                        src="assets/img/400X400/img1.png" alt="Image Description">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Slider -->
                        <!-- Category -->
                        <ul
                            class="list-group list-group-horizontal-sm position-relative z-index-2 flex-row overflow-auto overflow-md-visble">
                            <li
                                class="list-group-item py-2 px-3 px-xl-4 px-wd-5 flex-horizontal-center shadow-on-hover-1 rounded-0 border-top-0 border-bottom-0 flex-shrink-0 flex-md-shrink-1">
                                <a href="../shop/product-categories-7-column-full-width.html"
                                    class="d-block py-2 text-center">
                                    <img class="img-fluid mb-1 max-width-100-sm" src="assets/img/300X300/img6.jpg"
                                        alt="Image Description">
                                    <h6 class="font-size-14 mb-0 text-gray-90 font-weight-semi-bold">Accessories</h6>
                                </a>
                            </li>
                            <li
                                class="list-group-item py-2 px-3 px-xl-4 px-wd-5 flex-horizontal-center shadow-on-hover-1 rounded-0 border-top-0 border-bottom-0 flex-shrink-0 flex-md-shrink-1">
                                <a href="../shop/product-categories-7-column-full-width.html"
                                    class="d-block py-2 text-center">
                                    <img class="img-fluid mb-1 max-width-100-sm" src="assets/img/300X300/img8.jpg"
                                        alt="Image Description">
                                    <h6 class="font-size-14 mb-0 text-gray-90 font-weight-semi-bold">Laptop Speakers
                                    </h6>
                                </a>
                            </li>
                            <li
                                class="list-group-item py-2 px-3 px-xl-4 px-wd-5 flex-horizontal-center shadow-on-hover-1 rounded-0 border-top-0 border-bottom-0 flex-shrink-0 flex-md-shrink-1">
                                <a href="../shop/product-categories-7-column-full-width.html"
                                    class="d-block py-2 text-center">
                                    <img class="img-fluid mb-1 max-width-100-sm" src="assets/img/300X300/img15.jpg"
                                        alt="Image Description">
                                    <h6 class="font-size-14 mb-0 text-gray-90 font-weight-semi-bold">All in One</h6>
                                </a>
                            </li>
                            <li
                                class="list-group-item py-2 px-3 px-xl-4 px-wd-5 flex-horizontal-center shadow-on-hover-1 rounded-0 border-top-0 border-bottom-0 flex-shrink-0 flex-md-shrink-1">
                                <a href="../shop/product-categories-7-column-full-width.html"
                                    class="d-block py-2 text-center">
                                    <img class="img-fluid mb-1 max-width-100-sm" src="assets/img/300X300/img4.jpg"
                                        alt="Image Description">
                                    <h6 class="font-size-14 mb-0 text-gray-90 font-weight-semi-bold">Audio Speakers</h6>
                                </a>
                            </li>
                            <li
                                class="list-group-item py-2 px-3 px-xl-4 px-wd-5 flex-horizontal-center shadow-on-hover-1 rounded-0 border-top-0 border-bottom-0 flex-shrink-0 flex-md-shrink-1 d-xl-none d-wd-block">
                                <a href="../shop/product-categories-7-column-full-width.html"
                                    class="d-block py-2 text-center">
                                    <img class="img-fluid mb-1 max-width-100-sm" src="assets/img/300X300/img14.png"
                                        alt="Image Description">
                                    <h6 class="font-size-14 mb-0 text-gray-90 font-weight-semi-bold">Camera</h6>
                                </a>
                            </li>
                        </ul>
                        <!-- End Category -->
                    </div>
                </div>
                <!-- End Slider-Category Section -->
                <!-- Banner -->

                <div class="col-md-auto">
                    <div class="max-width-240-xl">
                        <div class="d-md-flex d-xl-block">
                            <div class="bg-white border-top border-xl-top-0">
                                <a href="../shop/shop.html"
                                    class="text-gray-90 position-relative d-block overflow-hidden">
                                    <div class="position-absolute transform-rotate-16-banner">
                                        <img class="img-fluid" src="assets/img/140X140/img1.png"
                                            alt="Image Description">
                                    </div>
                                    <div class="px-4 py-6 min-height-172">
                                        <div class="mb-2 pb-1 font-size-18 font-weight-light text-ls-n1 text-lh-23">
                                            CATCH BIG <strong>DEALS</strong> ON THE CAMERAS
                                        </div>
                                        <div class="link text-gray-90 font-weight-bold font-size-15" href="#">
                                            Shop now
                                            <span class="link__icon ml-1">
                                                <span class="link__icon-inner"><i
                                                        class="ec ec-arrow-right-categproes"></i></span>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="bg-white border-top">
                                <a href="../shop/shop.html"
                                    class="text-gray-90 position-relative d-block overflow-hidden">
                                    <div class="position-absolute transform-rotate-16-banner">
                                        <img class="img-fluid" src="assets/img/140X140/img2.png"
                                            alt="Image Description">
                                    </div>
                                    <div class="px-4 py-6 min-height-172">
                                        <div class="mb-2 pb-1 font-size-18 font-weight-light text-ls-n1 text-lh-23">
                                            CATCH BIG <strong>DEALS</strong> ON THE CAMERAS
                                        </div>
                                        <div class="link text-gray-90 font-weight-bold font-size-15" href="#">
                                            Shop now
                                            <span class="link__icon ml-1">
                                                <span class="link__icon-inner"><i
                                                        class="ec ec-arrow-right-categproes"></i></span>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="bg-white border-top">
                                <a href="../shop/shop.html"
                                    class="text-gray-90 position-relative d-block overflow-hidden">
                                    <div class="position-absolute transform-rotate-16-banner">
                                        <img class="img-fluid" src="assets/img/140X140/img3.png"
                                            alt="Image Description">
                                    </div>
                                    <div class="px-4 py-6 min-height-172">
                                        <div class="mb-2 pb-1 font-size-18 font-weight-light text-ls-n1 text-lh-23">
                                            CATCH BIG <strong>DEALS</strong> ON THE CAMERAS
                                        </div>
                                        <div class="link text-gray-90 font-weight-bold font-size-15" href="#">
                                            Shop now
                                            <span class="link__icon ml-1">
                                                <span class="link__icon-inner"><i
                                                        class="ec ec-arrow-right-categproes"></i></span>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Banner -->
            </div>
        </div>
    </div>
    <!-- End Vertical-Slider-Category-Banner Section -->
    <div class="container">

        <!-- Prodcut-cards-carousel -->
        <div class="space-top-2">
            <div
                class=" d-flex justify-content-between border-bottom border-color-1 flex-md-nowrap flex-wrap border-sm-bottom-0">
                <h3 class="section-title mb-0 pb-2 font-size-22">Trending Products</h3>

            </div>
            <div class="js-slick-carousel u-slick u-slick--gutters-2 overflow-hidden u-slick-overflow-visble pt-3 pb-6"
                data-pagi-classes="text-center right-0 bottom-1 left-0 u-slick__pagination u-slick__pagination--long mb-0 z-index-n1 mt-4">
                <div class="js-slide">
                    <ul class="row list-unstyled products-group no-gutters mb-0 overflow-visible">
                        <li
                            class="col-wd-3 col-md-4 product-item product-item__card pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto product-media-left">
                                        <a href="../shop/single-product-fullwidth.html"
                                            class="max-width-150 d-block"><img class="img-fluid"
                                                src="assets/img/150X140/img1.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                        <div class="mb-4">
                                            <div class="mb-2"><a
                                                    href="../shop/product-categories-7-column-full-width.html"
                                                    class="font-size-12 text-gray-5">Tablets</a></div>
                                            <h5 class="product-item__title"><a
                                                    href="../shop/single-product-fullwidth.html"
                                                    class="text-blue font-weight-bold">Tablet Air 3 WiFi 64GB Gold</a>
                                            </h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$629,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html"
                                                    class="btn-add-cart btn-primary transition-3d-hover"><i
                                                        class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li
                            class="col-wd-3 col-md-4 product-item product-item__card pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto product-media-left">
                                        <a href="../shop/single-product-fullwidth.html"
                                            class="max-width-150 d-block"><img class="img-fluid"
                                                src="assets/img/150X140/img2.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                        <div class="mb-4">
                                            <div class="mb-2"><a
                                                    href="../shop/product-categories-7-column-full-width.html"
                                                    class="font-size-12 text-gray-5">Laptops & Computers</a></div>
                                            <h5 class="product-item__title"><a
                                                    href="../shop/single-product-fullwidth.html"
                                                    class="text-blue font-weight-bold">Tablet White EliteBook Revolve
                                                    810 G2</a></h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$1 299,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html"
                                                    class="btn-add-cart btn-primary transition-3d-hover"><i
                                                        class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li
                            class="col-wd-3 col-md-4 product-item product-item__card pb-2 mb-2 pb-md-0 mb-md-0 remove-divider-xl">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto product-media-left">
                                        <a href="../shop/single-product-fullwidth.html"
                                            class="max-width-150 d-block"><img class="img-fluid"
                                                src="assets/img/150X140/img3.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                        <div class="mb-4">
                                            <div class="mb-2"><a
                                                    href="../shop/product-categories-7-column-full-width.html"
                                                    class="font-size-12 text-gray-5">Accesories</a></div>
                                            <h5 class="product-item__title"><a
                                                    href="../shop/single-product-fullwidth.html"
                                                    class="text-blue font-weight-bold">Pendrive USB 3.0 Flash 64 GB</a>
                                            </h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$110,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html"
                                                    class="btn-add-cart btn-primary transition-3d-hover"><i
                                                        class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li
                            class="col-wd-3 col-md-4 product-item product-item__card d-none d-md-block pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0 remove-divider-wd">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto product-media-left">
                                        <a href="../shop/single-product-fullwidth.html"
                                            class="max-width-150 d-block"><img class="img-fluid"
                                                src="assets/img/150X140/img7.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                        <div class="mb-4">
                                            <div class="mb-2"><a
                                                    href="../shop/product-categories-7-column-full-width.html"
                                                    class="font-size-12 text-gray-5">Headphones</a></div>
                                            <h5 class="product-item__title"><a
                                                    href="../shop/single-product-fullwidth.html"
                                                    class="text-blue font-weight-bold">White Solo 2 Wireless</a></h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$110,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html"
                                                    class="btn-add-cart btn-primary transition-3d-hover"><i
                                                        class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li
                            class="col-wd-3 col-md-4 product-item product-item__card d-none d-md-block pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto product-media-left">
                                        <a href="../shop/single-product-fullwidth.html"
                                            class="max-width-150 d-block"><img class="img-fluid"
                                                src="assets/img/150X140/img4.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                        <div class="mb-4">
                                            <div class="mb-2"><a
                                                    href="../shop/product-categories-7-column-full-width.html"
                                                    class="font-size-12 text-gray-5">Smartwatches</a></div>
                                            <h5 class="product-item__title"><a
                                                    href="../shop/single-product-fullwidth.html"
                                                    class="text-blue font-weight-bold">Smartwatch 2.0 LTE Wifi</a></h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$110,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html"
                                                    class="btn-add-cart btn-primary transition-3d-hover"><i
                                                        class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li
                            class="col-wd-3 col-md-4 product-item product-item__card d-none d-md-block pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0 remove-divider-xl">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto product-media-left">
                                        <a href="../shop/single-product-fullwidth.html"
                                            class="max-width-150 d-block"><img class="img-fluid"
                                                src="assets/img/150X140/img5.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                        <div class="mb-4">
                                            <div class="mb-2"><a
                                                    href="../shop/product-categories-7-column-full-width.html"
                                                    class="font-size-12 text-gray-5">Smartwatches</a></div>
                                            <h5 class="product-item__title"><a
                                                    href="../shop/single-product-fullwidth.html"
                                                    class="text-blue font-weight-bold">Gear Virtual Reality</a></h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$799,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html"
                                                    class="btn-add-cart btn-primary transition-3d-hover"><i
                                                        class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li
                            class="col-wd-3 col-md-4 product-item product-item__card d-none d-wd-block pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto product-media-left">
                                        <a href="../shop/single-product-fullwidth.html"
                                            class="max-width-150 d-block"><img class="img-fluid"
                                                src="assets/img/150X140/img6.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                        <div class="mb-4">
                                            <div class="mb-2"><a
                                                    href="../shop/product-categories-7-column-full-width.html"
                                                    class="font-size-12 text-gray-5">Gadgets</a></div>
                                            <h5 class="product-item__title"><a
                                                    href="../shop/single-product-fullwidth.html"
                                                    class="text-blue font-weight-bold">External SSD USB 3.1 750 GB</a>
                                            </h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$799,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html"
                                                    class="btn-add-cart btn-primary transition-3d-hover"><i
                                                        class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li
                            class="col-wd-3 col-md-4 product-item product-item__card d-none d-wd-block pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0 remove-divider-wd">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto product-media-left">
                                        <a href="../shop/single-product-fullwidth.html"
                                            class="max-width-150 d-block"><img class="img-fluid"
                                                src="assets/img/150X140/img8.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                        <div class="mb-4">
                                            <div class="mb-2"><a
                                                    href="../shop/product-categories-7-column-full-width.html"
                                                    class="font-size-12 text-gray-5">Cameras</a></div>
                                            <h5 class="product-item__title"><a
                                                    href="../shop/single-product-fullwidth.html"
                                                    class="text-blue font-weight-bold">Purple NX Mini F1 aparat SMART
                                                    NX</a></h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$559.00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html"
                                                    class="btn-add-cart btn-primary transition-3d-hover"><i
                                                        class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="js-slide">
                    <ul class="row list-unstyled products-group no-gutters mb-0 overflow-visible">
                        <li
                            class="col-wd-3 col-md-4 product-item product-item__card pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto product-media-left">
                                        <a href="../shop/single-product-fullwidth.html"
                                            class="max-width-150 d-block"><img class="img-fluid"
                                                src="assets/img/150X140/img1.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                        <div class="mb-4">
                                            <div class="mb-2"><a
                                                    href="../shop/product-categories-7-column-full-width.html"
                                                    class="font-size-12 text-gray-5">Tablets</a></div>
                                            <h5 class="product-item__title"><a
                                                    href="../shop/single-product-fullwidth.html"
                                                    class="text-blue font-weight-bold">Tablet Air 3 WiFi 64GB Gold</a>
                                            </h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$629,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html"
                                                    class="btn-add-cart btn-primary transition-3d-hover"><i
                                                        class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li
                            class="col-wd-3 col-md-4 product-item product-item__card pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto product-media-left">
                                        <a href="../shop/single-product-fullwidth.html"
                                            class="max-width-150 d-block"><img class="img-fluid"
                                                src="assets/img/150X140/img2.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                        <div class="mb-4">
                                            <div class="mb-2"><a
                                                    href="../shop/product-categories-7-column-full-width.html"
                                                    class="font-size-12 text-gray-5">Laptops & Computers</a></div>
                                            <h5 class="product-item__title"><a
                                                    href="../shop/single-product-fullwidth.html"
                                                    class="text-blue font-weight-bold">Tablet White EliteBook Revolve
                                                    810 G2</a></h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$1 299,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html"
                                                    class="btn-add-cart btn-primary transition-3d-hover"><i
                                                        class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li
                            class="col-wd-3 col-md-4 product-item product-item__card pb-2 mb-2 pb-md-0 mb-md-0 remove-divider-xl">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto product-media-left">
                                        <a href="../shop/single-product-fullwidth.html"
                                            class="max-width-150 d-block"><img class="img-fluid"
                                                src="assets/img/150X140/img3.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                        <div class="mb-4">
                                            <div class="mb-2"><a
                                                    href="../shop/product-categories-7-column-full-width.html"
                                                    class="font-size-12 text-gray-5">Accesories</a></div>
                                            <h5 class="product-item__title"><a
                                                    href="../shop/single-product-fullwidth.html"
                                                    class="text-blue font-weight-bold">Pendrive USB 3.0 Flash 64 GB</a>
                                            </h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$110,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html"
                                                    class="btn-add-cart btn-primary transition-3d-hover"><i
                                                        class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li
                            class="col-wd-3 col-md-4 product-item product-item__card d-none d-md-block pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0 remove-divider-wd">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto product-media-left">
                                        <a href="../shop/single-product-fullwidth.html"
                                            class="max-width-150 d-block"><img class="img-fluid"
                                                src="assets/img/150X140/img7.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                        <div class="mb-4">
                                            <div class="mb-2"><a
                                                    href="../shop/product-categories-7-column-full-width.html"
                                                    class="font-size-12 text-gray-5">Headphones</a></div>
                                            <h5 class="product-item__title"><a
                                                    href="../shop/single-product-fullwidth.html"
                                                    class="text-blue font-weight-bold">White Solo 2 Wireless</a></h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$110,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html"
                                                    class="btn-add-cart btn-primary transition-3d-hover"><i
                                                        class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li
                            class="col-wd-3 col-md-4 product-item product-item__card d-none d-md-block pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto product-media-left">
                                        <a href="../shop/single-product-fullwidth.html"
                                            class="max-width-150 d-block"><img class="img-fluid"
                                                src="assets/img/150X140/img4.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                        <div class="mb-4">
                                            <div class="mb-2"><a
                                                    href="../shop/product-categories-7-column-full-width.html"
                                                    class="font-size-12 text-gray-5">Smartwatches</a></div>
                                            <h5 class="product-item__title"><a
                                                    href="../shop/single-product-fullwidth.html"
                                                    class="text-blue font-weight-bold">Smartwatch 2.0 LTE Wifi</a></h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$110,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html"
                                                    class="btn-add-cart btn-primary transition-3d-hover"><i
                                                        class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li
                            class="col-wd-3 col-md-4 product-item product-item__card d-none d-md-block pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0 remove-divider-xl">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto product-media-left">
                                        <a href="../shop/single-product-fullwidth.html"
                                            class="max-width-150 d-block"><img class="img-fluid"
                                                src="assets/img/150X140/img5.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                        <div class="mb-4">
                                            <div class="mb-2"><a
                                                    href="../shop/product-categories-7-column-full-width.html"
                                                    class="font-size-12 text-gray-5">Smartwatches</a></div>
                                            <h5 class="product-item__title"><a
                                                    href="../shop/single-product-fullwidth.html"
                                                    class="text-blue font-weight-bold">Gear Virtual Reality</a></h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$799,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html"
                                                    class="btn-add-cart btn-primary transition-3d-hover"><i
                                                        class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li
                            class="col-wd-3 col-md-4 product-item product-item__card d-none d-wd-block pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto product-media-left">
                                        <a href="../shop/single-product-fullwidth.html"
                                            class="max-width-150 d-block"><img class="img-fluid"
                                                src="assets/img/150X140/img6.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                        <div class="mb-4">
                                            <div class="mb-2"><a
                                                    href="../shop/product-categories-7-column-full-width.html"
                                                    class="font-size-12 text-gray-5">Gadgets</a></div>
                                            <h5 class="product-item__title"><a
                                                    href="../shop/single-product-fullwidth.html"
                                                    class="text-blue font-weight-bold">External SSD USB 3.1 750 GB</a>
                                            </h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$799,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html"
                                                    class="btn-add-cart btn-primary transition-3d-hover"><i
                                                        class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li
                            class="col-wd-3 col-md-4 product-item product-item__card d-none d-wd-block pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0 remove-divider-wd">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto product-media-left">
                                        <a href="../shop/single-product-fullwidth.html"
                                            class="max-width-150 d-block"><img class="img-fluid"
                                                src="assets/img/150X140/img8.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                        <div class="mb-4">
                                            <div class="mb-2"><a
                                                    href="../shop/product-categories-7-column-full-width.html"
                                                    class="font-size-12 text-gray-5">Cameras</a></div>
                                            <h5 class="product-item__title"><a
                                                    href="../shop/single-product-fullwidth.html"
                                                    class="text-blue font-weight-bold">Purple NX Mini F1 aparat SMART
                                                    NX</a></h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$559.00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html"
                                                    class="btn-add-cart btn-primary transition-3d-hover"><i
                                                        class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="js-slide">
                    <ul class="row list-unstyled products-group no-gutters mb-0 overflow-visible">
                        <li
                            class="col-wd-3 col-md-4 product-item product-item__card pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto product-media-left">
                                        <a href="../shop/single-product-fullwidth.html"
                                            class="max-width-150 d-block"><img class="img-fluid"
                                                src="assets/img/150X140/img1.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                        <div class="mb-4">
                                            <div class="mb-2"><a
                                                    href="../shop/product-categories-7-column-full-width.html"
                                                    class="font-size-12 text-gray-5">Tablets</a></div>
                                            <h5 class="product-item__title"><a
                                                    href="../shop/single-product-fullwidth.html"
                                                    class="text-blue font-weight-bold">Tablet Air 3 WiFi 64GB Gold</a>
                                            </h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$629,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html"
                                                    class="btn-add-cart btn-primary transition-3d-hover"><i
                                                        class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li
                            class="col-wd-3 col-md-4 product-item product-item__card pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto product-media-left">
                                        <a href="../shop/single-product-fullwidth.html"
                                            class="max-width-150 d-block"><img class="img-fluid"
                                                src="assets/img/150X140/img2.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                        <div class="mb-4">
                                            <div class="mb-2"><a
                                                    href="../shop/product-categories-7-column-full-width.html"
                                                    class="font-size-12 text-gray-5">Laptops & Computers</a></div>
                                            <h5 class="product-item__title"><a
                                                    href="../shop/single-product-fullwidth.html"
                                                    class="text-blue font-weight-bold">Tablet White EliteBook Revolve
                                                    810 G2</a></h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$1 299,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html"
                                                    class="btn-add-cart btn-primary transition-3d-hover"><i
                                                        class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li
                            class="col-wd-3 col-md-4 product-item product-item__card pb-2 mb-2 pb-md-0 mb-md-0 remove-divider-xl">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto product-media-left">
                                        <a href="../shop/single-product-fullwidth.html"
                                            class="max-width-150 d-block"><img class="img-fluid"
                                                src="assets/img/150X140/img3.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                        <div class="mb-4">
                                            <div class="mb-2"><a
                                                    href="../shop/product-categories-7-column-full-width.html"
                                                    class="font-size-12 text-gray-5">Accesories</a></div>
                                            <h5 class="product-item__title"><a
                                                    href="../shop/single-product-fullwidth.html"
                                                    class="text-blue font-weight-bold">Pendrive USB 3.0 Flash 64 GB</a>
                                            </h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$110,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html"
                                                    class="btn-add-cart btn-primary transition-3d-hover"><i
                                                        class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li
                            class="col-wd-3 col-md-4 product-item product-item__card d-none d-md-block pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0 remove-divider-wd">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto product-media-left">
                                        <a href="../shop/single-product-fullwidth.html"
                                            class="max-width-150 d-block"><img class="img-fluid"
                                                src="assets/img/150X140/img7.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                        <div class="mb-4">
                                            <div class="mb-2"><a
                                                    href="../shop/product-categories-7-column-full-width.html"
                                                    class="font-size-12 text-gray-5">Headphones</a></div>
                                            <h5 class="product-item__title"><a
                                                    href="../shop/single-product-fullwidth.html"
                                                    class="text-blue font-weight-bold">White Solo 2 Wireless</a></h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$110,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html"
                                                    class="btn-add-cart btn-primary transition-3d-hover"><i
                                                        class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li
                            class="col-wd-3 col-md-4 product-item product-item__card d-none d-md-block pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto product-media-left">
                                        <a href="../shop/single-product-fullwidth.html"
                                            class="max-width-150 d-block"><img class="img-fluid"
                                                src="assets/img/150X140/img4.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                        <div class="mb-4">
                                            <div class="mb-2"><a
                                                    href="../shop/product-categories-7-column-full-width.html"
                                                    class="font-size-12 text-gray-5">Smartwatches</a></div>
                                            <h5 class="product-item__title"><a
                                                    href="../shop/single-product-fullwidth.html"
                                                    class="text-blue font-weight-bold">Smartwatch 2.0 LTE Wifi</a></h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$110,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html"
                                                    class="btn-add-cart btn-primary transition-3d-hover"><i
                                                        class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li
                            class="col-wd-3 col-md-4 product-item product-item__card d-none d-md-block pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0 remove-divider-xl">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto product-media-left">
                                        <a href="../shop/single-product-fullwidth.html"
                                            class="max-width-150 d-block"><img class="img-fluid"
                                                src="assets/img/150X140/img5.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                        <div class="mb-4">
                                            <div class="mb-2"><a
                                                    href="../shop/product-categories-7-column-full-width.html"
                                                    class="font-size-12 text-gray-5">Smartwatches</a></div>
                                            <h5 class="product-item__title"><a
                                                    href="../shop/single-product-fullwidth.html"
                                                    class="text-blue font-weight-bold">Gear Virtual Reality</a></h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$799,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html"
                                                    class="btn-add-cart btn-primary transition-3d-hover"><i
                                                        class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li
                            class="col-wd-3 col-md-4 product-item product-item__card d-none d-wd-block pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto product-media-left">
                                        <a href="../shop/single-product-fullwidth.html"
                                            class="max-width-150 d-block"><img class="img-fluid"
                                                src="assets/img/150X140/img6.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                        <div class="mb-4">
                                            <div class="mb-2"><a
                                                    href="../shop/product-categories-7-column-full-width.html"
                                                    class="font-size-12 text-gray-5">Gadgets</a></div>
                                            <h5 class="product-item__title"><a
                                                    href="../shop/single-product-fullwidth.html"
                                                    class="text-blue font-weight-bold">External SSD USB 3.1 750 GB</a>
                                            </h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$799,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html"
                                                    class="btn-add-cart btn-primary transition-3d-hover"><i
                                                        class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li
                            class="col-wd-3 col-md-4 product-item product-item__card d-none d-wd-block pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0 remove-divider-wd">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto product-media-left">
                                        <a href="../shop/single-product-fullwidth.html"
                                            class="max-width-150 d-block"><img class="img-fluid"
                                                src="assets/img/150X140/img8.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                        <div class="mb-4">
                                            <div class="mb-2"><a
                                                    href="../shop/product-categories-7-column-full-width.html"
                                                    class="font-size-12 text-gray-5">Cameras</a></div>
                                            <h5 class="product-item__title"><a
                                                    href="../shop/single-product-fullwidth.html"
                                                    class="text-blue font-weight-bold">Purple NX Mini F1 aparat SMART
                                                    NX</a></h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$559.00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html"
                                                    class="btn-add-cart btn-primary transition-3d-hover"><i
                                                        class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Prodcut-cards-carousel -->
        <!-- Popular Categories this Week -->
        <div class="mb-6">
            <!-- Nav nav-pills -->
            <div class="position-relative text-center z-index-2">
                <div
                    class=" d-flex justify-content-between border-bottom border-color-1 flex-lg-nowrap flex-wrap border-md-down-top-0 border-md-down-bottom-0">
                    <h3 class="section-title mb-0 pb-2 font-size-22"> Categories </h3>
                </div>
            </div>
            <!-- End Nav Pills -->
            <div class="row">

                <div class="col-md-5 col-lg-auto">
                    <a href="../shop/shop.html" class="d-block"><img class="img-fluid" src="assets/img/370X608/img1.jpg"
                            alt="Image Description"></a>
                </div>
                <div class="col-md pl-md-0">
                    <ul class="row list-unstyled products-group no-gutters mb-0">
                        <li class="col-6 col-md-4 col-wd-3 product-item">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner bg-white p-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-4"><a href="../shop/product-categories-7-column-full-width.html"
                                                class="font-size-12 text-gray-5">Speakers</a></div>
                                        <div class="">
                                            <a href="../shop/single-product-fullwidth.html"
                                                class="d-block text-center"><img class="img-fluid"
                                                    src="assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </li>
                        <li class="col-6 col-md-4 col-wd-3 product-item">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner bg-white p-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-4"><a href="../shop/product-categories-7-column-full-width.html"
                                                class="font-size-12 text-gray-5">Speakers</a></div>
                                        <div class="">
                                            <a href="../shop/single-product-fullwidth.html"
                                                class="d-block text-center"><img class="img-fluid"
                                                    src="assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </li>
                        <li class="col-6 col-md-4 col-wd-3 product-item">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner bg-white p-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-4"><a href="../shop/product-categories-7-column-full-width.html"
                                                class="font-size-12 text-gray-5">Speakers</a></div>
                                        <div class="">
                                            <a href="../shop/single-product-fullwidth.html"
                                                class="d-block text-center"><img class="img-fluid"
                                                    src="assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </li>
                        <li class="col-6 col-md-4 col-wd-3 product-item">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner bg-white p-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-4"><a href="../shop/product-categories-7-column-full-width.html"
                                                class="font-size-12 text-gray-5">Speakers</a></div>
                                        <div class="">
                                            <a href="../shop/single-product-fullwidth.html"
                                                class="d-block text-center"><img class="img-fluid"
                                                    src="assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </li>
                        <li class="col-6 col-md-4 col-wd-3 product-item">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner bg-white p-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-4"><a href="../shop/product-categories-7-column-full-width.html"
                                                class="font-size-12 text-gray-5">Speakers</a></div>
                                        <div class="">
                                            <a href="../shop/single-product-fullwidth.html"
                                                class="d-block text-center"><img class="img-fluid"
                                                    src="assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </li>
                        <li class="col-6 col-md-4 col-wd-3 product-item">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner bg-white p-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-4"><a href="../shop/product-categories-7-column-full-width.html"
                                                class="font-size-12 text-gray-5">Speakers</a></div>
                                        <div class="">
                                            <a href="../shop/single-product-fullwidth.html"
                                                class="d-block text-center"><img class="img-fluid"
                                                    src="assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </li>
                        <li class="col-6 col-md-4 col-wd-3 product-item">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner bg-white p-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-4"><a href="../shop/product-categories-7-column-full-width.html"
                                                class="font-size-12 text-gray-5">Speakers</a></div>
                                        <div class="">
                                            <a href="../shop/single-product-fullwidth.html"
                                                class="d-block text-center"><img class="img-fluid"
                                                    src="assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </li>
                        <li class="col-6 col-md-4 col-wd-3 product-item">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner bg-white p-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-4"><a href="../shop/product-categories-7-column-full-width.html"
                                                class="font-size-12 text-gray-5">Speakers</a></div>
                                        <div class="">
                                            <a href="../shop/single-product-fullwidth.html"
                                                class="d-block text-center"><img class="img-fluid"
                                                    src="assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Popular Categories this Week -->
        <!-- Popular Categories this Week2 -->
        <div class="mb-6">
            <!-- Nav nav-pills -->
            <div class="position-relative text-center z-index-2">
                <div
                    class=" d-flex justify-content-between border-bottom border-color-1 flex-lg-nowrap flex-wrap border-md-down-top-0 border-md-down-bottom-0">
                    <h3 class="section-title mb-0 pb-2 font-size-22"> Categories </h3>
                </div>
            </div>
            <!-- End Nav Pills -->
            <div class="row">

                <div class="col-md-5 col-lg-auto">
                    <a href="../shop/shop.html" class="d-block"><img class="img-fluid" src="assets/img/370X608/img1.jpg"
                            alt="Image Description"></a>
                </div>
                <div class="col-md pl-md-0">
                    <ul class="row list-unstyled products-group no-gutters mb-0">
                        <li class="col-6 col-md-4 col-wd-3 product-item">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner bg-white p-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-4"><a href="../shop/product-categories-7-column-full-width.html"
                                                class="font-size-12 text-gray-5">Speakers</a></div>
                                        <div class="">
                                            <a href="../shop/single-product-fullwidth.html"
                                                class="d-block text-center"><img class="img-fluid"
                                                    src="assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </li>
                        <li class="col-6 col-md-4 col-wd-3 product-item">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner bg-white p-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-4"><a href="../shop/product-categories-7-column-full-width.html"
                                                class="font-size-12 text-gray-5">Speakers</a></div>
                                        <div class="">
                                            <a href="../shop/single-product-fullwidth.html"
                                                class="d-block text-center"><img class="img-fluid"
                                                    src="assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </li>
                        <li class="col-6 col-md-4 col-wd-3 product-item">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner bg-white p-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-4"><a href="../shop/product-categories-7-column-full-width.html"
                                                class="font-size-12 text-gray-5">Speakers</a></div>
                                        <div class="">
                                            <a href="../shop/single-product-fullwidth.html"
                                                class="d-block text-center"><img class="img-fluid"
                                                    src="assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </li>
                        <li class="col-6 col-md-4 col-wd-3 product-item">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner bg-white p-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-4"><a href="../shop/product-categories-7-column-full-width.html"
                                                class="font-size-12 text-gray-5">Speakers</a></div>
                                        <div class="">
                                            <a href="../shop/single-product-fullwidth.html"
                                                class="d-block text-center"><img class="img-fluid"
                                                    src="assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </li>
                        <li class="col-6 col-md-4 col-wd-3 product-item">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner bg-white p-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-4"><a href="../shop/product-categories-7-column-full-width.html"
                                                class="font-size-12 text-gray-5">Speakers</a></div>
                                        <div class="">
                                            <a href="../shop/single-product-fullwidth.html"
                                                class="d-block text-center"><img class="img-fluid"
                                                    src="assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </li>
                        <li class="col-6 col-md-4 col-wd-3 product-item">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner bg-white p-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-4"><a href="../shop/product-categories-7-column-full-width.html"
                                                class="font-size-12 text-gray-5">Speakers</a></div>
                                        <div class="">
                                            <a href="../shop/single-product-fullwidth.html"
                                                class="d-block text-center"><img class="img-fluid"
                                                    src="assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </li>
                        <li class="col-6 col-md-4 col-wd-3 product-item">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner bg-white p-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-4"><a href="../shop/product-categories-7-column-full-width.html"
                                                class="font-size-12 text-gray-5">Speakers</a></div>
                                        <div class="">
                                            <a href="../shop/single-product-fullwidth.html"
                                                class="d-block text-center"><img class="img-fluid"
                                                    src="assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </li>
                        <li class="col-6 col-md-4 col-wd-3 product-item">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner bg-white p-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-4"><a href="../shop/product-categories-7-column-full-width.html"
                                                class="font-size-12 text-gray-5">Speakers</a></div>
                                        <div class="">
                                            <a href="../shop/single-product-fullwidth.html"
                                                class="d-block text-center"><img class="img-fluid"
                                                    src="assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Popular Categories this Week 2  -->




        <!-- Brand Carousel -->
        <div class="container mb-8">
            <div class="py-2 border-top border-bottom">
                <div class="js-slick-carousel u-slick my-1" data-slides-show="5" data-slides-scroll="1"
                    data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-normal u-slick__arrow-centered--y"
                    data-arrow-left-classes="fa fa-angle-left u-slick__arrow-classic-inner--left z-index-9"
                    data-arrow-right-classes="fa fa-angle-right u-slick__arrow-classic-inner--right" data-responsive='[{
                                "breakpoint": 992,
                                "settings": {
                                    "slidesToShow": 2
                                }
                            }, {
                                "breakpoint": 768,
                                "settings": {
                                    "slidesToShow": 1
                                }
                            }, {
                                "breakpoint": 554,
                                "settings": {
                                    "slidesToShow": 1
                                }
                            }]'>
                    <div class="js-slide">
                        <a href="#" class="link-hover__brand">
                            <img class="img-fluid m-auto max-height-50" src="assets/img/200X60/img1.png"
                                alt="Image Description">
                        </a>
                    </div>
                    <div class="js-slide">
                        <a href="#" class="link-hover__brand">
                            <img class="img-fluid m-auto max-height-50" src="assets/img/200X60/img2.png"
                                alt="Image Description">
                        </a>
                    </div>
                    <div class="js-slide">
                        <a href="#" class="link-hover__brand">
                            <img class="img-fluid m-auto max-height-50" src="assets/img/200X60/img3.png"
                                alt="Image Description">
                        </a>
                    </div>
                    <div class="js-slide">
                        <a href="#" class="link-hover__brand">
                            <img class="img-fluid m-auto max-height-50" src="assets/img/200X60/img4.png"
                                alt="Image Description">
                        </a>
                    </div>
                    <div class="js-slide">
                        <a href="#" class="link-hover__brand">
                            <img class="img-fluid m-auto max-height-50" src="assets/img/200X60/img5.png"
                                alt="Image Description">
                        </a>
                    </div>
                    <div class="js-slide">
                        <a href="#" class="link-hover__brand">
                            <img class="img-fluid m-auto max-height-50" src="assets/img/200X60/img6.png"
                                alt="Image Description">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Brand Carousel -->

    </div>
</main>
<!-- ========== END MAIN CONTENT ========== -->
<!-- Footer-top-widget -->
<div class="container d-none d-lg-block mb-3">
    <div class="row">
        <div class="col-wd-3 col-lg-4">
            <div class="widget-column">
                <div class="border-bottom border-color-1 mb-5">
                    <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Featured Products</h3>
                </div>
                <ul class="list-unstyled products-group">
                    <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                        <div class="col-auto">
                            <a href="../shop/single-product-fullwidth.html" class="d-block width-75 text-center"><img
                                    class="img-fluid" src="assets/img/75X75/img1.jpg" alt="Image Description"></a>
                        </div>
                        <div class="col pl-4 d-flex flex-column">
                            <h5 class="product-item__title mb-0"><a href="../shop/single-product-fullwidth.html"
                                    class="text-blue font-weight-bold">Purple Wireless Headphones Solo 2 HD</a></h5>
                            <div class="prodcut-price mt-auto">
                                <div class="font-size-15">$1149.00</div>
                            </div>
                        </div>
                    </li>
                    <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                        <div class="col-auto">
                            <a href="../shop/single-product-fullwidth.html" class="d-block width-75 text-center"><img
                                    class="img-fluid" src="assets/img/75X75/img2.jpg" alt="Image Description"></a>
                        </div>
                        <div class="col pl-4 d-flex flex-column">
                            <h5 class="product-item__title mb-0"><a href="../shop/single-product-fullwidth.html"
                                    class="text-blue font-weight-bold">Powerbank 1130 mAh Blue</a></h5>
                            <div class="prodcut-price mt-auto">
                                <div class="font-size-15">$210.00</div>
                            </div>
                        </div>
                    </li>
                    <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                        <div class="col-auto">
                            <a href="../shop/single-product-fullwidth.html" class="d-block width-75 text-center"><img
                                    class="img-fluid" src="assets/img/75X75/img3.jpg" alt="Image Description"></a>
                        </div>
                        <div class="col pl-4 d-flex flex-column">
                            <h5 class="product-item__title mb-0"><a href="../shop/single-product-fullwidth.html"
                                    class="text-blue font-weight-bold">Nerocool EN52377 Dead Silence Gaming Cube
                                    Case</a></h5>
                            <div class="prodcut-price mt-auto">
                                <div class="font-size-15">$180.00</div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-wd-3 col-lg-4">
            <div class="border-bottom border-color-1 mb-5">
                <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Onsale Products</h3>
            </div>
            <ul class="list-unstyled products-group">
                <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                    <div class="col-auto">
                        <a href="../shop/single-product-fullwidth.html" class="d-block width-75 text-center"><img
                                class="img-fluid" src="assets/img/75X75/img4.jpg" alt="Image Description"></a>
                    </div>
                    <div class="col pl-4 d-flex flex-column">
                        <h5 class="product-item__title mb-0"><a href="../shop/single-product-fullwidth.html"
                                class="text-blue font-weight-bold">Yellow Earphones Waterproof with Bluetooth</a></h5>
                        <div class="prodcut-price mt-auto flex-horizontal-center">
                            <ins class="font-size-15 text-decoration-none">$110.00</ins>
                            <del class="font-size-12 text-gray-9 ml-2">$250.00</del>
                        </div>
                    </div>
                </li>
                <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                    <div class="col-auto">
                        <a href="../shop/single-product-fullwidth.html" class="d-block width-75 text-center"><img
                                class="img-fluid" src="assets/img/75X75/img5.jpg" alt="Image Description"></a>
                    </div>
                    <div class="col pl-4 d-flex flex-column">
                        <h5 class="product-item__title mb-0"><a href="../shop/single-product-fullwidth.html"
                                class="text-blue font-weight-bold">Camera C430W 4k Waterproof</a></h5>
                        <div class="prodcut-price mt-auto flex-horizontal-center">
                            <ins class="font-size-15 text-decoration-none">$899.00</ins>
                            <del class="font-size-12 text-gray-9 ml-2">$1200.00</del>
                        </div>
                    </div>
                </li>
                <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                    <div class="col-auto">
                        <a href="../shop/single-product-fullwidth.html" class="d-block width-75 text-center"><img
                                class="img-fluid" src="assets/img/75X75/img6.jpg" alt="Image Description"></a>
                    </div>
                    <div class="col pl-4 d-flex flex-column">
                        <h5 class="product-item__title mb-0"><a href="../shop/single-product-fullwidth.html"
                                class="text-blue font-weight-bold">Smartphone 6S 32GB LTE</a></h5>
                        <div class="prodcut-price mt-auto flex-horizontal-center">
                            <ins class="font-size-15 text-decoration-none">$2100.00</ins>
                            <del class="font-size-12 text-gray-9 ml-2">$3299.00</del>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="col-wd-3 col-lg-4">
            <div class="border-bottom border-color-1 mb-5">
                <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Top Rated Products</h3>
            </div>
            <ul class="list-unstyled products-group">
                <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                    <div class="col-auto">
                        <a href="../shop/single-product-fullwidth.html" class="d-block width-75 text-center"><img
                                class="img-fluid" src="assets/img/75X75/img7.jpg" alt="Image Description"></a>
                    </div>
                    <div class="col pl-4 d-flex flex-column">
                        <h5 class="product-item__title mb-0"><a href="../shop/single-product-fullwidth.html"
                                class="text-blue font-weight-bold">Smartwatch 2.0 LTE Wifi Waterproof</a></h5>
                        <div class="text-warning mb-2">
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                        </div>
                        <div class="prodcut-price mt-auto">
                            <div class="font-size-15">$725.00</div>
                        </div>
                    </div>
                </li>
                <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                    <div class="col-auto">
                        <a href="../shop/single-product-fullwidth.html" class="d-block width-75 text-center"><img
                                class="img-fluid" src="assets/img/75X75/img8.jpg" alt="Image Description"></a>
                    </div>
                    <div class="col pl-4 d-flex flex-column">
                        <h5 class="product-item__title mb-0"><a href="../shop/single-product-fullwidth.html"
                                class="text-blue font-weight-bold">22Mps Camera 6200U with 500GB SDcard</a></h5>
                        <div class="text-warning mb-2">
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="far fa-star text-muted"></small>
                        </div>
                        <div class="prodcut-price mt-auto">
                            <div class="font-size-15">$2999.00</div>
                        </div>
                    </div>
                </li>
                <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                    <div class="col-auto">
                        <a href="../shop/single-product-fullwidth.html" class="d-block width-75 text-center"><img
                                class="img-fluid" src="assets/img/75X75/img9.jpg" alt="Image Description"></a>
                    </div>
                    <div class="col pl-4 d-flex flex-column">
                        <h5 class="product-item__title mb-0"><a href="../shop/single-product-fullwidth.html"
                                class="text-blue font-weight-bold">Full Color LaserJet Pro M452dn</a></h5>
                        <div class="text-warning mb-2">
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="far fa-star text-muted"></small>
                        </div>
                        <div class="prodcut-price mt-auto">
                            <div class="font-size-15">$439.00</div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="col-wd-3 d-none d-wd-block">
            <a href="../shop/shop.html" class="d-block"><img class="img-fluid" src="assets/img/330X360/img1.jpg"
                    alt="Image Description"></a>
        </div>
    </div>
</div>
<!-- End Footer-top-widget -->




@endsection

@section('js')
<script>
    $(function(){
        $('.u-header__nav-item').each(function(){
            $(this).mouseover(function(){
                var id = $(this).attr('category-id');
                var subcat = $('.subcategory');
                $.ajax({
                    url: "{{ route('admin.subcategory.show', 1) }}",
                    method: "get",
                    data: {index: id},
                    success: function(data){
                        $('.subcategory').html('');
                        $.each(data,function(index, value){
                            subcat.append('<li class="nav-link u-header__sub-menu-nav-link">'+value.name+'</li>')        
                        })
                        
                        console.log(data);
                    }

                });
            });
            
                
            });
         });
    
</script>
    
@endsection