@extends('backend.customer.layout.app')
@section('contents')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">RFQs</h4>
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

                    <p class="px-1"><span class="text-bold-600">Hi Test:</span> Here is your RFQs.</p>
                    <div class="p-5 table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Qty</th>
                                    <th>Image</th>
                                    <th>Product</th>
                                    <th>Status</th>
                                    <th>Requested On</th>
                                    <th>Actions</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rfqs as $rfq)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $rfq->qty }}</td>
                                        <td>
                                            @foreach ($products as $product)
                                                @if ($product->id === $rfq->product_id)
                                                <img height="100" width="100"
                                                 @foreach ($product->pictures()->where('thumbnail',1)->get() as $image)
                                                 src="{{ asset('product-images/'.$image->url) }}"
                                                 @endforeach   
                                                 />
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach ($products as $product)
                                                @if ($product->id === $rfq->product_id)
                                                    {{ $product->name }}
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            @if ($rfq->status == -1)
                                                <div class="badge badge-danger">Pending</div>
                                            @elseif($rfq->status ==0)
                                                <div class="badge badge-warning">Processing</div>
                                            @else
                                                <div class="badge badge-success">Completed</div>
                                            @endif
                                        </td>
                                        <td>{{ $rfq->created_at }}</td>
                                        <td><a href="{{ route('buyer.rfq.show', $rfq->id) }}">
                                            <i class="ft-eye icon-font-size"></i></a></td>
                                        

                                    </tr>

                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
