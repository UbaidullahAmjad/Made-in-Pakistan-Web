@extends('layout.app')
@section('contents')
<div class="row">
    <div class="col-md-6">
        <div class="card" style="height: 720px;">
            <div class="card-header">
                <h4 class="card-title" id="basic-layout-form">Simple Form</h4>
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
                    <form class="form" action="{{route('offer.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-body">
                            <input type="hidden" value="{{ $rfq->id }}" name="rfq_id">
                            <input type="hidden" value="{{ $product->id }}" name="product_id">
                            <div class="form-group">
                                <label for="centerInput1">Product Name</label>
                                <input type="text" id="product" class="form-control" placeholder="name" name="product_name" value="{{$product->name}}">
                            </div>

                            <div class="form-group">
                                <label for="centerInput2">Quantity</label>
                                <input type="text" id="centerInput2" class="form-control" placeholder="Quantity" name="quantity">
                            </div>

                            <div class="form-group">
                                <label for="centerInput3">Price</label>
                                <input type="text" id="centerInput3" class="form-control" placeholder="product price per item" name="price">
                            </div>
                            <div class="form-group">
                                <label for="centerInput3">Description</label>
                                <textarea class="form-control" placeholder="describe your offer..." name="description" rows="6"> 

                                </textarea>
                                
                            </div>
                            <div class="form-group">
                                <input type="file" name="offerDocument" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-success btn-sm">Send Offer</button>

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@stop