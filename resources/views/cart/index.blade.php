@extends('layouts.master')
@section('navhead')
@section('title','Cart')
<div class="header header-fixed header-logo-center">
    @include('layouts.navhead')
</div>
@endsection
@section('content')
<div class="page-content header-clear-medium">

    <div class="card card-style">
        <div class="content mb-0">
            <div>
                <div class="d-flex mb-4">
                    <div>
                        <img
                            src="assets/images/food/full/1s.jpg"
                            class="rounded-m shadow-xl"
                            width="130"
                        />
                    </div>
                    <div class="ms-3">
                        <h5 class="font-600">
                            Your awesome long or short product title
                        </h5>
                        <h1 class="pt-3">$99.<sup>99</sup></h1>
                        <a href="#" class="color-theme opacity-50 font-10"
                            ><i class="fa fa-times color-red-dark pe-2 pt-3"></i
                            >Remove</a
                        >
                    </div>
                </div>
                <div class="row mb-0">
                    <div class="col-8">
                        <div
                            class="input-style input-style-always-active has-borders no-icon"
                        >
                            <label for="f6" class="color-blue-dark"
                                >Select A Size</label
                            >
                            <select id="f6">
                                <option value="default" disabled selected>
                                    Select a Value
                                </option>
                                <option value="a">Small</option>
                                <option value="b">Large</option>
                                <option value="c">Medium</option>
                            </select>
                            <span><i class="fa fa-chevron-down"></i></span>
                            <i
                                class="fa fa-check disabled valid color-green-dark"
                            ></i>
                            <em></em>
                        </div>
                    </div>
                    <div class="col-4">
                        <div
                            class="input-style input-style-always-active has-borders no-icon"
                        >
                            <input
                                type="number"
                                class="form-control focus-color focus-blue validate-name"
                                id="f1"
                                value="1"
                                placeholder="1"
                            />
                            <label for="f1" class="color-blue-dark">Qty</label>
                            <i
                                class="fa fa-times disabled invalid color-red-dark"
                            ></i>
                            <i
                                class="fa fa-check disabled valid color-green-dark"
                            ></i>
                            <em>(required)</em>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-style">
        <div class="content mb-0">
            <div>
                <div class="d-flex mb-4">
                    <div>
                        <img
                            src="assets/images/food/full/8s.jpg"
                            class="rounded-m shadow-xl"
                            width="130"
                        />
                    </div>
                    <div class="ms-3">
                        <h5 class="font-600">
                            iMac 27" 5k Display and Accessories
                        </h5>
                        <h1 class="pt-3">$2499.<sup>99</sup></h1>
                        <a href="#" class="color-theme opacity-50 font-10"
                            ><i class="fa fa-times color-red-dark pe-2 pt-3"></i
                            >Remove</a
                        >
                    </div>
                </div>
                <div class="row mb-0">
                    <div class="col-8">
                        <div
                            class="input-style input-style-always-active has-borders no-icon"
                        >
                            <label for="f6" class="color-blue-dark"
                                >Select A Size</label
                            >
                            <select id="f6">
                                <option value="default" disabled selected>
                                    Select a Value
                                </option>
                                <option value="a">Small</option>
                                <option value="b">Large</option>
                                <option value="c">Medium</option>
                            </select>
                            <span><i class="fa fa-chevron-down"></i></span>
                            <i
                                class="fa fa-check disabled valid color-green-dark"
                            ></i>
                            <em></em>
                        </div>
                    </div>
                    <div class="col-4">
                        <div
                            class="input-style input-style-always-active has-borders no-icon"
                        >
                            <input
                                type="number"
                                class="form-control focus-color focus-blue validate-name"
                                id="f1"
                                value="1"
                                placeholder="1"
                            />
                            <label for="f1" class="color-blue-dark">Qty</label>
                            <i
                                class="fa fa-times disabled invalid color-red-dark"
                            ></i>
                            <i
                                class="fa fa-check disabled valid color-green-dark"
                            ></i>
                            <em>(required)</em>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-style">
        <div class="content mb-0">
            <div>
                <div class="d-flex mb-4">
                    <div>
                        <img
                            src="assets/images/food/full/2s.jpg"
                            class="rounded-m shadow-xl"
                            width="130"
                        />
                    </div>
                    <div class="ms-3">
                        <h5 class="font-600">
                            Macbook Pro 13" Core i7, 16GB, 512 SSD
                        </h5>
                        <h1 class="pt-3">$1499.<sup>99</sup></h1>
                        <a href="#" class="color-theme opacity-50 font-10"
                            ><i class="fa fa-times color-red-dark pe-2 pt-3"></i
                            >Remove</a
                        >
                    </div>
                </div>
                <div class="row mb-0">
                    <div class="col-8">
                        <div
                            class="input-style input-style-always-active has-borders no-icon"
                        >
                            <label for="f6" class="color-blue-dark"
                                >Select A Size</label
                            >
                            <select id="f6">
                                <option value="default" disabled selected>
                                    Select a Value
                                </option>
                                <option value="a">Small</option>
                                <option value="b">Large</option>
                                <option value="c">Medium</option>
                            </select>
                            <span><i class="fa fa-chevron-down"></i></span>
                            <i
                                class="fa fa-check disabled valid color-green-dark"
                            ></i>
                            <em></em>
                        </div>
                    </div>
                    <div class="col-4">
                        <div
                            class="input-style input-style-always-active has-borders no-icon"
                        >
                            <input
                                type="number"
                                class="form-control focus-color focus-blue validate-name"
                                id="f1"
                                value="1"
                                placeholder="1"
                            />
                            <label for="f1" class="color-blue-dark">Qty</label>
                            <i
                                class="fa fa-times disabled invalid color-red-dark"
                            ></i>
                            <i
                                class="fa fa-check disabled valid color-green-dark"
                            ></i>
                            <em>(required)</em>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card card-style">
        <div class="content">
            <div class="d-flex mb-2">
                <div><h5 class="opacity-50 font-500">Shipping</h5></div>
                <div class="ms-auto"><h5>$150</h5></div>
            </div>
            <div class="d-flex mb-2">
                <div><h5 class="opacity-50 font-500">Taxes</h5></div>
                <div class="ms-auto"><h5>$50</h5></div>
            </div>
            <div class="d-flex mb-3">
                <div><h4 class="font-700">Grand Total</h4></div>
                <div class="ms-auto"><h3>$3.500</h3></div>
            </div>
            <div class="divider"></div>
            <a
                href="#"
                class="btn btn-full bg-highlight btn-m text-uppercase font-800 rounded-sm"
                >Proceed to Checkout</a
            >
        </div>
    </div>
</div>

@endsection
