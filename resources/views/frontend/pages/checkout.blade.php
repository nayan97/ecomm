
@extends('frontend.layouts.app')

@section('frontend-main')


    <section class="page-title parallax">
        <div data-parallax="scroll" data-image-src="images/bg/14.jpg" class="parallax-bg"></div>
        <div class="parallax-overlay">
        <div class="centrize">
            <div class="v-center">
            <div class="container">
                <div class="title center">
                <h1>Place your order<span class="red-dot"></span></h1>
                <h4>Enter your details to confirm.</h4>
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
      <form method="POST" action="/order">
        @csrf
        <div class="checkout">
          <div class="row">
            <div class="col-md-5">
              <div class="title">
                <h5 class="upper">Billing Address</h5>
                <hr>
              </div>
              <div class="form-group">
                <label>Full Name</label>
                <input name="name" type="text" class="form-control">
              </div>
              <div class="form-group">
                <label>Address</label>
                <input name="address" type="text" class="form-control">
              </div>
              <div class="form-group">
                <div class="col-xs-6 pl-0">
                  <label>city</label>
                  <input name="city" type="text" class="form-control">
                </div>
                <div class="col-xs-6 pr-0">
                  <label>Zip Code</label>
                  <input name="zip" type="text" class="form-control">
                </div>
              </div>
            </div>
            <div class="col-md-5 col-md-offset-1">
              <div class="title">
                <h5 class="upper">Payment Info</h5>
                <hr>
              </div>
              <div class="form-group">
                <input  style="margin-top: 10px" value="cash" name="payment" type="radio" class="">
                <label>online Payment</label>
              </div>
              <div class="form-group">
                <input  style="margin-top:20px;" value="cash" name="payment" type="radio" class="">
                <label>emi Payment</label>
              </div>
              <div class="form-group">
                <input  style="margin-top: 10px" value="cash" name="payment" type="radio" class="">
                <label>cash on Delivery</label>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-xs-6">
                    <h5 class="upper">Order Total</h5>
                  </div>
                  <div class="col-xs-6 text-right">
                    <h5>${{$total+10}}</h5>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="checkout-submit">
                  <button type="submit" class="btn btn-color btn-block">Place order</button>
                </div>
              </div>
            </div>
          </div>
          <!-- end of row-->
        </div>
      </form>
    </div>
  </section>


@endsection