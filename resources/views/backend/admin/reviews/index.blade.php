@extends('layout.app')
@section('css')
    <link rel="stylesheet" type="text/css"
        href="{{ asset('vendor/theme-assets/vendors/css/tables/datatable/datatables.min.css') }}">

@endsection
@section('contents')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Reviews</h4>
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
                        <p class="card-text">

                        </p>
                        <p><span class="text-bold-600"></p>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>Product Name</th>
                                        <th>Reviews</th>
                                        {{-- <th>Actions</th> --}}

                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($product as $pro)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>
                                            @foreach ($pro->images as $img)
                                            <img src="{{ Storage::url($img->url) }}" width=50 height=50>
                                            @endforeach
                                        </td>
                                            <td>{{ $pro->name }}</td>

                                            <td role="row">
                                                @foreach ($pro->reviews as $rev)
                                                    {{ $rev->description }}<br>
                                                @endforeach
                                            </td>
                                            {{-- <td>
                                            <a href="#">Edit</a>    
                                            </td> --}}
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{ $product->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
@section('js')

    <script>
        $(function() {
            $('#myTable').DataTable();
        });

    </script>

@endsection
