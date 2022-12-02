@extends('frontend.layouts.app')
@section('header')
    <!-- ========== HEADER ========== -->
    <header id="header" class="u-header u-header-left-aligned-nav">
        <div class="u-header__section">
            <!-- Topbar -->
            @include('frontend.layouts.partials.topbar')
            <!-- End Topbar -->

            <!-- Logo and Menu -->
            @include('frontend.layouts.partials.horizontalmenu')
            <!-- End Logo and Menu -->

            <!-- Vertical-and-Search-Bar -->
            @include('frontend.layouts.partials.searchbar', ['categories' => $category , 'subcategories' => $subcategories])
            <!-- End Vertical-and-secondary-menu -->
        </div>
    </header>
    <!-- ========== END HEADER ========== -->
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
                            <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a
                                    href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">
                                @if(isset($category))
                                {{ $category->name }}
                                @endif
                            </li>
                        </ol>
                    </nav>
                </div>
                <!-- End breadcrumb -->
            </div>
        </div>
        <!-- End breadcrumb -->

        <div class="container">
            <div class="row">
                <div class="d-none d-xl-block col-xl-3 col-wd-2gdot5">
                    <div class="mb-8 border border-width-2 border-color-3 borders-radius-6">
                        <!-- List -->
                        <ul id="sidebarNav" class="list-unstyled mb-0 sidebar-navbar">
                            <li>
                                <a class="dropdown-toggle dropdown-toggle-collapse dropdown-title" href="javascript:;"
                                    role="button" data-toggle="collapse" aria-expanded="false"
                                    aria-controls="sidebarNav1Collapse" data-target="#sidebarNav1Collapse">
                                    Show All Categories
                                </a>

                                <div id="sidebarNav1Collapse" class="collapse" data-parent="#sidebarNav">
                                    <ul id="sidebarNav1" class="list-unstyled dropdown-list">
                                        <!-- Menu List -->
                                        @foreach ($subcategories as $item)
                                            <li><a class="dropdown-item" href="{{ $item->id }}">{{ $item->name }}<span
                                                        class="text-gray-25 font-size-12 font-weight-normal">
                                                        {{ $item->count() }}</span></a></li>
                                        @endforeach


                                        <!-- End Menu List -->
                                    </ul>
                                </div>
                            </li>
                            <li>
                                @if(isset($category))
                                <a class="dropdown-current active" href="#">{{ $category->name }}</a>
                                @endif

                                <ul class="list-unstyled dropdown-list">
                                    <!-- Menu List -->
                                    @foreach ($subcategories as $item)

                                        <li><a class="dropdown-item" href="#">{{ $item->name }}<span
                                                    class="text-gray-25 font-size-12 font-weight-normal">
                                                    {{ $item->count() }}</span></a>
                                        </li>
                                        @if ($loop->index + 1 == 7)
                                            @break
                                        @endif

                                    @endforeach

                                    <!-- End Menu List -->
                                </ul>
                            </li>
                        </ul>
                        <!-- End List -->
                    </div>
                    @include('frontend.shop.partials.latest_product')
                </div>
                <div class="col-xl-9 col-wd-9gdot5">
                    <div
                        class="d-flex justify-content-between align-items-center border-bottom border-color-1 flex-lg-nowrap flex-wrap mb-4">
                        @if(isset($category))
                        <h3 class="section-title section-title__full mb-0 pb-2 font-size-22">{{ $category->name }}</h3>
                        @endif
                    </div>
                    <ul class="row list-unstyled products-group no-gutters mb-6">
                        @foreach ($subcategories as $category)
                            <li
                                class="col-6 col-md-3 product-item {{ $loop->index + (1 % 4) == 0 ? '' : 'remove-divider' }}">
                                <div class="product-item__outer h-100 w-100">
                                    <div class="product-item__inner px-xl-4 p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2">
                                                
                                                
                                                <a href="{{ route('products', ['cat_id' => $category->id]) }}"
                                                    class="d-block text-center">
                                                    <img class="img-fluid" 
                                                    
                                                    @foreach($category->images as $img)
                                                    src="{{asset($img->url)}}" 
                                                    @endforeach
                                                    alt="Image Description"></a>
                                                        
                                            </div>
                                            <h5 class="text-center mb-1 product-item__title"><a
                                                    href="{{ route('products', ['cat_id' => $category->id]) }}"
                                                    class="font-size-15 text-gray-90">{{ $category->name }}</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                    <!-- product for you -->
                    <div class="mb-3">
                        <div
                            class="d-flex border-bottom border-color-1 flex-lg-nowrap flex-wrap border-md-down-top-0 border-sm-bottom-0 mb-2 mb-md-0">
                            <h3 class="section-title section-title__full mb-0 pb-2 font-size-22">Product for you</h3>
                        </div>
                    </div>
                    <!-- Tab Prodcut -->
                    <div class="col">
                        <!-- Features Section -->
                        <div class="">
                            <!-- Tab Content -->
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade pt-2 show active" id="pills-one-example1" role="tabpanel"
                                    aria-labelledby="pills-one-example1-tab">



                                    <ul class="row list-unstyled products-group no-gutters">
                                        @foreach ($productforyou as $prod)
                                            @foreach ($prod->items as $product)
                                                @foreach ($product->products as $pro)

                                                    <li class="col-6 col-wd-3 col-md-3 product-item">
                                                        <div class="product-item__outer h-100">
                                                            <div class="product-item__inner px-xl-4 p-3">
                                                                <div class="product-item__body pb-xl-2">
                                                                    <div class="mb-2"><a
                                                                            href="{{ route('single.product', $pro->id) }}"
                                                                            class="font-size-12 text-gray-5">{{ $pro->items->name }}</a>
                                                                    </div>
                                                                    <h5 class="mb-1 product-item__title"><a
                                                                            href="{{ route('single.product', $pro->id) }}"
                                                                            class="text-blue font-weight-bold">{{ $pro->name }}</a>
                                                                    </h5>
                                                                    <div class="mb-2">
                                                                        <a href="{{ route('single.product', $pro->id) }}"
                                                                            class="d-block text-center"><img
                                                                                class="img-fluid" @foreach ($pro->pictures as $image)
                                                                            src="{{ asset('/product-images/' . $image->url) }}"
                                                                            @endforeach
                                                                                alt="Image Description"></a>
                                </div>
                                <div class="flex-center-between mb-1">
                                    <div class="prodcut-price">
                                        <div class="text-gray-100">Rs. &nbsp;
                                            {{ $pro->min_price }}-{{ $pro->max_price }}</div>
                                    </div>
                                     @if(Auth::guard('buyer')->check()) 
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="{{url('basket',['product_id' => $pro->id, 'buyer_id' => Auth::guard('buyer')->id()])}}" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
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
                                    <a href="" class="text-gray-6 font-size-13"><i
                                            class=" mr-1 font-size-15"></i>{{$pro->minimum_order_qty}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    </li>
                    @endforeach
                    @endforeach
                    @endforeach

                    </ul>
                </div>
            </div>
        </div>
        </div>
        </div>
        <!-- End product  for you -->
        </div>
        </div>
        
    </main>
    <br><br><br><br>
@endsection
