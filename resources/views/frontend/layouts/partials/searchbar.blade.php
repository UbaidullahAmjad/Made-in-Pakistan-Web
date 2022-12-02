<div class="d-none d-xl-block bg-primary">
    <div class="container">
        <div class="row align-items-stretch min-height-50">
            <!-- Vertical Menu -->
            <div class="col-md-auto d-none d-xl-flex align-items-end">
                <div class="max-width-270 min-width-270">
                    <!-- Basics Accordion -->
                    <div id="basicsAccordion">
                        <!-- Card -->
                        <div class="card border-0 rounded-0">
                            <div class="card-header bg-primary rounded-0 card-collapse border-0" id="basicsHeadingOne">
                                <button type="button"
                                    class="btn-link btn-remove-focus btn-block d-flex card-btn py-3 text-lh-1 px-4 shadow-none btn-primary rounded-top-lg border-0 font-weight-bold text-gray-90"
                                    data-toggle="collapse" data-target="#basicsCollapseOne" aria-expanded="true"
                                    aria-controls="basicsCollapseOne">
                                    <span class="pl-1 text-gray-90">All Category</span>
                                    <span class="text-gray-90 ml-3">
                                        <span class="ec ec-arrow-down-search"></span>
                                    </span>
                                </button>
                            </div>
                            <div id="basicsCollapseOne" class="collapse vertical-menu v1"
                                aria-labelledby="basicsHeadingOne" data-parent="#basicsAccordion">
                                <div class="card-body p-0">
                                    <nav
                                        class="js-mega-menu navbar navbar-expand-xl u-header__navbar u-header__navbar--no-space hs-menu-initialized">
                                        <div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse">
                                            <ul class="navbar-nav u-header__navbar-nav border-primary border-top-0">
                                                @foreach ($categories as $item)
                                                    <li class="nav-item hs-has-mega-menu u-header__nav-item"
                                                        data-event="hover" data-animation-in="slideInUp"
                                                        data-animation-out="fadeOut" data-position="left">
                                                        <a id="basicMegaMenu"
                                                            class="nav-link u-header__nav-link u-header__nav-link-toggle"
                                                            href="javascript:;" aria-haspopup="true"
                                                            aria-expanded="false">{{ $item->name }}</a>

                                                        <!-- Nav Item - Mega Menu -->
                                                        <div class="hs-mega-menu vmm-tfw u-header__sub-menu"
                                                            aria-labelledby="basicMegaMenu">
                                                            <div class="vmm-bg">
                                                                @foreach ($item->images as $image)
                                                                <img class="img-fluid"
                                                                src="{{ asset($image->url) }}"
                                                                alt="Image Description">
                                                                @endforeach
                                                                
                                                            </div>
                                                            <div class="row u-header__mega-menu-wrapper">
                                                                <div class="col mb-3 mb-sm-0">
                                                                    <span
                                                                        class="u-header__sub-menu-title">{{ $item->name }}</span>
                                                                    <ul class="u-header__sub-menu-nav-group mb-3">
                                                                        @foreach ($item->childrenCategories as $childcategory)
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                    href="#">{{ $childcategory->name }}</a>
                                                                            </li>

                                                                        @endforeach
                                                                        <li>
                                                                            <a class="nav-link u-header__sub-menu-nav-link u-nav-divider border-top pt-2 flex-column align-items-start"
                                                                                href="#">
                                                                                <div class="">All Electronics</div>
                                                                                <div
                                                                                    class="u-nav-subtext font-size-11 text-gray-30">
                                                                                    Discover more products</div>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>

                                                                <div class="col mb-3 mb-sm-0">
                                                                    <span class="u-header__sub-menu-title">Office &
                                                                        Stationery</span>
                                                                    <ul class="u-header__sub-menu-nav-group">
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">All Office & Stationery</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Nav Item - Mega Menu -->
                                                    </li>
                                                    @if ($loop->index + 1 > 12)
                                                        @break
                                                    @endif
                                                @endforeach

                                            </ul>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->
                    </div>
                    <!-- End Basics Accordion -->
                </div>
            </div>
            <!-- End Vertical Menu -->
            <!-- Search bar -->
            <div class="col align-self-center">
                <!-- Search-Form -->
                <form class="js-focus-state" action="{{ url('/search') }}" method="get">
                    <label class="sr-only" for="searchProduct">Search</label>
                    <div class="input-group">
                        <input type="text"
                            class="form-control py-2 pl-5 font-size-15 border-0 height-40 rounded-left-pill"
                            name="search" id="searchProduct" placeholder="Search for Products"
                            aria-label="Search for Products" aria-describedby="searchProduct1" required>
                        <div class="input-group-append">
                            <!-- Select -->
                            <select class="js-select selectpicker dropdown-select custom-search-categories-select"
                                data-style="btn height-40 text-gray-60 font-weight-normal border-0 rounded-0 bg-white px-5 py-2">
                                        <option value="product" selected name="product">Product</option>
                                        <option value="seller" name="supplier">Supplier</option>
                            </select>
                            <!-- End Select -->
                            <button class="btn btn-dark height-40 py-2 px-3 rounded-right-pill" type="submit"
                                id="searchProduct1">
                                <span class="ec ec-search font-size-24"></span>
                            </button>
                        </div>
                    </div>
                </form>
                <!-- End Search-Form -->
            </div>
            <!-- End Search bar -->
            <!-- Header Icons -->
            <div class="col-md-auto align-self-center">
                <div class="d-flex">
                    <ul class="d-flex list-unstyled mb-0">
                        
                        <li class="col pr-0">
                            <a href="../shop/cart.html" class="text-gray-90 position-relative d-flex "
                                data-toggle="tooltip" data-placement="top" title="Cart">
                                <i class="font-size-22 ec ec-shopping-bag"></i>
                                <span
                                    class="width-22 height-22 bg-dark position-absolute flex-content-center text-white rounded-circle left-12 top-8 font-weight-bold font-size-12">2</span>
                                <span class="font-weight-bold font-size-16 text-gray-90 ml-3">$1785.00</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End Header Icons -->
        </div>
    </div>
</div>
