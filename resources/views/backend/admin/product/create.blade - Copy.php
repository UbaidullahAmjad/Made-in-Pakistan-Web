@extends('layout.app')
@section('title', 'Add Products')
@section('contents')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" id="basic-layout-round-controls">Round Style Form Control</h4>
                    <a class="heading-elements-toggle">
                        <i class="la la-ellipsis-v font-medium-3"></i>
                    </a>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">
                        <form class="form" action="{{ route('admin.product.store') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-body">
                                <div class="form-group">
                                    <label for="complaintinput1">Category</label>
                                    <select name='category_id' class="form-control" id="maincategory">
                                        @foreach ($categories as $category)
                                        <option  value="{{ $category->id }}">{{ $category->name }}</option>    
                                        @endforeach
                                        
                                    </select>
                                   
                                </div>
                                <div class="form-group">
                                    <label for="complaintinput1">Sub Category</label>
                                    <select name='subcategory_id' class="form-control" id="subcategory">
                                        
                                    </select>
                                   
                                </div>
                                <div class="form-group">
                                    <label for="complaintinput1">Product Name</label>
                                    <input type="text" id="complaintinput1" class="form-control round"
                                        placeholder="company name" name="name">
                                </div>

                                @include('layout.partials.ckeditor')
                                <div class="form-group">
                                    <label for="complaintinput6">Size</label>
                                    <input type="text" id="complaintinput6" class="form-control round"
                                        placeholder="signature" name="size">
                                </div>
                                <div class="form-group">
                                    <label for="complaintinput6">Place of Origin</label>
                                    <input type="text" id="complaintinput6" class="form-control round"
                                        placeholder="signature" name="placeoforigin">
                                </div>
                                <div class="form-group">
                                    <label for="complaintinput6">Shelf Life</label>
                                    <input type="text" id="complaintinput6" class="form-control round"
                                        placeholder="signature" name="shelf_life">
                                </div>
                                <div class="form-group">
                                    <label for="complaintinput6">color</label>
                                    <input type="text" id="complaintinput6" class="form-control round"
                                        placeholder="signature" name="color">
                                </div>
                                <div class="form-group">
                                    <label for="complaintinput6">Port</label>
                                    <input type="text" id="complaintinput6" class="form-control round"
                                        placeholder="signature" name="port">
                                </div>

                                <div class="form-group">
                                    <label for="complaintinput6">Weight</label>
                                    <input type="text" id="complaintinput6" class="form-control round"
                                        placeholder="signature" name="weight">
                                </div>
                                <div class="form-group">
                                    <label for="complaintinput6">Price</label>
                                    <input type="text" id="complaintinput6" class="form-control round"
                                        placeholder="signature" name="price">
                                </div>
                                <div class="form-group">
                                    <label for="complaintinput6">Quantity</label>
                                    <input type="text" id="complaintinput6" class="form-control round"
                                        placeholder="signature" name="qty">
                                </div>
                                <div class="form-group">
                                    <label for="complaintinput6">Image</label>
                                    <input type="file" id="complaintinput6" class="form-control round" name="image">
                                </div>
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="la la-check-square-o"></i> Save
                                    </button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('js')
    <script>
        $(function(){
            $('#maincategory').change(function(){
                var id = $(this).val();
                var subcategory = $('#subcategory');
                $.ajax({
                    url: "{{ route('admin.subcategory.show', 1) }}",
                    'method': 'get',
                    'data': {index: id },
                    success: function(data){
                        subcategory.text('');
                        $.each(data, function(index, value){
                            subcategory.append("<option value="+value.id+">"+value.name+"</option>");
                        });
                        
                    }
                });
            });

        });

    </script>
@endsection 
