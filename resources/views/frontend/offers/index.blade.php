@extends('layout.app')
@section('contents')
    <div class="content-body">
        <!-- Basic Tables start -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Basic Tables</h4>
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
                            <p class="card-text"></p>
                            <p><span class="text-bold-600">Example 1:</span> Table with outer spacing</p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Offer Document</th>
                                            <th>Product Name</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($offers as $offer)
                                        <tr>
                                            <th scope="row">{{ $loop->index+1 }}</th>
                                            <td><a href="{{ route('download', $offer->offerDocument? $offer->offerDocument : 1) }}">Download</a></td>
                                            <td>{{ $offer->product_name }}</td>
                                            <td>{{ $offer->quantity }}</td>
                                            <td>{{ $offer->price }}</td>
                                            <td>
                                            
                                                @if ($offer->status==-1 )
                                                    <div class="badge badge-danger">Pending</div>  
                                                 @elseif ($offer->status==0)
                                                    <div class="badge badge-success">Accepted</div>
                                                 @else 
                                                    <div class="badge badge-warning">Cancel</div>
                                                
                                            @endif
                                            </td>
                                            <td>
                                                
                                                
                                                <div style="float:left; font-size: 18px;"><a href="{{ route('offer.edit', $offer->id) }}"><i class="ft-eye"></i></a></div>
                                                <form action="{{ route('offer.destroy', $offer->id) }}" method="post" style="float:left; font-size: 18px; ">
                                                    @csrf
                                                    @method('delete')
                                                    
                                                    <button type="submit" class="ml-1"><i class="ft-x-circle"></i></button>
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
        </div>
        <!-- Basic Tables end -->
    </div>
@endsection
