@extends('frontend.layout.main')
@section('content')
    <section class="banner-slider" id="inn-banner-slider">
        <div data-ride="carousel" class="carousel slide" id="carouselExampleIndicators">
            <div role="listbox" class="carousel-inner">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div style="background-image: url('{{asset('frontend-asset/images/inn-banner.jpg')}}')" class="carousel-item active">
                </div>
            </div>
        </div>
    </section>
    <!-- Page Content -->

    {{-- <section id="line-section"> </section>

    <section id="inn-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-3">
                    <h2>All Products</h2>
                </div>
            </div>
            <div class="row">

                @forelse ($allProducts as $product)
                    <div class="col-lg-3">
                        <div class="product-box border-box mb-4">
                            <div class="product-box-img box-wrap">
                                <div class="box">
                                    <div class="img">
                                        <img src="{{ asset('storage/' . $product?->productPrimaryImage?->image_path) }}"
                                            alt="hover effect">
                                        <img src="{{ asset('storage/' . $product?->productPrimaryImage?->image_path) }}"
                                            alt="hover effect">
                                    </div>
                                </div>
                            </div>
                            <div class="product-box-ctn">
                                <h4>{{$product?->name}}</h4>
                                <p class="pro-sort-desc">{{ Str::limit($product->description, 50, '...') }}.</p>
                                <ul class="pb-list">
                                    <li class="pro-box-review">
                                        <span class="fa fa-star rev-checked"></span>
                                        <span class="fa fa-star rev-checked"></span>
                                        <span class="fa fa-star rev-checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span><a href="">10Reviews</a></span>
                                    <li>
                                </ul>
                                <p class="pro-box-price">₹{{$product->productVariantPrice?->price}}</p>
                                <a href="{{route("singleProduct", $product->slug)}}" class="sp-btn">Shop Now</a>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </section> --}}

	{{--  new product pages --}}

	<section id="inn-section">
		<div class="container">
		   <div class="row">
			  <div class="col-lg-12 text-center mb-lg-4">
				 <h2 class="hm-head">
                    @if (Route::is('products'))
                        All Products
                    @else
                        Product Category
                    @endif
                </h2>
			  </div>
		   </div>
		   <div class="row">
				@forelse ($allProducts as $product)
					<div class="col-3">
					  	<div class="pro-box">
							<img src="{{ asset('storage/' . $product?->productPrimaryImage?->image_path) }}" class="img-fluid mb-lg-4" alt="...">
							<h3>{{$product?->name}}</h3>
							<p class="price-txt">₹ {{$product->productVariantPrice?->price}}</p>
							<ul class="pb-list">
							<p><span class="fa fa-star rev-checked"></span>
							<span class="fa fa-star rev-checked"></span>
							<span class="fa fa-star rev-checked"></span>
							<span class="fa fa-star rev-checked"></span>
							<span class="fa fa-star"></span>
							</p>
							<a href="{{route("singleProduct", $product->slug)}}" class="shop-btn"><i class="fa fa-shopping-cart" aria-hidden="true"></i> View Product</a>
					  	</div>
					</div>
                @empty
                @endforelse
		   </div>
		</div>
	</section>


    <section id="line2-section"> </section>

    <script src="js/script.js" defer></script>
    <script src="owl-carousel/js/owl.carousel.js"></script>
    <!-- End Owl pranab-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script>
        //$(".box").on("mouseover",function(){}).on("mouseout",function(){});
        $(".box").on({
            mouseover: function() {
                $(this).find("img:nth-child(1)").stop().animate({
                    opacity: 0
                }, 600);
                $(this).find("img:nth-child(2)").stop().animate({
                    opacity: 1
                }, 600);
            },
            mouseout: function() {
                $(this).find("img:nth-child(1)").stop().animate({
                    opacity: 1
                }, 600);
                $(this).find("img:nth-child(2)").stop().animate({
                    opacity: 0
                }, 600);
            }
        });
    </script>
@endsection
