@extends('backend.superadmin.layout.app')
@section('contents')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3>Product Approval</h3>
                    <p>
                    <div class="badge badge-warning">Note: </div>
                    When User Updates a product Admin have to Approve it again after review.
                    </p>
                </div>
                <div class="card-body">
                    <div class="card-content">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>S#</th>
                                    <th>Product Name</th>
                                    <th>Seller Name</th>
                                    <th>Seller Email</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->seller->name }}</td>
                                    <td>{{ $product->seller->email }}</td>

                                    <td>
                                        <form action="{{ route('admin.sellers.update', $product->id) }}" method="post">
                                            @csrf
                                            @method('put')
                                            <input type="checkbox" class="js-switch" onchange="checkStatus('status');"
                                                {{ $product->active == '1' ? 'checked' : '' }} name="status" value="1"
                                                data-id="{{ $product->id }}" id="status" />
                                        </form>
                                    </td>
                                    <td>
                                        <a href="{{ route('superadmin.approval.show', ['approval' => $product]) }}"> <i class="ft-eye text-info mr-3"
                                                style="font-size: 30px;"></i>
                                        </a>
                                        

                                    </td>

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
        function checkStatus(status) {
            $('#' + status).on('change', function() {
                if ($(this).is(':checked')) {
                    $(this).val("1");
                } else {
                    $(this).val('0')
                }
            });
        }

        var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

        elems.forEach(function(html) {
            var switchery = new Switchery(html);
        });


        $('.js-switch').each(function() {
            $(this).on('change', function() {
                if ($(this).is(':checked')) {
                    $(this).val("1");
                    var id = $(this).attr('data-id');
                    $.ajax({
                        'url': "{!!  route('superadmin.approval.update', 1) !!}",
                        'type': "put",
                        data: {
                            "_token": "{{ csrf_token() }}",
                            data: id,
                            value: $(this).val(),

                        },
                        success: function(data) {
                            swal("Product Approved successfully!", {
                                icon: "success",
                            });
                        }
                    });
                } else {
                    $(this).val('0');

                    var id = $(this).attr('data-id');
                    $.ajax({
                        'url': "{!!  route('superadmin.approval.update', 1) !!}",
                        'type': "put",
                        data: {
                            "_token": "{{ csrf_token() }}",
                            data: id,
                            value: $(this).val(),

                        },
                        success: function(data) {
                            swal("Product Disapproved successfully!", {
                                icon: "success",
                            });
                        }
                    });
                }

            });
        });

    </script>

@stop
