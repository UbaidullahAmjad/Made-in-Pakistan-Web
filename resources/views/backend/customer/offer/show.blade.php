@extends('backend.customer.layout.app')
@section('contents')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Basic Tables</h4> <a class="heading-elements-toggle"><i
                            class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">
                        <h1>
                            Offer Details
                        </h1>
                        <table class="table table-bordered p-5">
                            <tr>
                                <td>Offer ID</td>
                                <td>{{ $offeritem->id }}</td>
                            </tr>
                            <tr>
                                <td>Product Name</td>
                                <td>{{ $offeritem->product_name }}</td>
                            </tr>
                            <tr>
                                <td>Qouated Quantity</td>
                                <td>{{ $offeritem->quantity }}</td>
                            </tr>
                            <tr>
                                <td>Qouated Price</td>
                                <td>{{ $offeritem->price }}</td>
                            </tr>
                            <tr>
                                <td>Offered On</td>
                                <td>{{ $offeritem->created_at }}</td>
                            </tr>
                            
                        </table>
                        <div>
                            <h1>Offer Description</h2>
                                <p>
                                    {{ $offeritem->description }}
                                </p>
                        </div>
                        <div>
                            <h1>Seller Details</h2>
                                <table class="table table-bordered p-5">
                                    <tr>
                                        <td>Seller Company</td>
                                        <td>{{ $seller->company->nameOfCompany }}</td>
                                    </tr>
                                    <tr>
                                        <td>Seller Name</td>
                                        <td>{{ $seller->name }}</td>
                                    </tr>
                                    
                                </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
