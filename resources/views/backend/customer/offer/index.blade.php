@extends('backend.customer.layout.app')
@section('contents')
    <div class="content-body">
        <!-- Basic Tables start -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Offers List</h2>
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
                    <div class="card-content collapse show">
                        <div class="card-body">
                            
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Offer Document</th>
                                            <th>Supplier Name</th>
                                            <th>Product Name</th>
                                            <th>Quotated Quantity</th>
                                            <th>Quotated Price</th>
                                            <th>Status</th>
                                            <th>Requested On</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($offers as $offer)
                                       
                                        <tr>
                                            <th scope="row">{{ $loop->index+1 }}</th>
                                            <td><a href="{{ route('download', $offer->offerDocument? $offer->offerDocument : 1) }}">Download</a></td>
                                            <td>{{ $sellers->where('id', $offer->seller_id)->first()->name }}</td>
                                            <td>{{ $offer->product_name }}</td>
                                            <td>{{ $offer->quantity }}</td>
                                            <td>{{ $offer->price }}</td>
                                            <td>
                                                @if ($offer->status == -1)
                                                <div class="badge badge-danger">Pending</div>
                                                @elseif($offer->status == 0)
                                                <div class="badge badge-success">Accepted</div>
                                                @else
                                                <div class="badge badge-warning">Cancel</div>
                                                @endif
                                            </td>
                                            <td>{{ $offer->created_at }}</td>
                                            <td>
                                                {{-- <div style="float:left; font-size: 18px;"> --}}
                                                <a href="{{url('customer/offer/show',$offer->id)}}" title="View Offer Details"><i class="ft-eye icon-font-size"></i></a>
                                            {{-- </div> --}}
                                            @if ($offer->status != 0 && $offer->status != 1)
                                            <button type="submit" data-id="{{ $offer->id }}" class="offer-accept"><i class="ft-check-circle icon-font-size" title="Accept This Offer"></i></button>
                                            <button type="button" data-id="{{ $offer->id }}" class="offer-delete"><i class="ft-x-circle icon-font-size icon-font-color" title="Cancel This offer"></i></button>
                                            @endif
                                                
                                                
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
        <!-- Basic Tables end -->
    </div>
@endsection
@section('js')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        // this ajax call will create a new order in db
        $(function(){
            var offer = $('.offer-accept');
            offer.each(function(){
                    var current = $(this);
                $(this).click(function(){
                    var offer = $(this).attr('data-id');
                    $.ajax({
                        url: "{{ route('tabs.store') }}",
                        method: "post",
                        data: {
                            "_token": "{{ csrf_token() }}",
                            offer_id: offer
                        },
                        success: function(data){
                            swal("Congrates!", "Your Order has been placed!", "success");
                            // current.parent().parent().remove();
                        },
                        error: function(){
                            swal("Oh oh!", "Due to some technical issues your order cannot be placed", "error");
                        }
                    });
                })
            });

            // This ajax call will delete the data from the db
            //and also the tr will be deleted from dom
            var offer = $('.offer-delete');
            offer.each(function(){
                    var current = $(this);
                $(this).click(function(){
                    var offer = $(this).attr('data-id');
                    $.ajax({
                        url: "{{ route('customer.offer.status.update.delete', 1) }}",
                        method: "post",
                        data: {
                            "_token": "{{ csrf_token() }}",
                            offer_id: offer
                        },
                        success: function(data){
                            swal("Successfull!", "You have canceled this offer!", "success");
                            // current.parent().parent().remove();
                            
                        },
                        error: function(){
                            swal("Oh oh!", "Due to some technical issues your offer cannot be removed", "error");
                        }
                    });
                })
            });

        })
    </script>
@endsection