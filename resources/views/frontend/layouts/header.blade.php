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
        <div class="search">
          <a href="#">
            <i class="ti-search"></i>
          </a>
          <div class="search-form">
            <form action="#" class="inline-form">
              <div class="input-group">
                <input type="text" placeholder="Search" class="form-control"><span class="input-group-btn"><button type="button" class="btn btn-color"><span><i class="ti-search"></i></span>
                </button>
                </span>
              </div>
            </form>
          </div>
        </div>
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
        <li class="has-submenu">
          <a href="#">Home</a>
          <ul class="submenu megamenu">
            <li>
              <ul>
                <li>
                  <span>Home Layouts</span>
                </li>
                <li>
                  <a href="home-restaurant.html">Restaurant</a>
                </li>
                <li>
                  <a href="home-architecture.html">Architecture</a>
                </li>
                <li>
                  <a href="home-photography.html">Photography</a>
                </li>
                <li>
                  <a href="home-landing.html">Landing Page</a>
                </li>
                <li>
                  <a href="home-resume.html">Resume</a>
                </li>
                <li>
                  <a href="home-models.html">Model Agency<span class="label">New</span></a>
                </li>
                <li>
                  <a href="home-fitness.html">Fitness<span class="label">New</span></a>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="has-submenu">
          <a href="#">Pages</a>
          <ul class="submenu megamenu">
            <li>
              <ul>
                <li>
                  <span>Pages</span>
                </li>
                <li>
                  <a href="page-about.html">About Us</a>
                </li>
                <li>
                  <a href="page-about-2.html">About Us 2</a>
                </li>
                <li>
                  <a href="page-services.html">Services</a>
                </li>
                <li>
                  <a href="page-services-2.html">Services 2</a>
                </li>
                <li>
                  <a href="page-contact.html">Contact</a>
                </li>
                <li>
                  <a href="page-contact-2.html">Contact 2</a>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="has-submenu last-elements">
          <a href="#">Blog</a>
          <ul class="submenu">
            <li>
              <a href="blog-fixed-image.html">Fixed Image</a>
            </li>
            <li class="has-submenu">
              <a href="#">Classic</a>
              <ul class="submenu">
                <li>
                  <a href="blog.html">No Sidebar</a>
                </li>
                <li>
                  <a href="blog-sidebar.html">Right Sidebar</a>
                </li>
                <li>
                  <a href="blog-sidebar-left.html">Left Sidebar</a>
                </li>
              </ul>
            </li>
            <li class="has-submenu">
              <a href="#">Masonry</a>
              <ul class="submenu">
                <li>
                  <a href="blog-masonry.html">No Sidebar</a>
                </li>
                <li>
                  <a href="blog-masonry-sidebar.html">Right Sidebar</a>
                </li>
                <li>
                  <a href="blog-masonry-sidebar-left.html">Left Sidebar</a>
                </li>
              </ul>
            </li>
            <li class="has-submenu">
              <a href="#">Single Post</a>
              <ul class="submenu">
                <li>
                  <a href="blog-single.html">No Sidebar</a>
                </li>
                <li>
                  <a href="blog-single-sidebar.html">Right Sidebar</a>
                </li>
                <li>
                  <a href="blog-single-sidebar-left.html">Left Sidebar</a>
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
              <a href="{{url('/')}}">Auth</a>
            </li>
            <li>
              <a href="{{url('allcart')}}">Cart</a>
            </li>
         
          </ul>
        </li>
      </ul>
      <!-- End navigation menu        -->
    </div>
  </div>
</header>