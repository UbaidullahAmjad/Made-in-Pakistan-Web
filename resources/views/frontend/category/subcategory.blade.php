<!-- Nav Item - Mega Menu -->
<div class="hs-mega-menu vmm-tfw u-header__sub-menu" aria-labelledby="basicMegaMenu">
    <div class="vmm-bg">
        <img class="img-fluid" src="assets/img/500X400/img1.png" alt="Image Description">
    </div>
    <div class="row u-header__mega-menu-wrapper">
        <div class="col mb-3 mb-sm-0">
            <span class="u-header__sub-menu-title">{{ $child_category->name }}</span>
            
                <ul>
                    @foreach ($child_category as $childCategory)
                    <span class="u-header__sub-menu-title">{{ $child_category->name }}</span>
                        {{-- @include('frontend.category.subcategory', ['child_category' => $childCategory]) --}}
                    @endforeach
                </ul>
            
        </div>

        <div class="col mb-3 mb-sm-0">
            <span class="u-header__sub-menu-title">Office &
                Stationery</span>
            <ul class="u-header__sub-menu-nav-group">
                <li><a class="nav-link u-header__sub-menu-nav-link" href="#">All Office & Stationery</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Nav Item - Mega Menu -->
