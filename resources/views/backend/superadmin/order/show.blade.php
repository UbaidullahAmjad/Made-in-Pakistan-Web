@extends('backend.superadmin.layout.app')
@section('contents')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header"><button type="button" class="btn btn-success" onclick="window.history.back();">Go Back</button></div>
                
                <div class="card-body">
                    <h3>Order Details</h3>
                        <p><span>Customer Name</span>: <span>{{ $order->buyer->name }}</span></p>
                        </p><span>Customer Email</span>: <span>{{ $order->buyer->email }}</span></p>
                        </p><span>Order Quantity</span>: <span>{{ $order->offer->quantity }}</span></p>
                        </p><span>Price Per Product</span>: <span>{{ $order->offer->price }}</span></p>
                        </p><span>Order Date</span>: <span>{{ $order->created_at }}</span></p>
                    
                </div>
                <div class="card-body">
                    <h3>Product Details</h3>
                        <p><span>Product Name</span>: <span>{{ $order->product->name }}</span></p>
                        </p><span>Seller Name</span>: <span>{{ $order->product->seller->name }}</span></p>
                        </p><span>Order Date</span>: <span>{{ $order->created_at }}</span></p>
                    
                </div>
            </div>
        </div>
    </div>
@endsection
