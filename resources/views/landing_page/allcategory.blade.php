@extends('frontend.layouts.app')
@section('title', 'Shop - Made-in-pak')
@section('contents')
<div class="col">
    <!-- Features Section -->
    <div class="">
        <!-- Tab Content -->
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade pt-2 show active" id="pills-one-example1" role="tabpanel" aria-labelledby="pills-one-example1-tab">
                <!-- <ul class="row list-unstyled products-group no-gutters"> -->
                @foreach($categorypage as $cat)
                <div class="row my-3">
                    <div class="col-2 font-size-20 font-weight-bold"><a href="{{ route('subcategories', $cat->id) }}" style="color:black">{{$cat->name}}</a>
                    </div>
                    <div class="col-10">
                        <ul class="row list-unstyled products-group no-gutters">
                            @foreach($cat->subcategory as $detail)
                            <li class="col-6 col-wd-3 col-md-2 ">
                                <div class="product-item__outer h-100">
                                    <div class="product-item__inner px-xl-4 p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a class="font-size-16 text-black font-italic font-weight-bold">
                                                    {{ $detail->name }}
                                                </a>
                                            </div>
                                            {{-- <ul class="row list-unstyled products-group no-gutters"> --}}
                                                <ul class="list-group list-group-flush">
                                                @foreach($detail->items as $prod)
                                                <li class="list-group-item">
                                                {{-- <p class="mb-2 product-item__title "> --}}
                                                    <a href="" class="text-black font-size-12">{{ $prod->name }}</a>
                                                {{-- </p> --}}
                                                </li>
                                                @endforeach
                                            </ul>
                                            <div class="flex-center-between mb-1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <hr>
                @endforeach
            </div>
        </div>
    </div>
</div>


<!-- </ul> -->
@endsection