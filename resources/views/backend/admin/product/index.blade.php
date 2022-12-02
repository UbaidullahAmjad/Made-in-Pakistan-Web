@extends('layout.app')
@section('contents')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Products</h4>
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
                        <p>Below Table contains list of Products
                            <a href="{{ route('admin.product.create') }}">
                                <span class="float-right">

                                    <i class="ft-plus-circle text-success" style="font-size: 30px;"></i>
                                </span>
                            </a>
                        </p>
                        @if (Session::has('error'))
                            <p class="alert alert-danger">{{ Session::get('error') }}</p>
                        @elseif(Session::has('success'))
                            <p class="alert alert-success">{{ Session::get('success') }}</p>
                        @endif

                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>Product Name</th>
                                        <th>Stock</th>
                                        <th>Price Range</th>
                                        <th>Visibility</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($products as $product)
                                        <tr>
                                            <th scope="row">{{ $loop->index + 1 }}</th>
                                            <td>
                                                {{--
                                                @foreach ($product->pictures()->take(1)->get() as $image)
                                                    <a href="{{ route('admin.product.show', $product->id) }}"><img width=50
                                                            height=50 src="{{ asset('product-images/'.$image->url) }}"></a>
                                                @endforeach --}}
                                                <a href="{{ route('admin.product.show', $product->id) }}"><img width=50
                                                            height=50 src="{{ asset('/product-images/'.$product->pictures()->where('thumbnail',1)->first()->url) }}"></a>
                                            </td>

                                            <td>
                                                <a href="{{ route('admin.product.show', $product->id) }}">{{ $product->name }}</a>
                                            </td>
                                            <td>{{ $product->qty }}</td>
                                            <td>{{ $product->min_price }}-{{ $product->max_price }} / {{ $product->per_product }}</td>
                                            <td>Visible</td>
                                            <td>
                                                @if ($product->active==1)
                                                <div class="badge badge-success">Approved</div>
                                                @else
                                                <div class="badge badge-danger">Pending</div>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.product.show', $product) }}"><i class="ft-eye" style="font-size: 25px;"></i></a>
                                                <a href="{{ route('admin.product.edit', $product) }}"><i class="ft-edit-3"
                                                        style="font-size: 25px;" class="float-right"></i></a>
                                                <form action="{{ route('admin.product.destroy', $product->id) }}" style="display:inline;"
                                                    method="post">
                                                    @csrf()
                                                    @method('delete')
                                                    <button type="submit" class="float-right" style="border:0; 
                                                    outline:0; padding:0; display:inline; cursor: pointer; background: none;">
                                                    <i class="ft-trash text-danger" style="font-size: 25px;"></i></button>
                                                </form>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="p5">
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
