<!-- Content -->
                                        <div class="js-scrollbar u-sidebar__body">
                                            <div id="headerSidebarContent" class="u-sidebar__content u-header-sidebar__content">
                                                <!-- Logo -->
                                                <a class="d-flex ml-0 navbar-brand u-header__navbar-brand u-header__navbar-brand-vertical" href="../home/index.html" aria-label="Electro">
                                                @include('frontend.layouts.partials.logo')
                                                </a>
                                                <!-- End Logo -->

                                                <!-- List -->
                                                <ul id="headerSidebarList" class="u-header-collapse__nav">
                                                    <!-- Home Section -->
                                                    <li class="u-has-submenu u-header-collapse__submenu">
                                                        <a class="u-header-collapse__nav-link " href="{{ url('/') }}" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarHomeCollapse" data-target="#headerSidebarHomeCollapse">
                                                            Home
                                                        </a>
                                                    </li>
                                                    <!-- End Home Section -->

                                                    <!-- Shop Pages -->
                                                    <li class="u-has-submenu u-header-collapse__submenu">
                                                        <a class="u-header-collapse__nav-link " href="javascript:;" data-target="#headerSidebarPagesCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarPagesCollapse">
                                                            About
                                                        </a>
                                                    </li>
                                                    <!-- End Shop Pages -->

                                                    <!-- Product Categories -->
                                                    <li class="u-has-submenu u-header-collapse__submenu">
                                                        <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebarBlogCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarBlogCollapse">
                                                            Categories
                                                        </a>

                                                        <div id="headerSidebarBlogCollapse" class="collapse" data-parent="#headerSidebarContent">
                                                            <ul id="headerSidebarBlogMenu" class="u-header-collapse__nav-list">

                                                                <!-- 4 Column Sidebar -->
                                                                @foreach($categories as $hamburgercategory)
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="{{ route('subcategories', $hamburgercategory->id) }}">
                                                                        {{ $hamburgercategory->name }}</a>
                                                                </li>
                                                                @endforeach
                                                                <!-- End 4 Column Sidebar -->
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <!-- End Product Categories -->

                                                    <!-- Single Product Pages -->
                                                    <li class="u-has-submenu u-header-collapse__submenu">
                                                        <a class="u-header-collapse__nav-link" href="javascript:;" data-target="#headerSidebarShopCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarShopCollapse">
                                                            Help
                                                        </a>
                                                    </li>
                                                    <!-- End Single Product Pages -->

                                                    <!-- Ecommerce Pages -->
                                                    <li class="u-has-submenu u-header-collapse__submenu">
                                                        <a class="u-header-collapse__nav-link " href="javascript:;" data-target="#headerSidebarDemosCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarDemosCollapse">
                                                            FAQ
                                                        </a>
                                                    </li>
                                                    <!-- End Ecommerce Pages -->

                                                    <!-- Shop Columns -->
                                                    <li class="u-has-submenu u-header-collapse__submenu">
                                                        <a class="u-header-collapse__nav-link" href="javascript:;" data-target="#headerSidebardocsCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebardocsCollapse">
                                                            Support
                                                        </a>
                                                    </li>
                                                    <!-- End Shop Columns -->
                                                </ul>
                                                <!-- End List -->
                                            </div>
                                        </div>
                                        <!-- End Content -->