{{-- <footer id="main_footer">

<div id="top-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 fst-footer">
                <img src="{{asset('frontend-asset/images/logo.png')}}" class="img-fluid mb-3">
                <ul class="footer-social">
                    <li><a href="https://www.facebook.com/profile.php?id=100091067204059"><i
                                class="fa fa-facebook-f" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.youtube.com/@origayenagroofficial"><i class="fa fa-youtube"
                                aria-hidden="true"></i></a></li>
                    <li><a href="https://www.linkedin.com/company/103643349/admin/dashboard/"><i
                                class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.instagram.com/origayenagropvt.ltd3/"><i class="fa fa-instagram"
                                aria-hidden="true"></i></a></li>
                </ul>
            </div>

            <div class="col-lg-4 snd-footer">
                <h4>products categories</h4>
                <ul class="footer-menu">
                    <li><a href="#">Grains</a></li>
                    <li><a href="#">Wellness Products</a></li>
                    <li><a href="#">Pulses</a></li>
                    <li><a href="#">Tea</a></li>
                    <li><a href="#">Seetner</a></li>
                    <li><a href="#">Oils & Ghee</a></li>
                    <li><a href="#">Splaces & Masalas</a></li>
                    <li><a href="#">Dry Fruits</a></li>
                    <li><a href="#">Breakfast Product</a></li>
                    <li><a href="#">Salt</a></li>
                    <li><a href="#">Millets</a></li>
                    <li><a href="#">Flours</a></li>
                    <li><a href="#">Seeds</a></li> 
                </ul>
            </div>
            <div class="col-lg-2 trd-footer">
                <h4>Quick Links</h4>
                <ul class="snd-footer-menu">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li><a href="{{ route('aboutUs') }}">About Us</a></li>
                    <li><a href="{{route('contactus')}}">Contact</a></li>
                    <li><a href="{{url('privacy-policy')}}">Privacy Policy</a></li>
                    <li><a href="{{url('terms-conditions')}}">Terms & Conditions</a></li>
                </ul>
            </div>

            <div class="col-lg-3 fou-footer">
                <h4>get in touch</h4>
                <p><b>Origayen Agro Pvt Ltd</b></p>
                <p>23/11A Pranabananda Road,<br> Garia, Kolkata- 700084</p>
                <br>
                <p class="footer-contact">+91 6289865859</p>
                <p class="footer-contact">corporateoffice@origayenagro.com</p>


            </div>
        </div>
    </div>
</div>

<div id="footer-copyright">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p> © 2022-24 All Rights Reserved. Origayengro | Design and Developed By <a
                        href="https://www.webredas.com/">Webredas</a></p>
            </div>
            <div class="col-lg-4">

            </div>
        </div>
    </div>
</div>

</footer> --}}
<footer id="main_footer">
    <div id="top-footer">
       <div class="container">
          <div class="row">
             <div class="col-lg-4 fst-footer">
                <img src="{{ asset('frontend-asset/images/logo.png')}}" class="img-fluid mb-3 mb-lg-3">
                <h4 class="mb-lg-3">Our mission</h4>
                <p class="mb-lg-4">Manufacturer , Importer & Exporter of Biodegradable Sustainable Eco-friendly products.</p>
                <ul class="footer-social">
                   <li><a href="https://www.facebook.com/profile.php?id=100091067204059"><i class="fa fa-facebook-f" aria-hidden="true"></i></a></li>
                   <li><a href="https://www.youtube.com/@origayenagroofficial"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                   <li><a href="https://www.linkedin.com/company/103643349/admin/dashboard/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                   <li><a href="https://www.instagram.com/origayenagropvt.ltd3/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
             </div>
             <div class="col-lg-4 snd-footer">
                <h4>Customer Services</h4>
                <p>Phone: +91 80012 15477</p>
                <p>Email: info@ecomfd.eco</p>
                <h4 class="mt-lg-3">Maharstra</h4>
                <p>S.No. 169, H.No. 2 B/H, Walton Hotel, </p>
                <p>Sasunavghar, Vasai Virar,</p>
                <p>Palghar, Maharstra- 40120</p>
                <h4 class="mt-lg-3">Kolkata</h4>
                <p>Room No. :603, 6th Floor, DLF Galleria, </p>
                <p>AA-IB, Newtown, Kolkata</p>
                <p>WB- 700156</p>
             </div>
             <div class="col-lg-2 trd-footer">
                <h4>Quick Links</h4>
                <ul class="footer-menu">
                   <li><a href="{{ route('index') }}">Home</a></li>
                   <li><a href="{{ route('aboutUs') }}">About</a></li>
                   <li><a href="{{route('products')}}">Shop</a></li>
                   <li><a href="{{route('contactus')}}">Contact</a></li>
                   <li><a href="{{ route('account') }}">My account</a></li>
                   <li><a href= "{{ route('cart') }}">Cart</a></li>
                   <li><a href="{{route('checkout')}}">Checkout</a></li>
                </ul>
             </div>
             <div class="col-lg-2 fou-footer">
                <h4>support</h4>
                <ul class="footer-menu">
                   <li><a href="{{url('privacy-policy')}}">Privacy Policy</a></li>
                   {{-- <li><a href="offers-coupons.html">Offers Coupons</a></li> --}}
                   <li><a href="{{url('terms-conditions')}}">Terms & Conditions</a></li>
                </ul>
             </div>
          </div>
       </div>
    </div>
    <div id="footer-copyright">
       <div class="container">
          <div class="row">
             <div class="col-lg-12">
                <p> © 2024 All Rights Reserved. ecomfd | Design and Developed By <a href="https://www.webredas.com/">Webredas</a></p>
             </div>
             <div class="col-lg-4">
             </div>
          </div>
       </div>
    </div>
 </footer>