@extends('backend.customer.layout.app')
@section('contents')

<!-- Order -->
<div class="row ">
    <div class="col-xl-8 col-lg-12">
        <h5 class="card-title text-bold-700 my-2">Orders</h5>
        <div class="card">
            <div class="card-content">
                <div id="product-summary" class="media-list position-relative">
                    <div class="table-responsive">
                        <table class="table table-padded table-xl mb-0" id="product-summary-table">
                            <thead>
                                <tr>
                                    <th class="border-top-0">Order ID</th>
                                    <th class="border-top-0">Order No</th>
                                    <th class="border-top-0">Status</th>
                                    <th class="border-top-0">Date of Order</th>
                                    <th class="border-top-0">Total</th>
                                    <th class="border-top-0">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($order as $ord)
                                <tr>
                                    
                                    <td class="text-truncate">
                                        <a href="#">{{ $ord->id }}</a>
                                    </td>
                                    <td class="text-truncate">
                                        <span>{{ $ord->order_no}}</span>
                                    </td>
                                    
                                    <td class="text-truncate">
                                        <div class="badge badge-danger">Pending</div>
                                    </td>

                                    <td class="text-truncate">
                                        <span>{{ $ord->created_at }}</span>
                                    </td>
                                    {{-- <td class="text-truncate">
                                        <a href="#">{{ $offers->where('id', $ord->customer_id)->first()->id }}</a>
                                    </td> 
                                    --}}
                                    <td class="text-truncate">
                                        {{ $ord->total }}
                                    </td>
                                    <td class="text-truncat mr-1">
                                        <a href="{{url('customer/order/show',$ord->id)}}">
                                            <i class="ft-eye blue-grey lighten-2 icon-font-size ml-1"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection