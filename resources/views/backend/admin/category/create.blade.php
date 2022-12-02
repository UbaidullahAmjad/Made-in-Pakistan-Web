@extends('backend.superadmin.layout.app')
@section('contents')
    <div class="row">
        {{-- <div class="col-lg-12"> --}}
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title" id="horz-layout-card-center">Create A Category</h4>
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
                    <div class="card-content collpase show">
                        <div class="card-body">
                            <div class="card-text">
                                <p>
                                    Add a new Category
                                    <a href="{{route('superadmin.category.index')}}"><span class="float-right">View All Category
                                            <i class="ft-eye text-success " style="font-size: 25px;"></i>
                                        </span></a>
                                </p>
                                @if(Session::has('error'))
                                    <p class="alert alert-danger">{{ Session::get('error') }}</p>
                                @elseif(Session::has('success'))
                                    <p class="alert alert-success">{{ Session::get('success') }}</p>
                                @endif
                            </div>
                            <form class="form form-horizontal" action="{{route('superadmin.category.store')}}" method="post" enctype="multipart/form-data">
                                @csrf()
                                <div class="form-body">
                                    
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="eventRegInput1">Category Name</label>
                                        <div class="col-md-9">
                                            <input type="text" id="eventRegInput1" class="form-control" placeholder="Admin.." name="name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="eventRegInput1">Category Image</label>
                                        <div class="col-md-9">
                                            <input type="file" id="eventRegInput1" class="form-control" name="image">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-actions center">
                                    <button type="button" class="btn btn-danger mr-1">
                                        <i class="ft-x"></i> Cancel
                                    </button>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="la la-check-square-o"></i> Save
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title" id="horz-layout-card-center">Create a New Sub Category</h4>
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
                    <div class="card-content collpase show">
                        <div class="card-body">
                            <div class="card-text">
                                <p>
                                    Add Sub Category
                                    <a href="{{route('superadmin.subcategory.store')}}"><span class="float-right">View All Category
                                            <i class="ft-eye text-success " style="font-size: 25px;"></i>
                                        </span></a>
                                </p>
                                @if(Session::has('error'))
                                    <p class="alert alert-danger">{{ Session::get('error') }}</p>
                                @else
                                    <p class="alert alert-success">{{ Session::get('success') }}</p>
                                @endif
                            </div>
                            <form class="form form-horizontal" action="{{route('superadmin.subcategory.store')}}" method="post" enctype="multipart/form-data">
                                @csrf()
                                <div class="form-body">
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="eventRegInput1">Parent Category</label>
                                        <div class="col-md-9">
                                            <select name="category_id" class="form-control">
                                                <option value="">No Parent Category</option>
                                                @foreach ($categories as $category)
                                                <option class="form-control" value="{{ $category->id }}" name="category_id">{{ $category->name }}</option>    
                                                @endforeach
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="eventRegInput1">Category Name</label>
                                        <div class="col-md-9">
                                            <input type="text" id="eventRegInput1" class="form-control" placeholder="Admin.." name="name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="subCategoryImage">Sub Category Image</label>
                                        <div class="col-md-9">
                                            <input type="file" id="subCategoryImage" class="form-control" name="subcat_image">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-actions center">
                                    <button type="button" class="btn btn-danger mr-1">
                                        <i class="ft-x"></i> Cancel
                                    </button>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="la la-check-square-o"></i> Save
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        {{-- </div> --}}
    </div>
@stop