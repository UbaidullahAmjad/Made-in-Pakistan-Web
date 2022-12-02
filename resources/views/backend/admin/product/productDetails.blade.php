@extends('frontend.layouts.app')
@section('contents')
<main id="content" role="main">
    <!-- breadcrumb -->
    <div class="bg-gray-13 bg-md-transparent">
        <div class="container">
            <!-- breadcrumb -->
            <div class="my-md-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="../home/index.html">Home</a></li>
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="../shop/shop.html">Accessories</a></li>
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="../shop/shop.html">Headphones</a></li>
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">Ultra Wireless S50 Headphones S50 with Bluetooth</li>
                    </ol>
                </nav>
            </div>
            <!-- End breadcrumb -->
        </div>
    </div>
    <!-- End breadcrumb -->

    <div class="container">
        <!-- Single Product Body -->
        <div class="mb-14">
            <div class="row">
                <div class="col-md-6 col-lg-4 col-xl-5 mb-4 mb-md-0">
                    <div id="sliderSyncingNav" class="js-slick-carousel u-slick mb-2"
                        data-infinite="true"
                        data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-classic u-slick__arrow-centered--y rounded-circle"
                        data-arrow-left-classes="fas fa-arrow-left u-slick__arrow-classic-inner u-slick__arrow-classic-inner--left ml-lg-2 ml-xl-4"
                        data-arrow-right-classes="fas fa-arrow-right u-slick__arrow-classic-inner u-slick__arrow-classic-inner--right mr-lg-2 mr-xl-4"
                        data-nav-for="#sliderSyncingThumb">
                        @foreach (Session::get('product_images') as $item)
                        @if ($loop->first)
                        <div class="js-slide">
                            <img class="img-fluid" width="720" height="660" src="{{ asset('product-images/'.Session::get('thumbnail')) }}" alt="Image Description">
                        </div>  
                        @endif
                        <div class="js-slide">
                            <img class="img-fluid" width="720" height="660" src="{{ asset('product-images/'.$item) }}" alt="Image Description">
                        </div>
                        @endforeach
                    </div>

                    <div id="sliderSyncingThumb" class="js-slick-carousel u-slick u-slick--slider-syncing u-slick--slider-syncing-size u-slick--gutters-1 u-slick--transform-off"
                        data-infinite="true"
                        data-slides-show="5"
                        data-is-thumbs="true"
                        data-nav-for="#sliderSyncingNav">
                        <div class="js-slide" style="cursor: pointer;">
                            <img class="img-fluid" src="{{ asset('product-images/'.Session::get('thumbnail')) }}" alt="Image Description">
                        </div>    
                        @foreach (Session::get('product_images') as $item)
                        <div class="js-slide" style="cursor: pointer;">
                            <img class="img-fluid" src="{{ asset('product-images/'.$item) }}" alt="Image Description">
                        </div>    
                        @endforeach
                        
                        
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4 col-xl-4 mb-md-6 mb-lg-0">
                    <div class="mb-2">
                        <a href="#" class="font-size-12 text-gray-5 mb-2 d-inline-block">{{$request->item_id}}</a>
                        <h2 class="font-size-25 text-lh-1dot2">{{ $request->name }}</h2>
                        <div class="mb-2">
                            <a class="d-inline-flex align-items-center small font-size-15 text-lh-1" href="#Reviews">
                                <div class="text-warning mr-2">
                                    <small class="fas fa-star"></small>
                                    <small class="fas fa-star"></small>
                                    <small class="fas fa-star"></small>
                                    <small class="fas fa-star"></small>
                                    <small class="far fa-star text-muted"></small>
                                </div>
                                <span class="text-secondary font-size-13">(customer reviews)</span>
                            </a>
                        </div>
                        <div class="row">
                                <div class="col-2">
                                    <a href="#" class="d-inline-block font-size-16 max-width-150 ml-n2 mb-2">
                                        <img src="{{ asset('image/avatar.png') }}" width="50px" height="50px" alt="Avatar"
                                            class="avatar">
                                </div>
                                <div class="col-10">
                                    
                                    </a>
                                </div>
                            </div>
                            <div class="mb-2">
                                <ul class="font-size-14 pl-3 ml-1 text-gray-110">
                                    <table>
                                        <tr>
                                            <td>Model no:</td>
                                            <td>{{ $request->model_no }}</td>
                                        </tr>
                                        <tr>
                                            <td>Color:</td>
                                            <td>{{ $request->color }}</td>
                                        </tr>
                                        <tr>
                                            <td>Supply time:</td>
                                            <td> {{ $request->supply_time }}</td>
                                        </tr>
                                        <tr>
                                            <td>Supply Availability:</td>
                                            <td>{{ $request->supply_availibility }}</td>
                                        </tr>
                                        <tr>
                                            <td>Place of origin:</td>
                                            <td>{{ $request->placeoforigin }}</td>
                                        </tr>
                                    </table>
                                </ul>
                            </div>
                        
                    </div>
                </div>
                <div class="mx-md-auto mx-lg-0 col-md-6 col-lg-4 col-xl-3">
                        <div class="mb-2">
                            <div class="card p-5 border-width-2 border-color-1 borders-radius-17">
                                <div class="text-gray-9 font-size-14 pb-2 border-color-1 border-bottom mb-3">Availability:
                                    <span class="text-green font-weight-bold">{{ $request->qty }} in stock</span></div>
                                <div class="mb-2">
                                    <h6 class="font-size-14">MOQ</h6>
                                    <!-- Quantity -->
                                    <div class="border rounded-pill py-1 w-md-100 height-35 px-3 border-color-1">
                                        <div class=" row align-items-center">
                                            <div class="col">
                                                <input disabled
                                                    class="js-result form-control h-auto border-0 rounded p-0 shadow-none text-center"
                                                    type="text" value="{{ $request->minimum_order_qty }}">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Quantity -->
                                </div>
                                <div class="mb-2">
                                    <h6 class="font-size-14">Price Range</h6>
                                    <!-- Quantity -->
                                    <div class="border rounded-pill py-1 w-md-100 height-35 px-3 border-color-1">
                                        <div class="js-quantity row align-items-center">
                                            <div class="col">
                                                <input disabled
                                                    class="js-result form-control h-auto border-0 text-center rounded p-0 shadow-none"
                                                    type="text"
                                                    value="Rs &nbsp;{{ $request->min_price }}-{{ $request->max_price }}">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Quantity -->
                                </div>
                                <div class="mb-2">
                                    <h6 class="font-size-14">Production Capacity</h6>
                                    <!-- Quantity -->
                                    <div class="border rounded-pill py-1 w-md-100 height-35 px-3 border-color-1">
                                        <div class="js-quantity row align-items-center">
                                            <div class="col">
                                                <input disabled
                                                    class="js-result form-control h-auto border-0 text-center rounded p-0 shadow-none"
                                                    type="text" value="{{ $request->product_capacity }}">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Quantity -->
                                </div>
                                <div class="mb-2">
                                    <h6 class="font-size-14">Port</h6>
                                    <!-- Quantity -->
                                    <div class="border rounded-pill py-1 w-md-100 height-35 px-3 border-color-1">
                                        <div class="js-quantity row align-items-center">
                                            <div class="col">
                                                <input disabled
                                                    class="js-result form-control h-auto border-0 text-center rounded p-0 shadow-none"
                                                    type="text" value="{{ $request->port }}">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Quantity -->
                                </div>
                                <div class="mb-2">
                                    <h6 class="font-size-14">Payment</h6>
                                    <!-- Select -->
                                    <img src="http://www.paymentscardsandmobile.com/wp-content/uploads/2015/08/Amex-icon.jpg"
                                        alt="" width="50px">
                                    <!-- End Select -->
                                </div>
                                <div class="mb-2 pb-0dot5">
                                    <form action="" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-block btn-primary-dark"><i
                                                class="ec ec-add-to-cart mr-2 font-size-20"></i> Inquiry Basket</button>
                                    </form>
                                </div>
                                <div class="mb-2">
                                    <form method="get" action="">
                                        @csrf
                                        <button type="submit" class="btn btn-block btn-dark" id="sendRfq"
                                            data-id={{ Auth::check() ? Auth::id() : '' }}>SEND RFQ</button>
                                    </form>

                                </div>
                                <div class="flex-content-center flex-wrap">
                                    <!-- <a href="#" class="text-gray-6 font-size-13 mr-2"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <!-- End Single Product Body -->
    </div>
    <div class="bg-gray-7 pt-6 pb-3 mb-6">
        <div class="container">
            <div class="js-scroll-nav">
                <div class="bg-white pt-4 pb-6 px-xl-11 px-md-5 px-4 mb-6 overflow-hidden">
                    <div id="Description" class="mx-md-2">
                        <div class="position-relative mb-6">
                            <ul class="nav nav-classic nav-tab nav-tab-lg justify-content-xl-center mb-6 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble border-lg-down-bottom-0 pb-1 pb-xl-0 mb-n1 mb-xl-0">
                                <li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
                                    <a class="nav-link active" href="#Description">
                                        <div class="d-md-flex justify-content-md-center align-items-md-center">
                                            Description
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
                                    <a class="nav-link" href="#Specification">
                                        <div class="d-md-flex justify-content-md-center align-items-md-center">
                                            Specification
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
                                    <a class="nav-link" href="#Packaging">
                                        <div class="d-md-flex justify-content-md-center align-items-md-center">
                                            Packaging Details
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
                                    <a class="nav-link" href="#Reviews">
                                        <div class="d-md-flex justify-content-md-center align-items-md-center">
                                            Reviews
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="mx-md-4 pt-1">
                            {!! $request->description !!}
                            
                        </div>
                    </div>
                </div>
                <div class="bg-white pt-4 pb-6 px-xl-11 px-md-5 px-4 mb-6 overflow-hidden">
                    <div id="Packaging" class="mx-md-2">
                        <div class="position-relative mb-6">
                            <ul class="nav nav-classic nav-tab nav-tab-lg justify-content-xl-center mb-6 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble border-lg-down-bottom-0 pb-1 pb-xl-0 mb-n1 mb-xl-0">
                                <li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
                                    <a class="nav-link active" href="#Description">
                                        <div class="d-md-flex justify-content-md-center align-items-md-center">
                                            Description
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
                                    <a class="nav-link" href="#Specification">
                                        <div class="d-md-flex justify-content-md-center align-items-md-center">
                                            Specification
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
                                    <a class="nav-link" href="#Packaging">
                                        <div class="d-md-flex justify-content-md-center align-items-md-center">
                                            Packaging Details
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
                                    <a class="nav-link" href="#Reviews">
                                        <div class="d-md-flex justify-content-md-center align-items-md-center">
                                            Reviews
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="mx-md-4 pt-1">
                            {!! $request->packaging_details !!}
                            <ul class="nav flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                                <li class="nav-item text-gray-111 flex-shrink-0 flex-xl-shrink-1"><strong>SKU:</strong> <span class="sku">FW511948218</span></li>
                                <li class="nav-item text-gray-111 mx-3 flex-shrink-0 flex-xl-shrink-1">/</li>
                                <li class="nav-item text-gray-111 flex-shrink-0 flex-xl-shrink-1"><strong>Category:</strong> <a href="#" class="text-blue">Headphones</a></li>
                                <li class="nav-item text-gray-111 mx-3 flex-shrink-0 flex-xl-shrink-1">/</li>
                                <li class="nav-item text-gray-111 flex-shrink-0 flex-xl-shrink-1"><strong>Tags:</strong> <a href="#" class="text-blue">Fast</a>, <a href="#" class="text-blue">Gaming</a>, <a href="#" class="text-blue">Strong</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="bg-white py-4 px-xl-11 px-md-5 px-4 mb-6">
                    <div id="Specification" class="mx-md-2">
                        <div class="position-relative mb-6">
                            <ul class="nav nav-classic nav-tab nav-tab-lg justify-content-xl-center mb-6 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble border-lg-down-bottom-0 pb-1 pb-xl-0 mb-n1 mb-xl-0">
                                <li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
                                    <a class="nav-link" href="#Description">
                                        <div class="d-md-flex justify-content-md-center align-items-md-center">
                                            Description
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
                                    <a class="nav-link active" href="#Specification">
                                        <div class="d-md-flex justify-content-md-center align-items-md-center">
                                            Specification
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
                                    <a class="nav-link active" href="#Packaging">
                                        <div class="d-md-flex justify-content-md-center align-items-md-center">
                                            Pakaging Details
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
                                    <a class="nav-link" href="#Reviews">
                                        <div class="d-md-flex justify-content-md-center align-items-md-center">
                                            Reviews
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="mx-md-5 pt-1">
                            <div class="table-responsive mb-4">
                                <table class="table table-hover">
                                    <tbody>
                                        <tr>
                                            <th class="px-4 px-xl-5 border-top-0">Weight</th>
                                            <td class="border-top-0">{{ $request->weight }}-{{ $request->weight_unit }}</td>
                                        </tr>
                                        <tr>
                                            <th class="px-4 px-xl-5 border-top-0">Type</th>
                                            <td class="border-top-0">{{ $request->type }}</td>
                                        </tr>
                                        <tr>
                                            <th class="px-4 px-xl-5 border-top-0">Brand</th>
                                            <td class="border-top-0">{{ $request->brand_name }}</td>
                                        </tr>
                                        <tr>
                                            <th class="px-4 px-xl-5 border-top-0">Place of Origin</th>
                                            <td class="border-top-0">{{ $request->placeoforigin }}</td>
                                        </tr>
                                        <tr>
                                            <th class="px-4 px-xl-5 border-top-0">Shelf Life</th>
                                            <td class="border-top-0">{{ $request->shelf_life_days }}day-{{ $request->shelf_life_weeks }}week-{{ $request->shelf_life_months }}month</td>
                                        </tr>
                                        <tr>
                                            <th class="px-4 px-xl-5 border-top-0">Color</th>
                                            <td class="border-top-0">{{ $request->color }}</td>
                                        </tr>
                                        <tr>
                                            <th class="px-4 px-xl-5">Dimensions</th>
                                            <td>{{ $request->dimensions ? $request->dimensions : 'no dimensions' }}</td>
                                        </tr>
                                        <tr>
                                            <th class="px-4 px-xl-5">Size</th>
                                            <td>{{ $request->size }}</td>
                                        </tr>
                                        <tr>
                                            <th class="px-4 px-xl-5">color</th>
                                            <td>{{ $request->color }}</td>
                                        </tr>
                                        <tr>
                                            <th class="px-4 px-xl-5">Guarantee</th>
                                            <td>{{ $request->guarantee? $request->guarantee : 'no guarantee' }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            </div>
                    </div>
                </div>
                <div class="bg-white py-4 px-xl-11 px-md-5 px-4 mb-6">
                    <div id="Reviews" class="mx-md-2">
                        <div class="position-relative mb-6">
                            <ul class="nav nav-classic nav-tab nav-tab-lg justify-content-xl-center mb-6 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble border-lg-down-bottom-0 pb-1 pb-xl-0 mb-n1 mb-xl-0">
                                <li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
                                    <a class="nav-link" href="#Description">
                                        <div class="d-md-flex justify-content-md-center align-items-md-center">
                                            Description
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
                                    <a class="nav-link" href="#Specification">
                                        <div class="d-md-flex justify-content-md-center align-items-md-center">
                                            Specification
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
                                    <a class="nav-link" href="#Packaging">
                                        <div class="d-md-flex justify-content-md-center align-items-md-center">
                                            Pakaging Details
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
                                    <a class="nav-link active" href="#Reviews">
                                        <div class="d-md-flex justify-content-md-center align-items-md-center">
                                            Reviews
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="mb-4 px-lg-4">
                            <div class="row mb-8">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <h3 class="font-size-18 mb-6">Based on 5</h3>
                                        <h2 class="font-size-30 font-weight-bold text-lh-1 mb-0">4.3</h2>
                                        <div class="text-lh-1">overall</div>
                                    </div>

                                    <!-- Ratings -->
                                    <ul class="list-unstyled">
                                        <li class="py-1">
                                            <a class="row align-items-center mx-gutters-2 font-size-1" href="javascript:;">
                                                <div class="col-auto mb-2 mb-md-0">
                                                    <div class="text-warning text-ls-n2 font-size-16" style="width: 80px;">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="far fa-star text-muted"></small>
                                                    </div>
                                                </div>
                                                <div class="col-auto mb-2 mb-md-0">
                                                    <div class="progress ml-xl-5" style="height: 10px; width: 200px;">
                                                        <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="col-auto text-right">
                                                    <span class="text-gray-90">205</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="py-1">
                                            <a class="row align-items-center mx-gutters-2 font-size-1" href="javascript:;">
                                                <div class="col-auto mb-2 mb-md-0">
                                                    <div class="text-warning text-ls-n2 font-size-16" style="width: 80px;">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="far fa-star text-muted"></small>
                                                        <small class="far fa-star text-muted"></small>
                                                    </div>
                                                </div>
                                                <div class="col-auto mb-2 mb-md-0">
                                                    <div class="progress ml-xl-5" style="height: 10px; width: 200px;">
                                                        <div class="progress-bar" role="progressbar" style="width: 53%;" aria-valuenow="53" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="col-auto text-right">
                                                    <span class="text-gray-90">55</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="py-1">
                                            <a class="row align-items-center mx-gutters-2 font-size-1" href="javascript:;">
                                                <div class="col-auto mb-2 mb-md-0">
                                                    <div class="text-warning text-ls-n2 font-size-16" style="width: 80px;">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="far fa-star text-muted"></small>
                                                        <small class="far fa-star text-muted"></small>
                                                        <small class="far fa-star text-muted"></small>
                                                    </div>
                                                </div>
                                                <div class="col-auto mb-2 mb-md-0">
                                                    <div class="progress ml-xl-5" style="height: 10px; width: 200px;">
                                                        <div class="progress-bar" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="col-auto text-right">
                                                    <span class="text-gray-90">23</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="py-1">
                                            <a class="row align-items-center mx-gutters-2 font-size-1" href="javascript:;">
                                                <div class="col-auto mb-2 mb-md-0">
                                                    <div class="text-warning text-ls-n2 font-size-16" style="width: 80px;">
                                                        <small class="fas fa-star"></small>
                                                        <small class="far fa-star text-muted"></small>
                                                        <small class="far fa-star text-muted"></small>
                                                        <small class="far fa-star text-muted"></small>
                                                        <small class="far fa-star text-muted"></small>
                                                    </div>
                                                </div>
                                                <div class="col-auto mb-2 mb-md-0">
                                                    <div class="progress ml-xl-5" style="height: 10px; width: 200px;">
                                                        <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="col-auto text-right">
                                                    <span class="text-muted">0</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="py-1">
                                            <a class="row align-items-center mx-gutters-2 font-size-1" href="javascript:;">
                                                <div class="col-auto mb-2 mb-md-0">
                                                    <div class="text-warning text-ls-n2 font-size-16" style="width: 80px;">
                                                        <small class="fas fa-star"></small>
                                                        <small class="far fa-star text-muted"></small>
                                                        <small class="far fa-star text-muted"></small>
                                                        <small class="far fa-star text-muted"></small>
                                                        <small class="far fa-star text-muted"></small>
                                                    </div>
                                                </div>
                                                <div class="col-auto mb-2 mb-md-0">
                                                    <div class="progress ml-xl-5" style="height: 10px; width: 200px;">
                                                        <div class="progress-bar" role="progressbar" style="width: 1%;" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="col-auto text-right">
                                                    <span class="text-gray-90">4</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- End Ratings -->
                                </div>
                                <div class="col-md-6">
                                    <h3 class="font-size-18 mb-5">Add a review</h3>
                                    <!-- Form -->
                                    <form class="js-validate" action="{{route('review-and-ratings.store')}}" method="post">
                                        @csrf
                                        <input type="hidden" value="{{$request->id}}" name="product_id">
                                        <div class="row align-items-center mb-4">
                                            <div class="col-md-4 col-lg-3">
                                                <label for="rating" class="form-label mb-0">Your Review</label>
                                            </div>
                                            <div class="col-md-8 col-lg-9">
                                                <a href="#" class="d-block">
                                                    <div class="text-warning text-ls-n2 font-size-16">
                                                        <small class="far fa-star text-muted"></small>
                                                        <small class="far fa-star text-muted"></small>
                                                        <small class="far fa-star text-muted"></small>
                                                        <small class="far fa-star text-muted"></small>
                                                        <small class="far fa-star text-muted"></small>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="js-form-message form-group mb-3 row">
                                            <div class="col-md-4 col-lg-3">
                                                <label for="descriptionTextarea" class="form-label">Your Review</label>
                                            </div>
                                            <div class="col-md-8 col-lg-9">
                                                <textarea class="form-control" rows="3" id="descriptionTextarea"
                                                data-msg="Please enter your message."
                                                data-error-class="u-has-error"
                                                data-success-class="u-has-success"
                                                name="description"></textarea>
                                            </div>
                                        </div>
                                        <div class="js-form-message form-group mb-3 row">
                                            <div class="col-md-4 col-lg-3">
                                                <label for="inputName" class="form-label">Name <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-md-8 col-lg-9">
                                                <input type="text" class="form-control" name="name" id="inputName" aria-label="Alex Hecker" required
                                                data-msg="Please enter your name."
                                                data-error-class="u-has-error"
                                                data-success-class="u-has-success"
                                                value="{{Auth::user()?Auth::user()->name:''}}">
                                            </div>
                                        </div>
                                        <div class="js-form-message form-group mb-3 row">
                                            <div class="col-md-4 col-lg-3">
                                                <label for="emailAddress" class="form-label" >Email <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-md-8 col-lg-9">
                                                <input type="email" class="form-control" name="email" id="emailAddress" aria-label="alexhecker@pixeel.com" required
                                                data-msg="Please enter a valid email address."
                                                data-error-class="u-has-error"
                                                data-success-class="u-has-success"
                                                value="{{Auth::user()?Auth::user()->email:''}}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="offset-md-4 offset-lg-3 col-auto">
                                                <button type="submit" class="btn btn-primary-dark btn-wide transition-3d-hover">Add Review</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- End Form -->
                                </div>
                            </div>
                            <!-- Review -->
                            
                            <div class="border-bottom border-color-1 pb-4 mb-4">
                                <!-- Review Rating -->
                                <div class="d-flex justify-content-between align-items-center text-secondary font-size-1 mb-2">
                                    <div class="text-warning text-ls-n2 font-size-16" style="width: 80px;">
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="far fa-star text-muted"></small>
                                        <small class="far fa-star text-muted"></small>
                                    </div>
                                </div>
                                <!-- End Review Rating -->

                                <p class="text-gray-90">lorem ipsum lorem ipsum lorem ipsum lorem ipsum</p>

                                <!-- Reviewer -->
                                <div class="mb-2">
                                    <strong>Waheed Sindhani</strong>
                                    <span class="font-size-13 text-gray-23">- 25-08-1995 05:03 PM</span>
                                </div>
                                <!-- End Reviewer -->
                            </div>    
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <!-- Brand Carousel -->
        <div class="mb-8">
            <div class="py-2 border-top border-bottom">
                <div class="js-slick-carousel u-slick my-1"
                    data-slides-show="5"
                    data-slides-scroll="1"
                    data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-normal u-slick__arrow-centered--y"
                    data-arrow-left-classes="fa fa-angle-left u-slick__arrow-classic-inner--left z-index-9"
                    data-arrow-right-classes="fa fa-angle-right u-slick__arrow-classic-inner--right"
                    data-responsive='[{
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
                            <img class="img-fluid m-auto max-height-50" src="../../assets/img/200X60/img1.png" alt="Image Description">
                        </a>
                    </div>
                    <div class="js-slide">
                        <a href="#" class="link-hover__brand">
                            <img class="img-fluid m-auto max-height-50" src="../../assets/img/200X60/img2.png" alt="Image Description">
                        </a>
                    </div>
                    <div class="js-slide">
                        <a href="#" class="link-hover__brand">
                            <img class="img-fluid m-auto max-height-50" src="../../assets/img/200X60/img3.png" alt="Image Description">
                        </a>
                    </div>
                    <div class="js-slide">
                        <a href="#" class="link-hover__brand">
                            <img class="img-fluid m-auto max-height-50" src="../../assets/img/200X60/img4.png" alt="Image Description">
                        </a>
                    </div>
                    <div class="js-slide">
                        <a href="#" class="link-hover__brand">
                            <img class="img-fluid m-auto max-height-50" src="../../assets/img/200X60/img5.png" alt="Image Description">
                        </a>
                    </div>
                    <div class="js-slide">
                        <a href="#" class="link-hover__brand">
                            <img class="img-fluid m-auto max-height-50" src="../../assets/img/200X60/img6.png" alt="Image Description">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Brand Carousel -->
    </div>

</main>
<!-- ========== END MAIN CONTENT ========== -->    
@endsection



