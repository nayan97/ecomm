@php

$theme_data=App\Models\Theme::find(1);


@endphp



<header id="topnav">
  <div class="container">
    <!-- Logo container-->
    <div class="logo">
      <a href="{{ url('/')}}">
        @if ($theme_data->logo === 'logo.png')
        <img src="{{ url('frontend/images/logo_light.png')}}" alt="" class="logo-light">
        <img src="{{ url('frontend/images/logo_dark.png')}}" alt="" class="logo-dark">
        @else
        <img src="{{ url('storage/logo/' . $theme_data->logo)}}" alt="" class="logo-light">
          
        @endif
       
      </a>
    </div>
    <!-- End Logo container-->
    <div class="menu-extras">
      <div class="menu-item">
        <!-- Shopping cart-->
        <div class="cart">
          <a href="#">
            <i class="ti-bag"></i><span class="cart-number">2</span>
          </a>
          <div class="shopping-cart">
            <div class="shopping-cart-info">
              <div class="row">
                <div class="col-xs-6">
                  <h6 class="upper">Your Cart</h6>
                </div>
                <div class="col-xs-6 text-right">
                  <h6 class="upper">$399.99</h6>
                </div>
              </div>
              <!-- end of row-->
            </div>
            <ul class="nav product-list">
              <li>
                <div class="product-thumbnail">
                  <img src="images/shop/2.jpg" alt="">
                </div>
                <div class="product-summary">
                  <a href="#">Premium Suit Blazer</a><span>$199.99</span>
                </div>
              </li>
              <li>
                <div class="product-thumbnail">
                  <img src="images/shop/5.jpg" alt="">
                </div>
                <div class="product-summary">
                  <a href="#">Reiss Vara Tailored Blazer</a><span>$199.99</span>
                </div>
              </li>
            </ul>
            <p><a href="#" class="btn btn-color btn-block btn-sm">Checkout</a>
            </p>
          </div>
        </div>
        <!-- End shopping cart-->
      </div>
      <div class="menu-item">
        <!-- Search Form-->
     
        <!-- End search form-->
      </div>
      <div class="menu-item">
        <!-- Mobile menu toggle-->
        <a class="navbar-toggle">
          <div class="lines">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </a>
        <!-- End mobile menu toggle-->
      </div>
    </div>
    <div id="navigation">
      <!-- Navigation Menu-->
      <ul class="navigation-menu">
        <li class="">
          <a href="{{route('home.page')}}">Home</a>
        
        </li>
        <li class="has-submenu">
          <a href="#">Pages</a>
          <ul class="submenu megamenu">
            <li>
              <ul>
                <li>
                  <a href="{{route('about.page')}}">About Us</a>
                </li>
                <li>
                  <a href="{{route('contact.page')}}">Contact</a>
                </li>
           
              </ul>
            </li>
          </ul>
        </li>
        <li class="has-submenu last-elements">
          <a href="#">Shop</a>
          <ul class="submenu">
            <li>
              <a href="{{url('/')}}">Shop</a>
            </li>
            <li>
              <a href="{{url('allcart')}}">Cart</a>
            </li>
         
          </ul>
        </li>
        <li class="has-submenu last-elements">
          <a href="#">Auth</a>

          <ul class="submenu">
            <li>
              <a href="{{url('/login')}}">Login</a>
            </li>
            <li>
              <a href="{{url('/register')}}">Register</a>
            </li>
         
          </ul>
        </li>
      </ul>
      <!-- End navigation menu        -->
    </div>
  </div>
</header>