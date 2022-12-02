@extends('layouts.app')
@section('title')
    Single Product Extended
@endsection
<!-- ========== HEADER ========== -->
@section('navbar')
@include('partials.navbar2')
@endsection
<!-- ========== END HEADER ========== -->
@section('content')
     <!-- ========== MAIN CONTENT ========== -->
     <main id="content" role="main">
           <!-- breadcrumb -->
           <div class="bg-gray-13 bg-md-transparent col-md-5 col-lg-auto">
            <div class="container">
                <!-- breadcrumb -->
                <div class="my-md-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                            <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="../home/index.html">Home</a></li>
                            <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">Shop</li>
                        </ol>
                    </nav>
                </div>
                <!-- End breadcrumb -->
            </div>
        </div>
        <!-- End breadcrumb -->
        <div class="container">
           
                  
            <!-- First Section -->
            <div class="mb-6">
             
                <div class="row">
                      
                    <div class="col-md-5 col-lg-auto">
                       <!-- Vertical Menu -->
                       <div class="col-md-auto d-none d-xl-block">
                        <div class="max-width-270 min-width-270">
                            <!-- Basics Accordion -->
                            <div id="basicsAccordion">
                                <!-- Card -->
                                <div class="card border-0">
                                    
                                    <div id="basicsCollapseOne" class="collapse show vertical-menu rounded-0"
                                        aria-labelledby="basicsHeadingOne"
                                        data-parent="#basicsAccordion">
                                        <div class="card-body p-0">
                                            <nav class="js-mega-menu navbar navbar-expand-xl u-header__navbar u-header__navbar--no-space hs-menu-initialized">
                                                <div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse">
                                                    <ul class="navbar-nav u-header__navbar-nav ">
                                                        
                                                        <li class="nav-item u-header__nav-item "
                                                            data-event="hover"
                                                            data-position="left">
                                                            <a href="#" class="nav-link u-header__nav-link font-weight-bold ">New Arrivals</a>
                                                           
                                                        </li>
                                                        <!-- Nav Item MegaMenu -->
                                                        <li class="nav-item hs-has-mega-menu u-header__nav-item "
                                                            data-event="hover"
                                                            data-animation-in="slideInUp"
                                                            data-animation-out="fadeOut"
                                                            data-position="left">
                                                            <a id="basicMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle py-3" href="javascript:;" aria-haspopup="true" aria-expanded="false">Computers & Accessories</a>
                                                            

                                                            <!-- Nav Item - Mega Menu -->
                                                            <div class="hs-mega-menu vmm-tfw u-header__sub-menu" aria-labelledby="basicMegaMenu">
                                                                <div class="vmm-bg">
                                                                    <img class="img-fluid" src="assets/img/500X400/img1.png" alt="Image Description">
                                                                </div>
                                                                <div class="row u-header__mega-menu-wrapper">
                                                                    <div class="col mb-3 mb-sm-0">
                                                                        <span class="u-header__sub-menu-title">Computers & Accessories</span>
                                                                        <ul class="u-header__sub-menu-nav-group mb-3">
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">All Computers & Accessories</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Laptops, Desktops & Monitors</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Printers & Ink</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Networking & Internet Devices</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Computer Accessories</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Software</a></li>
                                                                            <li>
                                                                                <a class="nav-link u-header__sub-menu-nav-link u-nav-divider border-top pt-2 flex-column align-items-start" href="#">
                                                                                    <div class="">All Electronics</div>
                                                                                    <div class="u-nav-subtext font-size-11 text-gray-30">Discover more products</div>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>

                                                                    <div class="col mb-3 mb-sm-0">
                                                                        <span class="u-header__sub-menu-title">Office & Stationery</span>
                                                                        <ul class="u-header__sub-menu-nav-group">
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">All Office & Stationery</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- End Nav Item - Mega Menu -->
                                                        </li>
                                                        <!-- End Nav Item MegaMenu-->
                                                        <!-- Nav Item MegaMenu -->
                                                        <li class="nav-item hs-has-mega-menu u-header__nav-item"
                                                            data-event="hover"
                                                            data-position="left">
                                                            <a id="basicMegaMenu1" class="nav-link u-header__nav-link u-header__nav-link-toggle  py-3 " href="javascript:;" aria-haspopup="true" aria-expanded="false">Cameras, Audio & Video</a>

                                                            <!-- Nav Item - Mega Menu -->
                                                            <div class="hs-mega-menu vmm-tfw u-header__sub-menu" aria-labelledby="basicMegaMenu1">
                                                                <div class="vmm-bg">
                                                                    <img class="img-fluid" src="assets/img/500X400/img4.png" alt="Image Description">
                                                                </div>
                                                                <div class="row u-header__mega-menu-wrapper">
                                                                    <div class="col mb-3 mb-sm-0">
                                                                        <span class="u-header__sub-menu-title">Cameras & Photography</span>
                                                                        <ul class="u-header__sub-menu-nav-group mb-3">
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Lenses</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Camera Accessories</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Security & Surveillance</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Binoculars & Telescopes</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Camcorders</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Software</a></li>
                                                                            <li>
                                                                                <a class="nav-link u-header__sub-menu-nav-link u-nav-divider border-top pt-2 flex-column align-items-start" href="#">
                                                                                    <div class="">All Electronics</div>
                                                                                    <div class="u-nav-subtext font-size-11 text-gray-30">Discover more products</div>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>

                                                                    <div class="col mb-3 mb-sm-0">
                                                                        <span class="u-header__sub-menu-title">Audio & Video</span>
                                                                        <ul class="u-header__sub-menu-nav-group">
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">All Audio & Video</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Headphones & Speakers</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- End Nav Item - Mega Menu -->
                                                        </li>
                                                        <!-- End Nav Item MegaMenu-->
                                                        <!-- Nav Item MegaMenu -->
                                                        <li class="nav-item hs-has-mega-menu u-header__nav-item"
                                                            data-event="hover"
                                                            data-position="left">
                                                            <a id="basicMegaMenu2" class="nav-link u-header__nav-link u-header__nav-link-toggle py-3 py-3" href="javascript:;" aria-haspopup="true" aria-expanded="false">Mobiles & Tablets</a>

                                                            <!-- Nav Item - Mega Menu -->
                                                            <div class="hs-mega-menu vmm-tfw u-header__sub-menu vmm-bg-extended" aria-labelledby="basicMegaMenu2">
                                                                <div class="vmm-bg">
                                                                    <img class="img-fluid" src="assets/img/500X400/img3.png" alt="Image Description">
                                                                </div>
                                                                <div class="row u-header__mega-menu-wrapper">
                                                                    <div class="col mb-3 mb-sm-0">
                                                                        <span class="u-header__sub-menu-title">Mobiles & Tablets</span>
                                                                        <ul class="u-header__sub-menu-nav-group mb-3">
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">All Mobile Phones</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Smartphones</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Refurbished Mobiles</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link border-top pt-2" href="#">All Mobile Accessories</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Cases & Covers</a></li>
                                                                            <li>
                                                                                <a class="nav-link u-header__sub-menu-nav-link u-nav-divider border-top pt-2 flex-column align-items-start" href="#">
                                                                                    <div class="">All Electronics</div>
                                                                                    <div class="u-nav-subtext font-size-11 text-gray-30">Discover more products</div>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>

                                                                    <div class="col mb-3 mb-sm-0">
                                                                        <ul class="u-header__sub-menu-nav-group">
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">All Tablets</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Tablet Accessories</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- End Nav Item - Mega Menu -->
                                                        </li>
                                                        <!-- End Nav Item MegaMenu-->
                                                        <!-- Nav Item MegaMenu -->
                                                        <li class="nav-item hs-has-mega-menu u-header__nav-item"
                                                            data-event="hover"
                                                            data-position="left">
                                                            <a id="basicMegaMenu3" class="nav-link u-header__nav-link u-header__nav-link-toggle py-3" href="javascript:;" aria-haspopup="true" aria-expanded="false">Movies, Music & Video Game</a>

                                                            <!-- Nav Item - Mega Menu -->
                                                            <div class="hs-mega-menu vmm-tfw u-header__sub-menu" aria-labelledby="basicMegaMenu3">
                                                                <div class="vmm-bg">
                                                                    <img class="img-fluid" src="assets/img/500X400/img2.png" alt="Image Description">
                                                                </div>
                                                                <div class="row u-header__mega-menu-wrapper">
                                                                    <div class="col mb-3 mb-sm-0">
                                                                        <span class="u-header__sub-menu-title">Movies & TV Shows</span>
                                                                        <ul class="u-header__sub-menu-nav-group mb-3">
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">All Movies & TV Shows</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">All English</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link border-bottom pb-3" href="#">All Hindi</a></li>
                                                                        </ul>
                                                                        <span class="u-header__sub-menu-title">Video Games</span>
                                                                        <ul class="u-header__sub-menu-nav-group">
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">PC Games</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Consoles</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Accessories</a></li>
                                                                        </ul>
                                                                    </div>

                                                                    <div class="col mb-3 mb-sm-0">
                                                                        <span class="u-header__sub-menu-title">Music</span>
                                                                        <ul class="u-header__sub-menu-nav-group">
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">All Music</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Indian Classical</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Musical Instruments</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- End Nav Item - Mega Menu -->
                                                        </li>
                                                        <!-- End Nav Item MegaMenu-->
                                                        <!-- Nav Item MegaMenu -->
                                                        <li class="nav-item hs-has-mega-menu u-header__nav-item"
                                                            data-event="hover"
                                                            data-position="left">
                                                            <a id="basicMegaMenu4" class="nav-link u-header__nav-link u-header__nav-link-toggle py-3" href="javascript:;" aria-haspopup="true" aria-expanded="false">TV & Audio</a>

                                                            <!-- Nav Item - Mega Menu -->
                                                            <div class="hs-mega-menu vmm-tfw u-header__sub-menu" aria-labelledby="basicMegaMenu4">
                                                                <div class="vmm-bg">
                                                                    <img class="img-fluid" src="assets/img/500X400/img5.png" alt="Image Description">
                                                                </div>
                                                                <div class="row u-header__mega-menu-wrapper">
                                                                    <div class="col mb-3 mb-sm-0">
                                                                        <span class="u-header__sub-menu-title">Audio & Video</span>
                                                                        <ul class="u-header__sub-menu-nav-group mb-3">
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">All Audio & Video</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Televisions</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Headphones</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Speakers</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Audio & Video Accessories</a></li>
                                                                            <li>
                                                                                <a class="nav-link u-header__sub-menu-nav-link u-nav-divider border-top pt-2 flex-column align-items-start" href="#">
                                                                                    <div class="">Electro Home Appliances</div>
                                                                                    <div class="u-nav-subtext font-size-11 text-gray-30">Available in select cities</div>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>

                                                                    <div class="col mb-3 mb-sm-0">
                                                                        <span class="u-header__sub-menu-title">Music</span>
                                                                        <ul class="u-header__sub-menu-nav-group">
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Televisions</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Headphones</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- End Nav Item - Mega Menu -->
                                                        </li>
                                                        <!-- End Nav Item MegaMenu-->
                                                        <!-- Nav Item MegaMenu -->
                                                        <li class="nav-item hs-has-mega-menu u-header__nav-item"
                                                            data-event="hover"
                                                            data-position="left">
                                                            <a id="basicMegaMenu5" class="nav-link u-header__nav-link u-header__nav-link-toggle py-3" href="javascript:;" aria-haspopup="true" aria-expanded="false">Watches & Eyewear</a>

                                                            <!-- Nav Item - Mega Menu -->
                                                            <div class="hs-mega-menu vmm-tfw u-header__sub-menu" aria-labelledby="basicMegaMenu5">
                                                                <div class="vmm-bg">
                                                                    <img class="img-fluid" src="assets/img/500X400/img6.png" alt="Image Description">
                                                                </div>
                                                                <div class="row u-header__mega-menu-wrapper">
                                                                    <div class="col mb-3 mb-sm-0">
                                                                        <span class="u-header__sub-menu-title">Watches</span>
                                                                        <ul class="u-header__sub-menu-nav-group mb-3">
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">All Watches</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Men's Watches</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Women's Watches</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Premium Watches</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Deals on Watches</a></li>
                                                                        </ul>
                                                                    </div>

                                                                    <div class="col mb-3 mb-sm-0">
                                                                        <span class="u-header__sub-menu-title">Eyewear</span>
                                                                        <ul class="u-header__sub-menu-nav-group">
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Men's Sunglasses</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- End Nav Item - Mega Menu -->
                                                        </li>
                                                        <!-- End Nav Item MegaMenu-->
                                                        <!-- Nav Item MegaMenu -->
                                                        <li class="nav-item hs-has-mega-menu u-header__nav-item"
                                                            data-event="hover"
                                                            data-position="left">
                                                            <a id="basicMegaMenu3" class="nav-link u-header__nav-link u-header__nav-link-toggle py-3" href="javascript:;" aria-haspopup="true" aria-expanded="false">Car, Motorbike & Industrial</a>

                                                            <!-- Nav Item - Mega Menu -->
                                                            <div class="hs-mega-menu vmm-tfw u-header__sub-menu" aria-labelledby="basicMegaMenu3">
                                                                <div class="vmm-bg">
                                                                    <img class="img-fluid" src="assets/img/500X400/img7.png" alt="Image Description">
                                                                </div>
                                                                <div class="row u-header__mega-menu-wrapper">
                                                                    <div class="col mb-3 mb-sm-0">
                                                                        <span class="u-header__sub-menu-title">Car & Motorbike</span>
                                                                        <ul class="u-header__sub-menu-nav-group mb-3">
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">All Cars & Bikes</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Car & Bike Care</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link border-bottom pb-3" href="#">Lubricants</a></li>
                                                                        </ul>
                                                                        <span class="u-header__sub-menu-title">Shop for Bike</span>
                                                                        <ul class="u-header__sub-menu-nav-group">
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Helmets & Gloves</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Bike Parts</a></li>
                                                                        </ul>
                                                                    </div>

                                                                    <div class="col mb-3 mb-sm-0">
                                                                        <span class="u-header__sub-menu-title">Industrial Supplies</span>
                                                                        <ul class="u-header__sub-menu-nav-group">
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">All Industrial Supplies</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Lab & Scientific</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- End Nav Item - Mega Menu -->
                                                        </li>
                                                        <!-- End Nav Item MegaMenu-->
                                                        <!-- Nav Item MegaMenu -->
                                                        <li class="nav-item hs-has-mega-menu u-header__nav-item"
                                                            data-event="hover"
                                                            data-animation-in="slideInUp"
                                                            data-animation-out="fadeOut"
                                                            data-position="left">
                                                            <a id="basicMegaMenu9" class="nav-link u-header__nav-link u-header__nav-link-toggle py-3" href="javascript:;" aria-haspopup="true" aria-expanded="false">Gadgets</a>

                                                            <!-- Nav Item - Mega Menu -->
                                                            <div class="hs-mega-menu vmm-tfw u-header__sub-menu" aria-labelledby="basicMegaMenu9">
                                                                <div class="vmm-bg">
                                                                    <img class="img-fluid" src="assets/img/500X400/img1.png" alt="Image Description">
                                                                </div>
                                                                <div class="row u-header__mega-menu-wrapper">
                                                                    <div class="col mb-3 mb-sm-0">
                                                                        <span class="u-header__sub-menu-title">Computers & Accessories</span>
                                                                        <ul class="u-header__sub-menu-nav-group mb-3">
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">All Computers & Accessories</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Laptops, Desktops & Monitors</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Printers & Ink</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Networking & Internet Devices</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Computer Accessories</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Software</a></li>
                                                                            <li>
                                                                                <a class="nav-link u-header__sub-menu-nav-link u-nav-divider border-top pt-2 flex-column align-items-start" href="#">
                                                                                    <div class="">All Electronics</div>
                                                                                    <div class="u-nav-subtext font-size-11 text-gray-30">Discover more products</div>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>

                                                                    <div class="col mb-3 mb-sm-0">
                                                                        <span class="u-header__sub-menu-title">Office & Stationery</span>
                                                                        <ul class="u-header__sub-menu-nav-group">
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">All Office & Stationery</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- End Nav Item - Mega Menu -->
                                                        </li>
                                                        <!-- End Nav Item MegaMenu-->
                                                        <!-- Nav Item MegaMenu -->
                                                        <li class="nav-item hs-has-mega-menu u-header__nav-item"
                                                            data-event="hover"
                                                            data-position="left">
                                                            <a id="basicMegaMenu5" class="nav-link u-header__nav-link u-header__nav-link-toggle py-3" href="javascript:;" aria-haspopup="true" aria-expanded="false">Printers & Inks</a>

                                                            <!-- Nav Item - Mega Menu -->
                                                            <div class="hs-mega-menu vmm-tfw u-header__sub-menu" aria-labelledby="basicMegaMenu5">
                                                                <div class="vmm-bg">
                                                                    <img class="img-fluid" src="assets/img/500X400/img2.png" alt="Image Description">
                                                                </div>
                                                                <div class="row u-header__mega-menu-wrapper">
                                                                    <div class="col mb-3 mb-sm-0">
                                                                        <span class="u-header__sub-menu-title">Movies & TV Shows</span>
                                                                        <ul class="u-header__sub-menu-nav-group mb-3">
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">All Movies & TV Shows</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">All English</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link border-bottom pb-3" href="#">All Hindi</a></li>
                                                                        </ul>
                                                                        <span class="u-header__sub-menu-title">Video Games</span>
                                                                        <ul class="u-header__sub-menu-nav-group">
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">PC Games</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Consoles</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Accessories</a></li>
                                                                        </ul>
                                                                    </div>

                                                                    <div class="col mb-3 mb-sm-0">
                                                                        <span class="u-header__sub-menu-title">Music</span>
                                                                        <ul class="u-header__sub-menu-nav-group">
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">All Music</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Indian Classical</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Musical Instruments</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- End Nav Item - Mega Menu -->
                                                        </li>
                                                        <!-- End Nav Item MegaMenu-->
                                                        <!-- Nav Item -->
                                                        <li class="nav-item hs-has-sub-menu u-header__nav-item"
                                                            data-event="click"
                                                            data-animation-in="slideInUp"
                                                            data-animation-out="fadeOut"
                                                            data-position="left">
                                                            <a id="homeMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle u-header__nav-link-toggle py-3" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="homeSubMenu">Accessories</a>

                                                            <!-- Home - Submenu -->
                                                            <ul id="homeSubMenu" class="hs-sub-menu u-header__sub-menu animated hs-position-left fadeOut" aria-labelledby="homeMegaMenu" style="min-width: 230px; display: none;">
                                                                <!-- Home-v1 -->
                                                                <li class="hs-has-sub-menu">
                                                                    <a class="nav-link u-header__sub-menu-nav-link " href="index.html">Home-v1</a>
                                                                </li>
                                                                <!-- End Home-v1 -->

                                                                <!-- Home-v2 -->
                                                                <li class="hs-has-sub-menu">
                                                                    <a class="nav-link u-header__sub-menu-nav-link " href="home-v2.html">Home-v2</a>
                                                                </li>
                                                                <!-- End Home-v2 -->

                                                                <!-- Home-v3 -->
                                                                <li class="hs-has-sub-menu">
                                                                    <a class="nav-link u-header__sub-menu-nav-link " href="home-v3.html">Home-v3</a>
                                                                </li>
                                                                <!-- End Home-v3 -->

                                                                <!-- Home-v4 -->
                                                                <li class="hs-has-sub-menu">
                                                                    <a class="nav-link u-header__sub-menu-nav-link " href="home-v4.html">Home-v4</a>
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
                    </div>
                    <div class="col-md pl-md-0">
                        <ul class="row list-unstyled products-group no-gutters mb-0">
                            <li class="col-6 col-md-4 col-wd-3 product-item">
                                <div class="product-item__outer h-100">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-4"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <div class="">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                            </li>
                            <li class="col-6 col-md-4 col-wd-3 product-item">
                                <div class="product-item__outer h-100">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-4"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <div class="">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                            </li>
                            <li class="col-6 col-md-4 col-wd-3 product-item">
                                <div class="product-item__outer h-100">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-4"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <div class="">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                            </li>
                            <li class="col-6 col-md-4 col-wd-3 product-item">
                                <div class="product-item__outer h-100">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-4"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <div class="">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                            </li>
                            <li class="col-6 col-md-4 col-wd-3 product-item">
                                <div class="product-item__outer h-100">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-4"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <div class="">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                            </li>
                            <li class="col-6 col-md-4 col-wd-3 product-item">
                                <div class="product-item__outer h-100">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-4"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <div class="">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                            </li>
                            <li class="col-6 col-md-4 col-wd-3 product-item">
                                <div class="product-item__outer h-100">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-4"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <div class="">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                            </li>
                            <li class="col-6 col-md-4 col-wd-3 product-item">
                                <div class="product-item__outer h-100">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-4"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <div class="">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                
            </div>
            <!-- End First Section -->
            <!-- Trending Categories -->
            <div class="container mb-6">
                <div class=" ">
                    <div class=" d-flex justify-content-between border-bottom border-color-1 flex-md-nowrap flex-wrap border-sm-bottom-0">
                        <h3 class="section-title mb-0 pb-2 font-size-22">Trending Products</h3>
                        
                    </div>
                    <ul class="row list-unstyled products-group no-gutters mb-6 mt-2">
                        <li class="col-6 col-md-3 product-item">
                            <div class="product-item__outer h-100 w-100">
                                <div class="product-item__inner px-xl-4 p-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2">
                                            <a href="#" class="d-block text-center"><img class="img-fluid" src="assets/img/300X300/img8.jpg" alt="Image Description"></a>
                                        </div>
                                        <h5 class="text-center mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="font-size-15 text-gray-90">Accessories</a></h5>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-6 col-md-3 product-item">
                            <div class="product-item__outer h-100 w-100">
                                <div class="product-item__inner px-xl-4 p-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2">
                                            <a href="#" class="d-block text-center"><img class="img-fluid" src="assets/img/300X300/img15.jpg" alt="Image Description"></a>
                                        </div>
                                        <h5 class="text-center mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="font-size-15 text-gray-90">All in One</a></h5>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-6 col-md-3 product-item">
                            <div class="product-item__outer h-100 w-100">
                                <div class="product-item__inner px-xl-4 p-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2">
                                            <a href="#" class="d-block text-center"><img class="img-fluid" src="assets/img/300X300/img22.jpg" alt="Image Description"></a>
                                        </div>
                                        <h5 class="text-center mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="font-size-15 text-gray-90">Gaming</a></h5>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-6 col-md-3 product-item remove-divider">
                            <div class="product-item__outer h-100 w-100">
                                <div class="product-item__inner px-xl-4 p-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2">
                                            <a href="#" class="d-block text-center"><img class="img-fluid" src="assets/img/300X300/img23.jpg" alt="Image Description"></a>
                                        </div>
                                        <h5 class="text-center mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="font-size-15 text-gray-90">Laptops</a></h5>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-6 col-md-3 product-item">
                            <div class="product-item__outer h-100 w-100">
                                <div class="product-item__inner px-xl-4 p-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2">
                                            <a href="#" class="d-block text-center"><img class="img-fluid" src="assets/img/300X300/img24.jpg" alt="Image Description"></a>
                                        </div>
                                        <h5 class="text-center mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="font-size-15 text-gray-90">Mac Computers</a></h5>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-6 col-md-3 product-item">
                            <div class="product-item__outer h-100 w-100">
                                <div class="product-item__inner px-xl-4 p-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2">
                                            <a href="#" class="d-block text-center"><img class="img-fluid" src="assets/img/300X300/img25.jpg" alt="Image Description"></a>
                                        </div>
                                        <h5 class="text-center mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="font-size-15 text-gray-90">Peripherals</a></h5>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-6 col-md-3 product-item">
                            <div class="product-item__outer h-100 w-100">
                                <div class="product-item__inner px-xl-4 p-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2">
                                            <a href="#" class="d-block text-center"><img class="img-fluid" src="assets/img/300X300/img5.jpg" alt="Image Description"></a>
                                        </div>
                                        <h5 class="text-center mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="font-size-15 text-gray-90">Servers</a></h5>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-6 col-md-3 product-item remove-divider">
                            <div class="product-item__outer h-100 w-100">
                                <div class="product-item__inner px-xl-4 p-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2">
                                            <a href="#" class="d-block text-center"><img class="img-fluid" src="assets/img/300X300/img26.jpg" alt="Image Description"></a>
                                        </div>
                                        <h5 class="text-center mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="font-size-15 text-gray-90">Ultrabooks</a></h5>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End Trending Categories -->

           <!--  Recommended for you -->
           <div class="mb-6 d-none d-xl-block">
            <div class="position-relative">
                <div class="border-bottom border-color-1 mb-2">
                    <h3 class="d-inline-block section-title section-title__full mb-0 pb-2 font-size-22">Recommended For you</h3>
                </div>
                <div class="js-slick-carousel u-slick position-static overflow-hidden u-slick-overflow-visble pb-7 pt-2 px-1"
                    data-pagi-classes="text-center right-0 bottom-1 left-0 u-slick__pagination u-slick__pagination--long mb-0 z-index-n1 mt-3 mt-md-0"
                    data-slides-show="5"
                    data-slides-scroll="1"
                    data-arrows-classes="position-absolute top-0 font-size-17 u-slick__arrow-normal top-10"
                    data-arrow-left-classes="fa fa-angle-left right-1"
                    data-arrow-right-classes="fa fa-angle-right right-0"
                    data-responsive='[{
                      "breakpoint": 1400,
                      "settings": {
                        "slidesToShow": 4
                      }
                    }, {
                        "breakpoint": 1200,
                        "settings": {
                          "slidesToShow": 4
                        }
                    }, {
                      "breakpoint": 992,
                      "settings": {
                        "slidesToShow": 3
                      }
                    }, {
                      "breakpoint": 768,
                      "settings": {
                        "slidesToShow": 2
                      }
                    }, {
                      "breakpoint": 554,
                      "settings": {
                        "slidesToShow": 2
                      }
                    }]'>
                    <div class="js-slide products-group">
                        <div class="product-item">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                        <div class="mb-2">
                                            <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$685,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item__footer">
                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                            <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                            <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="js-slide products-group">
                        <div class="product-item">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                        <div class="mb-2">
                                            <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img2.jpg" alt="Image Description"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$685,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item__footer">
                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                            <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                            <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="js-slide products-group">
                        <div class="product-item">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                        <div class="mb-2">
                                            <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img3.jpg" alt="Image Description"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$685,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item__footer">
                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                            <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                            <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="js-slide products-group">
                        <div class="product-item">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                        <div class="mb-2">
                                            <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img4.jpg" alt="Image Description"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$685,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item__footer">
                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                            <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                            <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="js-slide products-group">
                        <div class="product-item">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                        <div class="mb-2">
                                            <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img5.jpg" alt="Image Description"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$685,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item__footer">
                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                            <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                            <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="js-slide products-group">
                        <div class="product-item">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                        <div class="mb-2">
                                            <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img6.jpg" alt="Image Description"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$685,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item__footer">
                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                            <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                            <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="js-slide products-group">
                        <div class="product-item">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                        <div class="mb-2">
                                            <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img7.jpg" alt="Image Description"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$685,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item__footer">
                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                            <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                            <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="js-slide products-group">
                        <div class="product-item">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                        <div class="mb-2">
                                            <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$685,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item__footer">
                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                            <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                            <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="js-slide products-group">
                        <div class="product-item">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                        <div class="mb-2">
                                            <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$685,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item__footer">
                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                            <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                            <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           </div>
           <!--  End Recommended for you -->
           
            
        </div>
    </main>
    <!-- ========== END MAIN CONTENT ========== -->
@endsection