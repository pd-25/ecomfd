@extends('frontend.layout.main')
@section('content')
    {{-- <section id="banner-slider" class="banner-slider">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active" style="background-image: url('/frontend-asset/images/banner.jpg');">
                    <canvas id="canvas"></canvas>
                    <div class="carousel-caption">
                        <h1><span>100%</span> Organic Food</h1>
                        <p class="banner-ctn">Our organic food products are not only delicious but also offer double
                            immune support.</p>
                        <a href="" class="banner-btn">Shop Now</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section id="line-section"> </section>
    <section id="category-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-4">
                    <div id="demo-pranab">
                        <div id="owl-category" class="owl-carousel owl-theme">
                            @forelse ($categories as $category)
                                <div class="item">
                                    <div class="category-box">
                                        <img src="{{ asset('frontend-asset/images/cat-pic1.png') }}" class="img-fluid">
                                        <h4><a href="" class="rm-btn-sm">{{ $category->name }}</a></h4>
                                    </div>
                                </div>
                                @empty
                                <div class="item">
                                    <div class="category-box">
                                        <p>No Category found</p>
                                    </div>
                                </div>
                            @endforelse


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="product-heading-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-3">
                    <h2>Most Popular Products</h2>
                </div>
            </div>

        </div>
    </section>
    <section id="product-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="portfolio-menu mt-2 mb-4">
                        <ul>
                            <li class="btn btn-outline-dark active" data-filter="*">All Products</li>
                            @forelse ($categories as $category_w)
                                <li class="btn btn-outline-dark" data-filter=".category{{ $category_w->id }}">
                                    {{ $category_w->name }}</li>
                            @empty
                                <li>no category found</li>
                            @endforelse

                            <!-- <li class="btn btn-outline-dark" data-filter=".category2">Organic Oil</li>
                            <li class="btn btn-outline-dark" data-filter=".category3">Organic Dry Fruits</li>
                            <li class="btn btn-outline-dark" data-filter=".category4">Sugar, Salt & Jaggery</li> -->
                        </ul>
                    </div>
                </div>
            </div>
            <div class="portfolio-item row">
                @forelse ($products as $productW)
                    <div class="item category{{ $productW->category_id }} col-lg-3 col-md-3 col-12 col-sm">
                        <div class="product-box">
                            <div class="product-box-img">
                                <img src="{{ asset('storage/' . $productW?->productPrimaryImage?->image_path) }}"
                                    class="img-fluid">
                            </div>
                            <div class="product-box-ctn">
                                <h4>{{ $productW->name }}</h4>
                                <p class="pro-sort-desc">{{ Str::limit($productW->description, 50, '...') }}</p>
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
                                <p class="pro-box-price">₹{{ $productW?->productVariantPrice?->price }}</p>
                                <a href="{{ route('singleProduct', $productW->slug) }}" class="sp-btn">Shop Now</a>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse

                <!-- <div class="item category1 col-lg-3 col-md-3 col-12 col-sm">
                    <div class="product-box">
                        <div class="product-box-img">
                            <img src="{{ asset('frontend-asset/images/pro-img.jpg') }}" class="img-fluid">
                        </div>
                        <div class="product-box-ctn">
                            <h4>Jaggery Powder</h4>
                            <p class="pro-sort-desc">Our organic food products are certified organic by recognized
                                certification agencies.</p>
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
                            <p class="pro-box-price">₹90.00</p>
                            <a href="" class="sp-btn">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="item category3 col-lg-3 col-md-3 col-12 col-sm">
                    <div class="product-box">
                        <div class="product-box-img">
                            <img src="{{ asset('frontend-asset/images/pro-img.jpg') }}" class="img-fluid">
                        </div>
                        <div class="product-box-ctn">
                            <h4>Jaggery Powder</h4>
                            <p class="pro-sort-desc">Our organic food products are certified organic by recognized
                                certification agencies.</p>
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
                            <p class="pro-box-price">₹90.00</p>
                            <a href="" class="sp-btn">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="item category4 col-lg-3 col-md-3 col-12 col-sm">
                    <div class="product-box">
                        <div class="product-box-img">
                            <img src="{{ asset('frontend-asset/images/pro-img.jpg') }}" class="img-fluid">
                        </div>
                        <div class="product-box-ctn">
                            <h4>Jaggery Powder</h4>
                            <p class="pro-sort-desc">Our organic food products are certified organic by recognized
                                certification agencies.</p>
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
                            <p class="pro-box-price">₹90.00</p>
                            <a href="" class="sp-btn">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="item category2 col-lg-3 col-md-3 col-12 col-sm">
                    <div class="product-box">
                        <div class="product-box-img">
                            <img src="{{ asset('frontend-asset/images/pro-img.jpg') }}" class="img-fluid">
                        </div>
                        <div class="product-box-ctn">
                            <h4>Jaggery Powder</h4>
                            <p class="pro-sort-desc">Our organic food products are certified organic by recognized
                                certification agencies.</p>
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
                            <p class="pro-box-price">₹90.00</p>
                            <a href="" class="sp-btn">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="item category3 col-lg-3 col-md-3 col-12 col-sm">
                    <div class="product-box">
                        <div class="product-box-img">
                            <img src="{{ asset('frontend-asset/images/pro-img.jpg') }}" class="img-fluid">
                        </div>
                        <div class="product-box-ctn">
                            <h4>Jaggery Powder</h4>
                            <p class="pro-sort-desc">Our organic food products are certified organic by recognized
                                certification agencies.</p>
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
                            <p class="pro-box-price">₹90.00</p>
                            <a href="" class="sp-btn">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="item category4 col-lg-3 col-md-3 col-12 col-sm">
                    <div class="product-box">
                        <div class="product-box-img">
                            <img src="{{ asset('frontend-asset/images/pro-img.jpg') }}" class="img-fluid">
                        </div>
                        <div class="product-box-ctn">
                            <h4>Jaggery Powder</h4>
                            <p class="pro-sort-desc">Our organic food products are certified organic by recognized
                                certification agencies.</p>
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
                            <p class="pro-box-price">₹90.00</p>
                            <a href="" class="sp-btn">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="item category1 col-lg-3 col-md-3 col-12 col-sm">
                    <div class="product-box">
                        <div class="product-box-img">
                            <img src="{{ asset('frontend-asset/images/pro-img.jpg') }}" class="img-fluid">
                        </div>
                        <div class="product-box-ctn">
                            <h4>Jaggery Powder</h4>
                            <p class="pro-sort-desc">Our organic food products are certified organic by recognized
                                certification agencies.</p>
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
                            <p class="pro-box-price">₹90.00</p>
                            <a href="" class="sp-btn">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="item category2 col-lg-3 col-md-3 col-12 col-sm">
                    <div class="product-box">
                        <div class="product-box-img">
                            <img src="{{ asset('frontend-asset/images/pro-img.jpg') }}" class="img-fluid">
                        </div>
                        <div class="product-box-ctn">
                            <h4>Jaggery Powder</h4>
                            <p class="pro-sort-desc">Our organic food products are certified organic by recognized
                                certification agencies.</p>
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
                            <p class="pro-box-price">₹90.00</p>
                            <a href="" class="sp-btn">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="item category1 col-lg-3 col-md-3 col-12 col-sm">
                    <div class="product-box">
                        <div class="product-box-img">
                            <img src="{{ asset('frontend-asset/images/pro-img.jpg') }}" class="img-fluid">
                        </div>
                        <div class="product-box-ctn">
                            <h4>Jaggery Powder</h4>
                            <p class="pro-sort-desc">Our organic food products are certified organic by recognized
                                certification agencies.</p>
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
                            <p class="pro-box-price">₹90.00</p>
                            <a href="" class="sp-btn">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="item category4 col-lg-3 col-md-3 col-12 col-sm">
                    <div class="product-box">
                        <div class="product-box-img">
                            <img src="{{ asset('frontend-asset/images/pro-img.jpg') }}" class="img-fluid">
                        </div>
                        <div class="product-box-ctn">
                            <h4>Jaggery Powder</h4>
                            <p class="pro-sort-desc">Our organic food products are certified organic by recognized
                                certification agencies.</p>
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
                            <p class="pro-box-price">₹90.00</p>
                            <a href="" class="sp-btn">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="item category3 col-lg-3 col-md-3 col-12 col-sm">
                    <div class="product-box">
                        <div class="product-box-img">
                            <img src="{{ asset('frontend-asset/images/pro-img.jpg') }}" class="img-fluid">
                        </div>
                        <div class="product-box-ctn">
                            <h4>Jaggery Powder</h4>
                            <p class="pro-sort-desc">Our organic food products are certified organic by recognized
                                certification agencies.</p>
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
                            <p class="pro-box-price">₹90.00</p>
                            <a href="" class="sp-btn">Shop Now</a>
                        </div>
                    </div>
                </div> -->

            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <a href="{{ route('products') }}" class="sp-btn-snd">view all products</a>
                </div>
            </div>

        </div>
    </section>
    <section id="register-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h2>Trusted By<br> 5,000+ Families.</h2>
                    <p>100% Chemical-free Pure<br> Organic Product Today</p>
                    <a href="{{ route('register') }}" class="sp-dark-btn">Registger Now</a>
                </div>
            </div>
        </div>
    </section>
    <section id="line-section"> </section>
    <section id="top-sell-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-4">
                    <h2>Top Selling Products</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 mb-4">
                    <div id="demo-pranab">
                        <div id="owl-top-sell-one" class="owl-carousel owl-theme">
                            @forelse ($topSelling->take(6) as $topSelling_p)
                                <div class="item">
                                    <div class="product-box border-box">
                                        <div class="product-box-img">
                                            <img src="{{ asset('storage/' . $topSelling_p?->productPrimaryImage?->image_path) }}"
                                                class="img-fluid">
                                        </div>
                                        <div class="product-box-ctn">
                                            <h4>{{ $topSelling_p?->name }}</h4>
                                            <p class="pro-sort-desc">
                                                {{ Str::limit($topSelling_p->description, 50, '...') }}.</p>
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
                                            <p class="pro-box-price">₹{{ $topSelling_p?->productVariantPrice?->price }}</p>
                                            <a href="{{ route('singleProduct', $topSelling_p->slug) }}" class="sp-btn">Shop
                                                Now</a>
                                        </div>
                                    </div>
                                </div>
                            @empty
                            @endforelse

                            <!-- <div class="item">
                                <div class="product-box border-box">
                                    <div class="product-box-img">
                                        <img src="{{ asset('frontend-asset/images/pro-img.jpg') }}" class="img-fluid">
                                    </div>
                                    <div class="product-box-ctn">
                                        <h4>Jaggery Powder</h4>
                                        <p class="pro-sort-desc">Our organic food products are certified organic by
                                            recognized certification agencies.</p>
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
                                        <p class="pro-box-price">₹90.00</p>
                                        <a href="" class="sp-btn">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-box border-box">
                                    <div class="product-box-img">
                                        <img src="{{ asset('frontend-asset/images/pro-img.jpg') }}" class="img-fluid">
                                    </div>
                                    <div class="product-box-ctn">
                                        <h4>Jaggery Powder</h4>
                                        <p class="pro-sort-desc">Our organic food products are certified organic by
                                            recognized certification agencies.</p>
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
                                        <p class="pro-box-price">₹90.00</p>
                                        <a href="" class="sp-btn">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-box border-box">
                                    <div class="product-box-img">
                                        <img src="{{ asset('frontend-asset/images/pro-img.jpg') }}" class="img-fluid">
                                    </div>
                                    <div class="product-box-ctn">
                                        <h4>Jaggery Powder</h4>
                                        <p class="pro-sort-desc">Our organic food products are certified organic by
                                            recognized certification agencies.</p>
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
                                        <p class="pro-box-price">₹90.00</p>
                                        <a href="" class="sp-btn">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-box border-box">
                                    <div class="product-box-img">
                                        <img src="{{ asset('frontend-asset/images/pro-img.jpg') }}" class="img-fluid">
                                    </div>
                                    <div class="product-box-ctn">
                                        <h4>Jaggery Powder</h4>
                                        <p class="pro-sort-desc">Our organic food products are certified organic by
                                            recognized certification agencies.</p>
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
                                        <p class="pro-box-price">₹90.00</p>
                                        <a href="" class="sp-btn">Shop Now</a>
                                    </div>
                                </div>
                            </div> -->



                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 mb-4">
                    <div id="demo-pranab">
                        <div id="owl-top-sell-two" class="owl-carousel owl-theme">
                            @forelse ($topSelling->skip(6) as $topSellingS)
                                <div class="item">
                                    <div class="product-box border-box">
                                        <div class="product-box-img">
                                            <img src="{{ asset('storage/' . $topSellingS?->productPrimaryImage?->image_path) }}"
                                                class="img-fluid">
                                        </div>
                                        <div class="product-box-ctn">
                                            <h4>{{ $topSellingS?->name }}</h4>
                                            <p class="pro-sort-desc">
                                                {{ Str::limit($topSellingS->description, 50, '...') }}.</p>
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
                                            <p class="pro-box-price">₹{{ $topSellingS?->productVariantPrice?->price }}
                                            </p>
                                            <a href="{{ route('singleProduct', $topSellingS->slug) }}"
                                                class="sp-btn">Shop
                                                Now</a>
                                        </div>
                                    </div>
                                </div>
                            @empty
                            @endforelse
                            <!-- <div class="item">
                                <div class="product-box border-box">
                                    <div class="product-box-img">
                                        <img src="{{ asset('frontend-asset/images/pro-img.jpg') }}" class="img-fluid">
                                    </div>
                                    <div class="product-box-ctn">
                                        <h4>Jaggery Powder</h4>
                                        <p class="pro-sort-desc">Our organic food products are certified organic by
                                            recognized certification agencies.</p>
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
                                        <p class="pro-box-price">₹90.00</p>
                                        <a href="" class="sp-btn">Shop Now</a>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="item">
                                <div class="product-box border-box">
                                    <div class="product-box-img">
                                        <img src="{{ asset('frontend-asset/images/pro-img.jpg') }}" class="img-fluid">
                                    </div>
                                    <div class="product-box-ctn">
                                        <h4>Jaggery Powder</h4>
                                        <p class="pro-sort-desc">Our organic food products are certified organic by
                                            recognized certification agencies.</p>
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
                                        <p class="pro-box-price">₹90.00</p>
                                        <a href="" class="sp-btn">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-box border-box">
                                    <div class="product-box-img">
                                        <img src="{{ asset('frontend-asset/images/pro-img.jpg') }}" class="img-fluid">
                                    </div>
                                    <div class="product-box-ctn">
                                        <h4>Jaggery Powder</h4>
                                        <p class="pro-sort-desc">Our organic food products are certified organic by
                                            recognized certification agencies.</p>
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
                                        <p class="pro-box-price">₹90.00</p>
                                        <a href="" class="sp-btn">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-box border-box">
                                    <div class="product-box-img">
                                        <img src="{{ asset('frontend-asset/images/pro-img.jpg') }}" class="img-fluid">
                                    </div>
                                    <div class="product-box-ctn">
                                        <h4>Jaggery Powder</h4>
                                        <p class="pro-sort-desc">Our organic food products are certified organic by
                                            recognized certification agencies.</p>
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
                                        <p class="pro-box-price">₹90.00</p>
                                        <a href="" class="sp-btn">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-box border-box">
                                    <div class="product-box-img">
                                        <img src="{{ asset('frontend-asset/images/pro-img.jpg') }}" class="img-fluid">
                                    </div>
                                    <div class="product-box-ctn">
                                        <h4>Jaggery Powder</h4>
                                        <p class="pro-sort-desc">Our organic food products are certified organic by
                                            recognized certification agencies.</p>
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
                                        <p class="pro-box-price">₹90.00</p>
                                        <a href="" class="sp-btn">Shop Now</a>
                                    </div>
                                </div>
                            </div> -->



                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <a href="{{ route('products') }}" class="sp-btn-snd">view all products</a>
                </div>
            </div>

        </div>
    </section>
    <section id="about-bg-section"></section>
    <section id="welcome-section">
        <div class="container">
            <div class="row justify-content-center about-box">
                <div class="col-lg-5">
                    <h2>About Our Company</h2>
                    <p>We specialize in producing tasty, healthy, wholesome, and nutritious organic food products that
                        are dedicated to better eating for better living.</p>
                    <a href="{{ route('aboutUs') }}" class="banner-btn">know more about us</a>
                </div>
            </div>
        </div>
    </section>
    <section id="wcu-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-4">
                    <h2>Why Choose Us</h2>
                </div>
                <div class="col-lg-3">
                    <div class="category-box">
                        <img src="{{ asset('frontend-asset/images/wcu-img1.png') }}" class="img-fluid m-auto pb-4">
                        <h4>Harvested With Care</h4>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="category-box">
                        <img src="{{ asset('frontend-asset/images/wcu-img2.png') }}" class="img-fluid m-auto pb-4">
                        <h4>Good Clean Green Nutrition</h4>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="category-box">
                        <img src="{{ asset('frontend-asset/images/wcu-img3.png') }}" class="img-fluid m-auto pb-4">
                        <h4>Expert Approved</h4>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="category-box">
                        <img src="{{ asset('frontend-asset/images/wcu-img4.png') }}" class="img-fluid m-auto pb-4">
                        <h4>Organic Certified Nutrition</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center mt-4">
                    <a href="{{ route('aboutUs') }}" class="sp-btn-snd">Know More</a>
                </div>
            </div>
        </div>
    </section>
    <section id="line2-section"> </section>
    <section id="video-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-4">
                    <h2>Our Videos</h2>
                </div>
                <div class="col-lg-6">
                    <div class="video-box">
                        <iframe width="100%" height="320" src="https://www.youtube.com/embed/8PmM6SUn7Es"
                            title="Is Organic Really Better? Healthy Food or Trendy Scam?" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="video-box">
                        <iframe width="100%" height="320" src="https://www.youtube.com/embed/8PmM6SUn7Es"
                            title="Is Organic Really Better? Healthy Food or Trendy Scam?" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                    </div>
                </div>

            </div>
    </section>
    <section id="line-section"> </section>
    <section id="faq-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="faq-ctn-box">
                        <h2 class="text-center mb-4">Frequently Asked Questions</h2>
                        <div class="accordion-wrapper">
                            <div class="accordion">
                                <input type="radio" name="radio-a" id="check1">
                                <label class="accordion-label" for="check1">How to make homemade chili peanut
                                    oil?</label>
                                <div class="accordion-content">
                                    <p>Maecenas placerat lorem at odio pretium, eu pulvinar lectus sodales. Ut at libero
                                        quis lacus aliquam facilisis. Aliquam lacus velit, semper ac velit consectetur,
                                        tincidunt viverra lectus. Duis cursus ex at lorem ullamcorper ornare.</p>
                                </div>
                            </div>
                            <div class="accordion">
                                <input type="radio" name="radio-a" id="check2">
                                <label class="accordion-label" for="check2">Why 10 comfortable foods to enjoy during the
                                    rainy season?</label>
                                <div class="accordion-content">
                                    <p>Nam semper arcu ut sem pharetra, a lobortis ante aliquet. Lorem ipsum dolor sit
                                        amet, consectetur adipiscing elit. Suspendisse non ipsum lacinia, tempus augue
                                        quis, gravida velit. Ut nibh arcu, interdum at placerat eu, bibendum in mi. </p>
                                </div>
                            </div>
                            <div class="accordion">
                                <input type="radio" name="radio-a" id="check3">
                                <label class="accordion-label" for="check3">What are the esential kitchen care tips to
                                    keep your space fresh and hygenic?</label>
                                <div class="accordion-content">
                                    <p>Nam semper arcu ut sem pharetra, a lobortis ante aliquet. Lorem ipsum dolor sit
                                        amet, consectetur adipiscing elit. Suspendisse non ipsum lacinia, tempus augue
                                        quis, gravida velit. Ut nibh arcu, interdum at placerat eu, bibendum in mi</p>
                                </div>
                            </div>
                            <div class="accordion">
                                <input type="radio" name="radio-a" id="check4">
                                <label class="accordion-label" for="check4">Whole wheat flour vs regular wheat flour-
                                    what’s the healthier?</label>
                                <div class="accordion-content">
                                    <p>Nam semper arcu ut sem pharetra, a lobortis ante aliquet. Lorem ipsum dolor sit
                                        amet, consectetur adipiscing elit. Suspendisse non ipsum lacinia, tempus augue
                                        quis, gravida velit. Ut nibh arcu, interdum at placerat eu, bibendum in mi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="line2-section"> </section> --}}

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
                            <a href="{{ route('singleProduct', $topSelling_p->slug) }}" class="shop-btn"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add To Cart</a>
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
