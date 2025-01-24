@extends('frontend.layout.main')
@section('content')
{{-- <section class="banner-slider" id="inn-banner-slider">
    <div data-ride="carousel" class="carousel slide" id="carouselExampleIndicators">
        <div role="listbox" class="carousel-inner">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div style="background-image: url('/frontend-asset/images/inn-banner.jpg')" class="carousel-item active">
            </div>
        </div>
    </div>
</section>
<!-- Page Content -->
<section id="line-section"> </section>
<section id="inn-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <h2 class="mb-4">About Us</h2>
                <h3>What is Origayen Agro?</h3>
                <p>Origayen Agro is an Organic food manufacturer company. We Inspired by nature and a love for
                    animals . Origayen produces several kinds of products that are testy, healthy, wholesome and
                    nutrition. We are mindset dedicated to better eating for better living. All Origayen Agro
                    products are manufactured at West Bengal in India by the Gayen Family. This organic venture has
                    been started by the two agriculturists Son & Father RAJIB GAYEN and NETAI PADA GAYEN in the year
                    2022. </p>
            </div>
            <div class="col-lg-5 align-self-center">
                <img src="{{asset('frontend-asset/images/about-pic.jpg')}}" class="img-fluid">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5 align-self-center">
                <img src="{{asset('frontend-asset/images/miss-img.jpg')}}" class="img-fluid">
            </div>
            <div class="col-lg-7">
                <h3>Our Mission</h3>
                <p>Suspendisse egestas lorem sed bibendum malesuada. Nulla a turpis sem. Aliquam eget aliquet felis.
                    Nam interdum libero id vulputate vestibulum. Phasellus maximus tellus vel felis luctus congue.
                    Suspendisse non iaculis massa. Vivamus semper lobortis efficitur. Vestibulum velit tortor,
                    aliquet id venenatis a, commodo sed risus. Nam ligula augue, vehicula et nulla eu, commodo
                    vehicula tellus. Donec sit amet gravida mauris. Vestibulum pharetra neque orci, id vulputate
                    arcu sodales vel. Phasellus nibh sem, porttitor quis arcu vitae, interdum tempus leo. Vestibulum
                    mattis sagittis eros, sit amet accumsan ligula auctor sed. Pellentesque nec lacus non dolor
                    maximus volutpat vitae vel nisl. Sed lacinia in elit sit amet vehicula. Etiam eu rutrum magna.
                    Sed semper libero nulla, at laoreet libero cursus at. </p>
            </div>

        </div>
        <hr>
        <div class="row">
            <div class="col-lg-7">
                <h3>Our Impact</h3>
                <p> Suspendisse egestas lorem sed bibendum malesuada. Nulla a turpis sem. Aliquam eget aliquet
                    felis. Nam interdum libero id vulputate vestibulum. Phasellus maximus tellus vel felis luctus
                    congue. Suspendisse non iaculis massa. Vivamus semper lobortis efficitur. Vestibulum velit
                    tortor, aliquet id venenatis a, commodo sed risus. Nam ligula augue, vehicula et nulla eu,
                    commodo vehicula tellus. Donec sit amet gravida mauris. Vestibulum pharetra neque orci, id
                    vulputate arcu sodales vel. Phasellus nibh sem, porttitor quis arcu vitae, interdum tempus leo.
                    Vestibulum mattis sagittis eros, sit amet accumsan ligula auctor sed. Pellentesque nec lacus non
                    dolor maximus volutpat vitae vel nisl. Sed lacinia in elit sit amet vehicula. Etiam eu rutrum
                    magna. Sed semper libero nulla, at laoreet libero cursus at. </p>
            </div>
            <div class="col-lg-5 align-self-center">
                <img src="{{asset('frontend-asset/images/imp-img.jpg')}}" class="img-fluid">
            </div>
        </div>

        <hr>

        <div class="row mt-5">
            <div class="col-lg-12 mb-4 text-center">
                <h2>Our Team</h2>
            </div>
            <div class="col-lg-4">
                <div class="hover01 column">
                    <div>
                        <figure><img src="{{asset('frontend-asset/images/user-pic.jpg')}}" /></figure>
                        <span><b>Full Name</b><br>Designation</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="hover01 column">
                    <div>
                        <figure><img src="{{asset('frontend-asset/images/user-pic.jpg')}}" /></figure>
                        <span><b>Full Name</b><br>Designation</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="hover01 column">
                    <div>
                        <figure><img src="{{asset('frontend-asset/images/user-pic.jpg')}}" /></figure>
                        <span><b>Full Name</b><br>Designation</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="hover01 column">
                    <div>
                        <figure><img src="{{asset('frontend-asset/images/user-pic.jpg')}}" /></figure>
                        <span><b>Full Name</b><br>Designation</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="hover01 column">
                    <div>
                        <figure><img src="{{asset('frontend-asset/images/user-pic.jpg')}}" /></figure>
                        <span><b>Full Name</b><br>Designation</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="hover01 column">
                    <div>
                        <figure><img src="{{asset('frontend-asset/images/user-pic.jpg')}}" /></figure>
                        <span><b>Full Name</b><br>Designation</span>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section> 
<section id="line2-section"> </section>--}}

 {{-- new about us blade  --}}
 <section class="banner-slider" id="inn-banner-slider">
    <div data-ride="carousel" class="carousel slide" id="carouselExampleIndicators">
       <div role="listbox" class="carousel-inner">
          <div style="background-image: url('frontend-asset/images/inn-banner.jpg')" class="carousel-item active">
          </div>
       </div>
    </div>
 </section>
 <section id="inn-section" class="mb-lg-5">
    <div class="container">
       <div class="row">
          <div class="col-lg-7">
             <p class="section-head">Our Story</p>
             <h2>About Us</h2>
             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sed nisi et justo mattis tempus. In mollis mattis viverra. Praesent eget magna est. Vestibulum efficitur rhoncus enim nec efficitur. Donec bibendum euismod magna, sed imperdiet eros maximus sed. Nullam sed orci eget enim accumsan mollis. Pellentesque vehicula vulputate urna id accumsan. Nunc vel purus magna. Sed vulputate mi dolor, vitae tristique mauris vulputate eu. Vivamus massa justo, fringilla malesuada ex et, tincidunt rhoncus felis. Aliquam consequat interdum quam, a suscipit justo efficitur pretium. Maecenas a efficitur justo, eget elementum sapien. Ut imperdiet pretium egestas. Suspendisse quis consectetur purus. </p>
             <p>Aenean luctus magna gravida nisi luctus, ac iaculis nunc porttitor. Nunc ullamcorper et metus quis efficitur. Curabitur a purus convallis, eleifend tortor et, porttitor neque. Mauris facilisis venenatis nisl quis pharetra. Sed gravida nulla vel mattis aliquam. Quisque ut scelerisque urna. Aliquam non ex ac nisi finibus cursus. </p>
          </div>
          <div class="col-lg-5 align-self-center">
             <img src="{{asset('frontend-asset/images/wel-pic.jpg')}}" class="img-fluid">
          </div>
       </div>
    </div>
 </section>

@endsection