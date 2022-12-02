@extends('layout.app')
@section('contents')
    <x-user-table-component>
        @foreach($sellers as $user)
        <tr>
            <td>firstname</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>address</td>
            <form action="{{route('admin.sellers.update', $user->id)}}" method="post">
                @csrf
                @method('put')
            <td>

                    <input type="checkbox" class="js-switch" onchange="checkStatus('status');" {{$user->status=='1' ? 'checked' : ''}} name="status" value="1" id="status"/>


            </td>
            <td><input type="checkbox" class="js-switch" onchange="checkStatus('suspended');" {{$user->suspended=='1' ? 'checked' : ''}} name="suspended" value="1" id="suspended"/></td>
            <td>
                @if (isset($user->company->id))
                <a class="btn btn-sm btn-teal" href="{{ route('admin.company-information.show', $user->id) }}">Company Information</a>        
                @else
                <a class="btn btn-sm btn-danger" href="#">NO Company Added</a>    
                @endif
                

                
            </td>
            <td>
                <a href="{{route('profile.show')}}  "> <i class="ft-edit-3 text-info mr-3" style="font-size: 30px;"></i></a>
                <a href="#"  data-id="{{ $user->id }}" class="delete-seller btn btn-sm btn-outline-danger"><i class="ft-user-x" style="font-size: 30px;"></i></a>
                <button type="submit">Update</button>
            </td>
            </form>
        </tr>
        @endforeach
    </x-user-table-component>
@stop
@section('js')
<script>
    $(function() {
        $('.delete-seller').click(function(event) {
            var id = $(this).attr('data-id');
            var current = $(this);
            event.preventDefault();
            swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this Seller Account!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })

                .then((willDelete) => {
                    if (willDelete) {
                        
                        $.ajax({
                            url: "sellers/delete/1",
                            type: "post",
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


                    } else {
                        swal("Your Seller Account is safe :)" );
                    }
                });
        });


    });

</script>
    <script>
        function checkStatus(status){
            $('#'+status).on('change',function(){
                if($(this).is(':checked')){
                    $(this).val("1");
                }
                else {
                    $(this).val('0')
                }
            });
        }
    </script>

    @stop