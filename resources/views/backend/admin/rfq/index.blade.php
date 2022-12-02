@extends('layout.app')

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

                    <p class="px-1"><span class="text-bold-600">Example 2:</span> Minimal Table with no outer spacing.</p>
                    <div class="p-5 table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Document</th>
                                    <th>Status</th>
                                    <th>User</th>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th>Requested On</th>
                                    <th>Actions</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rfqs as $rfq)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>
                                            @if ($rfq->rfqDocument)
                                            <a href="{{ route("download.rfq", $rfq->rfqDocument) }}">Download</a>
                                            @else
                                            "No File Uploaded"
                                            @endif

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
                                        <td>
                                            @foreach ($buyers as $buyer)
                                                @if ($buyer->id===$rfq->customer_id)
                                                    {{ $buyer->name }}
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach ($products as $product)
                                                @if ($product->id === $rfq->product_id)
                                                <img height="100" width="100"
                                                    @foreach($product->pictures()->where('thumbnail',1)->get() as $image)
                                                    src = {{ asset('product-images/'.$image->url) }}
                                                    @endforeach
                                                    />
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>{{ $rfq->qty }}</td>
                                        <td>{{ $rfq->created_at }}</td>
                                        <td>
                                            
                                            <form action="{{ route('rfq.show', $rfq->id) }}">
                                                @if ($rfq->status == 1)
                                                    <i class="ft ft-check" style="color: green; font-size: 18px;"></i>
                                                @else
                                                    <button type="submit" {{ $rfq->status == 1 ? 'disabled' : '' }}
                                                        class="btn btn-{{ $rfq->status == 1 ? 'secondary' : 'success' }}">Process</button>
                                                @endif

                                            </form>
                                        </td>
                                        <td>
                                            <a href="#" data-id="{{ $rfq->id }}" class="delete-rfq btn btn-outline-danger btn-sm">
                                                <i class="ft-trash"></i>
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

@stop
@section('js')
    <script>
        $(function() {
            $('.delete-rfq').click(function(event) {
                var id = $(this).attr('data-id');
                var current = $(this);
                event.preventDefault();
                swal({
                        title: "Are you sure?",
                        text: "Once deleted, you will not be able to recover this RFQ!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })

                    .then((willDelete) => {
                        if (willDelete) {
                            
                            $.ajax({
                                url: "rfq/delete/1",
                                type: "post",
                                data: {
                                    "_token": "{{ csrf_token() }}",
                                    data: id
                                },
                                success: function() {

                                    swal("Poof! Your RFQ file has been deleted!", {
                                        icon: "success",
                                    });
                                    current.parent().parent().remove();
                                }

                            });


                        } else {
                            swal("Your RFQ is safe!");
                        }
                    });
            });


        });

    </script>

@endsection
