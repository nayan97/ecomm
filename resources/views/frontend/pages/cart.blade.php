
@extends('frontend.layouts.app')

@section('frontend-main')

<section class="page-title parallax">
    <div data-parallax="scroll" data-image-src="images/bg/6.jpg" class="parallax-bg"></div>
    <div class="parallax-overlay">
      <div class="centrize">
        <div class="v-center">
          <div class="container">
            <div class="title center">
              <h1 class="upper">Shopping cart<span class="red-dot"></span></h1>
              <h4>We're happy to see you.</h4>
              <hr>
            </div>
          </div>
          <!-- end of container-->
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <table class="table">
            <thead>
              <tr>
                <th class="hidden-xs">Photo</th>
                <th>Product</th>
                <th>Price</th>
                <th>Remove Cart</th>

                
              </tr>
            </thead>
            <tbody>

                <?php $totalprice=0; ?>
                
            @foreach ($products as $item )
              <tr>
                <td class="hidden-xs">
                  <a href="#">
                    <img style="width:120px; height:100px"src="{{ url('img/product/' . $item -> photo ) }}" alt="">
                  </a>
                </td>
                <td><a href="#"><span>{{$item->name}}</span></a>
                </td>
                <td><span class="cart-price">${{$item -> price}}</span>
                </td>
                <td class=""><a href="/removecart/{{$item->carts_id}}"><i class="ti-close"></i></a>
                </td>
             </tr>
             <?php $totalprice=$totalprice + $item->price ?>
            @endforeach 
            </tbody>
          </table>
        </div>
        <div class="col-md-3 col-md-offset-1">
          <div class="cart-summary">
            <h6 class="upper">Order Details</h6>
            <hr>
            <ul class="nav">
              <li>Cart subtotal:<span class="pull-right">${{$totalprice}}</span>
                <?php 
                    if ($totalprice <1) {
                    $nettotal=$totalprice +0;
                    } else {
                      $nettotal=$totalprice +10; 
                    }
                      
                ?> 
               
              </li>
              <li>Shipping:<span class="pull-right">$10</span>
              </li>
            </ul>
            <hr>
            <h6 class="upper">Order total:<span class="pull-right">

              ${{$nettotal}}</span></h6>
          </div>
          <p><a href="{{url('/checkout')}}" class="btn btn-color btn-block">Checkout</a>
          </p>
        </div>
      </div>
      <!-- end of row-->
    </div>
    <!-- end of container-->
  </section>


  @endsection