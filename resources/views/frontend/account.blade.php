@extends('frontend.layout.main')
@section('content')
    <section class="banner-slider" id="inn-banner-slider">
        <div data-ride="carousel" class="carousel slide" id="carouselExampleIndicators">
            <div role="listbox" class="carousel-inner">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div style="background-image: url('/frontend-asset/images/inn-banner.jpg')" class="carousel-item active">
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
                    <h2 class="mb-4">My Account</h2>
                </div>
                <div class="col-lg-12">
                    <div class="account-content">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="pro-img-box">
                                    <img src="{{ asset('frontend-asset/images/default_avatar.png') }}" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="pro-box-ctn">
                                    <ul>
                                        <li><i class="fa fa-user-o" aria-hidden="true"></i> {{ auth()->user()?->name }}</li>
                                        <li><i class="fa fa-envelope-o" aria-hidden="true"></i> {{ auth()->user()?->email }}
                                        </li>
                                        <li><i class="fa fa-phone" aria-hidden="true"></i> {{ auth()->user()?->phone }}</li>
                                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>
                                            {{ auth()->user()?->street_address }}</li>
                                        <li><i class="fa fa-key" aria-hidden="true"></i> <b>Current Password:</b> ******
                                        </li>

                                        <li><a class="banner-btn" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                {{ __('Log Out') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-2">
                                <a href="" class="sp-btn-snd">Edit</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12 text-center">
                    <h3 class="mb-4">My Order Details</h3>
                    @if (Session::has('msg'))
                        <p class="alert alert-info">{{ Session::get('msg') }}</p>
                    @endif
                </div>
                <div class="col-lg-12">
                    <table class="table cart-tl">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Order Date</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Address</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse (auth()->user()->orders as $order)
                                <tr>
                                    <td colspan="6">
                                        <strong>Order Number: {{ $order->order_number }}</strong><br>
                                        <strong>Stauts: {{ $order->status }}</strong>
                                    </td>
                                </tr>
                                @foreach ($order->orderItems as $orderItem)
                                    <tr>
                                        <th scope="row">
                                            <img src="{{ asset('storage/' . $orderItem?->product?->productPrimaryImage?->image_path) }}"
                                                class="img-fluid">
                                        </th>
                                        <td>{{ $orderItem->product?->name }}</td>
                                        <td>₹{{ $orderItem->price }}</td>
                                        <td>{{ \Carbon\Carbon::parse($orderItem->created_at)->format('d M, Y h:i A') }}
                                        </td>
                                        <td>{{ $orderItem->quantity }}</td>
                                        <td>{{ $order->street_address }}</td>
                                    </tr>
                                @endforeach
                            @empty
                                <tr>
                                    <td colspan="6">No orders found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </section>
    <section id="line2-section"> </section>
    <script src="js/script.js" defer></script>
    <script src="owl-carousel/js/owl.carousel.js"></script> --}}
    <section id="inn-section">
        <div class="container">
           <div class="row">
              <div class="col-lg-12 text-center">
                 <h2 class="hm-head mb-4">My Account</h2>
              </div>
              <div class="col-lg-12">
                 <div class="account-content">
                    <div class="row">
                       <div class="col-lg-3">
                          <div class="pro-img-box">
                             <img src="{{ asset('frontend-assetimages/default_avatar.png')}}" class="img-fluid">
                          </div>
                       </div>
                       <div class="col-lg-7">
                          <div class="pro-box-ctn">
                             <ul>
                                <li><i class="fa fa-user-o" aria-hidden="true"></i> {{ auth()->user()?->name }}</li>
                                <li><i class="fa fa-envelope-o" aria-hidden="true"></i>{{ auth()->user()?->email }}</li>
                                <li><i class="fa fa-phone" aria-hidden="true"></i> +91 {{ auth()->user()?->phone }}</li>
                                <li><i class="fa fa-map-marker" aria-hidden="true"></i> {{ auth()->user()->appertment_house_no }} {{ auth()->user()?->street_address }} {{ auth()->user()->town_city }} {{ auth()->user()->state }} {{ auth()->user()->postcode }}</li>
                                <li><i class="fa fa-key" aria-hidden="true"></i> <b>Current Password:</b> ******</li>
                                <li><a class="banner-btn" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                        {{ __('Log Out') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </li>
                             </ul>
                          </div>
                       </div>
                       <div class="col-lg-2">
                          <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModalCenterEditProfile" class="shop-btn">Edit</a>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
           <!-- Modal -->
            <div class="modal fade" id="exampleModalCenterEditProfile" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog  modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">My Account</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('account.update')}}" method="post">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="id" value="{{ auth()->user()->id }}">
                                <div class="row mb-2">
                                    <div class="col-lg-4">
                                       <div class="form-group">
                                          <label>Name</label>
                                          <input id="fname" type="text" name="name" class="form-control" required="required" data-error="First Name is required." value="{{ auth()->user()->name }}">
                                       </div>
                                    </div>
                                    <div class="col-lg-4">
                                       <div class="form-group">
                                          <label>Email</label>
                                          <input id="Email" type="email" name="email" class="form-control" required="required" data-error="Email is required." value="{{ auth()->user()->email }}">
                                       </div>
                                    </div>
                                    <div class="col-lg-4">
                                       <div class="form-group">
                                          <label>Phone</label>
                                          <input id="Phone" type="text" name="phone" class="form-control" required="required" data-error="Phone is required." value="{{ auth()->user()->phone }}">
                                       </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-lg-4">
                                       <div class="form-group">
                                          <label>Country</label>
                                          <select class="form-control" name="country" id="country">
                                              <option selected value="India">India</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-lg-4">
                                       <div class="form-group">
                                          <label>Street Address</label>
                                          <input id="Street_address" type="text" name="street_address" class="form-control" required="required" data-error="Street Address is required." value="{{ auth()->user()->street_address }}">
                                       </div>
                                    </div>
                                    <div class="col-lg-4">
                                       <div class="form-group">
                                          <label>Apartment (optional)</label>
                                          <input id="Apartment" type="text" name="appertment_house_no" class="form-control" required="required" data-error="Apartment is required." value="{{ auth()->user()->appertment_house_no }}">
                                       </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-lg-4">
                                       <div class="form-group">
                                          <label>Town / City</label>
                                          <input id="City" type="text" name="town_city" class="form-control" required="required" data-error="City is required." value="{{ auth()->user()->town_city }}">
                                       </div>
                                    </div>
                                    <div class="col-lg-4">
                                       <div class="form-group">
                                          <label>State</label>
                                          <input id="State" type="text" name="state" class="form-control" required="required" data-error="State is required." value="{{ auth()->user()->state }}">
                                       </div>
                                    </div>
                                    <div class="col-lg-4">
                                       <div class="form-group">
                                          <label>Postcode</label>
                                          <input id="Postcode" type="text" name="postcode" class="form-control" required="required" data-error="Postcode is required." value="{{ auth()->user()->postcode }}">
                                       </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button  type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{-- end Modal --}}
           <div class="row mt-5">
              <div class="col-lg-12 text-center">
                <h3 class="mb-4">My Order Details</h3>
                @if (Session::has('msg'))
                    <p class="alert alert-info">{{ Session::get('msg') }}</p>
                @endif
              </div>
              <div class="col-lg-12">
                 <table class="table cart-tl">
                    <thead class="thead-light">
                       <tr>
                          <th scope="col"></th>
                          <th scope="col">Product Name</th>
                          <th scope="col">Price</th>
                          <th scope="col">Order Date</th>
                          <th scope="col">Quantity</th>
                          <th scope="col">Address</th>
                       </tr>
                    </thead>
                    <tbody>
                        @forelse (auth()->user()->orders as $order)
                            <tr>
                                <td colspan="6">
                                    <strong>Order Number: {{ $order->order_number }}</strong><br>
                                    <strong>Stauts: {{ $order->status }}</strong>
                                </td>
                            </tr>
                        @foreach ($order->orderItems as $orderItem)
                            <tr>
                                <th scope="row">
                                    <img src="{{ asset('storage/' . $orderItem?->product?->productPrimaryImage?->image_path) }}"
                                        class="img-fluid">
                                </th>
                                <td>{{ $orderItem->product?->name }}</td>
                                <td>₹{{ $orderItem->price }}</td>
                                <td>{{ \Carbon\Carbon::parse($orderItem->created_at)->format('d M, Y h:i A') }}
                                </td>
                                <td>{{ $orderItem->quantity }}</td>
                                <td>{{ $order->street_address }}</td>
                            </tr>
                        @endforeach
                        @empty
                            <tr>
                                <td colspan="6">No orders found.</td>
                            </tr>
                        @endforelse

                       {{-- <tr>
                          <th scope="row"><img src="frontend-asset/images/pro-img.png" class="img-fluid"></th>
                          <td>Product Name Here</td>
                          <td>₹250.00</td>
                          <td>16.04.2322</td>
                          <td>2</td>
                          <td>Street Address, City, State, Zipcode</td>
                       </tr> --}}
                    </tbody>
                 </table>
              </div>
           </div>
        </div>
     </section>
@endsection
