@extends('frontend.layouts.app')
@section('title', 'Shop - Made-in-pak')
@section('contents')

<main id="content" role="main" class="cart-page">
            <!-- breadcrumb -->
            <div class="bg-gray-13 bg-md-transparent">
                <div class="container">
                    <!-- breadcrumb -->
                    <div class="my-md-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                                <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">Cart</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- End breadcrumb -->
                </div>
            </div>
            <!-- End breadcrumb -->

            <div class="container">
                <div class="mb-4">
                    <h1 class="text-center">Cart</h1>
                </div>
                <div class="mb-10 cart-table">
                    <form class="mb-4" action="#" method="post">
                        <table class="table" cellspacing="0">
                            <thead>
                                <tr>
                                    <th class="product-remove">&nbsp;</th>
                                    <th class="product-thumbnail">&nbsp;</th>
                                    <th class="product-name">Product</th>
                                    <th class="product-price">Price</th>
                                    <!--<th class="product-quantity w-lg-15">Quantity</th>-->
                                    <th class="product-subtotal">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $pro)
                                <tr class="">
                                    <td class="text-center">
                                        <a href="{{url('detetecartitem',['product_id' => $pro->id, 'buyer_id' => Auth::guard('buyer')->id()])}}" class="text-gray-32 btn font-size-26">×</a>
                                    </td>
                                    <td class="d-none d-md-table-cell">
                                        <a href="#"><img class="img-fluid max-width-100 p-1 border border-color-1" @foreach($pro->pictures as $image) src="{{asset('/product-images/'.$image->url)}}" @endforeach alt="Image Description"></a>
                                    </td>

                                    <td data-title="Product">
                                        <a href="#" class="text-gray-90">{{$pro->name}}</a>
                                    </td>

                                    <td data-title="Price">
                                        <span class="">{{$pro->min_price}}-{{$pro->max_price}}</span>
                                    </td>

                                    <td data-title="Quantity">
                                        <a href="{{route('single.product', $pro->id)}}" class="btn btn-success" style="background-color:#68DB44">View Detail</a>
                                        <!-- Quantity -->
                                        <!-- <div class="border rounded-pill py-1 width-122 w-xl-80 px-3 border-color-1">
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
                                            </div> -->
                                        <!-- </div> -->
                                        <!-- End Quantity -->
                                    </td>

                                    
                                </tr>
                                @endforeach
                                
                               
                            </tbody>
                        </table>
                    </form>
                </div>
                
            </div>
        </main>

@endsection