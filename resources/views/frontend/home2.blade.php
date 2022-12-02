@extends('frontend.layouts.app')
@section('title', 'Shop - Made-in-pak')
@section('contents')
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
                                <div class="card-header card-collapse border-0 flex-center-between bg-primary text-lh-1 rounded-0" id="basicsHeadingOne">
                                    <div class="btn-link btn-remove-focus btn-block pl-4 py-3 card-btn shadow-none rounded-0 border-0 font-weight-bold text-gray-90" data-toggle="collapse" data-target="#basicsCollapseOne" aria-expanded="true" aria-controls="basicsCollapseOne">
                                        <span class="pl-1 text-gray-90">Category</span>
                                    </div>
                                    <a href="#" class="d-block font-size-13 py-3 pr-4 font-weight-bold text-gray-90 ml-auto flex-shrink-0">View All</a>
                                </div>
                                <div id="basicsCollapseOne" class="collapse show vertical-menu rounded-0" aria-labelledby="basicsHeadingOne" data-parent="#basicsAccordion">
                                    <div class="card-body p-0">
                                        <nav class="js-mega-menu navbar navbar-expand-xl u-header__navbar u-header__navbar--no-space hs-menu-initialized">
                                            <div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse">
                                                <ul class="navbar-nav u-header__navbar-nav">
                                                    <!-- Nav Item MegaMenu -->
                                                    @foreach ($categories as $category)
                                                    @if ($loop->index>11)
                                                    <li class="nav-item hs-has-mega-menu u-header__nav-item" data-event="hover" data-animation-in="slideInUp" data-animation-out="fadeOut" data-position="left">
                                                        <a id="basicMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="{{ route('more.categories') }}" aria-haspopup="true" aria-expanded="false">view all</a>
                                                    </li>
                                                    @break
                                                    @endif
                                                    <li class="nav-item hs-has-mega-menu u-header__nav-item" data-event="hover" data-animation-in="slideInUp" data-animation-out="fadeOut" data-position="left">
                                                        <a id="basicMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="{{ route('subcategories', $category->id) }}" aria-haspopup="true" aria-expanded="false">{{ $category->name }}</a>

                                                        <!-- Nav Item - Mega Menu -->
                                                        <div class="hs-mega-menu vmm-tfw u-header__sub-menu" aria-labelledby="basicMegaMenu">
                                                            @if ($category->childrenCategories)
                                                            <div class="row u-header__mega-menu-wrapper">
                                                                @foreach ($category->subcategory()->take(5)->get() as $subcategory)
                                                                <div class="col mb-3 mb-sm-0">
                                                                    <span class="u-header__sub-menu-title">{{ $subcategory->name }}</span>
                                                                    <ul class="u-header__sub-menu-nav-group mb-3">
                                                                        @foreach ($subcategory->items()->take(5)->get() as $item)
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link" href="#">{{ $item->name }}</a></li>
                                                                        @endforeach
                                                                        
                                                                    </ul>
                                                                </div>    
                                                                @endforeach
                                                                <a class="nav-link u-header__sub-menu-nav-link u-nav-divider border-top pt-2 flex-column align-items-start" href="{{ route('more.categories') }}">
                                                                    <div class="">More Categories</div>
                                                                    <div class="u-nav-subtext font-size-11 text-gray-30">Discover more products</div>
                                                                </a>
                                                                
                                                            </div>
                                                            @endif

                                                        </div>
                                                        <!-- End Nav Item - Mega Menu -->
                                                    </li>
                                                    @endforeach

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
                                <div class="js-slick-carousel u-slick" data-pagi-classes="text-center position-absolute right-0 bottom-0 left-0 u-slick__pagination u-slick__pagination--long justify-content-start mb-3 mb-md-5 ml-3 ml-md-4 ml-lg-9 ml-xl-4 ml-wd-9">
                                    @foreach($slider as $img)
                                    <div class="js-slide">
                                        <div class="py-6 py-md-4 px-3 px-md-4 px-lg-9 px-xl-4 px-wd-9">
                                            <div class="row no-gutters">
                                                <div class="col-xl-6 col-6 mt-md-5">
                                                    <h1 class="font-size-58-sm text-lh-57 font-weight-light" data-scs-animation-in="fadeInUp">
                                                        {{ Str::upper($img->slider_heading) }}
                                                    </h1>
                                                    <h6 class="font-size-15-sm font-weight-bold mb-2 mb-md-3" data-scs-animation-in="fadeInUp" data-scs-animation-delay="200">
                                                        {{ Str::upper($img->slider_description) }}
                                                    </h6>
                                                    <div class="mb-2 mb-md-4" data-scs-animation-in="fadeInUp" data-scs-animation-delay="300">
                                                        <span class="font-size-13">FROM</span>
                                                        <div class="font-size-50 font-weight-bold text-lh-45">$749</div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-6 d-flex align-items-center" data-scs-animation-in="zoomIn" data-scs-animation-delay="400">
                                                    {{-- <img class="img-fluid max-width-300-md" height="420" width="416" src="{{asset('slider-images/'.$img->slider_image_url)}}" alt="Image Description"> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <!-- <div class="js-slide">
                                        <div class="py-6 py-md-4 px-3 px-md-4 px-lg-9 px-xl-4 px-wd-9">
                                            <div class="row no-gutters">
                                                <div class="col-xl-6 col-6 mt-md-5">
                                                    <h1 class="font-size-58-sm text-lh-57 font-weight-light" data-scs-animation-in="slideInLeft">
                                                        THE NEW <span class="d-block font-size-58-sm">STANDARD</span>
                                                    </h1>
                                                    <h6 class="font-size-15-sm font-weight-bold mb-2 mb-md-3" data-scs-animation-in="slideInLeft" data-scs-animation-delay="200">UNDER FAVORABLE SMARTWATCHES
                                                    </h6>
                                                    <div class="mb-2 mb-md-4" data-scs-animation-in="slideInLeft" data-scs-animation-delay="300">
                                                        <span class="font-size-13">FROM</span>
                                                        <div class="font-size-50 font-weight-bold text-lh-45">$749</div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-6 d-flex align-items-center" data-scs-animation-in="slideInRight" data-scs-animation-delay="400">
                                                    <img class="img-fluid max-width-300-md" src="" alt="Image Description">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="js-slide">
                                        <div class="py-6 py-md-4 px-3 px-md-4 px-lg-9 px-xl-4 px-wd-9">
                                            <div class="row no-gutters">
                                                <div class="col-xl-6 col-6 mt-md-5">
                                                    <h1 class="font-size-58-sm text-lh-57 font-weight-light" data-scs-animation-in="slideInLeft">
                                                        THE NEW <span class="d-block font-size-58-sm">STANDARD</span>
                                                    </h1>
                                                    <h6 class="font-size-15-sm font-weight-bold mb-2 mb-md-3" data-scs-animation-in="slideInLeft" data-scs-animation-delay="200">UNDER FAVORABLE SMARTWATCHES
                                                    </h6>
                                                    <div class="mb-2 mb-md-4" data-scs-animation-in="slideInLeft" data-scs-animation-delay="300">
                                                        <span class="font-size-13">FROM</span>
                                                        <div class="font-size-50 font-weight-bold text-lh-45">$749</div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-6 d-flex align-items-center" data-scs-animation-in="zoomIn" data-scs-animation-delay="400">
                                                    <img class="img-fluid max-width-300-md" src="" alt="Image Description">
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <!-- Slider -->
                        <!-- Category -->

                        <ul class="list-group list-group-horizontal-sm position-relative z-index-2 flex-row overflow-auto overflow-md-visble">
                            @foreach($randombelow as $randombelow)
                            <li class="list-group-item py-2 px-3 px-xl-4 px-wd-5 flex-horizontal-center shadow-on-hover-1 rounded-0 border-top-0 border-bottom-0 flex-shrink-0 flex-md-shrink-1">
                                <a href="../shop/product-categories-7-column-full-width.html" class="d-block py-2 text-center">
                                    <img class="img-fluid mb-1 max-width-100-sm" src="../../assets/img/300X300/img6.jpg" alt="Image Description">
                                    <h6 class="font-size-14 mb-0 text-gray-90 font-weight-semi-bold" style="  display: block; width: 100px; overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">{{ $randombelow->name }}</h6>
                                </a>
                            </li>
                            @if($loop->index==4)
                            @break
                            @endif
                            @endforeach

                        </ul>
                        <!-- End Category -->
                    </div>
                </div>
                <!-- End Slider-Category Section -->
                <!-- Banner -->
                <div class="col-md-auto">
                    <div class="max-width-240-xl">
                        <div class="d-md-flex d-xl-block">
                            @foreach($randomright as $randomright)
                            <div class="bg-white border-top">
                                <a href="../shop/shop.html" class="text-gray-90 position-relative d-block overflow-hidden">
                                    <div class="position-absolute transform-rotate-16-banner">
                                        <img class="img-fluid" src="../../assets/img/140X140/img2.png" alt="Image Description">
                                    </div>
                                    <div class="px-4 py-6 min-height-172">
                                        <div class="mb-2 pb-1 font-size-18 font-weight-light text-ls-n1 text-lh-23">
                                            {{ $randomright->name }}
                                        </div>
                                        <div class="link text-gray-90 font-weight-bold font-size-15" href="#">
                                            Shop now
                                            <span class="link__icon ml-1">
                                                <span class="link__icon-inner"><i class="ec ec-arrow-right-categproes"></i></span>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            @if($loop->index==2)
                            @break
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- End Banner -->
            </div>
        </div>
    </div>
    <!-- End Vertical-Slider-Category-Banner Section -->
    <div class="container">
        <!-- Trend -->
        <div class="mb-3">
            <div class="d-flex border-bottom border-color-1 flex-lg-nowrap flex-wrap border-md-down-top-0 border-sm-bottom-0 mb-2 mb-md-0">
                <h3 class="section-title section-title__full mb-0 pb-2 font-size-22">Trending</h3>
            </div>
        </div>
        <!-- Tab Prodcut -->
        <div class="col">
            <!-- Features Section -->
            <div class="">
                <!-- Tab Content -->
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade pt-2 show active" id="pills-one-example1" role="tabpanel" aria-labelledby="pills-one-example1-tab">
                        <ul class="row list-unstyled products-group no-gutters">
                            @foreach($products as $prod)
                            <li class="col-6 col-wd-3 col-md-3 product-item">
                                <div class="product-item__outer h-100">
                                    <div class="product-item__inner px-xl-4 p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="{{ route('single.product', $prod->id ) }}" class="font-size-12 text-gray-5">{{ $prod->items->name }}</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="{{ route('single.product', $prod->id ) }}" class="text-blue font-weight-bold">{{ $prod->name }}</a></h5>
                                            <div class="mb-2">
                                                <a href="{{ route('single.product', $prod->id ) }}" class="d-block text-center"><img class="img-fluid" @foreach ($prod->pictures as $image)
                                                    src="{{asset('/product-images/'.$image->url) }}"
                                                    @endforeach
                                                    alt="Image Description" width="200" height="200"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">{{ $prod->min_price }}-{{ $prod->max_price }}</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="{{url('basket',$prod)}}" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="" class="text-gray-6 font-size-13"><i class=" mr-1 font-size-15"></i>{{$prod->minimum_order_qty}}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @if($loop->index == 7)
                            @break
                            @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- End Tab Content -->
            </div>
            <!-- End Features Section -->
        </div>
        <!--End Trend -->
        <br>
        @foreach($cat as $discate)
        <!-- PC -->
        <div class="mb-6">
            <!-- Nav nav-pills -->
            <div class="position-relative text-center z-index-2">
                <div class="d-flex justify-content-between border-bottom border-color-1 flex-xl-nowrap flex-wrap border-md-down-top-0 border-lg-down-bottom-0 mb-3">
                    <h3 class="section-title mb-0 pb-2 font-size-22">
                        {{$discate->name}}
                    </h3>
                </div>
            </div>
            <!-- End Nav Pills -->
            <!-- Catch Daily Deals! -->
            <div class="row">
                <div class="mb-2">
                    <a href="../shop/single-product-fullwidth.html" class="d-block text-center">
                        <img class="img-fluid" src="../../assets/img/360X616/img1.jpg" alt="Image Description"></a>
                </div>

                <div class="col col-md-7 col-xl-8 col-wd-8gdot7">
                    <!-- Tab Content -->

                    <div class="tab-content u-slick__tab" id="Bpills-tabContent">
                        <div class="tab-pane fade show active" id="Bpills-one-example1" role="tabpanel" aria-labelledby="Bpills-one-example1-tab">
                            <div class="row products-group no-gutters">
                                <div class="col-6 col-md-4 col-xl-3 col-wd-2gdot4 product-item">
                                    <div class="product-item__outer h-100">

                                        <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                            @foreach($discate->subcategory as $subcategory)
                                            @foreach($subcategory->items as $item)
                                            @foreach($item->products as $product)
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2">
                                                    <h3><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">{{$product->items->name}}</a></h3>
                                                </div>
                                                <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-black font-weight-bold">{{$product->name}}</a></h5>
                                                <div class="mb-2">
                                                    <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" @foreach ($product->pictures as $image)
                                                        src="{{asset('/product-images/'.$image->url) }}"
                                                        @endforeach
                                                        alt="Image Description" width="200" height="200"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">{{$product->min_price}}-{{$product->max_price}}</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="{{url('basket',$discate)}}" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href=class="text-gray-6 font-size-13"><i class="mr-1 font-size-15"></i>{{$discate->minimum_order_qty}}</a>
                                                </div>
                                            </div>
                                            @endforeach
                                            @endforeach
                                            @endforeach
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- End Tab Content -->
                </div>

                <!-- End Catch Daily Deals! -->
            </div>
        </div>
        @if($loop->index==3)
        @break
        @endif
        @endforeach
        <!-- End PC -->

        <!-- Brand Carousel -->
        @include('frontend.layouts.partials.brand')
        <!-- End Brand Carousel -->
    </div>
</main>
@endsection