@extends('frontend.layout.main')
@section('content')
    {{-- new index homepage  --}}
    <section id="banner-slider" class="banner-slider">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active" style="background-image: url('frontend-asset/images/banner.jpg');">
                    <canvas id="canvas"></canvas>
                    <div class="carousel-caption">
                        <p class="caption-head">Best Quality Products</p>
                        <h1>Ecomfd Bamboo Toilet Tissue</h1>
                        <p class="banner-ctn">Roll | 220 Pulls</p>
                        <a href="" class="banner-btn">Shop Now</a>
                    </div>
                </div> 
                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('frontend-asset/images/banner.jpg')">
                    <div class="carousel-caption">
                        <p class="caption-head">Best Quality Products</p>
                        <h1>Ecomfd Bamboo Toilet Tissue</h1>
                        <p class="banner-ctn">Roll | 220 Pulls</p>
                        <a href="" class="banner-btn">Shop Now</a>
                    </div>
                </div> 
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"><img src="{{asset('frontend-asset/images/ban-left-btn.png')}}" class="img-fluid"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"><img src="{{asset('frontend-asset/images/ban-right-btn.png')}}" class="img-fluid"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <!-- Page Content -->
    <section id="bb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="bb-box">
                        <div class="media">
                            <img src="{{asset('frontend-asset/images/bb-icon1.png')}}" class="mr-3" alt="...">
                            <div class="media-body align-self-center">
                                <h5 class="mt-0">Free Shipping</h5>
                                <p>Above ₹500 Only</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="bb-box px-lg-2">
                        <div class="media">
                            <img src="{{asset('frontend-asset/images/bb-icon2.png')}}" class="mr-3" alt="...">
                            <div class="media-body align-self-center">
                                <h5 class="mt-0">Certified Organic</h5>
                                <p>100% Guarantee</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="bb-box px-lg-4 ml-lg-4">
                        <div class="media">
                            <img src="{{asset('frontend-asset/images/bb-icon3.png')}}" class="mr-3" alt="...">
                            <div class="media-body align-self-center">
                                <h5 class="mt-0">Huge Savings</h5>
                                <p>At Lowest Price</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="bb-box float-lg-right">
                        <div class="media">
                            <img src="{{asset('frontend-asset/images/bb-icon4.png')}}" class="mr-3" alt="...">
                            <div class="media-body align-self-center">
                                <h5 class="mt-0">Easy Returns</h5>
                                <p>No Questions Asked</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Content -->
    <section id="special-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="special-box-fst">
                        <p class="section-head">Eco Friendly</p>
                        <h3>Ancillary <span>Products</span></h3>
                        <p class="price-txt">₹ 190.00</p>
                        <a href="" class="shop-btn">Shop Now</a>
                    </div>		
                </div>
                <div class="col-lg-6">
                    <div class="special-box-snd">
                        <p class="section-head">Eco Friendly</p>
                        <h3>Facial Tissue <span>Bamboo</span></h3>
                        <p class="price-txt">₹ 190.00</p>
                        <a href="" class="shop-btn">Shop Now</a>
                    </div>		
                </div>
            </div>
        </div>
    </section>
    <!-- Page Content -->
    <section id="product-section">
        <div class="container">
           <div class="row">
              <div class="col-lg-12 text-center mb-lg-4">
                 <h2 class="hm-head">Best Selling Products</h2>
              </div>
           </div>
           <div class="row">
                @forelse ($topSelling->take(6) as $topSelling_p)
                    <div class="col-lg-3">
                        <div class="pro-box">
                            <img src="{{ asset('storage/' . $topSelling_p?->productPrimaryImage?->image_path) }}" class="img-fluid mb-lg-4" alt="...">
                            <h3>{{ $topSelling_p?->name }}</h3>
                            <p class="price-txt">₹ {{ $topSelling_p?->productVariantPrice?->price }}</p>
                            <ul class="pb-list">
                            <p><span class="fa fa-star rev-checked"></span>
                            <span class="fa fa-star rev-checked"></span>
                            <span class="fa fa-star rev-checked"></span>
                            <span class="fa fa-star rev-checked"></span>
                            <span class="fa fa-star"></span>
                            </p>
                            <a href="{{ route('singleProduct', $topSelling_p->slug) }}" class="shop-btn"><i class="fa fa-shopping-cart" aria-hidden="true"></i> View product </a>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
           <div class="row">
              <div class="col-lg-12 text-center">
                 <a href="{{ route('products') }}" class="view-btn">view all products</a>
              </div>
           </div>
        </div>
    </section>
    <!-- Page Content -->
    <section id="download-section">
      <div class="container">
          <div class="row justify-content-center">
          <div class="col-lg-7">		
          <h2>Download Our Product Catalog</h2>
          <a href="" class="banner-btn-light">Download</a>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 img-box">		
          <img src="images/down-img.png" class="img-fluid mb-lg-4" alt="...">
          </div>
        </div>
        </div>
    </section>
    <!-- Page Content -->
    <section id="testimonial-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-lg-2">
                    <h2 class="hm-head">Customer Reviews</h2>
                </div>
            </div>
              <div class="row">
                <div class="col-lg-12 mb-4">
                    <div id="demo-pranab">
                      <div id="owl-testimonial" class="owl-carousel owl-theme">     
                      <div class="item">
                      <div class="testimonial-box">
                          <div class="testimonial-box-img">
                          <i class="fa fa-quote-left" aria-hidden="true"></i>
                          </div>			
                          <div class="testimonial-box-ctn">
                          <p class="mb-0">
                <span class="fa fa-star rev-checked"></span>
                <span class="fa fa-star rev-checked"></span>
                <span class="fa fa-star rev-checked"></span>
                <span class="fa fa-star rev-checked"></span>
                <span class="fa fa-star"></span></p>
                <p class="pro-sort-desc">I've been using the EcoMfd bamboo toothbrush for a few months now, and I love it! It's sturdy, effective, and I feel good knowing I'm making an eco-friendly choice. Highly recommend it to anyone looking to reduce their plastic use.</p>
                <div class="media">
                <img src="{{asset('frontend-asset/images/ts-img.jpg')}}" class="img-fluid w-auto mr-3" alt="...">
                <div class="media-body align-self-center">
                    <h5 class="mt-0 mb-0">Priya M.</h5>
                </div>
              </div>
              </div>               
              </div>
              </div>
              <div class="item">
                      <div class="testimonial-box">
                          <div class="testimonial-box-img">
                          <i class="fa fa-quote-left" aria-hidden="true"></i>
                          </div>			
                          <div class="testimonial-box-ctn">
                          <p class="mb-0">
              <span class="fa fa-star rev-checked"></span>
              <span class="fa fa-star rev-checked"></span>
              <span class="fa fa-star rev-checked"></span>
              <span class="fa fa-star rev-checked"></span>
              <span class="fa fa-star"></span></p>
              <p class="pro-sort-desc">I've been using the EcoMfd bamboo toothbrush for a few months now, and I love it! It's sturdy, effective, and I feel good knowing I'm making an eco-friendly choice. Highly recommend it to anyone looking to reduce their plastic use.</p>
              <div class="media">
              <img src="{{asset('frontend-asset/images/ts-img.jpg')}}" class="img-fluid w-auto mr-3" alt="...">
              <div class="media-body align-self-center">
                  <h5 class="mt-0 mb-0">Priya M.</h5>
              </div>
              </div>
              </div>               
              </div>
              </div>
              <div class="item">
                      <div class="testimonial-box">
                          <div class="testimonial-box-img">
                          <i class="fa fa-quote-left" aria-hidden="true"></i>
                          </div>			
                          <div class="testimonial-box-ctn">
                          <p class="mb-0">
              <span class="fa fa-star rev-checked"></span>
              <span class="fa fa-star rev-checked"></span>
              <span class="fa fa-star rev-checked"></span>
              <span class="fa fa-star rev-checked"></span>
              <span class="fa fa-star"></span></p>
              <p class="pro-sort-desc">I've been using the EcoMfd bamboo toothbrush for a few months now, and I love it! It's sturdy, effective, and I feel good knowing I'm making an eco-friendly choice. Highly recommend it to anyone looking to reduce their plastic use.</p>
              <div class="media">
              <img src="{{asset('frontend-asset/images/ts-img.jpg')}}" class="img-fluid w-auto mr-3" alt="...">
              <div class="media-body align-self-center">
                  <h5 class="mt-0 mb-0">Priya M.</h5>
              </div>
              </div>
              </div>               
              </div>
              </div>
              <div class="item">
                      <div class="testimonial-box">
                          <div class="testimonial-box-img">
                          <i class="fa fa-quote-left" aria-hidden="true"></i>
                          </div>			
                          <div class="testimonial-box-ctn">
                          <p class="mb-0">
              <span class="fa fa-star rev-checked"></span>
              <span class="fa fa-star rev-checked"></span>
              <span class="fa fa-star rev-checked"></span>
              <span class="fa fa-star rev-checked"></span>
              <span class="fa fa-star"></span></p>
              <p class="pro-sort-desc">I've been using the EcoMfd bamboo toothbrush for a few months now, and I love it! It's sturdy, effective, and I feel good knowing I'm making an eco-friendly choice. Highly recommend it to anyone looking to reduce their plastic use.</p>
              <div class="media">
              <img src="{{asset('frontend-asset/images/ts-img.jpg')}}" class="img-fluid w-auto mr-3" alt="...">
              <div class="media-body align-self-center">
                  <h5 class="mt-0 mb-0">Priya M.</h5>
              </div>
              </div>
              </div>               
              </div>
              </div>
              <div class="item">
                      <div class="testimonial-box">
                          <div class="testimonial-box-img">
                          <i class="fa fa-quote-left" aria-hidden="true"></i>
                          </div>			
                          <div class="testimonial-box-ctn">
                          <p class="mb-0">
              <span class="fa fa-star rev-checked"></span>
              <span class="fa fa-star rev-checked"></span>
              <span class="fa fa-star rev-checked"></span>
              <span class="fa fa-star rev-checked"></span>
              <span class="fa fa-star"></span></p>
              <p class="pro-sort-desc">I've been using the EcoMfd bamboo toothbrush for a few months now, and I love it! It's sturdy, effective, and I feel good knowing I'm making an eco-friendly choice. Highly recommend it to anyone looking to reduce their plastic use.</p>
              <div class="media">
              <img src="{{asset('frontend-asset/images/ts-img.jpg')}}" class="img-fluid w-auto mr-3" alt="...">
              <div class="media-body align-self-center">
                  <h5 class="mt-0 mb-0">Priya M.</h5>
              </div>
              </div>
              </div>               
              </div>
              </div>
              <div class="item">
                      <div class="testimonial-box">
                          <div class="testimonial-box-img">
                          <i class="fa fa-quote-left" aria-hidden="true"></i>
                          </div>			
                          <div class="testimonial-box-ctn">
                          <p class="mb-0">
              <span class="fa fa-star rev-checked"></span>
              <span class="fa fa-star rev-checked"></span>
              <span class="fa fa-star rev-checked"></span>
              <span class="fa fa-star rev-checked"></span>
              <span class="fa fa-star"></span></p>
              <p class="pro-sort-desc">I've been using the EcoMfd bamboo toothbrush for a few months now, and I love it! It's sturdy, effective, and I feel good knowing I'm making an eco-friendly choice. Highly recommend it to anyone looking to reduce their plastic use.</p>
              <div class="media">
              <img src="{{asset('frontend-asset/images/ts-img.jpg')}}" class="img-fluid w-auto mr-3" alt="...">
              <div class="media-body align-self-center">
                  <h5 class="mt-0 mb-0">Priya M.</h5>
              </div>
              </div>
              </div>               
              </div>
              </div>
              <div class="item">
                      <div class="testimonial-box">
                          <div class="testimonial-box-img">
                          <i class="fa fa-quote-left" aria-hidden="true"></i>
                          </div>			
                          <div class="testimonial-box-ctn">
                          <p class="mb-0">
              <span class="fa fa-star rev-checked"></span>
              <span class="fa fa-star rev-checked"></span>
              <span class="fa fa-star rev-checked"></span>
              <span class="fa fa-star rev-checked"></span>
              <span class="fa fa-star"></span></p>
              <p class="pro-sort-desc">I've been using the EcoMfd bamboo toothbrush for a few months now, and I love it! It's sturdy, effective, and I feel good knowing I'm making an eco-friendly choice. Highly recommend it to anyone looking to reduce their plastic use.</p>
              <div class="media">
              <img src="{{asset('frontend-asset/images/ts-img.jpg')}}" class="img-fluid w-auto mr-3" alt="...">
              <div class="media-body align-self-center">
                  <h5 class="mt-0 mb-0">Priya M.</h5>
              </div>
              </div>
              </div>               
              </div>
              </div>
                      
                      </div>
                      
                      </div>
              </div>
              </div>
  
              </div>
    </section>
    <!-- Page Content -->
    <section id="welcome-section">
        <div class="container">
          <div class="row">
          <div class="col-lg-6 pr-lg-4">	
          <img src="{{asset('frontend-asset/images/wel-pic.jpg')}}" class="img-fluid">
          </div>
          <div class="col-lg-6 align-self-center pl-lg-4">
            <p class="section-head">About Us</p>		
          <h2>The Green Revolution: A Story of <span>Sustainable Transformation</span></h2>
          <p>In a bustling city where concrete jungles and pollution reigned, a visionary group emerged with a mission to change the world. This group, driven by a profound love for the environment, called themselves "EcoMfd Sustainable Wellness." </p>
          <a href="" class="shop-btn">know more about us</a>
          </div>
        </div>
        </div>
    </section>	

@endsection
