@extends('backend.superadmin.layout.app')
@section('contents')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Bordered table</h4>
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
                            <a href="{{ route('superadmin.items.create') }}" style="float: right;" class="mr-5"><i class="ft-plus-square text-success" style="font-size: 30px;"></i></a>
                        </p>
                    </div>
                    <div class="table-responsive p-3">
                        <table class="table table-bordered mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>SubCategory</th>
                                    <th>Item</th>
                                    <th>Added At</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($items as $item)
                                    <tr>
                                        <th scope="row">{{ $loop->index + 1 }}</th>
                                        <td>{{ $subcategories->where('id', $item->subcategory_id)->first()->name }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td><a href="{{ route('superadmin.items.edit', $item) }}"><i class="ft-edit"></i></a>
                                            <form action="{{ route('superadmin.items.destroy', $item->id) }}" method="post"
                                                style="display: inline-block">
                                                @csrf
                                                @method('delete')
                                                <button type="submit"><i class="ft-trash-2"></i></button>
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
@endsection

