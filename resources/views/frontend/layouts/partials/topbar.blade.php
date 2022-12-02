@if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <p align="center">{{ $error }}</p>
                                @endforeach
                            </ul>
                        </div>                
 @endif

<div class="u-header-topbar py-2 d-none d-xl-block">
    <div class="container">
        <div class="d-flex align-items-center">
            <div class="topbar-left">
                <a href="{{url('/')}}" class="text-gray-110 font-size-13 u-header-topbar__nav-link">Welcome to Made In Pak</a>
            </div>

            <div class="topbar-right ml-auto">
                <ul class="list-inline mb-0">
                    {{-- <li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border">
                        <a href="#" class="u-header-topbar__nav-link"><i class="ec ec-map-pointer mr-1"></i> Store Locator</a>
                    </li> --}}
                    {{-- <li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border">
                        <a href="../shop/track-your-order.html" class="u-header-topbar__nav-link"><i class="ec ec-transport mr-1"></i> Track Your Order</a>
                    </li> --}}
                    <li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border">
                        <!-- Account Sidebar Toggle Button -->
                        @if(Auth::guard('seller')->check())
                            <a href="{{route('seller.dashboard')}}"><i class="ec ec-user mr-1"></i> Dashboard <span class="text-gray-50"></span></a>
                            <!-- <a href="">LogOut</a> -->
                        @elseif(Auth::guard('buyer')->check())
                            <a href="{{route('buyer.dashboard')}}"><i class="ec ec-user mr-1"></i> Dashboard <span class="text-gray-50"></span></a>
                            <!--<a href="">LogOut</a> -->
                        @else
                        <a id="sidebarNavToggler" href="javascript:;" 
                        role="button" 
                        class="u-header-topbar__nav-link" 
                        aria-controls="sidebarContent" 
                        aria-haspopup="true" 
                        aria-expanded="false" 
                        data-unfold-event="click" 
                        data-unfold-hide-on-scroll="false" 
                        data-unfold-target="#sidebarContentcategory" 
                        data-unfold-type="css-animation" 
                        data-unfold-animation-in="fadeInRight" 
                        data-unfold-animation-out="fadeOutRight" 
                        data-unfold-duration="500">
                            <i class="ec ec-user mr-1"></i> Register <span class="text-gray-50">or</span> Sign in
                        </a>
                        @endif
                        
                        <!-- End Account Sidebar Toggle Button -->
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>