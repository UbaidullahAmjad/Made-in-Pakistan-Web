<div class="d-none d-xl-block bg-primary">
    <div class="container">
        <div class="row align-items-stretch min-height-50">
            <!-- Vertical Menu -->
            @include('frontend.partials.categories')
            <!-- End Vertical Menu -->
            <!-- Search bar -->
            <div class="col align-self-center">
                <!-- Search-Form -->
                <form class="js-focus-state">
                    <label class="sr-only" for="searchProduct">Search</label>
                    <div class="input-group">
                        <input type="email"
                               class="form-control py-2 pl-5 font-size-15 border-0 height-40 rounded-left-pill"
                               name="email" id="searchProduct" placeholder="Search for Products"
                               aria-label="Search for Products" aria-describedby="searchProduct1" required="">
                        <div class="input-group-append">
                            <!-- Select -->
                            <div class="dropdown bootstrap-select js-select dropdown-select custom-search-categories-select">
                                <select class="js-select selectpicker dropdown-select custom-search-categories-select"
                                        data-style="btn height-40 text-gray-60 font-weight-normal border-0 rounded-0 bg-white px-5 py-2"
                                        tabindex="-98">
                                    <option value="one" selected="">All Categories</option>
                                    <option value="">computers</option>

                                    <option value="">chairs</option>

                                    <option value="">Aggriculture</option>

                                    <option value="">Military &amp; Defense</option>

                                    <option value="">Beauty &amp; Cosmetics</option>

                                    <option value="">Construction</option>

                                    <option value="">Health &amp; Medicine</option>

                                    <option value="">Home Decor &amp; Furniture</option>

                                    <option value="">Office &amp; School Supllies</option>

                                    <option value="">Electric &amp; Metal Utilities</option>

                                </select>
                                <button type="button"
                                        class="dropdown-toggle btn height-40 text-gray-60 font-weight-normal border-0 rounded-0 bg-white px-5 py-2"
                                        data-toggle="dropdown" role="button" title="All Categories">
                                    <div class="filter-option">
                                        <div class="filter-option-inner">
                                            <div class="filter-option-inner-inner">All Categories</div>
                                        </div>
                                    </div>
                                </button>
                                <div class="dropdown-menu " role="combobox">
                                    <div class="inner show" role="listbox" aria-expanded="false" tabindex="-1">
                                        <ul class="dropdown-menu inner show"></ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Select -->
                            <button class="btn btn-dark height-40 py-2 px-3 rounded-right-pill" type="button"
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
                        <li class="col"><a href="../shop/compare.html" class="text-gray-90" data-toggle="tooltip"
                                           data-placement="top" title="" data-original-title="Compare"><i
                                        class="font-size-22 ec ec-compare"></i></a></li>
                        <li class="col"><a href="../shop/wishlist.html" class="text-gray-90" data-toggle="tooltip"
                                           data-placement="top" title="" data-original-title="Favorites"><i
                                        class="font-size-22 ec ec-favorites"></i></a></li>
                        <li class="col pr-0">
                            <a href="../shop/cart.html" class="text-gray-90 position-relative d-flex "
                               data-toggle="tooltip" data-placement="top" title="" data-original-title="Cart">
                                <i class="font-size-22 ec ec-shopping-bag"></i>
                                <span class="width-22 height-22 bg-dark position-absolute flex-content-center text-white rounded-circle left-12 top-8 font-weight-bold font-size-12">2</span>
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
