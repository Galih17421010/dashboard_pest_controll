@extends('layouts.master')
@section('navhead')
<div class="header header-fixed header-auto-show header-logo-center">
    @section('title', 'Home Services' )
    @include('layouts.navhead')
</div>
@endsection
@section('menu-bottom')
<div id="footer-bar" class="footer-bar-1">
    @include('layouts.menu')
  </div>
@endsection
@section('content')
<div class="page-content header-clear-small">
  <div class="content mt-2">
    <div class="d-flex">
      <div class="align-self-center">
        <h1 class="font-26">{{ config('app.name', 'Laravel') }}</h1>
        <p class="mb-0 mt-n2 font-11">Home Services App</p>
      </div>
      <div class="align-self-center ms-auto">
        <a href="#" data-menu="menu-favorites" class="icon icon-s bg-theme rounded-l shadow-l rounded-m ms-2 color-theme"><i class="fa fa-heart color-red-dark font-14"></i></a>
        <a href="#" data-menu="menu-cart" class="icon icon-s bg-theme rounded-l shadow-l rounded-m ms-2 color-theme"><i class="fa fa-shopping-bag font-14"></i></a>
        <a href="{{route('profile.index')}}" class="icon icon-s bg-theme rounded-l shadow-l rounded-m ms-2 color-blue-dark"><i class="fa fa-user font-14"></i></a>
      </div>
    </div>
  </div>
  <div class="content mt-n1">
    <div class="search-box bg-theme color-theme rounded-m shadow-l">
      <i class="fa fa-search"></i>
      <input type="text" class="border-0" placeholder="Search.. - try Hamburger " data-search />
      <a href="#" class="clear-search disabled mt-0"><i class="fa fa-times color-red-dark"></i></a>
    </div>
    <div class="search-results disabled-search-list mt-3">
      <div class="card card-style mx-0 px-2 p-0 mb-0">
        <a href="#" class="d-flex py-2" data-filter-item data-filter-name="all hamburger burger beef buns">
          <div>
            <img src="assets/images/food/500x500/1.png" class="rounded-sm me-1" width="45" alt="img" />
          </div>
          <div>
            <span class="color-highlight font-400 d-block pt-0 mb-n2 font-11">Fast Food</span>
            <strong class="color-theme font-14 d-block mt-n2">Hamburger</strong>
          </div>
          <div class="ms-auto text-center align-self-center pe-2">
            <h5 class="line-height-xs font-18 pt-3">$9.<sup class="font-14">50</sup></h5>
          </div>
        </a>
        <a href="#" class="d-flex py-2" data-filter-item data-filter-name="all apple watch 42 leather edition white">
          <div>
            <img src="assets/images/food/500x500/2.png" class="rounded-sm me-1" width="45" alt="img" />
          </div>
          <div>
            <span class="color-highlight font-400 d-block pt-0 mb-n2 font-11">Sweet Tooth</span>
            <strong class="color-theme font-14 d-block mt-n2">Blackberry Doughnuts</strong>
          </div>
          <div class="ms-auto text-center align-self-center pe-2">
            <h5 class="line-height-xs font-18 pt-3">$5.<sup class="font-14">50</sup></h5>
          </div>
        </a>
        <a href="#" class="d-flex py-2" data-filter-item data-filter-name="all apple watch lime edition 44 green">
          <div>
            <img src="assets/images/food/500x500/3.png" class="rounded-sm me-1" width="45" alt="img" />
          </div>
          <div>
            <span class="color-highlight font-400 d-block pt-0 mb-n2 font-11">Pizza</span>
            <strong class="color-theme font-14 d-block mt-n2">Prosciutto e Funghi</strong>
          </div>
          <div class="ms-auto text-center align-self-center pe-2">
            <h5 class="line-height-xs font-18 pt-3">$16.<sup class="font-14">50</sup></h5>
          </div>
        </a>
      </div>
    </div>
  </div>
  <div class="search-no-results disabled mt-4">
    <div class="card card-style">
      <div class="content">
        <h1>No Results</h1>
        <p>Your search brought up no results. Try using a different keyword. Or try typying all to see all items in the demo. These can be linked to anything you want.</p>
      </div>
    </div>
  </div>
  <div class="splide single-slider slider-no-arrows slider-no-dots visible-slider" id="double-slider-2">
    <div class="splide__track">
      <div class="splide__list">
        <div class="splide__slide">
          <div class="card card-style mx-3">
            <img src="assets/images/food/500x500/2.png" class="img-fluid my-3" />
            <div class="content">
              <h3 class="mb-0">Blackberry Doughnuts</h3>
              <a href="#">
                <i class="fa fa-star color-yellow-dark font-10"></i>
                <i class="fa fa-star color-yellow-dark font-10"></i>
                <i class="fa fa-star color-yellow-dark font-10"></i>
                <i class="fa fa-star color-yellow-dark font-10"></i>
                <i class="fa fa-star color-yellow-dark font-10"></i>
                <span class="font-11 ps-2 color-theme opacity-30">Based on 331 Reviews</span>
              </a>
              <h5 class="font-13 font-600 opacity-50 pt-1 pb-2">Fresh Blackberries with Puff Pastry Doughnuts with Sugar Glaze.</h5>
              <div class="divider mb-2"></div>
              <div class="d-flex">
                <div class="align-self-center">
                  <h1 class="mt-1 mb-n2 font-800">$4<sup class="font-400 font-14">.99</sup></h1>
                  <span class="opacity-60 font-11"
                    ><del>$7<sup>.99</sup></del> (- 40%)</span
                  >
                </div>
                <div class="align-self-center ms-auto">
                  <a href="#" data-toast="snackbar-favorites" class="icon icon-s bg-theme rounded-l shadow-xl rounded-m ms-2 color-theme"><i class="fa fa-heart color-red-dark font-14"></i></a>
                  <a href="#" data-toast="snackbar-cart" class="icon icon-s bg-theme rounded-l shadow-xl rounded-m ms-2 color-theme"><i class="fa fa-shopping-bag font-14"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="splide__slide">
          <div class="card card-style mx-3">
            <img src="assets/images/food/500x500/4.png" class="img-fluid my-3" />
            <div class="content">
              <h3 class="mb-0">Caesar Salad</h3>
              <a href="#">
                <i class="fa fa-star color-yellow-dark font-10"></i>
                <i class="fa fa-star color-yellow-dark font-10"></i>
                <i class="fa fa-star color-yellow-dark font-10"></i>
                <i class="fa fa-star color-yellow-dark font-10"></i>
                <i class="fa fa-star color-yellow-dark font-10"></i>
                <span class="font-11 ps-2 color-theme opacity-30">Based on 331 Reviews</span>
              </a>
              <h5 class="font-13 font-600 opacity-50 pt-1 pb-2">Fresh iceberg salad with small slices of Apple and vinegar topping.</h5>
              <div class="divider mb-2"></div>
              <div class="d-flex">
                <div class="align-self-center">
                  <h1 class="mt-1 mb-n2 font-800">$1<sup class="font-400 font-14">.99</sup></h1>
                  <span class="opacity-60 font-11"
                    ><del>$2<sup>.99</sup></del> (- 40%)</span
                  >
                </div>
                <div class="align-self-center ms-auto">
                  <a href="#" data-toast="snackbar-favorites" class="icon icon-s bg-theme rounded-l shadow-xl rounded-m ms-2 color-theme"><i class="fa fa-heart color-red-dark font-14"></i></a>
                  <a href="#" data-toast="snackbar-cart" class="icon icon-s bg-theme rounded-l shadow-xl rounded-m ms-2 color-theme"><i class="fa fa-shopping-bag font-14"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="splide double-slider slider-no-arrows slider-no-dots mb-4" id="single-slider-3">
    <div class="splide__track">
      <div class="splide__list">
        <div class="splide__slide">
          <div class="card card-style text-center mb-0">
            <img src="assets/images/food/500x500/1.png" class="my-4 mx-auto img-fluid" />
            <h3 class="mb-0">Beef Burger</h3>
            <p class="text-center mb-3">
              <i class="fa fa-star color-yellow-dark"></i>
              <i class="fa fa-star color-yellow-dark"></i>
              <i class="fa fa-star color-yellow-dark"></i>
              <i class="fa fa-star color-yellow-dark"></i>
              <i class="fa fa-star color-yellow-dark"></i>
              <span class="font-10 ps-2 color-theme opacity-30 d-block mt-n2">Based on 331 Reviews</span>
            </p>
            <h1 class="mb-n2 font-800">$3<sup class="font-400 font-14">.99</sup></h1>
            <span class="opacity-60 font-11 pb-4"
              ><del>$9<sup>.99</sup></del> (- 40%)</span
            >
          </div>
          <div class="text-center mt-2">
            <a href="#" data-toast="snackbar-favorites" class="icon icon-xs bg-theme rounded-l shadow-l mx-2 rounded-xs border-theme border-xxs color-theme"><i class="fa fa-heart color-red-dark font-14"></i></a>
            <a href="#" data-toast="snackbar-cart" class="icon icon-xs bg-theme rounded-l shadow-l mx-2 rounded-xs border-theme border-xxs color-theme"><i class="fa fa-shopping-bag font-14"></i></a>
          </div>
        </div>
        <div class="splide__slide">
          <div class="card card-style text-center mb-0">
            <img src="assets/images/food/500x500/12.png" class="my-4 mx-auto img-fluid" />
            <h3 class="mb-0">Veggie Pizza</h3>
            <p class="text-center mb-3">
              <i class="fa fa-star color-yellow-dark"></i>
              <i class="fa fa-star color-yellow-dark"></i>
              <i class="fa fa-star color-yellow-dark"></i>
              <i class="fa fa-star color-yellow-dark"></i>
              <i class="fa fa-star color-yellow-dark"></i>
              <span class="font-10 ps-2 color-theme opacity-30 d-block mt-n2">Based on 331 Reviews</span>
            </p>
            <h1 class="mb-n2 font-800">$399<sup class="font-400 font-14">.99</sup></h1>
            <span class="opacity-60 font-11 pb-4"
              ><del>$299<sup>.99</sup></del> (- 40%)</span
            >
          </div>
          <div class="text-center mt-2">
            <a href="#" data-toast="snackbar-favorites" class="icon icon-xs bg-theme rounded-l shadow-l mx-2 rounded-xs border-theme border-xxs color-theme"><i class="fa fa-heart color-red-dark font-14"></i></a>
            <a href="#" data-toast="snackbar-cart" class="icon icon-xs bg-theme rounded-l shadow-l mx-2 rounded-xs border-theme border-xxs color-theme"><i class="fa fa-shopping-bag font-14"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="divider divider-margins"></div>
  <a href="{{route('cleaning.index')}}">
    <div class="card card-style mb-3">
      <div class="d-flex">
        <div class="ps-2 ms-2 align-self-center">
          <h1 class="pt-4 font-22">Cleaning</h1>
          <p class="font-11 opacity-50 mt-n2 mb-4">Enjoy an unforgettable Experience</p>
        </div>
        <div class="ms-auto me-2 align-self-center">
          <i class="fa fa-utensils color-dark-dark fa-3x mt-4 mb-4 me-3"></i>
        </div>
      </div>
    </div>
  </a>
  <a href="{{route('laundry.index')}}">
    <div class="card card-style mb-3">
      <div class="d-flex">
        <div class="ps-2 ms-2 align-self-center">
          <h1 class="pt-4 font-22">Laundry</h1>
          <p class="font-11 opacity-50 mt-n2 mb-4">Order it, we'll deliver.</p>
        </div>
        <div class="ms-auto me-2 align-self-center">
          <i class="fa fa-hamburger color-brown-dark fa-3x mt-4 mb-4 me-1"></i>
        </div>
      </div>
    </div>
  </a>
  <a href="{{route('pest.index')}}">
    <div class="card card-style">
      <div class="d-flex">
        <div class="ps-2 ms-2 align-self-center">
          <h1 class="pt-4 font-22">Pest Control</h1>
          <p class="font-11 opacity-50 mt-n2 mb-4">Fresh made and sweet!</p>
        </div>
        <div class="ms-auto me-2 align-self-center">
          <i class="fa fa-ice-cream color-red-dark fa-3x mt-4 mb-4 me-1"></i>
        </div>
      </div>
    </div>
  </a>
</div>

@endsection
