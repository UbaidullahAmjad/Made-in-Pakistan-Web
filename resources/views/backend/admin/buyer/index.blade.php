@extends('layout.app')
@section('contents')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">List of Customers</h4> <a class="heading-elements-toggle"><i
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
                    <div class="p-5 table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th class="text-center">User Name</th>
                                <th class="text-center">User Email</th>
                                <th class="text-center">Total # of orders</th>
                                <th class="text-center">Total Purchase Amount</th>
                                </tr>
                            </thead>
                            @foreach($orders as $order)
                            
                            
                            {{--@if($user->id == $order->customer_id)--}}
                                <tr>
                                    <td>{{ $order->buyer->name }}</td>
                                    <td>{{ $order->buyer->email }}</td>
                                    <td>{{$order->buyer->orders->count()}}</td>
                                    <td>status</td>
                                </tr>
                                
                            
                            @endforeach
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
            $('.delete-buyer').click(function(event) {
                var id = $(this).attr('data-id');
                var current = $(this);
                event.preventDefault();
                swal({
                        title: "Are you sure?",
                        text: "Once deleted, you will not be able to recover this Buyer!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })

                    .then((willDelete) => {
                        if (willDelete) {

                            $.ajax({
                                url: "buyers/delete/1",
                                type: "post",
                                data: {
                                    "_token": "{{ csrf_token() }}",
                                    data: id
                                },
                                success: function() {

                                    swal("Poof! Buyer has been deleted!", {
                                        icon: "success",
                                    });
                                    current.parent().parent().remove();
                                }

                            });


                        } else {
                            swal("Your Buyer is with you :)");
                        }
                    });
            });


        });

    </script>

@stop
