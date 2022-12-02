@extends('layout.app')
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
            <x-card title="Total Buyers" type="card bg-gradient-directional-danger" :data="$rfqs->count()"></x-card>
        </div>
        <div class="col-lg-3">
            <x-card title="Total Orders" type="card bg-gradient-x-orange-yellow" :data="$offers->count()"></x-card>
        </div>
        <div class="col-lg-3">
            <x-card title="Total Sale" type="card bg-gradient-directional-success" :data="$orders->sum('total')"></x-card>
        </div>
        <div class="col-lg-3">
            <x-card title="Avg Order Sale" type="card bg-gradient-x-info" data="Orders"></x-card>
        </div>

    </div>
    <div class="row match-height">
        <div class="col-xl-8 col-lg-12">
            <h5 class="card-title text-bold-700 my-2">Sales</h5>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Vertical Bar Chart</h4>
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
                                <a data-action="close">
                                    <i class="ft-x"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">
                       
                        <div id="vertical-bar2" class="height-400 BarChartShadow"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-bar" style="width: 100%; height: 100%;"><g class="ct-grids"><line y1="365" y2="365" x1="50" x2="558.703125" class="ct-grid ct-vertical"></line><line y1="248.33333333333331" y2="248.33333333333331" x1="50" x2="558.703125" class="ct-grid ct-vertical"></line><line y1="131.66666666666666" y2="131.66666666666666" x1="50" x2="558.703125" class="ct-grid ct-vertical"></line><line y1="15" y2="15" x1="50" x2="558.703125" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><line x1="60.59898177083333" x2="60.597981770833336" y1="350" y2="318.3333333333333" class="ct-bar" ct:value="2000" style="stroke-width: 10px"></line><circle cx="60.597981770833336" cy="318.3333333333333" r="5" class="ct-slice-pie"></circle><line x1="81.7949453125" x2="81.7939453125" y1="350" y2="341.6666666666667" class="ct-bar" ct:value="1000" style="stroke-width: 10px"></line><circle cx="81.7939453125" cy="341.6666666666667" r="5" class="ct-slice-pie"></circle><line x1="102.99090885416668" x2="102.98990885416667" y1="350" y2="295" class="ct-bar" ct:value="3000" style="stroke-width: 10px"></line><circle cx="102.98990885416667" cy="295" r="5" class="ct-slice-pie"></circle><line x1="124.18687239583333" x2="124.18587239583333" y1="350" y2="248.33333333333331" class="ct-bar" ct:value="5000" style="stroke-width: 10px"></line><circle cx="124.18587239583333" cy="248.33333333333331" r="5" class="ct-slice-pie"></circle><line x1="145.38283593750003" x2="145.38183593750003" y1="350" y2="201.66666666666666" class="ct-bar" ct:value="7000" style="stroke-width: 10px"></line><circle cx="145.38183593750003" cy="201.66666666666666" r="5" class="ct-slice-pie"></circle><line x1="166.5787994791667" x2="166.57779947916669" y1="350" y2="271.6666666666667" class="ct-bar" ct:value="4000" style="stroke-width: 10px"></line><circle cx="166.57779947916669" cy="271.6666666666667" r="5" class="ct-slice-pie"></circle><line x1="187.77476302083335" x2="187.77376302083334" y1="350" y2="178.33333333333334" class="ct-bar" ct:value="8000" style="stroke-width: 10px"></line><circle cx="187.77376302083334" cy="178.33333333333334" r="5" class="ct-slice-pie"></circle><line x1="208.97072656250003" x2="208.96972656250003" y1="350" y2="225" class="ct-bar" ct:value="6000" style="stroke-width: 10px"></line><circle cx="208.96972656250003" cy="225" r="5" class="ct-slice-pie"></circle><line x1="230.1666901041667" x2="230.16569010416669" y1="350" y2="85" class="ct-bar" ct:value="12000" style="stroke-width: 10px"></line><circle cx="230.16569010416669" cy="85" r="5" class="ct-slice-pie"></circle><line x1="251.36265364583335" x2="251.36165364583334" y1="350" y2="38.333333333333314" class="ct-bar" ct:value="14000" style="stroke-width: 10px"></line><circle cx="251.36165364583334" cy="38.333333333333314" r="5" class="ct-slice-pie"></circle><line x1="272.5586171875" x2="272.5576171875" y1="350" y2="108.33333333333331" class="ct-bar" ct:value="11000" style="stroke-width: 10px"></line><circle cx="272.5576171875" cy="108.33333333333331" r="5" class="ct-slice-pie"></circle><line x1="293.75458072916666" x2="293.7535807291667" y1="350" y2="155" class="ct-bar" ct:value="9000" style="stroke-width: 10px"></line><circle cx="293.7535807291667" cy="155" r="5" class="ct-slice-pie"></circle><line x1="314.9505442708333" x2="314.9495442708333" y1="350" y2="201.66666666666666" class="ct-bar" ct:value="7000" style="stroke-width: 10px"></line><circle cx="314.9495442708333" cy="201.66666666666666" r="5" class="ct-slice-pie"></circle><line x1="336.1465078125" x2="336.1455078125" y1="350" y2="271.6666666666667" class="ct-bar" ct:value="4000" style="stroke-width: 10px"></line><circle cx="336.1455078125" cy="271.6666666666667" r="5" class="ct-slice-pie"></circle><line x1="357.34247135416666" x2="357.3414713541667" y1="350" y2="178.33333333333334" class="ct-bar" ct:value="8000" style="stroke-width: 10px"></line><circle cx="357.3414713541667" cy="178.33333333333334" r="5" class="ct-slice-pie"></circle><line x1="378.5384348958333" x2="378.5374348958333" y1="350" y2="85" class="ct-bar" ct:value="12000" style="stroke-width: 10px"></line><circle cx="378.5374348958333" cy="85" r="5" class="ct-slice-pie"></circle><line x1="399.7343984375" x2="399.7333984375" y1="350" y2="61.666666666666686" class="ct-bar" ct:value="13000" style="stroke-width: 10px"></line><circle cx="399.7333984375" cy="61.666666666666686" r="5" class="ct-slice-pie"></circle><line x1="420.93036197916666" x2="420.9293619791667" y1="350" y2="108.33333333333331" class="ct-bar" ct:value="11000" style="stroke-width: 10px"></line><circle cx="420.9293619791667" cy="108.33333333333331" r="5" class="ct-slice-pie"></circle><line x1="442.1263255208333" x2="442.1253255208333" y1="350" y2="201.66666666666666" class="ct-bar" ct:value="7000" style="stroke-width: 10px"></line><circle cx="442.1253255208333" cy="201.66666666666666" r="5" class="ct-slice-pie"></circle><line x1="463.3222890625" x2="463.3212890625" y1="350" y2="271.6666666666667" class="ct-bar" ct:value="4000" style="stroke-width: 10px"></line><circle cx="463.3212890625" cy="271.6666666666667" r="5" class="ct-slice-pie"></circle><line x1="484.51825260416666" x2="484.5172526041667" y1="350" y2="295" class="ct-bar" ct:value="3000" style="stroke-width: 10px"></line><circle cx="484.5172526041667" cy="295" r="5" class="ct-slice-pie"></circle><line x1="505.7142161458333" x2="505.7132161458333" y1="350" y2="318.3333333333333" class="ct-bar" ct:value="2000" style="stroke-width: 10px"></line><circle cx="505.7132161458333" cy="318.3333333333333" r="5" class="ct-slice-pie"></circle><line x1="526.9101796875001" x2="526.9091796875001" y1="350" y2="341.6666666666667" class="ct-bar" ct:value="1000" style="stroke-width: 10px"></line><circle cx="526.9091796875001" cy="341.6666666666667" r="5" class="ct-slice-pie"></circle><line x1="548.1061432291667" x2="548.1051432291667" y1="350" y2="318.3333333333333" class="ct-bar" ct:value="2000" style="stroke-width: 10px"></line><circle cx="548.1051432291667" cy="318.3333333333333" r="5" class="ct-slice-pie"></circle></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="50" y="370" width="21.195963541666668" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 21px; height: 20px;">Q1</span></foreignObject><foreignObject style="overflow: visible;" x="177.17578125" y="370" width="21.195963541666686" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 21px; height: 20px;">Q2</span></foreignObject><foreignObject style="overflow: visible;" x="304.3515625" y="370" width="21.195963541666686" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 21px; height: 20px;">Q3</span></foreignObject><foreignObject style="overflow: visible;" x="431.52734375" y="370" width="21.195963541666686" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 21px; height: 20px;">Q4</span></foreignObject><foreignObject style="overflow: visible;" y="248.33333333333331" x="10" height="116.66666666666667" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 117px; width: 30px;">0k</span></foreignObject><foreignObject style="overflow: visible;" y="131.66666666666663" x="10" height="116.66666666666667" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 117px; width: 30px;">5k</span></foreignObject><foreignObject style="overflow: visible;" y="15" x="10" height="116.66666666666666" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 117px; width: 30px;">10k</span></foreignObject><foreignObject style="overflow: visible;" y="-15" x="10" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">15k</span></foreignObject></g><defs><linearGradient id="barGradient1" x1="0" y1="0" x2="0" y2="1"><stop offset="0" stop-color="rgba(253,99,107,1)"></stop><stop offset="1" stop-color="rgba(253,99,107, 0.6)"></stop></linearGradient></defs></svg></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-12">
            <h5 class="card-title text-bold-700 my-2">Top Performing Categories</h5>
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="col-12">
                            <div class="timeline pt-2">
                                <ul class="list-unstyled base-timeline activity-timeline">
                                    @foreach ($subcat as $cat)
                                        <li class="my-1 font-weight-bold">{{ $cat->name }}</li>
                                    @endforeach
                                        
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row match-height">
       
        <div class="col-xl-4 col-lg-4">
            <h5 class="card-title text-bold-700 my-2">Top Selling Products</h5>
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        @if($products->count()>0)
                        @foreach ($products->take(5) as $product)
                        <div>
                            <img width=100 height=100 src="{{ asset('/product-images/'.$product->pictures()->where('thumbnail', 1)->first()->url) }} ">
                            <span>{{ $product->name }}</span>
                            </div>
                        @endforeach
                        @else
                        <span>No Products Added Yet</span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4">
            <h5 class="card-title text-bold-700 my-2">Customers with Most Sale</h5>
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="col-12 timeline-left" id="activity">
                            @if($orders->count()>0)
                            @foreach ($orders as $order)
                                <div>
                                    <span>{{ $order->buyer->name }}</span>
                                    <span>{{ $order->buyer->email }}</span>
                                </div>
                            @endforeach
                            @else
                            <span>No Customers yet</span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4">
            <h5 class="card-title text-bold-700 my-2">Stock Threshold</h5>
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        
                            <table class="table table-bordered">
                                @foreach ($products->where('qty', '<', 50)->take(4) as $product)
                                <tr>
                                    <td><img width=100 height=100 
                            @foreach($product->images as $image)
                            src="{{ Storage::url($image->url) }}
                            @endforeach
                            "></td>
                            <td>{{ $product->name }}</td>
                            <td>{{$product->qty}}</td>
                        </tr>
                        @endforeach
            
                            </table>
                            
                            
                                
                            
                                
                            </div>
                        

                        
                    </div>
                </div>
            </div>
        </div>
    </div>




@stop
