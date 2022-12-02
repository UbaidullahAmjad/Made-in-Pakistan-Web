@extends('backend.superadmin.layout.app')
@section('contents')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3>Product Detail</h3>
                    <p>

                </div>
                <div class="card-body">
                    <div class="card-content">
                        <div class="row">
                            <h2>Generic Details</h2>
                            <div class="col-lg-6 mx-auto">
                                <table class="table table-bordered">
                                    <tr>
                                        <td>Product Name</td>
                                        <td>{{ $approval->name }}</td>

                                    </tr>
                                    <tr>
                                        <td>Product Price Range</td>
                                        <td>{{ $approval->min_price }}--{{ $approval->max_price }}
                                            {{ $approval->per_product }} </td>
                                    </tr>
                                    <tr>
                                        <td>Brand Name</td>
                                        <td>{{ $approval->brand_name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Model No</td>
                                        <td>{{ $approval->model_no }}</td>
                                    </tr>
                                    <tr>
                                        <td>Stock</td>
                                        <td>{{ $approval->qty }} {{ $approval->per_product }}</td>
                                    </tr>
                                    <tr>
                                        <td>Size</td>
                                        <td>{{ $approval->size }}</td>
                                    </tr>
                                    <tr>
                                        <td>Place of Origin</td>
                                        <td>{{ $approval->placeoforigin }}</td>
                                    </tr>
                                    <tr>
                                        <td>Shelf Life</td>
                                        <td>
                                            Days: {{ $approval->shelf_life_days }}<br>
                                            Weeks: {{ $approval->shelf_life_weeks }}<br>
                                            Months: {{ $approval->shelf_life_months }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Port</td>
                                        <td>{{ $approval->port }}</td>
                                    </tr>
                                    <tr>
                                        <td>Weight</td>
                                        <td>{{ $approval->weight }}--{{ $approval->weight_unit }}</td>
                                    </tr>
                                    <tr>
                                        <td>Type</td>
                                        <td>{{ $approval->type }}</td>
                                    </tr>
                                    <tr>
                                        <td>Style</td>
                                        <td>{{ $approval->style }}</td>
                                    </tr>
                                    <tr>
                                        <td>Supply Time</td>
                                        <td>
                                            Days: {{ $approval->supply_days }}<br>
                                            Weeks: {{ $approval->supply_weeks }}<br>
                                            Months: {{ $approval->supply_months }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Supply Availibility</td>
                                        <td>{{ $approval->supply_availibility }}</td>
                                    </tr>
                                    <tr>
                                        <td>Product Capacity</td>
                                        <td>
                                            {{ $approval->product_capacity }}
                                            /{{ $approval->capacity_per_item }}
                                            /{{ $approval->capacity_per_duration }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Payment Terms</td>
                                        <td>{{ $approval->payment_terms }}</td>
                                    </tr>


                                </table>
                            </div>

                        </div>
                        <div class="row">
                            <h2>Seller Details</h2>
                            <div class="col-lg-6 mx-auto">
                                <table class="table table-bordered">
                                    <tr>
                                        <td>Seller Name</td>
                                        <td>{{ $approval->seller->name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Seller Email</td>
                                        <td>{{ $approval->seller->email }}</td>
                                    </tr>
                                    <tr>
                                        <td>Head Office Mobile #</td>
                                        <td>{{ $approval->seller->company->headOfficeMobile }}</td>
                                    </tr>
                                    <tr>
                                        <td>Head Office LandLine #</td>
                                        <td>{{ $approval->seller->company->headOfficeLandline }}</td>
                                    </tr>
                                    <tr>
                                        <td>Company Name</td>
                                        <td>{{ $approval->seller->company->nameOfCompany }}</td>
                                    </tr>
                                    <tr>
                                        <td>Type of Company</td>
                                        <td>{{ $approval->seller->company->typesOfCompany }}</td>
                                    </tr>
                                    <tr>
                                        <td>Head Office</td>
                                        <td>{{ $approval->seller->company->headOffice }}</td>
                                    </tr>
                                    <tr>
                                        <td>Company Website</td>
                                        <td><a href="{{ $approval->seller->company->webSiteUrl }}">{{ $approval->seller->company->webSiteUrl }}</td>
                                    </tr>
                                </table>
                            </div>

                        </div>
                        <div class="row">
                            <h2>Product Description</h2>
                            <div class="col-lg-6 mx-auto">
                                {!! $approval->description !!}
                            </div>

                        </div>
                        <div class="row">
                            <h2>Packaging Details</h2>
                            <div class="col-lg-6 mx-auto">
                                {!! $approval->packaging_details !!}
                            </div>
                        </div>
                        <div class="row">
                            <h2>Product Pictures</h2>
                            <div class="col-lg-12">
                                <div style="display: flex">
                                @foreach ($approval->pictures as $picture)
                                    <img class="d-block mx-auto" 
                                    src="{{ asset('product-images/'.$picture->url) }}" 
                                    width="200" height="200"
                                    />

                                @endforeach
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <h2>Product Thumbnail</h2>
                            <div class="col-lg-12 p-5">
                                <a 
                                href="{{ asset('product-images/'.$approval->pictures()->where('thumbnail', 1)->first()->url) }}">
                                <img class="d-block mx-auto" src="{{ asset('product-images/'.$approval->pictures()->where('thumbnail', 1)->first()->url) }}" width="150" height="150" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
