@extends('frontend.layouts.app')
@section('css')

@endsection
@section('header')
    <header id="header" class="u-header u-header-left-aligned-nav">
        <div class="u-header__section">
            <!-- Topbar -->
            @include('frontend.layouts.partials.topbar')
            <!-- End Topbar -->

            <!-- Logo and Menu -->
            @include('frontend.layouts.partials.logo')
            <!-- End Logo and Menu -->

            <!-- Vertical-and-Search-Bar -->
            @include('frontend.layouts.partials.searchbar')
            <!-- End Vertical-and-secondary-menu -->
        </div>
        <style>
            .hide {
                display: none;
            }

            .myDIV:hover+.hide {
                display: block;
                color: red;
            }

        </style>
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
                            <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="{{url('/')}}">Home</a>
                            </li>
                            <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="{{route('subcategories', $product->items->subcategory->category->id )}}">{{ $product->items->subcategory->category->name }}</a>
                            </li>
                            <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="{{route('products', ['cat_id' => $product->items->subcategory->id]) }}">{{ $product->items->subcategory->name }}</a>
                            </li>
                            <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="{{route('single.product',$product->items->id)}}">{{ $product->items->name }}</a></li>
                            <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">{{ $product->name }}</li>
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
                        <div id="sliderSyncingNav" class="js-slick-carousel u-slick mb-2" data-infinite="true"
                            data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-classic u-slick__arrow-centered--y rounded-circle"
                            data-arrow-left-classes="fas fa-arrow-left u-slick__arrow-classic-inner u-slick__arrow-classic-inner--left ml-lg-2 ml-xl-4"
                            data-arrow-right-classes="fas fa-arrow-right u-slick__arrow-classic-inner u-slick__arrow-classic-inner--right mr-lg-2 mr-xl-4"
                            data-nav-for="#sliderSyncingThumb">
                            @foreach ($product->pictures as $image)
                                <div class="js-slide">
                                    <img class="img-fluid" src="{{ asset('/product-images/' . $image->url) }}"
                                        alt="Image Description">
                                </div>
                            @endforeach
                        </div>

                        <div id="sliderSyncingThumb"
                            class="js-slick-carousel u-slick u-slick--slider-syncing u-slick--slider-syncing-size u-slick--gutters-1 u-slick--transform-off"
                            data-infinite="true" data-slides-show="5" data-is-thumbs="true"
                            data-nav-for="#sliderSyncingNav">
                            @foreach ($product->pictures as $image)
                                <div class="js-slide" style="cursor: pointer;">
                                    <img class="img-fluid" src="{{ asset('/product-images/' . $image->url) }}"
                                        alt="Image Description">
                                </div>
                                @if ($loop == '4')
                                    @break
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-4 mb-md-6 mb-lg-0">
                        <div class="mb-2">
                            <a href="#" class="font-size-12 text-gray-5 mb-2 d-inline-block">{{ $product->items->name }}</a>
                            <h2 class="font-size-25 text-lh-1dot2">{{ $product->name }}</h2>
                            <div class="mb-2">
                                <a class="d-inline-flex align-items-center small font-size-15 text-lh-1" href="#Reviews">
                                    <div class="text-warning mr-2">
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="far fa-star text-muted"></small>
                                    </div>
                                    <span class="text-secondary font-size-13">({{ $product->reviews->count() }} customer
                                        reviews)</span>
                                </a>
                            </div>
                            <div class="row">
                                <div class="col-2">
                                    <a href="{{url('company',$product->seller->id)}}" class="d-inline-block font-size-16 max-width-150 ml-n2 mb-2">
                                        <img src="{{ asset('image/avatar.png') }}" width="50px" height="50px" alt="Avatar"
                                            class="avatar">
                                </div>
                                <div class="col-10">
                                    {{ $product->seller->name }}
                                    </a>
                                </div>
                            </div>
                            <div class="mb-2">
                                <ul class="font-size-14 pl-3 ml-1 text-gray-110">
                                    <table>
                                        <tr>
                                            <td>Model no:</td>
                                            <td>{{ $product->model_no }}</td>
                                        </tr>
                                        <tr>
                                            <td>Color:</td>
                                            <td>{{ $product->color }}</td>
                                        </tr>
                                        <tr>
                                            <td>Supply time:</td>
                                            <td> {{ $product->supply_time }}</td>
                                        </tr>
                                        <tr>
                                            <td>Supply Availability:</td>
                                            <td>{{ $product->supply_availibility }}</td>
                                        </tr>
                                        <tr>
                                            <td>Place of origin:</td>
                                            <td>{{ $product->placeoforigin }}</td>
                                        </tr>
                                    </table>
                                </ul>
                            </div>
                            <!-- <h5>Description:</h5>
                            <p style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">{!!
                                $product->description !!}</P> -->
                        </div>
                    </div>
                    <div class="mx-md-auto mx-lg-0 col-md-6 col-lg-4 col-xl-3">
                        <div class="mb-2">
                            <div class="card p-5 border-width-2 border-color-1 borders-radius-17">
                                <div class="text-gray-9 font-size-14 pb-2 border-color-1 border-bottom mb-3">Availability:
                                    <span class="text-green font-weight-bold">{{ $product->qty }} in stock</span></div>
                                <div class="mb-2">
                                    <h6 class="font-size-14">MOQ</h6>
                                    <!-- Quantity -->
                                    <div class="border rounded-pill py-1 w-md-100 height-35 px-3 border-color-1">
                                        <div class=" row align-items-center">
                                            <div class="col">
                                                <input disabled
                                                    class="js-result form-control h-auto border-0 rounded p-0 shadow-none text-center"
                                                    type="text" value="{{ $product->minimum_order_qty }}">
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
                                                    value="$ &nbsp;{{ $product->min_price }}-{{ $product->max_price }}">
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
                                                    type="text" value="{{ $product->product_capacity }}">
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
                                                    type="text" value="{{ $product->port }}">
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
                                     @if(Auth::guard('buyer')->check()) 
                                                    <form action="{{url('basket',['product_id' => $product->id, 'buyer_id' => Auth::guard('buyer')->id()])}}" method="get">
                                        @csrf
                                        <button type="submit" class="btn btn-block btn-primary-dark"><i
                                                class="ec ec-add-to-cart mr-2 font-size-20"></i> Inquiry Basket</button>
                                    </form>
                                                @else
                                                    <form action="" >
                                        
                                        <button type="submit" class="btn btn-block btn-primary-dark"><i
                                                class="ec ec-add-to-cart mr-2 font-size-20"></i> Inquiry Basket</button>
                                                @endif
                                                                    </div>
                                <div class="mb-2">
                                    <form method="get" action="{{ route('singlerfqs', $product->id) }}">
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
                                <ul
                                    class="nav nav-classic nav-tab nav-tab-lg justify-content-xl-center mb-6 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble border-lg-down-bottom-0 pb-1 pb-xl-0 mb-n1 mb-xl-0">
                                    <li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
                                        <a class="nav-link active" href="#Description">
                                            <div class="d-md-flex justify-content-md-center align-items-md-center">
                                                Description
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
                                        <a class="nav-link" href="#Packaging">
                                            <div class="d-md-flex justify-content-md-center align-items-md-center">
                                                Packaging Detail
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
                                        <a class="nav-link" href="#Reviews">
                                            <div class="d-md-flex justify-content-md-center align-items-md-center">
                                                Reviews
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mx-md-4 pt-1">
                                {!! $product->description !!}
                                <!-- <ul class="nav flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                                    <li class="nav-item text-gray-111 flex-shrink-0 flex-xl-shrink-1"><strong>SKU:</strong> <span class="sku">FW511948218</span></li>
                                    <li class="nav-item text-gray-111 mx-3 flex-shrink-0 flex-xl-shrink-1">/</li>
                                    <li class="nav-item text-gray-111 flex-shrink-0 flex-xl-shrink-1"><strong>Category:</strong> <a href="#" class="text-blue">Headphones</a></li>
                                    <li class="nav-item text-gray-111 mx-3 flex-shrink-0 flex-xl-shrink-1">/</li>
                                    <li class="nav-item text-gray-111 flex-shrink-0 flex-xl-shrink-1"><strong>Tags:</strong> <a href="#" class="text-blue">Fast</a>, <a href="#" class="text-blue">Gaming</a>, <a href="#" class="text-blue">Strong</a></li>
                                </ul> -->
                            </div>
                        </div>
                    </div>

                    <div class="bg-white py-4 px-xl-11 px-md-5 px-4 mb-6">
                        <div id="Packaging" class="mx-md-2">
                            <div class="position-relative mb-6">
                                <ul
                                    class="nav nav-classic nav-tab nav-tab-lg justify-content-xl-center mb-6 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble border-lg-down-bottom-0 pb-1 pb-xl-0 mb-n1 mb-xl-0">
                                    <li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
                                        <a class="nav-link" href="#Description">
                                            <div class="d-md-flex justify-content-md-center align-items-md-center">
                                                Description
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
                                        <a class="nav-link active" href="#Packaging">
                                            <div class="d-md-flex justify-content-md-center align-items-md-center">
                                                Packaging Detail
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
                                    {{ $product->packaging_details }}

                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="bg-white py-4 px-xl-11 px-md-5 px-4 mb-6">
                        <div id="Specification" class="mx-md-2">
                            <div class="position-relative mb-6">
                                <ul
                                    class="nav nav-classic nav-tab nav-tab-lg justify-content-xl-center mb-6 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble border-lg-down-bottom-0 pb-1 pb-xl-0 mb-n1 mb-xl-0">
                                    <li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
                                        <a class="nav-link" href="#Description">
                                            <div class="d-md-flex justify-content-md-center align-items-md-center">
                                                Description
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
                                        <a class="nav-link" href="#Packaging">
                                            <div class="d-md-flex justify-content-md-center align-items-md-center">
                                                Packaging Detail
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
                                            @isset($product->name)
                                                <tr>
                                                    <th class="px-4 px-xl-5">Name</th>
                                                    <td>{{ $product->name }}</td>
                                                </tr>
                                            @endisset
                                            @isset($product->qty)
                                                <tr>
                                                    <th class="px-4 px-xl-5">Quantity</th>
                                                    <td>{{ $product->qty }}</td>
                                                </tr>
                                            @endisset
                                            @isset($product->weight)
                                                <tr>
                                                    <th class="px-4 px-xl-5">Weight</th>
                                                    <td>{{ $product->weight }}</td>
                                                </tr>
                                            @endisset
                                            @isset($product->dimensions))
                                                <tr>
                                                    <th class="px-4 px-xl-5">Dimensions</th>
                                                    <td>{{ $product->dimensions ? $product->dimensions : 'no dimensions' }}</td>
                                                </tr>
                                            @endisset
                                            <tr>
                                                <th class="px-4 px-xl-5">Size</th>
                                                <td>{{ $product->size }}</td>
                                            </tr>
                                            <tr>
                                                <th class="px-4 px-xl-5">color</th>
                                                <td>{{ $product->color }}</td>
                                            </tr>
                                            @isset($product->guarantee))
                                                <tr>
                                                    <th class="px-4 px-xl-5">Guarantee</th>
                                                    <td>{{ $product->guarantee }}</td>
                                                </tr>
                                            @endisset
                                        </tbody>
                                    </table>
                                </div>
                                <h3 class="font-size-18 mb-4">Technical Specifications</h3>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <tbody>
                                            @isset($product->items->name)
                                                <tr>
                                                    <th class="px-4 px-xl-5">Product</th>
                                                    <td>{{ $product->items->name }}</td>
                                                </tr>
                                            @endisset
                                            @isset($product->placeoforigin)
                                                <tr>
                                                    <th class="px-4 px-xl-5">Place of Origin</th>
                                                    <td>{{ $product->placeoforigin }}</td>
                                                </tr>
                                            @endisset
                                            @isset($product->shelf_life)
                                                <tr>
                                                    <th class="px-4 px-xl-5">Shelf life</th>
                                                    <td>{{ $product->shelf_life }}</td>
                                                </tr>
                                            @endisset
                                            @isset($product->port)
                                                <tr>
                                                    <th class="px-4 px-xl-5">Port</th>
                                                    <td>{{ $product->port }}</td>
                                                </tr>
                                            @endisset
                                            @isset($product->type)
                                                <tr>
                                                    <th class="px-4 px-xl-5">Type</th>
                                                    <td>{{ $product->type }}</td>
                                                </tr>
                                            @endisset
                                            @isset($product->style)
                                                <tr>
                                                    <th class="px-4 px-xl-5">Style</th>
                                                    <td>{{ $product->style }}</td>
                                                </tr>
                                            @endisset
                                            @isset($product->certification)
                                                <tr>
                                                    <th class="px-4 px-xl-5">Certification</th>
                                                    <td>{{ $product->certification }}</td>
                                                </tr>
                                            @endisset
                                            @isset($product->model_no)
                                                <tr>
                                                    <th class="px-4 px-xl-5">Model no</th>
                                                    <td>{{ $product->model_no }}</td>
                                                </tr>
                                            @endisset
                                            @isset($product->features)
                                                <tr>
                                                    <th class="px-4 px-xl-5">Features</th>
                                                    <td>{{ $product->features }}</td>
                                                </tr>
                                            @endisset
                                            @isset($product->stock)
                                                <tr>
                                                    <th class="px-4 px-xl-5">Stock</th>
                                                    <td>{{ $product->stock }}</td>
                                                </tr>
                                            @endisset
                                            @isset($product->production_capacity)
                                                <tr>
                                                    <th class="px-4 px-xl-5">Production Capacity</th>
                                                    <td>{{ $product->production_capacity }}</td>
                                                </tr>
                                            @endisset
                                            @isset($product->brand_name)
                                                <tr>
                                                    <th class="px-4 px-xl-5">Brand Name</th>
                                                    <td>{{ $product->brand_name }}</td>
                                                </tr>
                                            @endisset
                                            @isset($product->tags)
                                                <tr>
                                                    <th class="px-4 px-xl-5">Tags</th>
                                                    <td>{{ $product->tags }}</td>
                                                </tr>
                                            @endisset
                                            @isset($product->min)
                                                <tr>
                                                    <th class="px-4 px-xl-5">Weight</th>
                                                    <td>{{ $product->placeoforigin }}</td>
                                                </tr>
                                            @endisset
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white py-4 px-xl-11 px-md-5 px-4 mb-6">
                        <div id="Reviews" class="mx-md-2">
                            <div class="position-relative mb-6">
                                <ul
                                    class="nav nav-classic nav-tab nav-tab-lg justify-content-xl-center mb-6 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble border-lg-down-bottom-0 pb-1 pb-xl-0 mb-n1 mb-xl-0">
                                    <li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
                                        <a class="nav-link" href="#Description">
                                            <div class="d-md-flex justify-content-md-center align-items-md-center">
                                                Description
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
                                        <a class="nav-link" href="#Packaging">
                                            <div class="d-md-flex justify-content-md-center align-items-md-center">
                                                Packaging Detail
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
                                            <h3 class="font-size-18 mb-6">Based on {{ $product->reviews->count() }}
                                                {{ $product->reviews->count() > 1 ? 'reviews' : 'review' }}</h3>
                                            <h2 class="font-size-30 font-weight-bold text-lh-1 mb-0">4.3</h2>
                                            <div class="text-lh-1">overall</div>
                                        </div>

                                        <!-- Ratings -->
                                        <ul class="list-unstyled">
                                            <li class="py-1">
                                                <a class="row align-items-center mx-gutters-2 font-size-1"
                                                    href="javascript:;">
                                                    <div class="col-auto mb-2 mb-md-0">
                                                        <div class="text-warning text-ls-n2 font-size-16"
                                                            style="width: 80px;">
                                                            <small class="fas fa-star"></small>
                                                            <small class="fas fa-star"></small>
                                                            <small class="fas fa-star"></small>
                                                            <small class="fas fa-star"></small>
                                                            <small class="far fa-star text-muted"></small>
                                                        </div>

                                                    </div>
                                                    <div class="col-auto mb-2 mb-md-0">
                                                        <div class="progress ml-xl-5" style="height: 10px; width: 200px;">
                                                            <div class="progress-bar" role="progressbar"
                                                                style="width: 100%;" aria-valuenow="100" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto text-right">
                                                        <span class="text-gray-90">205</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="py-1">
                                                <a class="row align-items-center mx-gutters-2 font-size-1"
                                                    href="javascript:;">
                                                    <div class="col-auto mb-2 mb-md-0">
                                                        <div class="text-warning text-ls-n2 font-size-16"
                                                            style="width: 80px;">
                                                            <small class="fas fa-star"></small>
                                                            <small class="fas fa-star"></small>
                                                            <small class="fas fa-star"></small>
                                                            <small class="far fa-star text-muted"></small>
                                                            <small class="far fa-star text-muted"></small>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto mb-2 mb-md-0">
                                                        <div class="progress ml-xl-5" style="height: 10px; width: 200px;">
                                                            <div class="progress-bar" role="progressbar" style="width: 53%;"
                                                                aria-valuenow="53" aria-valuemin="0" aria-valuemax="100">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto text-right">
                                                        <span class="text-gray-90">55</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="py-1">
                                                <a class="row align-items-center mx-gutters-2 font-size-1"
                                                    href="javascript:;">
                                                    <div class="col-auto mb-2 mb-md-0">
                                                        <div class="text-warning text-ls-n2 font-size-16"
                                                            style="width: 80px;">
                                                            <small class="fas fa-star"></small>
                                                            <small class="fas fa-star"></small>
                                                            <small class="far fa-star text-muted"></small>
                                                            <small class="far fa-star text-muted"></small>
                                                            <small class="far fa-star text-muted"></small>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto mb-2 mb-md-0">
                                                        <div class="progress ml-xl-5" style="height: 10px; width: 200px;">
                                                            <div class="progress-bar" role="progressbar" style="width: 20%;"
                                                                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto text-right">
                                                        <span class="text-gray-90">23</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="py-1">
                                                <a class="row align-items-center mx-gutters-2 font-size-1"
                                                    href="javascript:;">
                                                    <div class="col-auto mb-2 mb-md-0">
                                                        <div class="text-warning text-ls-n2 font-size-16"
                                                            style="width: 80px;">
                                                            <small class="fas fa-star"></small>
                                                            <small class="far fa-star text-muted"></small>
                                                            <small class="far fa-star text-muted"></small>
                                                            <small class="far fa-star text-muted"></small>
                                                            <small class="far fa-star text-muted"></small>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto mb-2 mb-md-0">
                                                        <div class="progress ml-xl-5" style="height: 10px; width: 200px;">
                                                            <div class="progress-bar" role="progressbar" style="width: 0%;"
                                                                aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto text-right">
                                                        <span class="text-muted">0</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="py-1">
                                                <a class="row align-items-center mx-gutters-2 font-size-1"
                                                    href="javascript:;">
                                                    <div class="col-auto mb-2 mb-md-0">
                                                        <div class="text-warning text-ls-n2 font-size-16"
                                                            style="width: 80px;">
                                                            <small class="fas fa-star"></small>
                                                            <small class="far fa-star text-muted"></small>
                                                            <small class="far fa-star text-muted"></small>
                                                            <small class="far fa-star text-muted"></small>
                                                            <small class="far fa-star text-muted"></small>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto mb-2 mb-md-0">
                                                        <div class="progress ml-xl-5" style="height: 10px; width: 200px;">
                                                            <div class="progress-bar" role="progressbar" style="width: 1%;"
                                                                aria-valuenow="1" aria-valuemin="0" aria-valuemax="100">
                                                            </div>
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
                                        <form class="js-validate" action="{{ route('review-and-ratings.store') }}"
                                            method="post">
                                            @csrf
                                            <input type="hidden" value="" name="rating" id="rating">
                                            <input type="hidden" value="{{ $product->id }}" name="product_id">
                                            <div class="row align-items-center mb-4">
                                                <div class="col-md-4 col-lg-3">
                                                    <label for="rating" class="form-label mb-0">Your Review</label>
                                                </div>

                                                <div class="col-md-8 col-lg-9 rating">
                                                    <div id="raty"></div>
                                                    {{-- <a href="#" class="d-block">
                                                        <div class="text-warning text-ls-n2 font-size-16">
                                                            <small class="far fa-star text-muted"></small>
                                                            <small class="far fa-star text-muted"></small>
                                                            <small class="far fa-star text-muted"></small>
                                                            <small class="far fa-star text-muted"></small>
                                                            <small class="far fa-star text-muted"></small>
                                                        </div>
                                                    </a> --}}
                                                </div>
                                            </div>
                                            <div class="js-form-message form-group mb-3 row">
                                                <div class="col-md-4 col-lg-3">
                                                    <label for="descriptionTextarea" class="form-label">Your Review</label>
                                                </div>
                                                <div class="col-md-8 col-lg-9">
                                                    <textarea class="form-control" rows="3" id="descriptionTextarea"
                                                        data-msg="Please enter your message." data-error-class="u-has-error"
                                                        data-success-class="u-has-success" name="description"></textarea>
                                                </div>
                                            </div>
                                            <div class="js-form-message form-group mb-3 row">
                                                <div class="col-md-4 col-lg-3">
                                                    <label for="inputName" class="form-label">Name <span
                                                            class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-md-8 col-lg-9">
                                                    <input type="text" class="form-control" name="name" id="inputName"
                                                        aria-label="Alex Hecker" required data-msg="Please enter your name."
                                                        data-error-class="u-has-error" data-success-class="u-has-success"
                                                        value="{{ Auth::user() ? Auth::user()->name : '' }}">
                                                </div>
                                            </div>
                                            <div class="js-form-message form-group mb-3 row">
                                                <div class="col-md-4 col-lg-3">
                                                    <label for="emailAddress" class="form-label">Email <span
                                                            class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-md-8 col-lg-9">
                                                    <input type="email" class="form-control" name="email" id="emailAddress"
                                                        aria-label="alexhecker@pixeel.com" required
                                                        data-msg="Please enter a valid email address."
                                                        data-error-class="u-has-error" data-success-class="u-has-success"
                                                        value="{{ Auth::user() ? Auth::user()->email : '' }}">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="offset-md-4 offset-lg-3 col-auto">
                                                    <button type="submit"
                                                        class="btn btn-primary-dark btn-wide transition-3d-hover">Add
                                                        Review</button>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- End Form -->
                                    </div>
                                </div>
                                <!-- Review -->
                                @foreach ($product->reviews()->where('approved',1)->get() as $review)

                                    <div class="border-bottom border-color-1 pb-4 mb-4">
                                        <!-- Review Rating -->
                                    <div class="showRating" data-rating="{{$review->rating}}"></div>
                                        

                                        <!-- End Review Rating -->

                                        <p class="text-gray-90">{{ Str::ucfirst($review->description) }}</p>

                                        <!-- Reviewer -->
                                        <div class="mb-2">
                                            <strong>{{ $review->name }}</strong>
                                            <span class="font-size-13 text-gray-23">- {{ $review->created_at }}</span>
                                        </div>
                                        <!-- End Reviewer -->
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('frontend.layouts.partials.brand')

    </main>
    <!-- ========== END MAIN CONTENT ========== -->
@endsection
@section('js')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
    $(function(){
       $('#sendRfq').click(function(event){
           event.preventDefault();
            if(!"{{Auth::guard('buyer')->check()}}") {
                swal('Attention!', 'You must be logged in as a buyer to send an RFQ to seller', 'info');
            }
            else
            {
                window.location.href = "{{ route('singlerfqs', $product->id) }}"; 
            }
            
       });
       $('#raty').raty({
           'path' : "{{asset('app-assets/images')}}",
           'score': 1,
           click: function(score,event){
               $('#rating').val(score);
           }
       });
       
       $('.showRating').each(function(){
           var score = $(this).attr('data-rating');
       $(this).raty({
           'readOnly': true,
           'path' : "{{asset('app-assets/images')}}",
           'score': score,
           
       });    
       })
       
    });
</script>
@endsection