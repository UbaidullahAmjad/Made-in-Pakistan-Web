@extends('layout.app')
@section('contents')
    <div class="row">
        <div class="col">


            <div class="card">
                <div class="card-header">
                    <ul class="nav" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#all" role="tab"
                                aria-controls="home" aria-selected="true">All</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#pending" role="tab"
                                aria-controls="profile" aria-selected="false">Pending</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#readytoship" role="tab"
                                aria-controls="contact" aria-selected="false">Ready to Ship</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="shipped-tab" data-toggle="tab" href="#shipped" role="tab"
                                aria-controls="contact" aria-selected="false">Shipped</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="delievered-tab" data-toggle="tab" href="#delivered" role="tab"
                                aria-controls="contact" aria-selected="false">Delivered</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="cancelled-tab" data-toggle="tab" href="#cancelled" role="tab"
                                aria-controls="contact" aria-selected="false">Cancelled</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="returned-tab" data-toggle="tab" href="#returned" role="tab"
                                aria-controls="contact" aria-selected="false">Returned</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="faileddelivery-tab" data-toggle="tab" href="#faileddelivery" role="tab"
                                aria-controls="contact" aria-selected="false">Failed Delivery</a>
                        </li>
                    </ul>
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

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="home-tab">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Document</th>
                                                <th>Order No.</th>
                                                <th>Price Per Item</th>
                                                <th>Total</th>
                                                <th>Payment Method</th>
                                                <th>Billed To</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($orders as $order)
                                            <tr>
                                                <td>{{ $order->document }}</td>
                                                <td>{{ $order->order_no }}</td>
                                                <td>Rs.{{ $order->retail_price }}/-</td>
                                                <td>Rs.{{ $order->total }}/-</td>
                                                <td>{{ $order->payment_method }}</td>
                                                <td>{{ $buyers->where('id', $order->customer_id)->first()->name }}</td>
                                                <td><div class="badge badge-{{ $badges[$order->status-1] }}">{{ $status[$order->status-1] }}</div></td>
                                                {{-- <td>{{ $order->printed }}</td> --}}
                                                <td><a href="{{ route('tabs.show', $order->id) }}"><i class="ft-eye"></i></a></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pending" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Document</th>
                                                <th>Order No.</th>
                                                <th>Order Date</th>
                                                <th><th>Price Per Item</th></th>
                                                <th>Total</th>
                                                <th>Payment Method</th>
                                                <th>Rettail Price</th>
                                                <th>Status</th>
                                                <th>Printed</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($orders as $order)
                                            @if ($order->status == 1)
                                            <tr>
                                                <td>{{ $order->document }}</td>
                                                <td>{{ $order->order_no }}</td>
                                                <td>{{ $order->order_date }}</td>
                                                <td>{{ $order->update_date }}</td>
                                                <td>{{ $order->payment_method }}</td>
                                                <td>{{ $order->retail_price }}</td>
                                                <td><div class="badge badge-{{ $badges[$order->status-1] }}">{{ $status[$order->status-1] }}</div></td>
                                                <td>{{ $order->printed }}</td>
                                                <td>{{ $order->actions }}</td>
                                            </tr>    
                                            @endif
                                            
                                            @endforeach
                                                
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="readytoship" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Document</th>
                                                <th>Order No.</th>
                                                <th>Order Date</th>
                                                <th>Price Per Item</th>
                                                <th>Total</th>
                                                <th>Payment Method</th>
                                                <th>Rettail Price</th>
                                                <th>Status</th>
                                                <th>Printed</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($orders as $order)
                                            @if ($order->status == 2)
                                            <tr>
                                                <td>{{ $order->document }}</td>
                                                <td>{{ $order->order_no }}</td>
                                                <td>{{ $order->order_date }}</td>
                                                <td>{{ $order->update_date }}</td>
                                                <td>{{ $order->payment_method }}</td>
                                                <td>{{ $order->retail_price }}</td>
                                                <td><div class="badge badge-{{ $badges[$order->status-1] }}">{{ $status[$order->status-1] }}</div></td>
                                                <td>{{ $order->printed }}</td>
                                                <td>{{ $order->actions }}</td>
                                            </tr>    
                                            @endif
                                            
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="shipped" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Document</th>
                                                <th>Order No.</th>
                                                <th>Order Date</th>
                                                <th>Price Per Item</th>
                                                <th>Total</th>
                                                <th>Payment Method</th>
                                                <th>Rettail Price</th>
                                                <th>Status</th>
                                                <th>Printed</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($orders as $order)
                                            @if ($order->status == 3)
                                            <tr>
                                                <td>{{ $order->document }}</td>
                                                <td>{{ $order->order_no }}</td>
                                                <td>{{ $order->order_date }}</td>
                                                <td>{{ $order->update_date }}</td>
                                                <td>{{ $order->payment_method }}</td>
                                                <td>{{ $order->retail_price }}</td>
                                                <td><div class="badge badge-{{ $badges[$order->status-1] }}">{{ $status[$order->status-1] }}</div></td>
                                                <td>{{ $order->printed }}</td>
                                                <td>{{ $order->actions }}</td>
                                            </tr>    
                                            @endif
                                            
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="delivered" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Document</th>
                                                <th>Order No.</th>
                                                <th>Order Date</th>
                                                <th>Price Per Item</th>
                                                <th>Total</th>
                                                <th>Payment Method</th>
                                                <th>Rettail Price</th>
                                                <th>Status</th>
                                                <th>Printed</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($orders as $order)
                                            @if ($order->status ==4)
                                            <tr>
                                                <td>{{ $order->document }}</td>
                                                <td>{{ $order->order_no }}</td>
                                                <td>{{ $order->order_date }}</td>
                                                <td>{{ $order->update_date }}</td>
                                                <td>{{ $order->payment_method }}</td>
                                                <td>{{ $order->retail_price }}</td>
                                                <td><div class="badge badge-{{ $badges[$order->status-1] }}">{{ $status[$order->status-1] }}</div></td>
                                                <td>{{ $order->printed }}</td>
                                                <td>{{ $order->actions }}</td>
                                            </tr>    
                                            @endif
                                            
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="cancelled" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Document</th>
                                                <th>Order No.</th>
                                                <th>Order Date</th>
                                                <th>Price Per Item</th>
                                                <th>Total</th>
                                                <th>Payment Method</th>
                                                <th>Rettail Price</th>
                                                <th>Status</th>
                                                <th>Printed</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($orders as $order)
                                            @if ($order->status == 5)
                                            <tr>
                                                <td>{{ $order->document }}</td>
                                                <td>{{ $order->order_no }}</td>
                                                <td>{{ $order->order_date }}</td>
                                                <td>{{ $order->update_date }}</td>
                                                <td>{{ $order->payment_method }}</td>
                                                <td>{{ $order->retail_price }}</td>
                                                <td><div class="badge badge-{{ $badges[$order->status-1] }}">{{ $status[$order->status-1] }}</div></td>
                                                <td>{{ $order->printed }}</td>
                                                <td>{{ $order->actions }}</td>
                                            </tr>    
                                            @endif
                                            
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="returned" role="tabpanel" aria-labelledby="contact-tab"><div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Document</th>
                                                <th>Order No.</th>
                                                <th>Order Date</th>
                                                <th>Price Per Item</th>
                                                <th>Total</th>
                                                <th>Payment Method</th>
                                                <th>Rettail Price</th>
                                                <th>Status</th>
                                                <th>Printed</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($orders as $order)
                                            @if ($order->status == 6)
                                            <tr>
                                                <td>{{ $order->document }}</td>
                                                <td>{{ $order->order_no }}</td>
                                                <td>{{ $order->order_date }}</td>
                                                <td>{{ $order->update_date }}</td>
                                                <td>{{ $order->payment_method }}</td>
                                                <td>{{ $order->retail_price }}</td>
                                                <td><div class="badge badge-{{ $badges[$order->status-1] }}">{{ $status[$order->status-1] }}</div></td>
                                                <td>{{ $order->printed }}</td>
                                                <td>{{ $order->actions }}</td>
                                            </tr>    
                                            @endif
                                            
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="faileddelivery" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Document</th>
                                                <th>Order No.</th>
                                                <th>Order Date</th>
                                                <th>Price Per Item</th>
                                                <th>Total</th>
                                                <th>Payment Method</th>
                                                <th>Rettail Price</th>
                                                <th>Status</th>
                                                <th>Printed</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($orders as $order)
                                            @if ($order->status == 7)
                                            <tr>
                                                <td>{{ $order->document }}</td>
                                                <td>{{ $order->order_no }}</td>
                                                <td>{{ $order->order_date }}</td>
                                                <td>{{ $order->update_date }}</td>
                                                <td>{{ $order->payment_method }}</td>
                                                <td>{{ $order->retail_price }}</td>
                                                <td><div class="badge badge-{{ $badges[$order->status-1] }}">{{ $status[$order->status-1] }}</div></td>
                                                <td>{{ $order->printed }}</td>
                                                <td>{{ $order->actions }}</td>
                                            </tr>    
                                            @endif
                                            
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
@section('js')
    <script src="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    </script>
    <script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js">
    </script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });

    </script>
@endsection
