@extends('layouts.master')
@section('navhead')
@section('title','Checkout')
<div class="header header-fixed header-logo-center">
    @include('layouts.navhead')
</div>
@endsection
@section('content')
<div class="page-content header-clear-medium">
    <div class="card card-style">
        <div class="content">
            <h2>Order Summary</h2>
            <p>
                Finished Shopping? Let's checkout! Remember, this is just a
                template!
            </p>
            <div class="d-flex mb-4">
                <div>
                    <img
                        src="assets/images/food/full/1s.jpg"
                        class="rounded-m shadow-xl"
                        width="80"
                    />
                </div>
                <div class="ms-3">
                    <h5 class="font-600 opacity-50">
                        Your awesome long or short product title
                    </h5>
                    <h4 class="pt-1 color-highlight">$99.<sup>99</sup></h4>
                </div>
            </div>
            <div class="d-flex mb-4">
                <div>
                    <img
                        src="assets/images/food/full/2s.jpg"
                        class="rounded-m shadow-xl"
                        width="80"
                    />
                </div>
                <div class="ms-3">
                    <h5 class="font-600 opacity-50">
                        iMac 27" 5k Display and Accessories
                    </h5>
                    <h4 class="pt-1 color-highlight">$2499.<sup>99</sup></h4>
                </div>
            </div>
            <div class="d-flex">
                <div>
                    <img
                        src="assets/images/food/full/5s.jpg"
                        class="rounded-m shadow-xl"
                        width="80"
                    />
                </div>
                <div class="ms-3">
                    <h5 class="font-600 opacity-50">
                        Macbook Pro 13" Core i7, 16GB, 512 SSD
                    </h5>
                    <h4 class="pt-1 color-highlight">$1499.<sup>99</sup></h4>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-style">
        <div class="content">
            <h2 class="mb-0">Billing Information</h2>
            <p>
                Finished Shopping? Let's checkout! Remember, this is just a
                template!
            </p>
            <div class="input-style has-borders no-icon validate-field mb-4">
                <input
                    type="name"
                    class="form-control validate-name"
                    id="form2"
                    placeholder="First Name"
                />
                <label for="form2" class="color-blue-dark">First Name</label>
                <i class="fa fa-times disabled invalid color-red-dark"></i>
                <i class="fa fa-check disabled valid color-green-dark"></i>
                <em>(required)</em>
            </div>
            <div class="input-style has-borders no-icon validate-field mb-4">
                <input
                    type="name"
                    class="form-control validate-name"
                    id="form2a"
                    placeholder="Last Name"
                />
                <label for="form2a" class="color-blue-dark">Last Name</label>
                <i class="fa fa-times disabled invalid color-red-dark"></i>
                <i class="fa fa-check disabled valid color-green-dark"></i>
                <em>(required)</em>
            </div>
            <div class="input-style has-borders no-icon validate-field mb-4">
                <input
                    type="name"
                    class="form-control validate-name"
                    id="form2ab"
                    placeholder="Company Name"
                />
                <label for="form2ab" class="color-blue-dark"
                    >Company Name</label
                >
                <i class="fa fa-times disabled invalid color-red-dark"></i>
                <i class="fa fa-check disabled valid color-green-dark"></i>
                <em>(required)</em>
            </div>
            <div class="input-style has-borders no-icon mb-4">
                <label for="form5" class="color-blue-dark"
                    >Select A Value</label
                >
                <select id="form5">
                    <option value="Afghanistan">Afghanistan</option>
                    <option value="Åland Islands">Åland Islands</option>
                    <option value="Albania">Albania</option>
                    <option value="Algeria">Algeria</option>
                    <option value="American Samoa">American Samoa</option>
                    <option value="Andorra">Andorra</option>
                    <option value="Angola">Angola</option>
                    <option value="Anguilla">Anguilla</option>
                    <option value="Antarctica">Antarctica</option>
                    <option value="Antigua and Barbuda">
                        Antigua and Barbuda
                    </option>
                    <option value="Argentina">Argentina</option>
                    <option value="Armenia">Armenia</option>
                    <option value="Aruba">Aruba</option>
                    <option value="Australia">Australia</option>
                    <option value="Austria">Austria</option>
                    <option value="Azerbaijan">Azerbaijan</option>
                    <option value="Bahamas">Bahamas</option>
                    <option value="Bahrain">Bahrain</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="Barbados">Barbados</option>
                    <option value="Belarus">Belarus</option>
                    <option value="Belgium">Belgium</option>
                    <option value="Belize">Belize</option>
                    <option value="Benin">Benin</option>
                    <option value="Bermuda">Bermuda</option>
                    <option value="Bhutan">Bhutan</option>
                    <option value="Bolivia">Bolivia</option>

                </select>
                <span><i class="fa fa-chevron-down"></i></span>
                <i class="fa fa-check disabled valid color-green-dark"></i>
                <i class="fa fa-check disabled invalid color-red-dark"></i>
                <em></em>
            </div>
            <div class="input-style has-borders no-icon validate-field mb-4">
                <input
                    type="text"
                    class="form-control validate-text"
                    id="form23"
                    placeholder="Town/State"
                />
                <label for="form23" class="color-blue-dark">Town/State</label>
                <i class="fa fa-times disabled invalid color-red-dark"></i>
                <i class="fa fa-check disabled valid color-green-dark"></i>
                <em>(required)</em>
            </div>
            <div class="input-style has-borders no-icon validate-field mb-4">
                <input
                    type="text"
                    class="form-control validate-text"
                    id="form234"
                    placeholder="Street Address"
                />
                <label for="form234" class="color-blue-dark">Town/State</label>
                <i class="fa fa-times disabled invalid color-red-dark"></i>
                <i class="fa fa-check disabled valid color-green-dark"></i>
                <em>(required)</em>
            </div>
            <div class="input-style has-borders no-icon validate-field mb-4">
                <input
                    type="text"
                    class="form-control validate-text"
                    id="form2345"
                    placeholder="Apartament, Suite, Unit"
                />
                <label for="form2345" class="color-blue-dark"
                    >Apartament, Suite, Unit</label
                >
                <i class="fa fa-times disabled invalid color-red-dark"></i>
                <i class="fa fa-check disabled valid color-green-dark"></i>
                <em>(required)</em>
            </div>
        </div>
    </div>
    <div class="card card-style">
        <div class="content">
            <h2>Payment Method</h2>
            <p>
                Please select your payment method. This page is a dummy
                template.
            </p>
            <div class="input-style has-borders no-icon mb-4">
                <label for="form52" class="color-blue-dark"
                    >Select A Value</label
                >
                <select id="form52">
                    <option value="default" disabled selected>
                        Select a Value
                    </option>
                    <option value="1">Credit Card</option>
                    <option value="2">PayPal / Stripe</option>
                    <option value="3">Crypto Curency</option>
                </select>
                <span><i class="fa fa-chevron-down"></i></span>
                <i class="fa fa-check disabled valid color-green-dark"></i>
                <i class="fa fa-check disabled invalid color-red-dark"></i>
                <em></em>
            </div>
        </div>
    </div>
    <div class="card card-style">
        <div class="content">
            <div class="d-flex mb-2">
                <div><h5 class="opacity-50 font-500">Products</h5></div>
                <div class="ms-auto"><h5>$3500</h5></div>
            </div>
            <div class="d-flex mb-2">
                <div><h5 class="opacity-50 font-500">Shipping</h5></div>
                <div class="ms-auto"><h5>$150</h5></div>
            </div>
            <div class="d-flex mb-2">
                <div><h5 class="opacity-50 font-500">Taxes</h5></div>
                <div class="ms-auto"><h5>$50</h5></div>
            </div>
            <div class="d-flex mb-2">
                <div><h5 class="opacity-50 font-500">Promo Code</h5></div>
                <div class="ms-auto"><h5>$700</h5></div>
            </div>
            <div class="d-flex mb-3">
                <div><h4 class="font-700">Grand Total</h4></div>
                <div class="ms-auto"><h3>$3.000</h3></div>
            </div>
            <div class="divider"></div>
            <a
                href="#"
                class="btn btn-full bg-highlight btn-m text-uppercase font-800 rounded-sm"
                >Purchase</a
            >
        </div>
    </div>

</div>

@endsection
