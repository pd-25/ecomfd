@extends('frontend.layout.main')
@section('content')

<section class="banner-slider" id="inn-banner-slider">
  <div data-ride="carousel" class="carousel slide" id="carouselExampleIndicators">
    <div role="listbox" class="carousel-inner">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div style="background-image: url('frontend-asset/images/inn-banner.jpg')" class="carousel-item active">
      </div>
    </div>
  </div>
</section>
<!-- Page Content -->

{{-- <section id="line-section"> </section>

<section id="inn-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="mb-4">Terms & Conditions</h2>
        <p>Because of its importance, there are 5 main reasons why you should have a Terms and Conditions agreement: to
          prevent abuses, to protect your creative content, to terminate accounts, to limit your legal liability and to
          set your governing law. This article will look further into each of these reasons why you should have a Terms
          and Conditions agreement.</p>
      </div>
    </div>
  </div>
</section>

<section id="line2-section"> </section>

<script src="js/script.js" defer></script>
<script src="owl-carousel/js/owl.carousel.js"></script> --}}

{{-- new terms and condiftion  --}}
<section id="inn-section">
  <div class="container">
     <div class="row">
        <div class="col-lg-12 text-center mb-lg-4">
           <h2 class="hm-head">Terms & Conditions</h2>
        </div>
     </div>
     <div class="row justify-content-center">
        <div class="col-lg-12 text-center">
           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sed nisi et justo mattis tempus. In mollis mattis viverra. Praesent eget magna est. Vestibulum efficitur rhoncus enim nec efficitur. Donec bibendum euismod magna, sed imperdiet eros maximus sed. Nullam sed orci eget enim accumsan mollis. Pellentesque vehicula vulputate urna id accumsan. Nunc vel purus magna. Sed vulputate mi dolor, vitae tristique mauris vulputate eu. Vivamus massa justo, fringilla malesuada ex et, tincidunt rhoncus felis. Aliquam consequat interdum quam, a suscipit justo efficitur pretium. Maecenas a efficitur justo, eget elementum sapien. Ut imperdiet pretium egestas. Suspendisse quis consectetur purus.</p>
           <p>Aenean luctus magna gravida nisi luctus, ac iaculis nunc porttitor. Nunc ullamcorper et metus quis efficitur. Curabitur a purus convallis, eleifend tortor et, porttitor neque. Mauris facilisis venenatis nisl quis pharetra. Sed gravida nulla vel mattis aliquam. Quisque ut scelerisque urna. Aliquam non ex ac nisi finibus cursus. </p>
        </div>
     </div>
  </div>
</section>

@endsection