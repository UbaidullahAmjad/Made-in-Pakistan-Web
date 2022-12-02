@extends('frontend.layouts.app')
@section('title', '| Company Profile')
@section('css')
<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
<style>
    body {
        font-family: 'Open Sans', sans-serif;
    }

    .fb-profile img.fb-image-lg {
        z-index: 0;
        width: 100%;
        margin-bottom: 10px;
    }

    .fb-image-profile {
        margin: -90px 10px 0px 50px;
        z-index: 9;
        width: 20%;
    }

    @media (max-width:768px) {

        .fb-profile-text>h1 {
            font-weight: 700;
            font-size: 16px;
        }

        .fb-image-profile {
            margin: -45px 10px 0px 25px;
            z-index: 9;
            width: 20%;
        }
    }
</style>
<style>
    * {
        box-sizing: border-box
    }

    /* body {
            font-family: "Lato", sans-serif;
        } */

    /* Style the tab */
    .tab {
        float: left;
        background-color: white;
        width: 25%;
        height: 300px;
    }

    /* Style the buttons inside the tab */
    .tab button {
        display: block;
        background-color: inherit;
        color: black;
        padding: 22px 16px;
        width: 100%;
        border: none;
        outline: none;
        text-align: left;
        cursor: pointer;
        transition: 0.3s;
        font-size: 17px;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
        background-color: lightgreen;
    }

    /* Create an active/current "tab button" class */
    .tab button.active {
        background-color: green;
    }

    /* Style the tab content */
    /* .tabcontent {
        float: left;
        padding: 10px 12px;
        border: 1px solid #ccc;
        width: 70%;
        border-left: none;
        height: 300px;
    } */
</style>

<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
@endsection
@section('contents')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="fb-profile">
                <img align="left" class="fb-image-lg" src="http://lorempixel.com/850/280/nightlife/5/" alt="Profile image example" />
                <img align="left" class="fb-image-profile thumbnail" src="http://lorempixel.com/180/180/people/9/" alt="Profile image example" />
                <div class="fb-profile-text">
                    <h1>{{ $company->name }}</h1>
                    {{-- <p>Girls just wanna go fun.</p> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="d-none d-xl-block col-xl-3 col-wd-2gdot5">
            <div class="mb-6 border border-width-2 border-color-3 borders-radius-6">
                <!-- List -->
                <!-- End List -->
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 overflow-auto">
            <div class="tab" style="border:forestgreen">
                <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Company Profile</button>
                <button class="tablinks" onclick="openCity(event, 'Paris')">Product</button>
                <button class="tablinks" onclick="openCity(event, 'Tokyo')">Review</button>
            </div>

            <div id="London" class="tabcontent ">
            <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" id="horz-layout-colored-controls">Company Details</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collpase show">
                    <div class="card-body">
                        <div style="width: 80%;" class="mx-auto">
                        <table class="table table-border table-hover">
                            <tr><td colspan="2"><h3>General Information</h3></td></tr>
                            <tr><td>Company Name:</td><td>{{ $company->company->nameOfCompany }}</td></tr>
                            <tr><td>Type of Company:</td><td>{{ $company->company->typesOfCompany }} </td></tr>
                            <tr><td>CEO Name:</td><td>{{ $company->company->ceoname }} </td></tr>
                            <tr><td>Year Establshed:</td><td>{{ $company->company->establishmentYear }} </td></tr>
                            <tr><td>Total Employees:</td><td>{{ $company->company->totalEmployee }} </td></tr>
                            <tr><td>Company Export:</td><td>{{ $company->company->companyExport }} </td></tr>
                            <tr><td colspan="2"><h3>Contact Information</h3></tr>
                            <tr><td>Head Office:</td><td>{{ $company->company->headOffice }} </td></tr>
                            <tr><td>Regional Office 1:</td><td>{{ $company->company->regionalOffice1 }} </td></tr>
                            <tr><td>Regional Office 2:</td><td>{{ $company->company->regionalOffice2 }} </td></tr>
                            <tr><td>Regional Office 3:</td><td>{{ $company->company->regionalOffice3 }} </td></tr>
                            <tr><td>Factory Address:</td><td>{{ $company->company->factoryAddress1 }} </td></tr>
                            <tr><td>Factory Address 1:</td><td>{{ $company->company->factoryAddress2 }} </td></tr>
                            <tr><td>Factory Address 2:</td><td>{{ $company->company->factoryAddress3 }} </td></tr>
                            <tr><td>GPS Coordinates:</td><td>{{ $company->company->GpsOfFactory }} </td></tr>
                            <tr><td>Head Office Landline #:</td><td>{{ $company->company->headOfficeLandline }} </td></tr>
                            <tr><td>Head Office Mobile #:</td><td>{{ $company->company->headOfficeMobile }} </td></tr>
                            <tr><td>Email:</td><td>{{ $company->company->email }} </td></tr>
                            <tr><td>Website Url:</td><td>{{ $company->company->webSiteUrl }} </td></tr>
                            <tr><td>Fax:</td><td>{{ $company->company->faxNumber }} </td></tr>
                            <tr><td colspan="2"><h3>Legal Information</h3></tr>
                            <tr><td>Nearest Ports:</td><td>{{ $company->company->nearestPorts }} </td></tr>
                            <tr><td>Port Name:</td><td>{{ $company->company->portName }} </td></tr>
                            <tr><td>Forigen Office:</td><td>{{ $company->company->forigenOffice }} </td></tr>
                            <tr><td>NTN No:</td><td>{{ $company->company->ntnNo }} </td></tr>
                            <tr><td>GST No:</td><td>{{ $company->company->gstNo }} </td></tr>
                            <tr><td>WEBOC ID:</td><td>{{ $company->company->webocID }} </td></tr>
                            <tr><td>Filler Upto Date:</td><td>{{ $company->company->fillerUpToDate }} </td></tr>
                            <tr><td>Chamber of Commerece:</td><td>{{ $company->company->chamberOfCommerece }} </td></tr>
                            
                            <tr><td>Pro Tax Certificate:</td><td>{{ $company->company->proTexCertificate }} </td></tr>
                            <tr><td>Annual Turnover.:</td><td>{{ $company->company->annualRs }} </td></tr>
                            <tr><td>Bank Name :</td><td>{{ $company->company->bankName }} </td></tr>
                            <tr><td>Bank Branch City :</td><td>{{ $company->company->bankBranchCity }} </td></tr>
                            <tr><td>Bank Branch Code :</td><td>{{ $company->company->bankBranchCode }} </td></tr>
                            <tr><td>Account Number :</td><td>{{ $company->company->accountNumber }} </td></tr>
                            <tr><td>Bank Statement :</td><td>{{ $company->company->bankStatename }} </td></tr>
                        </table>
                        </div>

                        
                    </div>
                </div>
            </div>
        </div>
    </div>
            </div>
            <div id="Paris" class="tabcontent">
                <ul class="row list-unstyled products-group no-gutters">
                    @foreach ($products as $product)
                    <li class="col-6 col-md-3 col-wd-2gdot4 product-item">
                        <div class="product-item__outer h-100">
                            <div class="product-item__inner px-xl-4 p-3">
                                <div class="product-item__body pb-xl-2">
                                    <div class="mb-2"><a href="" class="font-size-12 text-gray-5">Speakers</a></div>
                                    <h5 class="mb-1 product-item__title"><a href="{{ route('single.product', $product->id ) }}" class="text-blue font-weight-bold">{{ $product->name }}</a></h5>
                                    @foreach ($product->pictures()->where('thumbnail',1)->get() as $image)
                                    <a href="{{url('productDetail',$product->id)}}" class="d-block text-center"><img class="img-fluid" src="{{ asset('product-images/'.$image->url) }}" alt="Image Description"></a>
                                    @endforeach
                                    <div class="flex-center-between mb-1">
                                        <div class="prodcut-price">
                                            <div class="text-gray-100">Rs.&nbsp;{{ $product->min_price }}-{{ $product->max_price }}
                                            </div>
                                        </div>
                                         @if(Auth::guard('buyer')->check()) 
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="{{url('basket',['product_id' => $product->id, 'buyer_id' => Auth::guard('buyer')->id()])}}" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                @else
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a style="color:#ffffff" onclick="myFunction()" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="product-item__footer">
                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                    <a href="" class="text-gray-6 font-size-13"> {{$product->minimum_order_qty}}</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div id="Tokyo" class="tabcontent" >
                <h3 style="padding-left: 300px;">Review</h3>
                <div class="mb-4 px-lg-4" >
                    <!-- Review -->
                    <div class="border-bottom border-color-1 pb-4 mb-4">
                        <!-- Review Rating -->
                        <div style="padding-left: 10px;" class="d-flex justify-content-between align-items-center text-secondary font-size-1 mb-2">
                            <div class="text-warning text-ls-n2 font-size-16" style="width: 80px;">
                                <small class="fas fa-star"></small>
                                <small class="fas fa-star"></small>
                                <small class="fas fa-star"></small>
                                <small class="far fa-star text-muted"></small>
                                <small class="far fa-star text-muted"></small>
                            </div>
                        </div>
                        <!-- End Review Rating -->
                        
                        <p class="text-gray-90" style="padding-left: 275px;">
                            {{-- {{ $review }}     --}}
                        </p>

                        <!-- Reviewer -->
                        <div class="mb-2" style="padding-left: 275px;">
                            {{-- <strong>John Doe</strong> --}}
                            {{-- <span class="font-size-13 text-gray-23">- April 3, 2019</span> --}}
                        </div>
                        <!-- End Reviewer -->    
                        
                        
                    </div>
                </div>
            </div>
            <script>
                function openCity(evt, cityName) {
                    var i, tabcontent, tablinks;
                    tabcontent = document.getElementsByClassName("tabcontent");
                    for (i = 0; i < tabcontent.length; i++) {
                        tabcontent[i].style.display = "none";
                    }
                    tablinks = document.getElementsByClassName("tablinks");
                    for (i = 0; i < tablinks.length; i++) {
                        tablinks[i].className = tablinks[i].className.replace(" active", "");
                    }
                    document.getElementById(cityName).style = "display:block";
                    // document.getElementById(cityName).classList.add("overflow-auto");
                    evt.currentTarget.className += " active";
                }

                // Get the element with id="defaultOpen" and click on it
                document.getElementById("defaultOpen").click();
            </script>
        </div>
    </div>
</div>
@endsection
<!-- /container -->