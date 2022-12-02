@extends('backend.customer.layout.app')
@section('contents')
    <div class="row match-height">
        <div class="col-12">
            <div class="">
                <div id="gradient-line-chart1" class="height-250 GradientlineShadow1"></div>
            </div>
        </div>
    </div>
            <!-- eCommerce statistic -->
            <div class="row">

                <div class="col-lg-3">
                    <x-card title="Total Orders"
                            type="card bg-gradient-directional-success"
                            :data="$orders->count()"></x-card>
                </div>
                <div class="col-lg-3">
                    <x-card title="Total Offers"
                            type="card bg-gradient-directional-success"
                            :data="$offers->count()"></x-card>
                </div>
                <div class="col-lg-3">
                    <x-card title="Total RFQ's"
                            type="card bg-gradient-directional-danger"
                            :data="$rfqs->count()"></x-card>
                </div>
                <div class="col-lg-3">
                    <x-card title="Successful Orders" type="card bg-gradient-x-info" data="Orders"></x-card>
                </div>

            </div>
            
            <div class="row">
                <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Orders</h4>
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
                       </div>
                        <div class="table-responsive">
                            <div class="bd-example" class="">
                                <table class="table table-responsive p-1">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Order No</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Ordered On</th>
                                            <th scope="col">actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders->take(5) as $order)
                                        <tr>

                                            <th scope="row">{{ $loop->index+1 }}</th>
                                            <td>{{ $order->order_no }}</td>
                                            <td>{{ $order->status }}</td>
                                            <td>{{ $order->created_at }}</td>
                                            <td><a href="customer/order"><i class="ft-eye"></i></td>
                                            
                                        </tr>
                                        @endforeach
                                        
                                        
                                    </tbody>
                                </table>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Chat</h4>
                            <a class="heading-elements-toggle">
                      <i class="la la-ellipsis-v font-medium-3"></i>
                    </a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li>
                                        <a data-action="reload">
                            <i class="ft-rotate-cw"></i>
                          </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body chat-application">
                                <div class="chats height-300 ps ps--active-y">
                                    <div class="chats">
                                        <div class="chat">
                                            <div class="chat-avatar">
                                                <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title="" data-original-title="">
                                <img src="../../../app-assets/images/portrait/small/avatar-s-19.jpg" alt="avatar">
                              </a>
                                            </div>
                                            <div class="chat-body">
                                                <div class="chat-content">
                                                    <p>How can we help? We're here for you!</p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="chat">
                                            <div class="chat-avatar">
                                                <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title="" data-original-title="">
                                <img src="../../../app-assets/images/portrait/small/avatar-s-19.jpg" alt="avatar">
                              </a>
                                            </div>
                                            <div class="chat-body">
                                                <div class="chat-content">
                                                    <p>Absolutely!</p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="chat">
                                            <div class="chat-avatar">
                                                <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title="" data-original-title="">
                                <img src="../../../app-assets/images/portrait/small/avatar-s-19.jpg" alt="avatar">
                              </a>
                                            </div>
                                            <div class="chat-body">
                                                <div class="chat-content">
                                                    <p>Crest admin is the responsive Angular 5 bootstrap 4 admin template.</p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="chat">
                                            <div class="chat-avatar">
                                                <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title="" data-original-title="">
                                <img src="../../../app-assets/images/portrait/small/avatar-s-19.jpg" alt="avatar">
                              </a>
                                            </div>
                                            <div class="chat-body">
                                                <div class="chat-content">
                                                    <p>Thanks a lot!</p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                        
                                        
                                    </div>
                                <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 300px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 93px;"></div></div></div>
                                <form class="chat-app-input mt-1 row">
                                    <div class="col-12">
                                        <fieldset>
                                            <div class="input-group position-relative has-icon-left">
                                                <div class="form-control-position">
                                                    <span id="basic-addon3"><i class="ft-image"></i></span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Send message" aria-describedby="button-addon2">
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary" type="button">Send</button>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
                <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Offers</h4>
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
                       </div>
                        <div class="table-responsive">
                            <div class="bd-example" class="">
                                <table class="table table-responsive p-1">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Suplier Name</th>
                                            <th scope="col">Qoutated Qty</th>
                                            <th scope="col">actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($offers->take(5) as $offer)
                                        <tr>
                                            <th scope="row">{{ $loop->index+1 }}</th>
                                            <td>{!! $sellers->where('id', $offer->seller_id)->first()->name !!}</td>
                                            <td>{{ $offer->quantity }}</td>
                                            <td><a href="customer/offer"><i class="ft-eye"></i></td>
                                            
                                        </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
                <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">RFQ's</h4>
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
                       </div>
                        <div class="table-responsive">
                            <div class="bd-example" class="">
                                <table class="table table-responsive p-1">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">QTY</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($rfqs->take(5) as $rfq)
                                        <tr>
                                            <th scope="row">{{ $loop->index+1 }}</th>
                                            <td>{{ $rfq->qty }}</td>
                                            <td>
                                                @if ($rfq->status == -1)
                                                <div class="badge badge-danger">Pending</div>
                                                @elseif($rfq->status==0)
                                                <div class="badge badge-warning">Process</div>
                                                @else
                                                <div class="badge badge-successfull">completed</div>
                                                @endif
                                            </td>
                                            <td><a href="buyer/rfq"><i class="ft-eye icon-font-size"></i></td>
                                            
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



    @stop