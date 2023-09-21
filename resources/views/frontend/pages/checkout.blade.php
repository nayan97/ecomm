
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
      <form method="POST" action="#">
        <div class="checkout-form">
          <div class="row">
            <div class="col-md-5">
              <div class="title">
                <h5 class="upper">Billing Address</h5>
                <hr>
              </div>
              <div class="form-group">
                <label>Full Name</label>
                <input name="fullname" type="text" class="form-control">
              </div>
              <div class="form-group">
                <label>Address</label>
                <input name="address" type="text" class="form-control">
              </div>
              <div class="form-group">
                <label>City</label>
                <input name="city" type="text" class="form-control">
              </div>
              <div class="form-group">
                <div class="col-xs-6 pl-0">
                  <label>State</label>
                  <input name="state" type="text" class="form-control">
                </div>
                <div class="col-xs-6 pr-0">
                  <label>Zip Code</label>
                  <input name="zip" type="text" class="form-control">
                </div>
              </div>
            </div>
            <div class="col-md-5 col-md-offset-1">
              <div class="title">
                <h5 class="upper">Credit Card Info</h5>
                <hr>
              </div>
              <div class="form-group">
                <label>Name on Card</label>
                <input name="fullname" type="text" class="form-control">
              </div>
              <div class="form-group">
                <label>Card Number</label>
                <input name="card" type="text" placeholder="0000-0000-0000-0000" class="form-control">
              </div>
              <div class="form-group">
                <div class="col-xs-4 pl-0">
                  <label>CVV</label>
                  <input name="cvv" type="text" placeholder="CVV" class="form-control">
                </div>
                <div class="col-xs-4 pl-0">
                  <label>Exp. Month</label>
                  <div class="form-select">
                    <select name="month" class="form-control">
                      <option selected="selected" value="">Month</option>
                      <option value="01">01</option>
                      <option value="02">02</option>
                      <option value="03">03</option>
                      <option value="04">04</option>
                      <option value="05">05</option>
                      <option value="06">06</option>
                      <option value="07">07</option>
                      <option value="08">08</option>
                      <option value="09">09</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                    </select>
                  </div>
                </div>
                <div class="col-xs-4 p-0">
                  <label>Exp. Year</label>
                  <div class="form-select">
                    <select name="year" class="form-control">
                      <option selected="selected" value="">Year</option>
                      <option value="2015">2015</option>
                      <option value="2016">2016</option>
                      <option value="2017">2017</option>
                      <option value="2018">2018</option>
                      <option value="2019">2019</option>
                      <option value="2020">2020</option>
                      <option value="2021">2021</option>
                    </select>
                  </div>
                </div>
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
                  <button type="button" class="btn btn-color btn-block">Place order</button>
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