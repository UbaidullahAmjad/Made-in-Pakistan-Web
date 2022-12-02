<div class="hs-mega-menu vmm-tfw u-header__sub-menu"
                                     aria-labelledby="basicMegaMenu" style="display: none;">
                                    <div class="vmm-bg">
                                        <!-- <img class="img-fluid" src="assets/img/500X400/img1.png" alt="Image Description"> -->
                                    </div>
                                    <div class="row u-header__mega-menu-wrapper">
                                        
                                        <div class="col mb-3 mb-sm-0">
                                            <span class="u-header__sub-menu-title">{{ $childCategory->name }}</span>
                                            @if ($child_category->categories)
                                                <ul>
												
                                                    @foreach ($child_category->categories as $childCategory)
												<li>$childCategory->name</li>
                                                        @include('frontend.partials.subcategories', ['child_category' => $childCategory])
                                                    @endforeach
                                                </ul>
                                            @endif
                                            

                                        </div>
                                        <div class="col mb-3 mb-sm-0">
                                            <span class="u-header__sub-menu-title">Lenovo</span>

                                            <ul class="u-header__sub-menu-nav-group mb-3">
                                            </ul>


                                        </div>
                                    </div>
                                </div>