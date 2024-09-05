@extends('layouts.master')
@section('navhead')
@section('title','Profile')
<div class="header header-fixed header-logo-center">
    @include('layouts.navhead')
</div>
@endsection
@section('content')
<div class="page-content header-clear-large">
    <img style="margin-bottom:-110px"
    src={{asset("assets/images/user.png")}} class="mx-auto
    shadow-xl rounded-circle over-card" width="250">
    <div style="padding-top: 120px" class="card card-style">
        <div class="content">
            <h1 class="boxed-text-xl font-40">{{ Auth::user()->name }}</h1>
            <p class="text-center">
                <i class="fa fa-fire color-red-dark pe-2"></i
                ><span class="opacity-50">Purchased 125 Services</span>
            </p>
            <div class="row text-center mb-3 mx-n2">
                <div class="col-4">
                    <i class="fa fa-shopping-bag color-brown font-20"></i>
                    <h1 class="color-gray-dark font-20 font-400">125</h1>
                    <span class="font-9 d-block mt-n3">Purchases</span>
                </div>
                <div class="col-4">
                    <i class="fa fa-star color-yellow-dark font-20"></i>
                    <h1 class="color-gray-dark font-20 font-400">110</h1>
                    <span class="font-9 d-block mt-n3">Ratings</span>
                </div>
                <div class="col-4">
                    <i class="fa fa-heart color-red-dark font-20"></i>
                    <h1 class="color-gray-dark font-20 font-400">Fashion</h1>
                    <span class="font-9 d-block mt-n3">Most Loved</span>
                </div>
            </div>
            <p></p>
            <a
                href="#"
                class="btn btn-m rounded-sm btn-full bg-highlight font-700 text-uppercase"
                >Edit Profile</a
            >
        </div>
    </div>
    <a
        href="{{route('cart.index')}}"

        class="no-effect card card-style mb-2"
    >
        <div class="content">
            <div class="d-flex mb-n1">
                <div class="align-self-center">
                    <i
                        class="fa fa-shopping-bag color-brown-dark font-35 fa-fw me-2"
                    ></i>
                </div>
                <div class="align-self-center">
                    <h4>Recent Purchases</h4>
                    <p class="opacity-80 font-10 mt-n2">Tap here to Expand</p>
                </div>
                <div class="ms-auto align-self-center text-center opacity-70">
                    <i
                        class="fa fa-angle-right color-gray-dark opacity-70 font-10 mt-1"
                    ></i
                    ><br />
                </div>
            </div>
        </div>
    </a>

    <a
        href="{{route('favorite.index')}}"

        class="no-effect card card-style mb-2"
    >
        <div class="content">
            <div class="d-flex mb-n1">
                <div class="align-self-center">
                    <i
                        class="fa fa-heart color-red-dark font-35 fa-fw me-2"
                    ></i>
                </div>
                <div class="align-self-center">
                    <h4>Your Interests</h4>
                    <p class="opacity-80 font-10 mt-n2">Tap here to Expand</p>
                </div>
                <div class="ms-auto align-self-center text-center opacity-70">
                    <i
                        class="fa fa-angle-right color-gray-dark opacity-70 font-10 mt-1"
                    ></i
                    ><br />
                </div>
            </div>
        </div>
    </a>

    <a
        href="#"

        class="no-effect card card-style mb-2"
    >
        <div class="content">
            <div class="d-flex mb-n1">
                <div class="align-self-center">
                    <i
                        class="fa fa-file color-blue-dark font-35 fa-fw me-2"
                    ></i>
                </div>
                <div class="align-self-center">
                    <h4>Billing Information</h4>
                    <p class="opacity-80 font-10 mt-n2">Tap here to Expand</p>
                </div>
                <div class="ms-auto align-self-center text-center opacity-70">
                    <i
                        class="fa fa-angle-right color-gray-dark opacity-70 font-10 mt-1"
                    ></i
                    ><br />
                </div>
            </div>
        </div>
    </a>

    <a
        href="#"

        class="no-effect card card-style mb-2"
    >
        <div class="content">
            <div class="d-flex mb-n1">
                <div class="align-self-center">
                    <i
                        class="fa fa-credit-card color-green-dark font-35 fa-fw me-2"
                    ></i>
                </div>
                <div class="align-self-center">
                    <h4>Payment Method</h4>
                    <p class="opacity-80 font-10 mt-n2">Tap here to Expand</p>
                </div>
                <div class="ms-auto align-self-center text-center opacity-70">
                    <i
                        class="fa fa-angle-right color-gray-dark opacity-70 font-10 mt-1"
                    ></i
                    ><br />
                </div>
            </div>
        </div>
    </a>


    <div class="card card-style">
        <div class="content mb-0 mt-0">
        <div class="list-group list-custom-large list-icon-0">
        <a data-menu="menu-settings" href="#">
        <i class="fa font-19 fa-cog rounded-s color-red-dark"></i>
        <span>Settings</span>
        <strong>Show Sticky Mobile Settings</strong>
        <i class="fa fa-chevron-right opacity-30"></i>
        </a>
        <a data-menu="menu-highlights" href="#">
        <i class="fa font-19 fa-tint rounded-s color-blue-dark"></i>
        <span>Color Scheme</span>
        <strong>Show Sticky Mobile Color Options</strong>
        <i class="fa fa-chevron-right opacity-30"></i>
        </a>
        <a data-menu="menu-backgrounds" href="#">
        <i class="fa font-19 fa-brush rounded-s color-green-dark"></i>
        <span>Background Scheme</span>
        <strong>Show Sticky Mobile Color Options</strong>
        <i class="fa fa-chevron-right opacity-30"></i>
        </a>
        </div>
        </div>
        </div>
    <div class="footer card card-style mt-4">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a
                href="{{route('logout')}}"
                onclick="event.preventDefault();
        this.closest('form').submit();"
                class="btn btn-m rounded-sm btn-full bg-highlight font-700 text-uppercase"
                >Logout</a
            >
        </form>
    </div>
</div>

@endsection
