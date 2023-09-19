@extends('frontend.layouts.app')

@section('frontend-main')

    
<section class="page-title parallax">
    <div data-parallax="scroll" data-image-src="{{ url('frontend/images/bg/19.jpg') }}" class="parallax-bg"></div>
    <div class="parallax-overlay">
      <div class="centrize">
        <div class="v-center">
          <div class="container">
            <div class="title center">
              <h1 class="upper">Shop</h1>
              <h4>Free Delivery Worldwide.</h4>
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
        <div class="col-md-3 hidden-sm hidden-xs">
          <div class="sidebar">
            <div class="widget">
              <h6 class="upper">Categories</h6>
              <ul class="nav">
                <li><a href="#">Beauty</a>
                </li>
                <li><a href="#">Blazers</a>
                </li>
                <li><a href="#">Bags</a>
                </li>
                <li><a href="#">Jeans</a>
                </li>
                <li><a href="#">Shorts</a>
                </li>
                <li><a href="#">Dresses</a>
                </li>
              </ul>
            </div>
            <!-- end of widget        -->
            <div class="widget">
              <h6 class="upper">Trending Products</h6>
              <ul class="nav product-list">

                @foreach ($data as $item)
                  
               
                <li>
                  <div class="product-thumbnail">
                    <img src="{{ ('img/product/' . $item -> photo ) }}" alt="">
                  </div>
                  <div class="product-summary"><a href="{{ url('/singleproduct', $item->id) }}">{{$item-> name}}</a><span>${{$item->price}}</span>
                  </div>
                </li>
                @endforeach
              </ul>


            </div>
            <!-- end of widget          -->
            <div class="widget">
              <h6 class="upper">Search Shop</h6>
              <form>
                <input type="text" placeholder="Search.." class="form-control">
              </form>
            </div>
            <!-- end of widget        -->
            <div class="widget">
              <h6 class="upper">Popular Tags</h6>
              <div class="tags clearfix"><a href="#">Hipster</a><a href="#">Fashion</a><a href="#">Shirt</a><a href="#">Modern</a><a href="#">Vintage</a>
              </div>
            </div>
            <!-- end of widget      -->
          </div>
          <!-- end of sidebar-->
        </div>
        <div class="col-md-9">
          <div class="shop-menu">
            <div class="row">
              <div class="col-sm-8">
                <h6 class="upper">Displaying 6 of 18 results</h6>
              </div>
              <div class="col-sm-4">
                <div class="form-select">
                  <select name="type" class="form-control">
                    <option selected="selected" value="">Sort By</option>
                    <option value="">What's new</option>
                    <option value="">Price high to low</option>
                    <option value="">Price low to high</option>
                  </select>
                </div>
              </div>
            </div>
            <!-- end of row-->
          </div>
          <div class="container-fluid">
            <div class="row">

              @foreach ($data as $data )
              <div class="col-md-4 col-sm-6">
                <div class="shop-product">
                  <div class="product-thumb">
                    <a href="{{ url('/singleproduct', $data->id) }}">
                      <img style="width:250px; height:220px;" src="{{ ('img/product/' . $data -> photo ) }}" alt="">
                    </a>
                    <div class="product-overlay"><a href="#" class="btn btn-color-out btn-sm">Add To Cart<i class="ti-bag"></i></a>
                    </div>
                  </div>
                  <div class="product-info">
                    <h4 class="upper"><a href="#">{{$data->name}}</a></h4><span>${{$data->price}}</span>
                    <div class="save-product"><a href="#"><i class="icon-heart"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            
            </div>
            <!-- end of row-->
            <ul class="pagination">
              <li><a href="#" aria-label="Previous"><span aria-hidden="true"><i class="ti-arrow-left"></i></span></a>
              </li>
              <li class="active"><a href="#">1</a>
              </li>
              <li><a href="#">2</a>
              </li>
              <li><a href="#">3</a>
              </li>
              <li><a href="#">4</a>
              </li>
              <li><a href="#">5</a>
              </li>
              <li><a href="#" aria-label="Next"><span aria-hidden="true"><i class="ti-arrow-right"></i></span></a>
              </li>
            </ul>
            <!-- end of pagination-->
          </div>
        </div>
      </div>
    </div>
    <!-- end of container-->
  </section>




        
@endsection 