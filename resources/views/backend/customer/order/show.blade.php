@extends('backend.customer.layout.app')

@section('css')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
@endsection

@section('contents')
    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Order Details</h4> <a class="heading-elements-toggle"><i
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
                    <p class="px-1"><span class="text-bold-600">Product Details</p>
                    <div class="p-5 table-responsive">
                        <table class="table mb-0">
                            <tr>
                                <tr><td>Product Name</td><td>{{ $product_name->name }}</td>
                                <td rowspan="5">
                                    <img
                                    class="img-fluid" @foreach ($product_name->pictures()->where('thumbnail',1)->get() as $images)
                                src="{{ asset('product-images/'.$images->url) }}"
                                @endforeach
                                width="150" height="150" alt="Image Description">
                                </td>
                                </tr>
                                <tr><td>Price</td><td>{{ $offer->price }}</td></tr>
                                <tr><td>Quantity</td><td>{{ $offer->quantity }}</td></tr>
                                <tr><td>Seller</td><td>{{ $product_name->seller->name }}</td></tr>
                                <tr>
                                    <td>Ordered Date:</td><td>{{ $orderitem->created_at }}</td>
                                </tr>

                                
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
        <section class="card">
            <div id="invoice-template" class="card-body">
                <!-- Invoice Company Details -->
                <div id="invoice-company-details" class="row">
                    <div class="col-md-6 col-sm-12 text-left text-md-left">
                        <img src="../../../app-assets/images/logo/logo-80x80.png" alt="company logo"
                            class="mb-2" width="70">
                        <ul class="px-0 list-unstyled">
                            <li class="text-bold-700">{{ $product_name->seller->name }}</li>
                            <li>102 Trade Centre,</li>
                            <li>Portland 12345,</li>
                            <li>USA</li>
                        </ul>

                    </div>
                    <div class="col-md-6 col-sm-12 text-center text-md-right">
                        <h2>INVOICE</h2>
                        <p># INV-001001</p>
                        <p> {{ date('d-m-Y') }}</p>
                    </div>
                </div>
                <!--/ Invoice Company Details -->

                <!-- Invoice Customer Details -->
                <div id="invoice-customer-details" class="row pt-2">
                    <div class="col-md-6 col-sm-12">
                        <p class="text-muted">(123) 456 789</p>
                        <p class="text-muted">{{ $product_name->seller->email }}</p>
                    </div>
                    <div class="col-md-6 col-sm-12 text-center text-md-right">
                        <p class="text-muted">Bill To</p>
                        <ul class="px-0 list-unstyled">
                            <li class="text-bold-700">{{ Auth::guard('buyer')->user()->name }}</li>
                            <li>102 Park Avenue,</li>
                            <li>New York,</li>
                            <li>New York-25896.</li>
                        </ul>

                    </div>
                </div>
                <!--/ Invoice Customer Details -->

                <!-- Invoice Items Details -->
                <div id="invoice-items-details" class="pt-2">
                    <div class="row">
                        <div class="table-responsive col-sm-12">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Item &amp; Description</th>
                                        <th class="text-right">Price</th>
                                        <th class="text-right">Quantity</th>
                                        <th class="text-right">Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>
                                            <p>{{ $product_name->name }}</p>
                                            {{-- <p class="text-muted">Vestibulum euismod est eu elit convallis.</p> --}}
                                        </td>
                                        <td class="text-right">{{ $offer->price }}</td>
                                        <td class="text-right">{{ $offer->quantity }}</td>
                                        <td class="text-right">Rs.{{ $offer->price * $offer->quantity }}/.</td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7 col-sm-12 text-center text-md-left">
                            <p class="lead">Payment Methods:</p>
                            <div class="row">
                                <div class="col-md-8">
                                    <table class="table table-borderless table-sm">
                                        <tbody>
                                            <tr>
                                                <td>Bank name:</td>
                                                <td class="text-right">US Bank, USA</td>
                                            </tr>
                                            <tr>
                                                <td>Acc name:</td>
                                                <td class="text-right">Carla Prop</td>
                                            </tr>
                                            <tr>
                                                <td>IBAN:</td>
                                                <td class="text-right">ABC123546655</td>
                                            </tr>
                                            <tr>
                                                <td>SWIFT code:</td>
                                                <td class="text-right">US12345</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-12">
                            <p class="lead">Total due</p>
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Sub Total</td>
                                            <td class="text-right">Rs {{ $offer->price * $offer->quantity }}/.</td>
                                        </tr>
                                        {{-- <tr>
                                            <td>TAX (12%)</td>
                                            <td class="text-right">$ 1,440.00</td>
                                        </tr> --}}
                                        {{-- <tr>
                                            <td class="text-bold-800">Total</td>
                                            <td class="text-bold-800 text-right"> $ 15,440.00</td>
                                        </tr>
                                        <tr>
                                            <td>Payment Made</td>
                                            <td class="pink text-right">(-) $ 2,440.00</td>
                                        </tr>
                                        <tr class="bg-grey bg-lighten-4">
                                            <td class="text-bold-800">Balance Due</td>
                                            <td class="text-bold-800 text-right">$ 13,000.00</td>
                                        </tr> --}}
                                    </tbody>
                                </table>
                            </div>
                            <div class="text-center">
                                <p>Authorized person</p>
                                <img src="../../../app-assets/images/pages/signature-scan.png" alt="signature"
                                    class="height-100">
                                <h6>{{ $product_name->seller->name }}</h6>
                                <p class="text-muted">Managing Director</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Invoice Footer -->
                <div id="invoice-footer">
                    <div class="row">
                        <div class="col-md-7 col-sm-12">
                            <h6>Terms &amp; Condition</h6>
                            <p>You know, being a test pilot isn't always the healthiest business in the world.
                                We predict too much for the next year and yet far too little for the next 10.
                            </p>
                        </div>
                        <div class="col-md-5 col-sm-12 text-center">
                            <button type="button" class="btn btn-info btn-lg my-1"><i
                                    class="la la-paper-plane-o"></i> Send Invoice</button>
                        </div>
                    </div>
                </div>
                <!--/ Invoice Footer -->

            </div>
        </section>
    
    
    </div>
</div>
@endsection
@section('js')

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(function() {
            $("#accordion")
                .accordion({
                    header: "> div > h3"
                })
                .sortable({
                    axis: "y",
                    handle: "h3",
                    stop: function(event, ui) {
                        // IE doesn't register the blur when sorting
                        // so trigger focusout handlers to remove .ui-state-focus
                        ui.item.children("h3").triggerHandler("focusout");

                        // Refresh accordion to handle new order
                        $(this).accordion("refresh");
                    }
                });
        });

    </script>
