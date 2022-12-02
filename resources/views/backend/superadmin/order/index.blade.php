@extends('backend.superadmin.layout.app')
@section('contents')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <td>S#</td>
                            <td>Sub Total</td>
                            <td>Grand Total</td>
                            <td>Order Date</td>
                            <td>Status</td>
                            <td>Billed To</td>
                            <td>Actions</td>
                        </tr>
                        @foreach ($orders as $order)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $order->total }}</td>
                                <td>{{ $order->total }}</td>
                                <td>{{ $order->created_at }}</td>
                                <td><div class="badge pill badge-success">Processing</div></td>
                                <td>{{ $order->buyer->name }}</td>
                                <td><a href="{{ route('superadmin.order.show', $order->id) }}"><i class="ft-eye" style="font-size: 25px;"></i></a></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection