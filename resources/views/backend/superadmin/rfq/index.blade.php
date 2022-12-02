@extends('backend.superadmin.layout.app')
@section('contents')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h2>List of All RFQ's</h2>
                </div>
                <div class="card-body">
                    <div class="card-content">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>S#</th>
                                    <th>Document</th>
                                    <th>Seller</th>
                                    <th>Buyer</th>
                                    <th>Total Product</th>
                                    <th>Requested ON</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach ($rfqs as $rfq)
                                
                                
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td> <a href="{{ route('superadmin.rfq.download', $rfq->rfqDocument) }}">Download</a></td>
                                    <td>{{ $rfq->seller->name }}</td>
                                    <td>{{ $rfq->buyer->name }}</td>
                                    <td>{{ $rfq->qty }}</td>
                                    {{-- <td>{{ $rfq->price }}</td> --}}
                                    <td>{{ $rfq->created_at }}</td>
                                    <td>
                                        @if ($rfq->status==-1)
                                            <div class="badge badge-danger">Pending</div>
                                        @elseif($rfq->status==0)
                                        <div class="badge badge-warning">Processing</div>
                                        @else
                                        <div class="badge badge-success">Completed</div>
                                        @endif
                                        
                                        
                                    </td>
                                    
                                    {{-- <td><a href="{{ route('superadmin.rfq.show', $rfq) }}"><i class="ft-eye"></i></</a></td> --}}
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
