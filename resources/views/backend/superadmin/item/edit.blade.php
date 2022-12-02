@extends('backend.superadmin.layout.app')
@section('contents')
    <div class="row">
        <div class="col-lg-6 col-md-12">
			<div class="card" style="height: 875px;">
				<div class="card-header">
					<h4 class="card-title" id="basic-layout-form-center">Add New Item</h4>
					<a class="heading-elements-toggle">
						<i class="la la-ellipsis-v font-medium-3"></i>
					</a>
					<div class="heading-elements">
						<ul class="list-inline mb-0">
							<li>
								<a data-action="collapse">
									<i class="ft-minus"></i>
								</a>
							</li>
							<li>
								<a data-action="reload">
									<i class="ft-rotate-cw"></i>
								</a>
							</li>
							<li>
								<a data-action="expand">
									<i class="ft-maximize"></i>
								</a>
							</li>
							<li>
								<a data-action="close">
									<i class="ft-x"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="card-content collapse show">
					<div class="card-body">

						<div class="card-text">
							
						</div>

                        <form class="form" action="{{ route('superadmin.items.update', $item->id) }}" method="post">
                            @csrf
                            @method('patch')
							<div class="row justify-content-center">
								<div class="col-8">
									<div class="form-body">
                                        <div class="form-group">
                                            
                                            <label for="maincategory">Category</label>
                                            
											<select id="maincategory" name="category_id" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Main Category" data-original-title="" title="">
                                                
                                                @foreach ($categories as $category)
                                                <option value="{{ $category->id }}" 
                                                    {{ $item->category_id == $category->id? 'selected' : '' }}
                                                    >{{  $category->name }}</option>
                                                
                                                @endforeach
												
											</select>
										</div>
                                        <div class="form-group">
											<label for="subcategory">Sub Category</label>
											<select id="subcategory" name="subcategory_id" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Sub Category" data-original-title="" title="">
                                            </select>
										</div>
										<div class="form-group">
											<label for="ItemName">Item Name</label>
											<input type="text" id="ItemName" class="form-control" placeholder="Item Name" name="name" value="{{ $item->name }}">
										</div>
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
    </div>
@endsection
@section('js')
    <script>
        $(function(){
            $('#maincategory').change(function(){
                var id = $(this).val();
                var subcategory = $('#subcategory');
                $.ajax({
                    url: "{{ route('superadmin.subcategory.show', 1) }}",
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

            var subcat = $('#maincategory').find(':selected').val();
            var subcategory2 = $('#subcategory');
            $.ajax({
                    url: "{{ route('superadmin.subcategory.show', 1) }}",
                    'method': 'get',
                    'data': {index: subcat},
                    success: function(data){
                        subcategory2.text('');
                        $.each(data, function(index, value){
                            subcategory2.append("<option value="+value.id+">"+value.name+"</option>");
                        });
                        
                    }
                });
        });
    </script>
@stop