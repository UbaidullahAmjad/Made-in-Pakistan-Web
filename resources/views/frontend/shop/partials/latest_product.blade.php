<div class="mb-8">
    <div class="border-bottom border-color-1 mb-5">
        <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Latest Products</h3>
    </div>
    <ul class="list-unstyled">
        @foreach ($latest as $product)
        <li class="mb-4">
            <div class="row">
                <div class="col-auto">
                    <a href="../shop/single-product-fullwidth.html" class="d-block width-75">
                        <img class="img-fluid" 
                        
                        
                        @foreach ($product->pictures as $image)
                        src="{{ asset('/product-images/' .$image->url )}}"    
                        @endforeach
                            alt="Image Description"
                            width="300" 
                            height="300">
                    </a>
                </div>
                <div class="col">
                    <h3 class="text-lh-1dot2 font-size-14 mb-0"><a
                            href="{{url('productDetail',$product->id)}}">{{$product->name}}</a></h3>
                    <div class="text-warning text-ls-n2 font-size-16 mb-1" style="width: 80px;">
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star"></small>
                        <small class="far fa-star text-muted"></small>
                    </div>
                    <div class="font-weight-bold">
                        <!--<del class="font-size-11 text-gray-9 d-block">Rs.&nbsp{{ $product->min_price }}</del>-->
                        <ins class="font-size-15 text-red text-decoration-none d-block">Rs.&nbsp{{ $product->min_price }}-{{ $product->max_price }}</ins>
                    </div>
                </div>
            </div>
        </li>    
        @endforeach
    </ul>
</div>