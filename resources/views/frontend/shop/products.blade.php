@extends('frontend.layouts.app')
@section('header')
<header id="header" class="u-header u-header-left-aligned-nav">
    <div class="u-header__section">
        <!-- Topbar -->
        @include('frontend.layouts.partials.topbar')
        <!-- End Topbar -->

        <!-- Logo and Menu -->
        @include('frontend.layouts.partials.horizontalmenu')
        <!-- End Logo and Menu -->

        <!-- Vertical-and-Search-Bar -->
        @include('frontend.layouts.partials.searchbar')
        <!-- End Vertical-and-secondary-menu -->
    </div>
</header>

@endsection
@section('contents')
<main id="content" role="main">
    <!-- breadcrumb -->
    <div class="bg-gray-13 bg-md-transparent">
        <div class="container">
            <!-- breadcrumb -->
            <div class="my-md-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                        
                    </ol>
                </nav>
            </div>
            <!-- End breadcrumb -->
        </div>
    </div>
    <!-- End breadcrumb -->

    <div class="container">
        <div class="row mb-8">
            <div class="d-none d-xl-block col-xl-3 col-wd-2gdot5">
                <div class="mb-6 border border-width-2 border-color-3 borders-radius-6">
                    <!-- List -->
                    <ul id="sidebarNav" class="list-unstyled mb-0 sidebar-navbar view-all">
                        <li>
                            <div class="dropdown-title">Browse Products</div>
                        </li>
                        @foreach($products as $product)
                        <li>
                            <a class="dropdown-toggle dropdown-toggle-collapse" href="{{url('productDetail',$product->id)}}"  >
                                {{$product->name}}<span class="text-gray-25 font-size-12 font-weight-normal"></span>
                            </a>

                            <!--<div id="sidebarNav1Collapse" class="collapse" data-parent="#sidebarNav">-->
                            <!--    <ul id="sidebarNav1" class="list-unstyled dropdown-list">-->
                                     <!--Menu List -->
                            <!--        <li><a class="dropdown-item" href="#">Accessories<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>-->
                                     <!--End Menu List -->
                            <!--    </ul>-->
                            <!--</div>-->
                            @if($loop->index == 7)
                            @break
                            @endif
                        </li>
                        @endforeach
                    </ul>
                    <!-- End List -->
                </div>
                <div class="mb-6">
                    <form method="get" action="{{route('filter')}}">
                        <input name="cat_id" value="{{$subcategory}}" type="hidden" >
                        <div class="border-bottom border-color-1 mb-5">
                            <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Filters</h3>
                        </div>
                        <div class="border-bottom pb-4 mb-4">
                            <h4 class="font-size-14 mb-3 font-weight-bold">Color</h4>
                            <!-- Checkboxes -->
                            <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                <div class="custom-control custom-checkbox">
                                    <input type="radio" name="color" value="Black" class="custom-control-input" id="categoryTshirt">
                                    <label class="custom-control-label" for="categoryTshirt">Black <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></label>
                                </div>
                            </div>
                            <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                <div class="custom-control custom-checkbox">
                                    <input type="radio" name="color" value="White" class="custom-control-input" id="categoryShoes">
                                    <label class="custom-control-label" for="categoryShoes">White <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></label>
                                </div>
                            </div>
                            <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                <div class="custom-control custom-checkbox">
                                    <input type="radio" name="color" value="Red" class="custom-control-input" id="categoryAccessories">
                                    <label class="custom-control-label" for="categoryAccessories">Red <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></label>
                                </div>
                            </div>
                            <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                <div class="custom-control custom-checkbox">
                                    <input type="radio" name="color" value="Gold" class="custom-control-input" id="categoryTops">
                                    <label class="custom-control-label" for="categoryTops">Gold <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></label>
                                </div>
                            </div>
                            <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                <div class="custom-control custom-checkbox">
                                    <input type="radio" name="color" value="Chocolate" class="custom-control-input" id="categoryBottom">
                                    <label class="custom-control-label" for="categoryBottom">Chocolate <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></label>
                                </div>
                            </div>
                            <!-- End Checkboxes -->
                        </div>
                        <div class="border-bottom pb-4 mb-4">
                            <h4 class="font-size-14 mb-3 font-weight-bold">Size</h4>
                            <select name="size" id="">
                                <option readonly selected disabled>Select a Size</option>
                                <option value="xs">XS</option>
                                <option value="sm">SM</option>
                                <option value="md">MD</option>
                                <option value="lg">LG</option>
                                <option value="xl">XL</option>
                            </select>
                            <!-- <select name="time" id="">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option> -->

                            </select>
                        </div>

                        <div class="border-bottom pb-4 mb-4">
                            <h4 class="font-size-14 mb-3 font-weight-bold">Minimun Order Quantity</h4>
                            <input type="number" style="width:120px" name="unit">
                            <!-- <select name="unit" id="">
                            <option value="Liter">Liter</option>
                            <option value="Kilogram">Kilogram</option>
                            <option value="Piece">Piece</option>

                        </select> -->
                        </div>
                        <div class="range-slider">
                            <h4 class="font-size-14 mb-3 font-weight-bold">Price</h4>
                            <!-- Range Slider -->
                            <input type="number" style="width:100px" placeholder="Min Price" name="min_price">
                            <input type="number" style="width:100px" placeholder="Max Price" name="max_price">
                            <!-- <input class="js-range-slider" type="text" data-extra-classes="u-range-slider u-range-slider-indicator u-range-slider-grid" data-type="double" data-grid="false" data-hide-from-to="true" data-prefix="$" data-min="0" data-max="3456" data-from="0" data-to="3456" data-result-min="#rangeSliderExample3MinResult" data-result-max="#rangeSliderExample3MaxResult"> -->
                            <!-- End Range Slider -->
                            <div class="mt-1 text-gray-111 d-flex mb-4">
                                <span class="mr-0dot5">Price: </span>
                                <span>Rs.&nbsp</span>
                                <span id="rangeSliderExample3MinResult" class=""></span>
                                <span class="mx-0dot5"> — </span>
                                <span>Rs.&nbsp</span>
                                <span id="rangeSliderExample3MaxResult" class=""></span>
                            </div>
                            <button type="submit" class="btn px-4 btn-primary-dark-w py-2 rounded-lg">Filter</button>
                        </div>
                    </form>
                </div>
                @include('frontend.shop.partials.latest_product')
            </div>
            <div class="col-xl-9 col-wd-9gdot5">
                <!-- Shop-control-bar Title -->
                <div class="flex-center-between mb-3">
                    <!-- <h3 class="font-size-25 mb-0">Shop</h3>
                    <p class="font-size-14 text-gray-90 mb-0">Showing 1–25 of 56 results</p> -->
                </div>
                <!-- End shop-control-bar Title -->
                <!-- Shop-control-bar -->
                <div class="bg-gray-1 flex-center-between borders-radius-9 py-1">
                    <div class="d-xl-none">
                        <!-- Account Sidebar Toggle Button -->
                        <a id="sidebarNavToggler1" class="btn btn-sm py-1 font-weight-normal" href="javascript:;" role="button" aria-controls="sidebarContent1" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarContent1" data-unfold-type="css-animation" data-unfold-animation-in="fadeInLeft" data-unfold-animation-out="fadeOutLeft" data-unfold-duration="500">
                            <i class="fas fa-sliders-h"></i> <span class="ml-1">Filters</span>
                        </a>
                        <!-- End Account Sidebar Toggle Button -->
                    </div>
                    <div class="px-3 d-none d-xl-block">
                        <ul class="nav nav-tab-shop" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-one-example1-tab" data-toggle="pill" href="#pills-one-example1" role="tab" aria-controls="pills-one-example1" aria-selected="false">
                                    <div class="d-md-flex justify-content-md-center align-items-md-center">
                                        <i class="fa fa-th"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-two-example1-tab" data-toggle="pill" href="#pills-two-example1" role="tab" aria-controls="pills-two-example1" aria-selected="false">
                                    <div class="d-md-flex justify-content-md-center align-items-md-center">
                                        <i class="fa fa-align-justify"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-three-example1-tab" data-toggle="pill" href="#pills-three-example1" role="tab" aria-controls="pills-three-example1" aria-selected="true">
                                    <div class="d-md-flex justify-content-md-center align-items-md-center">
                                        <i class="fa fa-list"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-four-example1-tab" data-toggle="pill" href="#pills-four-example1" role="tab" aria-controls="pills-four-example1" aria-selected="true">
                                    <div class="d-md-flex justify-content-md-center align-items-md-center">
                                        <i class="fa fa-th-list"></i>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="d-flex">
                        <form method="get">
                            <!-- Select -->
                            <!-- <select class="js-select selectpicker dropdown-select max-width-200 max-width-160-sm right-dropdown-0 px-2 px-xl-0" data-style="btn-sm bg-white font-weight-normal py-2 border text-gray-20 bg-lg-down-transparent border-lg-down-0">
                                <option value="one" selected>Default sorting</option>
                                <option value="four">Sort by latest</option>
                                <option value="five">Sort by price: low to high</option>
                                <option value="six">Sort by price: high to low</option>
                            </select> -->
                            <!-- End Select -->
                        </form>
                        <form method="POST" class="ml-2 d-none d-xl-block">
                            <!-- Select -->
                            <!-- <select class="js-select selectpicker dropdown-select max-width-120" data-style="btn-sm bg-white font-weight-normal py-2 border text-gray-20 bg-lg-down-transparent border-lg-down-0">
                                <option value="one" selected>Show 20</option>
                                <option value="two">Show 40</option>
                                <option value="three">Show All</option>
                            </select> -->
                            <!-- End Select -->
                        </form>
                    </div>
                    <nav class="px-3 flex-horizontal-center text-gray-20 d-none d-xl-flex">
                        <!-- <form method="post" class="min-width-50 mr-1">
                            <input size="2" min="1" max="3" step="1" type="number" class="form-control text-center px-2 height-35" value="1">
                        </form> of 3
                        <a class="text-gray-30 font-size-20 ml-2" href="#">→</a>
                    </nav> -->
                </div>
                
                <!-- End Shop-control-bar -->
                <!-- Shop Body -->
                <!-- Tab Content -->
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade pt-2 show active" id="pills-one-example1" role="tabpanel" aria-labelledby="pills-one-example1-tab" data-target-group="groups">
                        <ul class="row list-unstyled products-group no-gutters">
                            @foreach ($products as $product)
                            <li class="col-6 col-md-3 col-wd-2gdot4 product-item">

                                <div class="product-item__outer h-100">
                                    <div class="product-item__inner px-xl-4 p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <!-- <div class="mb-2"><a href="" class="font-size-12 text-gray-5">Speakers</a></div> -->
                                            <h5 class="mb-1 product-item__title"><a href="{{ route('single.product', $product->id ) }}" class="text-blue font-weight-bold">{{ $product->name }}</a></h5>
                                            @foreach ($product->pictures as $image)
                                            <a href="{{ route('single.product', $product->id ) }}" class="d-block text-center"><img class="img-fluid" src="{{asset('/product-images/'.$image->url) }}" alt="Image Description"></a>
                                            @if($loop->first)
                                            @break
                                            @endif
                                            @endforeach
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">Rs. &nbsp{{ $product->min_price }}-{{ $product->max_price }}</div>
                                                </div>
                                                @if(Auth::guard('buyer')->check()) 
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="{{url('basket',['product_id' => $prod->id, 'buyer_id' => Auth::guard('buyer')->id()])}}" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                @else
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a style="color:#ffffff" onclick="myFunction()" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="" class="text-gray-6 font-size-13">{{$product->minimum_order_qty}}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="tab-pane fade pt-2" id="pills-two-example1" role="tabpanel" aria-labelledby="pills-two-example1-tab" data-target-group="groups">
                        <ul class="row list-unstyled products-group no-gutters">
                            @foreach ($products as $product)
                            <li class="col-6 col-md-3 col-wd-2gdot4 product-item">
                                <div class="product-item__outer h-100">
                                    <div class="product-item__inner px-xl-4 p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="#" class="font-size-12 text-gray-5">{{ $product->items->name }}</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="#" class="text-blue font-weight-bold">{{ $product->name }}</a></h5>
                                            <div class="mb-2">
                                                @foreach ($product->pictures as $image)
                                                <a href="{{ route('single.product', $product->id ) }}" class="d-block text-center"><img class="img-fluid" src="{{asset('/product-images/'.$image->url) }}" alt="Image Description"></a>
                                                @if($loop->first)
                                                @break
                                                @endif
                                                @endforeach

                                            </div>
                                            <div class="mb-3">
                                                <a class="d-inline-flex align-items-center small font-size-14" href="#">
                                                    <div class="text-warning mr-2">
                                                        <!-- <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="far fa-star text-muted"></small> -->
                                                    </div>
                                                    <span class="text-secondary"></span>
                                                </a>
                                            </div>
                                            <!-- <ul class="font-size-12 p-0 text-gray-110 mb-4">
                                                <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                                                <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush resistant, anti-shock material.</li>
                                                <li class="line-clamp-1 mb-1 list-bullet">20 MP Electro and 28 megapixel CMOS rear camera</li>
                                            </ul> -->
                                            <!-- <div class="text-gray-20 mb-2 font-size-12">SKU: FW511948218</div> -->
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">{{ $product->min_price }}-{{ $product->max_price }}</div>
                                                </div>
                                                 @if(Auth::guard('buyer')->check()) 
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="{{url('basket',['product_id' => $prod->id, 'buyer_id' => Auth::guard('buyer')->id()])}}" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                @else
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a style="color:#ffffff" onclick="myFunction()" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">

                                                <a href="#" class="text-gray-6 font-size-13">{{$product->minimum_order_qty}}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach

                        </ul>
                    </div>
                    <div class="tab-pane fade pt-2" id="pills-three-example1" role="tabpanel" aria-labelledby="pills-three-example1-tab" data-target-group="groups">
                        <ul class="d-block list-unstyled products-group prodcut-list-view">
                            @foreach ($products as $product)
                            <li class="product-item remove-divider">
                                <div class="product-item__outer w-100">
                                    <div class="product-item__inner remove-prodcut-hover py-4 row">
                                        <div class="product-item__header col-6 col-md-4">
                                            <div class="mb-2">
                                                @foreach ($product->pictures as $image)
                                                <a href="{{ route('single.product', $product->id ) }}" class="d-block text-center"><img class="img-fluid" src="{{asset('/product-images/'.$image->url) }}" alt="Image Description"></a>
                                                @if($loop->first)
                                                @break
                                                @endif
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="product-item__body col-6 col-md-5">
                                            <div class="pr-lg-10">
                                                <div class="mb-2"><a href="#" class="font-size-12 text-gray-5">{{ $product->items->name }}</a></div>
                                                <h5 class="mb-2 product-item__title"><a href="#" class="text-blue font-weight-bold">{{ $product->name }}</a></h5>
                                                <div class="prodcut-price mb-2 d-md-none">
                                                    <!-- <div class="text-gray-100">$685,00</div> -->
                                                </div>
                                                <div class="mb-3 d-none d-md-block">
                                                    <a class="d-inline-flex align-items-center small font-size-14" href="#">
                                                        <div class="text-warning mr-2">
                                                            <!-- <small class="fas fa-star"></small>
                                                            <small class="fas fa-star"></small>
                                                            <small class="fas fa-star"></small>
                                                            <small class="fas fa-star"></small>
                                                            <small class="far fa-star text-muted"></small> -->
                                                        </div>
                                                        <span class="text-secondary"></span>
                                                    </a>
                                                </div>
                                                <!-- <ul class="font-size-12 p-0 text-gray-110 mb-4 d-none d-md-block">
                                                    <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                                                    <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush resistant, anti-shock material.</li>
                                                    <li class="line-clamp-1 mb-1 list-bullet">20 MP Electro and 28 megapixel CMOS rear camera</li>
                                                </ul> -->
                                            </div>
                                        </div>
                                        <div class="product-item__footer col-md-3 d-md-block">
                                            <div class="mb-3">
                                                <div class="prodcut-price mb-2">
                                                    <div class="text-gray-100">{{ $product->min_price }}-{{ $product->max_price }}</div>
                                                </div>
                                                 @if(Auth::guard('buyer')->check()) 
                                                    <div class="prodcut-add-cart">
                                                    <a href="{{url('basket',['product_id' => $product->id, 'buyer_id' => Auth::guard('buyer')->id()])}}" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                @else
                                                    <div class="prodcut-add-cart">
                                                    <a style="color:#ffffff" onclick="myFunction()" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="flex-horizontal-center justify-content-between justify-content-wd-center flex-wrap">
                                                <a href="#" class="text-gray-6 font-size-13 mx-wd-3">{{$product->minimum_order_qty}}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="tab-pane fade pt-2" id="pills-four-example1" role="tabpanel" aria-labelledby="pills-four-example1-tab" data-target-group="groups">
                        <ul class="d-block list-unstyled products-group prodcut-list-view-small">
                            @foreach ($products as $product)
                            <li class="product-item remove-divider">
                                <div class="product-item__outer w-100">
                                    <div class="product-item__inner remove-prodcut-hover py-4 row">
                                        <div class="product-item__header col-6 col-md-2">
                                            <div class="mb-2">
                                                @foreach ($product->pictures as $image)
                                                <a href="{{ route('single.product', $product->id ) }}" class="d-block text-center"><img class="img-fluid" src="{{asset('/product-images/'.$image->url) }}" alt="Image Description"></a>
                                                @if($loop->first)
                                                @break
                                                @endif
                                                @endforeach

                                            </div>
                                        </div>
                                        <div class="product-item__body col-6 col-md-7">
                                            <div class="pr-lg-10">
                                                <div class="mb-2"><a href="#" class="font-size-12 text-gray-5">{{ $product->items->name }}</a></div>
                                                <h5 class="mb-2 product-item__title"><a href="#" class="text-blue font-weight-bold">{{ $product->name }}</a></h5>
                                                <div class="prodcut-price d-md-none">
                                                    <div class="text-gray-100">{{ $product->min_price }}-{{ $product->max_price}}</div>
                                                </div>
                                                <!-- <ul class="font-size-12 p-0 text-gray-110 mb-4 d-none d-md-block">
                                                    <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                                                    <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush resistant, anti-shock material.</li>
                                                    <li class="line-clamp-1 mb-1 list-bullet">20 MP Electro and 28 megapixel CMOS rear camera</li>
                                                </ul> -->
                                                <div class="mb-3 d-none d-md-block">
                                                    <a class="d-inline-flex align-items-center small font-size-14" href="#">
                                                        <div class="text-warning mr-2">
                                                            <!-- <small class="fas fa-star"></small>
                                                            <small class="fas fa-star"></small>
                                                            <small class="fas fa-star"></small>
                                                            <small class="fas fa-star"></small>
                                                            <small class="far fa-star text-muted"></small> -->
                                                        </div>
                                                        <!-- <span class="text-secondary">(40)</span> -->
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer col-md-3 d-md-block">
                                            <div class="mb-2 flex-center-between">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">{{ $product->min_price }}-{{ $product->max_price }}</div>
                                                </div>
                                                 @if(Auth::guard('buyer')->check()) 
                                                    <div class="prodcut-add-cart">
                                                    <a href="{{url('basket',['product_id' => $prod->id, 'buyer_id' => Auth::guard('buyer')->id()])}}" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                @else
                                                    <div class="prodcut-add-cart">
                                                    <a style="color:#ffffff" onclick="myFunction()" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="flex-horizontal-center justify-content-between justify-content-wd-center flex-wrap border-top pt-3">
                                                <a href="#" class="text-gray-6 font-size-13 mx-wd-3">{{$product->minimum_order_qty}}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- End Tab Content -->
                <!-- End Shop Body -->
                <!-- Shop Pagination -->
                <nav class="d-md-flex justify-content-between align-items-center border-top pt-3" aria-label="Page navigation example">
                    <div class="text-center text-md-left mb-3 mb-md-0">Showing 1–25 of 56 results</div>
                    <ul class="pagination mb-0 pagination-shop justify-content-center justify-content-md-start">
                        <li class="page-item"><a class="page-link current" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                    </ul>
                </nav>
                <!-- End Shop Pagination -->
            </div>
        </div>
        <!-- Brand Carousel -->
        @include('frontend.layouts.partials.brand')
        <!-- End Brand Carousel -->
    </div>

</main>
@endsection
@section('js')
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#myform').on('submit', function (event) {
          event.preventDefault();
          $.ajax({
          type:"POST",
          url:"{{url('/getmsg')}}",
          data:new FormData(this),
          dataType: 'json',
          processData: false,
          contentType:false,
          success: function(data)  
          {
            alert('working');
          }
          });
        });
    });
</script> -->
@endsection