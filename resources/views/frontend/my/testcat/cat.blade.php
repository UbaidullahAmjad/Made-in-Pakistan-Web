<div class="row">
    <div class="col-xs-12 col-lg-3">
        <nav>
            <ul class="list-group vertical-menu yamm make-absolute">
                <li class="list-group-item"><span><i class="fa fa-list-ul"></i> All Departments</span></li>

                <li class="highlight menu-item animate-dropdown"><a title="Value of the Day" href="home-v2.html">Value of the Day</a></li>

                <li class="highlight menu-item animate-dropdown"><a title="Top 100 Offers" href="home-v3.html">Top 100 Offers</a></li>

                <li class="highlight menu-item animate-dropdown"><a title="New Arrivals" href="home-v3-full-color-background.html">New Arrivals</a></li>
                @foreach ($categories as $category )
                <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown">
                    <a title="Cameras, Audio &amp; Video" data-hover="dropdown" href="product-category.html" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">{{ $category->name }}</a>
                    <ul role="menu" class=" dropdown-menu">
                        
                    @foreach ($category->childrenCategories as $childCategory)
                        
                            @include('frontend.testcat.subcat', ['child_category' => $childCategory])
                        
                        @endforeach
                    </ul>
                </li>
                @endforeach
                

                

                <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown">
                    <a title="Mobiles &amp; Tablets" data-hover="dropdown" href="product-category.html" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Mobiles &#038; Tablets</a>
                    <ul role="menu" class=" dropdown-menu">
                        <li class="menu-item animate-dropdown menu-item-object-static_block">
                            <div class="yamm-content">
                                <div class="row bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                    <div class="col-sm-12">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_single_image wpb_content_element vc_align_left">
                                                    <figure class="wpb_wrapper vc_figure">
                                                        <div class="vc_single_image-wrapper vc_box_border_grey">

                                                            <img src="assets/images/megamenu-2.png" class="vc_single_image-img attachment-full" alt="">
                                                        </div>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_text_column wpb_content_element ">
                                                    <div class="wpb_wrapper">
                                                        <ul>
                                                            <li class="nav-title">Computers &amp; Accessories</li>
                                                            <li><a href="#">All Computers &amp; Accessories</a></li>
                                                            <li><a href="#">Laptops, Desktops &amp; Monitors</a></li>
                                                            <li><a href="#">Pen Drives, Hard Drives &amp; Memory Cards</a></li>
                                                            <li><a href="#">Printers &amp; Ink</a></li>
                                                            <li><a href="#">Networking &amp; Internet Devices</a></li>
                                                            <li><a href="#">Computer Accessories</a></li>
                                                            <li><a href="#">Software</a></li>
                                                            <li class="nav-divider"></li>
                                                            <li><a href="#"><span class="nav-text">All Electronics</span><span class="nav-subtext">Discover more products</span></a></li>
                                                        </ul>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_text_column wpb_content_element ">
                                                    <div class="wpb_wrapper">
                                                        <ul>
                                                            <li class="nav-title">Office &amp; Stationery</li>
                                                            <li><a href="#">All Office &amp; Stationery</a></li>
                                                            <li><a href="#">Pens &amp; Writing</a></li>
                                                        </ul>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>

                <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown">
                    <a title="Movies, Music &amp; Video Games" data-hover="dropdown" href="product-category.html" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Movies, Music &#038; Video Games</a>
                    <ul role="menu" class=" dropdown-menu">
                        <li class="menu-item animate-dropdown menu-item-object-static_block">
                            <div class="yamm-content">
                                <div class="row bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                    <div class="col-sm-12">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_single_image wpb_content_element vc_align_left">
                                                    <figure class="wpb_wrapper vc_figure">
                                                        <div class="vc_single_image-wrapper vc_box_border_grey">

                                                            <img src="assets/images/megamenu-2.png" class="vc_single_image-img attachment-full" alt="">
                                                        </div>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_text_column wpb_content_element ">
                                                    <div class="wpb_wrapper">
                                                        <ul>
                                                            <li class="nav-title">Computers &amp; Accessories</li>
                                                            <li><a href="#">All Computers &amp; Accessories</a></li>
                                                            <li><a href="#">Laptops, Desktops &amp; Monitors</a></li>
                                                            <li><a href="#">Pen Drives, Hard Drives &amp; Memory Cards</a></li>
                                                            <li><a href="#">Printers &amp; Ink</a></li>
                                                            <li><a href="#">Networking &amp; Internet Devices</a></li>
                                                            <li><a href="#">Computer Accessories</a></li>
                                                            <li><a href="#">Software</a></li>
                                                            <li class="nav-divider"></li>
                                                            <li><a href="#"><span class="nav-text">All Electronics</span><span class="nav-subtext">Discover more products</span></a></li>
                                                        </ul>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_text_column wpb_content_element ">
                                                    <div class="wpb_wrapper">
                                                        <ul>
                                                            <li class="nav-title">Office &amp; Stationery</li>
                                                            <li><a href="#">All Office &amp; Stationery</a></li>
                                                            <li><a href="#">Pens &amp; Writing</a></li>
                                                        </ul>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>

                <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown">
                    <a title="TV &amp; Audio" data-hover="dropdown" href="product-category.html" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">TV &#038; Audio</a>
                    <ul role="menu" class=" dropdown-menu">
                        <li class="menu-item animate-dropdown menu-item-object-static_block">
                            <div class="yamm-content">
                                <div class="row bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                    <div class="col-sm-12">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_single_image wpb_content_element vc_align_left">
                                                    <figure class="wpb_wrapper vc_figure">
                                                        <div class="vc_single_image-wrapper vc_box_border_grey">

                                                            <img src="assets/images/megamenu-2.png" class="vc_single_image-img attachment-full" alt="">
                                                        </div>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_text_column wpb_content_element ">
                                                    <div class="wpb_wrapper">
                                                        <ul>
                                                            <li class="nav-title">Computers &amp; Accessories</li>
                                                            <li><a href="#">All Computers &amp; Accessories</a></li>
                                                            <li><a href="#">Laptops, Desktops &amp; Monitors</a></li>
                                                            <li><a href="#">Pen Drives, Hard Drives &amp; Memory Cards</a></li>
                                                            <li><a href="#">Printers &amp; Ink</a></li>
                                                            <li><a href="#">Networking &amp; Internet Devices</a></li>
                                                            <li><a href="#">Computer Accessories</a></li>
                                                            <li><a href="#">Software</a></li>
                                                            <li class="nav-divider"></li>
                                                            <li><a href="#"><span class="nav-text">All Electronics</span><span class="nav-subtext">Discover more products</span></a></li>
                                                        </ul>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_text_column wpb_content_element ">
                                                    <div class="wpb_wrapper">
                                                        <ul>
                                                            <li class="nav-title">Office &amp; Stationery</li>
                                                            <li><a href="#">All Office &amp; Stationery</a></li>
                                                            <li><a href="#">Pens &amp; Writing</a></li>
                                                        </ul>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>

                <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown">
                    <a title="Watches &amp; Eyewear" data-hover="dropdown" href="product-category.html" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Watches &#038; Eyewear</a>
                    <ul role="menu" class=" dropdown-menu">
                        <li class="menu-item animate-dropdown menu-item-object-static_block">
                            <div class="yamm-content">
                                <div class="row bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                    <div class="col-sm-12">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_single_image wpb_content_element vc_align_left">
                                                    <figure class="wpb_wrapper vc_figure">
                                                        <div class="vc_single_image-wrapper vc_box_border_grey">

                                                            <img src="assets/images/megamenu-2.png" class="vc_single_image-img attachment-full" alt="">
                                                        </div>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_text_column wpb_content_element ">
                                                    <div class="wpb_wrapper">
                                                        <ul>
                                                            <li class="nav-title">ABC</li>
                                                            <li><a href="#">All Computers &amp; Accessories</a></li>
                                                            <li><a href="#">Laptops, Desktops &amp; Monitors</a></li>
                                                            <li><a href="#">Pen Drives, Hard Drives &amp; Memory Cards</a></li>
                                                            <li><a href="#">Printers &amp; Ink</a></li>
                                                            <li><a href="#">Networking &amp; Internet Devices</a></li>
                                                            <li><a href="#">Computer Accessories</a></li>
                                                            <li><a href="#">Software</a></li>
                                                            <li class="nav-divider"></li>
                                                            <li><a href="#"><span class="nav-text">All Electronics</span><span class="nav-subtext">Discover more products</span></a></li>
                                                        </ul>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_text_column wpb_content_element ">
                                                    <div class="wpb_wrapper">
                                                        <ul>
                                                            <li class="nav-title">Office &amp; Stationery</li>
                                                            <li><a href="#">All Office &amp; Stationery</a></li>
                                                            <li><a href="#">Pens &amp; Writing</a></li>
                                                        </ul>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>

                <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown">
                    <a title="Car, Motorbike &amp; Industrial" data-hover="dropdown" href="product-category.html" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Car, Motorbike &#038; Industrial</a>
                    <ul role="menu" class=" dropdown-menu">
                        <li class="menu-item animate-dropdown menu-item-object-static_block">
                            <div class="yamm-content">
                                <div class="row bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                    <div class="col-sm-12">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_single_image wpb_content_element vc_align_left">
                                                    <figure class="wpb_wrapper vc_figure">
                                                        <div class="vc_single_image-wrapper vc_box_border_grey">

                                                            <img src="assets/images/megamenu-2.png" class="vc_single_image-img attachment-full" alt="">
                                                        </div>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_text_column wpb_content_element ">
                                                    <div class="wpb_wrapper">
                                                        
                                                        <ul>
                                                            
                                                            @foreach ($categories as $category)
                                                            <li class="nav-title">{{ $category->name }}</li>    
                                                            @endforeach
                                                            
                                                            <li><a href="#">All Computers &amp; Accessories</a></li>
                                                            <li><a href="#">Laptops, Desktops &amp; Monitors</a></li>
                                                            <li><a href="#">Pen Drives, Hard Drives &amp; Memory Cards</a></li>
                                                            <li><a href="#">Printers &amp; Ink</a></li>
                                                            <li><a href="#">Networking &amp; Internet Devices</a></li>
                                                            <li><a href="#">Computer Accessories</a></li>
                                                            <li><a href="#">Software</a></li>
                                                            <li class="nav-divider"></li>
                                                            <li><a href="#"><span class="nav-text">All Electronics</span><span class="nav-subtext">Discover more products</span></a></li>
                                                        </ul>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_text_column wpb_content_element ">
                                                    <div class="wpb_wrapper">
                                                        <ul>
                                                            <li class="nav-title">Office &amp; Stationery</li>
                                                            <li><a href="#">All Office &amp; Stationery</a></li>
                                                            <li><a href="#">Pens &amp; Writing</a></li>
                                                        </ul>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>

                <li id="menu-item-2695" class="menu-item menu-item-has-children animate-dropdown dropdown">
                    <a title="Accessories" data-hover="dropdown" href="product-category.html" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Accessories</a>
                    <ul role="menu" class=" dropdown-menu">
                        <li class="menu-item animate-dropdown"><a title="Cases" href="product-category.html">Cases</a></li>
                        <li class="menu-item animate-dropdown"><a title="Chargers" href="product-category.html">Chargers</a></li>
                        <li class="menu-item animate-dropdown"><a title="Headphone Accessories" href="product-category.html">Headphone Accessories</a></li>
                        <li class="menu-item animate-dropdown"><a title="Headphone Cases" href="product-category.html">Headphone Cases</a></li>
                        <li class="menu-item animate-dropdown"><a title="Headphones" href="product-category.html">Headphones</a></li>
                        <li class="menu-item animate-dropdown"><a title="Computer Accessories" href="product-category.html">Computer Accessories</a></li>
                        <li class="menu-item animate-dropdown"><a title="Laptop Accessories" href="product-category.html">Laptop Accessories</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>

    <div class="col-xs-12 col-lg-9">
        <nav>
            <ul id="menu-secondary-nav" class="secondary-nav">
                <li class="highlight menu-item"><a href="home-v2.html">Super Deals</a></li>
                <li class="menu-item"><a href="home-v3.html">Featured Brands</a></li>
                <li class="menu-item"><a href="home-v3-full-color-background.html">Trending Styles</a></li>
                <li class="menu-item"><a href="blog-v1.html">Gift Cards</a></li>
                <li class="pull-right menu-item"><a href="blog-v2.html">Free Shipping on Orders $50+</a></li>
            </ul>
        </nav>
    </div>
</div>