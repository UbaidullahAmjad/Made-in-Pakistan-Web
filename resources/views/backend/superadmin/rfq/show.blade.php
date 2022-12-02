@extends('backend.superadmin.layout.app')
@section('contents')
    <div class="row">
        <div class="col-xl-4 col-md-6 col-sm-12">
            <div class="card" style="height: 598.5px;">
                <div class="card-content">
                    <div class="card-body">
                        <h4 class="card-title">Requested By</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                    </div>

                    <div class="card-body">
                        <h2>Buyer Name</h2>
                        <h3>{{ $rfq->buyer->name }}</h3>
                        <h2>Buyer Email</h2>
                        <h3>{{ $rfq->buyer->email }}</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 col-sm-12">
            <div class="card" style="height: 598.5px;">
                <div class="card-content">
                    <div class="card-body">
                        <h4 class="card-title">Requested From</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                    </div>

                    <div class="card-body">
                        <h2>Seller Name</h2>
                        <h3>{{ $rfq->seller->name }}</h3>
                        <h2>Seller Email</h2>
                        <h3>{{ $rfq->seller->email }}</h3>
                        <h2>Seller Company</h2>
                        <h3>{{ $rfq->seller->company->nameOfCompany }}</h3>
                        <h2>Seller Company Mobile</h2>
                        <h3>{{ $rfq->seller->company->headOfficeMobile }}</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 col-sm-12">
            <div class="card" style="height: 598.5px;">
                <div class="card-content">
                    <div class="card-body">
                        <h4 class="card-title">Qoutation Description</h4>

                    </div>

                    <div class="card-body">
                        <p>{{ $rfq->content }}</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 col-sm-12">
            <div class="card" style="height: 598.5px;">
                <div class="card-content">
                    <div class="card-body">
                        <h4 class="card-title">Product Requested</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <td>Requested Quantity</td>
                                <td>{{ $rfq->qty }}</td>
                            </tr>
                            <tr>
                                <td>Product Name</td>
                                <td>{{ $rfq->products->name }}</td>
                            </tr>
                            <tr>
                                <td>Product Category</td>
                                <td>{{ $rfq->products->subcategory->name }}</td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <img 
                                    class="d-block mx-auto"
                                    width="100"
                                    height="100"
                                    src="{{ asset('product-images/'.$rfq->products->pictures()->where('thumbnail', 1)->first()->url) }}" /></td>
                            </tr>
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="col-lg-12">
            <div class="card">
                <div class="card-header"></div>
                <div class="card-content">
                    <div class="card-body">

                    </div>
                </div>

            </div>
        </div> --}}
    </div>

@endsection
