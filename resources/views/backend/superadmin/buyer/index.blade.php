@extends('backend.superadmin.layout.app')
@section('contents')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    List of All Customers
                </div>
                <div class="card-body">
                    <div class="card-content">
                        <table id="mytable" class="table table-bordered">
                            <thead>
                                <th>User Name</th>
                                <th>User email</th>
                                <th>Status</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach ($buyers as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            <form>
                                                <input type="checkbox" class="js-switch" onchange="checkStatus('status');" data-id="{{$user->id}}" {{ $user->status == '1' ? 'checked' : '' }} id="status" name="status" value="1" />
                                            </form>
                                        </td>
                                        <td>
                                            <i class="ft-edit-3 text-info mr-3" style="font-size: 30px;"></i>
                                            <a href="#" data-id="{{ $user->id }}"
                                                class="delete-buyer btn btn-sm btn-outline-danger"><i class="ft-user-x"
                                                    style="font-size: 30px;"></i></a>
                                            </form>

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
                                url: "/superadmin/buyers/delete/1",
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
    <script>
        var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

        elems.forEach(function(html) {
            var switchery = new Switchery(html);
        });
        
        function checkStatus(status) {
            $('#' + status).on('change', function() {
                if ($(this).is(':checked')) {
                    $(this).val("1");
                } else {
                    $(this).val('0')
                }
            });
        }
        
        $('.js-switch').each(function() {
            $(this).on('change', function() {
                if ($(this).is(':checked')) {
                    $(this).val("1");
                    var id = $(this).attr('data-id');
                    $.ajax({
                        'url': "{!!  route('superadmin.buyers.update', 1) !!}",
                        'type': "get",
                        data: {
                            "_token": "{{ csrf_token() }}",
                            data: id,
                            value: $(this).val(),

                        },
                        success: function(data) {
                            swal("Buyer account is Activated successfully!", {
                                icon: "success",
                            });
                        }
                    });
                } else {
                    $(this).val('0');

                    var id = $(this).attr('data-id');
                    $.ajax({
                        'url': "{!!  route('superadmin.buyers.update', 1) !!}",
                        'type': "get",
                        data: {
                            "_token": "{{ csrf_token() }}",
                            data: id,
                            value: $(this).val(),

                        },
                        success: function(data) {
                            swal("Buyer account is Deactivated successfully!", {
                                icon: "success",
                            });
                        }
                    });
                }

            });
        });

    </script>


@stop
