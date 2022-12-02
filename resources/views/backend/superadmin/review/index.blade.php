@extends('backend.superadmin.layout.app')
@section('contents')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header"></div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>S#</th>
                            <th>Image</th>
                            <th>Product</th>
                            <th>Seller</th>
                            <th>Review</th>
                            <th>Approved</th>
                            <th>Reviwed On</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($reviews as $review)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><img src="{{ asset('/product-images/'.$review->product->pictures()->where('thumbnail', 1)->first()->url) }}" width="100" height="100" /> </td>
                                <td>{{ $review->product->name }}</td>
                                <td>{{ $review->product->seller->name }}</td>
                                <td>{{ $review->description }}</td>
                                <td>
                                    <input type="checkbox" class="js-switch" onchange="checkStatus('status');"
                                        {{ $review->approved == '1' ? 'checked' : '' }} name="status" value="1"
                                        data-id="{{ $review->id }}" id="status" />

                                </td>
                                <td>{{ $review->created_at }}</td>
                                <td><a href="#" class="delete-review btn btn-outline-danger" data-id={{ $review->id }}>
                                    <i class="ft-trash" style="font-size: 25px;"></i>
                                    </i></a></td>
                                
                            </tr>
                        @endforeach

                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
<script>
    $(function() {
        $('.delete-review').click(function(event) {
            var id = $(this).attr('data-id');
            var current = $(this);
            event.preventDefault();
            swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this Review!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })

                .then((willDelete) => {
                    if (willDelete) {

                        $.ajax({
                            url: "/superadmin/reviews/delete/1",
                            method: "post",
                            data: {
                                "_token": "{{ csrf_token() }}",
                                data: id
                            },
                            success: function() {
                                swal("Poof! Seller Account has been deleted!", {
                                    icon: "success",
                                });
                                current.parent().parent().remove();
                            }
                        });
                    } 
                    else {
                        swal("Your Seller Account is safe :)");
                    }
                });
            });
        });

</script>
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
                        'url': "{!!  route('superadmin.reviews.update', 1) !!}",
                        'type': "put",
                        data: {
                            "_token": "{{ csrf_token() }}",
                            data: id,
                            value: $(this).val(),

                        },
                        success: function(data) {
                            swal("Review is Approved!", {
                                icon: "success",
                            });
                        }
                    });
                } else {
                    $(this).val('0');

                    var id = $(this).attr('data-id');
                    $.ajax({
                        'url': "{!!  route('superadmin.reviews.update', 1) !!}",
                        'type': "put",
                        data: {
                            "_token": "{{ csrf_token() }}",
                            data: id,
                            value: $(this).val(),

                        },
                        success: function(data) {
                            swal("Review is disapproved!", {
                                icon: "success",
                            });
                        }
                    });
                }

            });
        });

    </script>
@endsection
