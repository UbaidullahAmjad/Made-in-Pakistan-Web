@extends('backend.customer.layout.app')
@section('contents')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">RFQs</h4> <a class="heading-elements-toggle"><i
                            class="la la-ellipsis-v font-medium-3"></i></a>
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
                    <p class="px-1"><span class="text-bold-600">Hi Test:</span> Here is your RFQs.</p>
                    <div class="p-5 table-responsive">
                        <table class="table mb-0">
                            
                            <tbody class="text-right">
                                <tr>
                                    <td>Rfq Sent To</td>
                                    <td class="text-left">{{ $product->seller->email }}</td>
                                </tr>
                                <tr>
                                    <td>Product</td>
                                    <td class="text-left">{{ $product->name }}
                                </tr>
                                <tr>
                                    <td>Quantity</td>
                                    <td class="text-left">{{ $rfq->qty }}
                                </tr>
                                <tr>
                                    <td>Requested On</td>
                                    <td class="text-left">{{ $rfq->created_at }}
                                </tr>
                                <tr>
                                    <td>Qoutation Description</td>
                                    <td class="text-left">{{ $rfq->content }}
                                </tr>
                                <tr>
                                    <td colspan="2"><button onclick="window.history.back()" type="button" class="btn btn-success">
                                        GO Back
                                        </button>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
