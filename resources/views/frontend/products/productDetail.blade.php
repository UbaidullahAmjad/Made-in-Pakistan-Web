@extends('frontend.layouts.app')
@section('content')
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
                                <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">{{$product->name}}</li>
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
                                <div class="js-slide">
                                    <img class="img-fluid" src="../../assets/img/720X660/img1.jpg" alt="Image Description">
                                </div>
                                <div class="js-slide">
                                    <img class="img-fluid" src="../../assets/img/720X660/img2.jpg" alt="Image Description">
                                </div>
                                <div class="js-slide">
                                    <img class="img-fluid" src="../../assets/img/720X660/img3.jpg" alt="Image Description">
                                </div>
                                <div class="js-slide">
                                    <img class="img-fluid" src="../../assets/img/720X660/img4.jpg" alt="Image Description">
                                </div>
                                <div class="js-slide">
                                    <img class="img-fluid" src="../../assets/img/720X660/img5.jpg" alt="Image Description">
                                </div>
                            </div>

                            <div id="sliderSyncingThumb" class="js-slick-carousel u-slick u-slick--slider-syncing u-slick--slider-syncing-size u-slick--gutters-1 u-slick--transform-off"
                                data-infinite="true"
                                data-slides-show="5"
                                data-is-thumbs="true"
                                data-nav-for="#sliderSyncingNav">
                                <div class="js-slide" style="cursor: pointer;">
                                    @foreach ($product->images as $image )
                                    <img class="img-fluid" src="{{ Storage::url($image->url) }}" alt="Image Description">    
                                    @endforeach
                                    
                                </div>
                                <div class="js-slide" style="cursor: pointer;">
                                    <img class="img-fluid" src="../../assets/img/720X660/img2.jpg" alt="Image Description">
                                </div>
                                <div class="js-slide" style="cursor: pointer;">
                                    <img class="img-fluid" src="../../assets/img/720X660/img3.jpg" alt="Image Description">
                                </div>
                                <div class="js-slide" style="cursor: pointer;">
                                    <img class="img-fluid" src="../../assets/img/720X660/img4.jpg" alt="Image Description">
                                </div>
                                <div class="js-slide" style="cursor: pointer;">
                                    <img class="img-fluid" src="../../assets/img/720X660/img5.jpg" alt="Image Description">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-4 mb-md-6 mb-lg-0">
                            <div class="mb-2">
                                <a href="#" class="font-size-12 text-gray-5 mb-2 d-inline-block">Headphones</a>
                                <h2 class="font-size-25 text-lh-1dot2">{{$product->name}}</h2>
                                <div class="mb-2">
                                    <a class="d-inline-flex align-items-center small font-size-15 text-lh-1" href="#">
                                        <div class="text-warning mr-2">
                                            <small class="fas fa-star"></small>
                                            <small class="fas fa-star"></small>
                                            <small class="fas fa-star"></small>
                                            <small class="fas fa-star"></small>
                                            <small class="far fa-star text-muted"></small>
                                        </div>
                                        <span class="text-secondary font-size-13">({{$reviews->count()}} customer reviews)</span>
                                    </a>
                                </div>
                                <a href="#" class="d-inline-block max-width-150 ml-n2 mb-2">
                                    @foreach ($product->images as $image)
                                        
                                    <img class="img-fluid" src="{{ Storage::url($image->url) }}" alt="Image Description">
                                    @endforeach
                                    </a>
                                <div class="mb-2">
                                    <ul class="font-size-14 pl-3 ml-1 text-gray-110">
                                        <li>bilawal1</li>
                                        <li>Android 4.4 KitKat OS</li>
                                        <li>1.4 GHz Quad Core™ Processor</li>
                                        <li>20 MP Electro and 28 megapixel CMOS rear camera</li>
                                    </ul>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                                <p><strong>SKU</strong>: FW511948218</p>
                            </div>
                        </div>
                        <div class="mx-md-auto mx-lg-0 col-md-6 col-lg-4 col-xl-3">
                            <div class="mb-2">
                                <div class="card p-5 border-width-2 border-color-1 borders-radius-17">
                                    <div class="text-gray-9 font-size-14 pb-2 border-color-1 border-bottom mb-3">Availability: <span class="text-green font-weight-bold">26 in stock</span></div>
                                    <div class="mb-3">
                                        <div class="font-size-36">{{$product->price}}</div>
                                    </div>
                                    <div class="mb-3">
                                        <h6 class="font-size-14">Quantity</h6>
                                        <!-- Quantity -->
                                        <div class="border rounded-pill py-1 w-md-60 height-35 px-3 border-color-1">
                                            <div class="js-quantity row align-items-center">
                                                <div class="col">
                                                    <input class="js-result form-control h-auto border-0 rounded p-0 shadow-none" type="text" value="1">
                                                </div>
                                                <div class="col-auto pr-1">
                                                    <a class="js-minus btn btn-icon btn-xs btn-outline-secondary rounded-circle border-0" href="javascript:;">
                                                        <small class="fas fa-minus btn-icon__inner"></small>
                                                    </a>
                                                    <a class="js-plus btn btn-icon btn-xs btn-outline-secondary rounded-circle border-0" href="javascript:;">
                                                        <small class="fas fa-plus btn-icon__inner"></small>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Quantity -->
                                    </div>
                                    <div class="mb-3">
                                        <h6 class="font-size-14">Color</h6>
                                        <!-- Select -->
                                        <select class="js-select selectpicker dropdown-select btn-block col-12 px-0"
                                            data-style="btn-sm bg-white font-weight-normal py-2 border">
                                            <option value="one" selected>White with Gold</option>
                                            <option value="two">Red</option>
                                            <option value="three">Green</option>
                                            <option value="four">Blue</option>
                                        </select>
                                        <!-- End Select -->
                                    </div>
                                    <div class="mb-2 pb-0dot5">
                                        <form action="{{route('multiple.products.rfq', $product)}}" method="post"> 
                                        @csrf
                                            <button type="submit" class="btn btn-block btn-primary-dark"><i class="ec ec-add-to-cart mr-2 font-size-20"></i> Inquiry Basket</button>
                                        </form>
                                    </div>
                                    <div class="mb-3">
                                        <form method="post" action="{{route('singlerfq', $product)}}">
                                            @csrf
                                            <button type="submit" class="btn btn-block btn-dark">SEND RFQ</button>
                                        </form>
                                        
                                    </div>
                                    <div class="flex-content-center flex-wrap">
                                        <a href="#" class="text-gray-6 font-size-13 mr-2"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                        <a href="#" class="text-gray-6 font-size-13 ml-2"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
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
                        <div class="bg-white pt-4 pb-6 px-xl-11 px-md-5 px-4 mb-6">
                            <div id="Accessories" class="mx-md-2">
                                <div class="position-relative mb-6">
                                    <ul class="nav nav-classic nav-tab nav-tab-lg justify-content-xl-center flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble border-lg-down-bottom-0 pb-1 pb-xl-0 mb-n1 mb-xl-0">
                                        <li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
                                            <a class="nav-link active" href="#Accessories">
                                                <div class="d-md-flex justify-content-md-center align-items-md-center">
                                                    Accessories
                                                </div>
                                            </a>
                                        </li>
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
                                            <a class="nav-link" href="#Reviews">
                                                <div class="d-md-flex justify-content-md-center align-items-md-center">
                                                    Reviews
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mx-md-2 pt-1">
                                    <div class="row no-gutters">
                                        <div class="col mb-6 mb-md-0">
                                            <ul class="row list-unstyled products-group no-gutters border-bottom border-md-bottom-0">
                                                <li class="col-4 col-md-4 col-xl-2gdot5 product-item remove-divider-sm-down border-0">
                                                    <div class="product-item__outer h-100">
                                                        <div class="remove-prodcut-hover product-item__inner px-xl-4 p-3">
                                                            <div class="product-item__body pb-xl-2">
                                                                <div class="mb-2 d-none d-md-block"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                                <h5 class="mb-1 product-item__title d-none d-md-block"><a href="#" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                                <div class="mb-2">
                                                                    <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                                                </div>
                                                                <div class="flex-center-between mb-1 d-none d-md-block">
                                                                    <div class="prodcut-price">
                                                                        <div class="text-gray-100">$685,00</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-4 col-md-4 col-xl-2gdot5 product-item remove-divider-sm-down">
                                                    <div class="product-item__outer h-100">
                                                        <div class="remove-prodcut-hover add-accessories product-item__inner px-xl-4 p-3">
                                                            <div class="product-item__body pb-xl-2">
                                                                <div class="mb-2 d-none d-md-block"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                                <h5 class="mb-1 product-item__title d-none d-md-block"><a href="#" class="text-blue font-weight-bold">Tablet White EliteBook Revolve 810 G2</a></h5>
                                                                <div class="mb-2">
                                                                    <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img2.jpg" alt="Image Description"></a>
                                                                </div>
                                                                <div class="flex-center-between mb-1 d-none d-md-block">
                                                                    <div class="prodcut-price d-flex align-items-center position-relative">
                                                                        <ins class="font-size-20 text-red text-decoration-none">$1999,00</ins>
                                                                        <del class="font-size-12 tex-gray-6 position-absolute bottom-100">$2 299,00</del>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-4 col-md-4 col-xl-2gdot5 product-item remove-divider-sm-down remove-divider">
                                                    <div class="product-item__outer h-100">
                                                        <div class="remove-prodcut-hover add-accessories product-item__inner px-xl-4 p-3">
                                                            <div class="product-item__body pb-xl-2">
                                                                <div class="mb-2 d-none d-md-block"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                                <h5 class="mb-1 product-item__title d-none d-md-block"><a href="#" class="text-blue font-weight-bold">Purple Solo 2 Wireless</a></h5>
                                                                <div class="mb-2">
                                                                    <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img3.jpg" alt="Image Description"></a>
                                                                </div>
                                                                <div class="flex-center-between mb-1 d-none d-md-block">
                                                                    <div class="prodcut-price">
                                                                        <div class="text-gray-100">$685,00</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="form-check pl-4 pl-md-0 ml-md-4 mb-2 pb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">
                                                <input class="form-check-input" type="checkbox" value="" id="inlineCheckbox1" checked disabled>
                                                <label class="form-check-label mb-1" for="inlineCheckbox1">
                                                    <strong>This product: </strong> {{$product->name}} - <span class="text-red font-size-16">$35.00</span>
                                                </label>
                                            </div>
                                            <div class="form-check pl-4 pl-md-0 ml-md-4 mb-2 pb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option1" checked>
                                                <label class="form-check-label mb-1 text-blue" for="inlineCheckbox2">
                                                    <span class="text-decoration-on cursor-pointer-on">Universal Headphones Case in Black</span> - <span class="text-red font-size-16">$159.00</span>
                                                </label>
                                            </div>
                                            <div class="form-check pl-4 pl-md-0 ml-md-4 mb-2 pb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option2" checked>
                                                <label class="form-check-label mb-1 text-blue" for="inlineCheckbox3">
                                                    <span class="text-decoration-on cursor-pointer-on">Headphones USB Wires</span> - <span class="text-red font-size-16">$50.00</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-auto">
                                            <div class="mr-xl-15">
                                                <div class="mb-3">
                                                    <div class="text-red font-size-26 text-lh-1dot2">$244.00</div>
                                                    <div class="text-gray-6">for 3 item(s)</div>
                                                </div>
                                                <a href="#" class="btn btn-sm btn-block btn-primary-dark btn-wide transition-3d-hover">Add all to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white pt-4 pb-6 px-xl-11 px-md-5 px-4 mb-6 overflow-hidden">
                            <div id="Description" class="mx-md-2">
                                <div class="position-relative mb-6">
                                    <ul class="nav nav-classic nav-tab nav-tab-lg justify-content-xl-center mb-6 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble border-lg-down-bottom-0 pb-1 pb-xl-0 mb-n1 mb-xl-0">
                                        <li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
                                            <a class="nav-link" href="#Accessories">
                                                <div class="d-md-flex justify-content-md-center align-items-md-center">
                                                    Accessories
                                                </div>
                                            </a>
                                        </li>
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
                                            <a class="nav-link" href="#Reviews">
                                                <div class="d-md-flex justify-content-md-center align-items-md-center">
                                                    Reviews
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mx-md-4 pt-1">
                                   {!!$product->description!!}
                                </div>
                            </div>
                        </div>
                        <div class="bg-white py-4 px-xl-11 px-md-5 px-4 mb-6">
                            <div id="Specification" class="mx-md-2">
                                <div class="position-relative mb-6">
                                    <ul class="nav nav-classic nav-tab nav-tab-lg justify-content-xl-center mb-6 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble border-lg-down-bottom-0 pb-1 pb-xl-0 mb-n1 mb-xl-0">
                                        <li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
                                            <a class="nav-link" href="#Accessories">
                                                <div class="d-md-flex justify-content-md-center align-items-md-center">
                                                    Accessories
                                                </div>
                                            </a>
                                        </li>
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
                                        @foreach($product->attributes as $attribute)    
                                        <tr>
                                                    <th class="px-4 px-xl-5 border-top-0">Weight</th>
                                                    <td class="border-top-0">{{$attribute->weight}}</td>
                                                </tr>
                                                <tr>
                                                    <th class="px-4 px-xl-5">Dimensions</th>
                                                    <td>{{$attribute->dimensions}}</td>
                                                </tr>
                                                <tr>
                                                    <th class="px-4 px-xl-5">Size</th>
                                                    <td>{{$attribute->size}}</td>
                                                </tr>
                                                <tr>
                                                    <th class="px-4 px-xl-5">color</th>
                                                    <td>{{$attribute->color}}</td>
                                                </tr>
                                                <tr>
                                                    <th class="px-4 px-xl-5">Guarantee</th>
                                                    <td>{{$attribute->gurrantee}}</td>
                                                </tr>
                                            </tbody>
                                        @endforeach
                                        </table>

                                    </div>
                                    <h3 class="font-size-18 mb-4">Technical Specifications</h3>
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <tbody>
                                                <tr>
                                                    <th class="px-4 px-xl-5 border-top-0">Brand</th>
                                                    <td class="border-top-0">Apple</td>
                                                </tr>
                                                <tr>
                                                    <th class="px-4 px-xl-5">Item Height</th>
                                                    <td>18 Millimeters</td>
                                                </tr>
                                                <tr>
                                                    <th class="px-4 px-xl-5">Item Width</th>
                                                    <td>31.4 Centimeters</td>
                                                </tr>
                                                <tr>
                                                    <th class="px-4 px-xl-5">Screen Size</th>
                                                    <td>13 Inches</td>
                                                </tr>
                                                <tr>
                                                    <th class="px-4 px-xl-5">Item Weight</th>
                                                    <td>1.6 Kg</td>
                                                </tr>
                                                <tr>
                                                    <th class="px-4 px-xl-5">Product Dimensions</th>
                                                    <td>21.9 x 31.4 x 1.8 cm</td>
                                                </tr>
                                                <tr>
                                                    <th class="px-4 px-xl-5">Item model number</th>
                                                    <td>MF841HN/A</td>
                                                </tr>
                                                <tr>
                                                    <th class="px-4 px-xl-5">Processor Brand</th>
                                                    <td>Intel</td>
                                                </tr>
                                                <tr>
                                                    <th class="px-4 px-xl-5">Processor Type</th>
                                                    <td>Core i5</td>
                                                </tr>
                                                <tr>
                                                    <th class="px-4 px-xl-5">Processor Speed</th>
                                                    <td>2.9 GHz</td>
                                                </tr>
                                                <tr>
                                                    <th class="px-4 px-xl-5">RAM Size</th>
                                                    <td>8 GB</td>
                                                </tr>
                                                <tr>
                                                    <th class="px-4 px-xl-5">Hard Drive Size</th>
                                                    <td>512 GB</td>
                                                </tr>
                                                <tr>
                                                    <th class="px-4 px-xl-5">Hard Disk Technology</th>
                                                    <td>Solid State Drive</td>
                                                </tr>
                                                <tr>
                                                    <th class="px-4 px-xl-5">Graphics Coprocessor</th>
                                                    <td>Intel Integrated Graphics</td>
                                                </tr>
                                                <tr>
                                                    <th class="px-4 px-xl-5">Graphics Card Description</th>
                                                    <td>Integrated Graphics Card</td>
                                                </tr>
                                                <tr>
                                                    <th class="px-4 px-xl-5">Hardware Platform</th>
                                                    <td>Mac</td>
                                                </tr>
                                                <tr>
                                                    <th class="px-4 px-xl-5">Operating System</th>
                                                    <td>Mac OS</td>
                                                </tr>
                                                <tr>
                                                    <th class="px-4 px-xl-5">Average Battery Life (in hours)</th>
                                                    <td>9</td>
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
                                            <a class="nav-link" href="#Accessories">
                                                <div class="d-md-flex justify-content-md-center align-items-md-center">
                                                    Accessories
                                                </div>
                                            </a>
                                        </li>
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
                                                <h3 class="font-size-18 mb-6">Based on {{$reviews->count()}} reviews</h3>
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
                                                <input type="hidden" value="{{$product->id}}" name="product_id">
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
                                    @foreach($reviews as $review)
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

                                        <p class="text-gray-90">{{$review->description}}</p>

                                        <!-- Reviewer -->
                                        <div class="mb-2">
                                            <strong>{{$review->name}}</strong>
                                            <span class="font-size-13 text-gray-23">- {{$review->updated_at->diffForHumans()}}</span>
                                        </div>
                                        <!-- End Reviewer -->
                                    </div>
                                    <!-- End Review -->
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <!-- Related products -->
                <div class="mb-6">
                    <div class="d-flex justify-content-between align-items-center border-bottom border-color-1 flex-lg-nowrap flex-wrap mb-4">
                        <h3 class="section-title mb-0 pb-2 font-size-22">Related products</h3>
                    </div>
                    <ul class="row list-unstyled products-group no-gutters">
                        <li class="col-6 col-md-3 col-xl-2gdot4-only col-wd-2 product-item">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner px-xl-4 p-3">
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
                        </li>
                        <li class="col-6 col-md-3 col-xl-2gdot4-only col-wd-2 product-item">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner px-xl-4 p-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Tablet White EliteBook Revolve 810 G2</a></h5>
                                        <div class="mb-2">
                                            <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img2.jpg" alt="Image Description"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price d-flex align-items-center position-relative">
                                                <ins class="font-size-20 text-red text-decoration-none">$1999,00</ins>
                                                <del class="font-size-12 tex-gray-6 position-absolute bottom-100">$2 299,00</del>
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
                        </li>
                        <li class="col-6 col-md-3 col-xl-2gdot4-only col-wd-2 product-item">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner px-xl-4 p-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Purple Solo 2 Wireless</a></h5>
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
                        </li>
                        <li class="col-6 col-md-3 col-xl-2gdot4-only col-wd-2 product-item remove-divider-md-lg">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner px-xl-4 p-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Smartphone 6S 32GB LTE</a></h5>
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
                        </li>
                        <li class="col-6 col-md-3 col-xl-2gdot4-only col-wd-2 product-item remove-divider-xl">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner px-xl-4 p-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Widescreen NX Mini F1 SMART NX</a></h5>
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
                        </li>
                        <li class="col-6 col-md-3 col-xl-2gdot4-only col-wd-2 product-item remove-divider-wd d-xl-none d-wd-block">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner px-xl-4 p-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Tablet White EliteBook Revolve 810 G2</a></h5>
                                        <div class="mb-2">
                                            <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img2.jpg" alt="Image Description"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price d-flex align-items-center position-relative">
                                                <ins class="font-size-20 text-red text-decoration-none">$1999,00</ins>
                                                <del class="font-size-12 tex-gray-6 position-absolute bottom-100">$2 299,00</del>
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
                        </li>
                    </ul>
                </div>
                <!-- End Related products -->
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

@stop