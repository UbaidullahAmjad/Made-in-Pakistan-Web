@extends('layout.app')
@section('contents')
    <div class="row">
        <div class="col-md-12">
            <div class="card" style="height: 665px;">
                <div class="card-header">
                    <h4 class="card-title" id="basic-layout-form">Request for Quotation</h4>
                    <a class="heading-elements-toggle">
                        <i class="la la-ellipsis-v font-medium-3"></i>
                    </a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li>
                                <a data-action="collapse">
                                    <i class="ft-minus"></i>
                                </a>
                            </li>
                            <li>
                                <a data-action="reload">
                                    <i class="ft-rotate-cw"></i>
                                </a>
                            </li>
                            <li>
                                <a data-action="expand">
                                    <i class="ft-maximize"></i>
                                </a>
                            </li>
                            <li>
                                <a data-action="close">
                                    <i class="ft-x"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">
                        <div>
                            <h1>RFQ Details</h1>
                            <hr>
                        </div>
                        <div>
                            <h3 class="float-left">Request By: <b>{{ $rfq->customer_name }}</b></h3>--{{ $customer->email}}
                            <h3 class="float-right">Request On: <b>{{ $rfq->created_at }}</b></h3>
                            
                        </div>
                        <h3 style="clear: both;" class="mt-5">Description</h3>
                        <div style="clear: both;" class="p-2">

                            <p class="text-justify">
                                {{ $rfq->content }}
                            </p>
                            <table class="table table-bordered">
                                <tr>
                                    <td>Requested Product</td>
                                    <td>{{ $product->name }}</td>
                                    <td rowspan="2">
                                        <img width="200" height="200" class="d-block mx-auto" 
                                        @foreach ($product->pictures()->where('thumbnail',1)->get() as $item)
                                        src={{ asset('product-images/'.$item->url) }}
                                        @endforeach
                                        />
                                    </td>
                                </tr>
                                <tr>
                                    <td>Requested Quantity</td>
                                    <td>{{ $rfq->qty }}</td>

                                </tr>
                                <tr>
                                    <td><a href="{{ route('private') }}" target="_blank">
                                        <button type="button" class="btn btn-danger mr-1">
                                            <i class="ft ft-message-circle" style="font-size: 18px;"></i> Chat
                                        </button>
                                    </a></td>
                                    <td>

                                        {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#default">
                                            <i class="ft ft-upload-cloud" style="font-size: 18px;"></i> Upload Quotation
                                        </button> --}}
                                    </td>
                                    <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                        Make Offer
                                    </button>
                                    </td>
                                </tr>


                            </table>

                        </div>
                        <div>

                        </div>
                        <div>
                            
                            
                        </div>




                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="modal fade text-left show" id="default" tabindex="-1" role="dialog" aria-labelledby="basicModalLabel1"
        aria-modal="true" style="display: none; padding-right: 17px;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="basicModalLabel1">Quotation File</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="{{ route('quotation.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <p>Upload a PDF file of quotation.
                            <input type="hidden" name="buyer_id" value="{{ Auth::guard('seller')->id() }}">
                            <input type="hidden" name="rfq_id" value="{{ $rfq->id }}">
                            <input type="file" name="quotation">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn grey btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <!-- Button to Open the Modal -->
    

    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Modal Heading</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <table class="table">
                        <tr>
                            <td>
                                Name
                            </td>
                            <td>
                                Picture
                            </td>
                            <td>
                                Price
                            </td>

                        </tr>
                        @foreach ($products as $product)
                            <tr>
                                <td>
                                    <a
                                        href="{{ route('offer.show', ['offer' => $product->id, 'rfq' => $rfq, 'product' => $product->id]) }}">{{ $product->name }}</a>
                                </td>
                                <td>
                                    <img @foreach ($product->pictures()->where('thumbnail', 1)->get() as $image)
                                    src="{{ asset('product-images/'.$image->url) }}"
                        @endforeach
                        width=50
                        height=50
                        >
                        </td>
                        <td>
                            {{ $product->min_price}}-{{ $product->max_price}}
                        </td>

                        </tr>
                        @endforeach
                    </table>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>



    <!-- The Modal 2 -->
    <div class="modal" id="myModal2">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Second modal</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="card-content collapse show">
                        <div class="card-body">
                            <form class="form">
                                <div class="form-body">

                                    <div class="form-group">
                                        <label for="centerInput1">Product Name</label>
                                        <input type="text" id="product" class="form-control" placeholder="name"
                                            name="product">
                                    </div>

                                    <div class="form-group">
                                        <label for="centerInput2">Quantity</label>
                                        <input type="text" id="centerInput2" class="form-control" placeholder="address"
                                            name="qty">
                                    </div>

                                    <div class="form-group">
                                        <label for="centerInput3">Price</label>
                                        <input type="text" id="centerInput3" class="form-control" placeholder="city"
                                            name="price">
                                    </div>

                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
    </div>




@stop
@section('js')

    <script>
        $(function() {
            // $('#myModal').on('hidden.bs.modal', function() {
            //     $('#myModal2').modal('show');
            // });
            $('#myModal2').on('show', function(e) {
                var link = e.relatedTarget(),
                    modal = $(this),
                    product = link.data("product");
                modal.find("#product").val(product);
            });

        });

    </script>


@stop
