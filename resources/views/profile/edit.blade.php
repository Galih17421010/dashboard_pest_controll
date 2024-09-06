@extends('layouts.master')
@section('navhead')
@section('title','Profile Information')
<div class="header header-fixed header-logo-center">
    @include('layouts.navhead')
</div>
@endsection
@section('content')
<div class="page-content header-clear-medium">
    <div class="card card-style">
        <div class="content mb-0">
            <h2>Basic Information</h2>
            <p class="mb-4">
                This contains basic profile fields, easily editable, set to disable
                or pre-populate with useful information.
            </p>
            <div
                class="input-style input-style-always-active has-borders has-icon validate-field"
            >
                <i class="fa fa-user font-12"></i>
                <input
                    type="text"
                    class="form-control validate-name"
                    id="name"
                    value="{{old('name', $user->name)}}"
                />
                <label for="f1" class="color-blue-dark font-13">Name</label>
                <i class="fa fa-times disabled invalid color-red-dark"></i>
                <i class="fa fa-check disabled valid color-green-dark"></i>
                <em>(required)</em>
            </div>
            <div
                class="input-style input-style-always-active has-borders has-icon validate-field mt-4"
            >
                <i class="fa fa-at font-12"></i>
                <input
                    type="email"
                    class="form-control validate-name"
                    id="f1a"
                    value="{{old('email', $user->email)}}"
                />
                <label for="f1a" class="color-blue-dark font-13">Email</label>
                <i class="fa fa-times disabled invalid color-red-dark"></i>
                <i class="fa fa-check disabled valid color-green-dark"></i>
                <em>(required)</em>
            </div>
            <div
                class="input-style input-style-always-active has-borders has-icon validate-field mt-4"
            >
                <i class="fa fa-map-marker font-12"></i>
                <input
                    type="text"
                    class="form-control validate-name"
                    id="f1abc"
                    placeholder="Melbourne, Victoria"
                />
                <label for="f1abc" class="color-blue-dark font-13">Location</label>
                <i class="fa fa-times disabled invalid color-red-dark"></i>
                <i class="fa fa-check disabled valid color-green-dark"></i>
                <em>(required)</em>
            </div>
            <div
                class="input-style input-style-always-active has-borders has-icon validate-field mt-4"
            >
                <i class="fa fa-phone font-12"></i>
                <input
                    type="tel"
                    class="form-control validate-name"
                    id="f1abcd"
                    placeholder="+1 234 5678 9871"
                />
                <label for="f1abcd" class="color-blue-dark font-13">Phone</label>
                <i class="fa fa-times disabled invalid color-red-dark"></i>
                <i class="fa fa-check disabled valid color-green-dark"></i>
                <em>(required)</em>
            </div>
            <a
                href="#"
                class="btn btn-full bg-highlight btn-m text-uppercase rounded-sm shadow-l mb-3 mt-4 font-900"
                >Save Information</a
            >
        </div>
    </div>

    <div class="card card-style">
        <div class="content mb-0">
            <h2 class="mb-0">Account Security</h2>
            <p class="mb-4">
                Activate options or set different elements here that are different
                from basic fields.
            </p>
            <div
                class="input-style input-style-always-active has-borders no-icon validate-field"
            >
                <input
                    type="password"
                    class="form-control validate-text"
                    id="f3c"
                    value="1234&5678"
                    placeholder
                />
                <label for="f3c" class="color-blue-dark font-12"
                    >Old Password</label
                >
                <i class="fa fa-times disabled invalid color-red-dark"></i>
                <i class="fa fa-check disabled valid color-green-dark"></i>
                <em>(required)</em>
            </div>
            <div
                class="input-style input-style-always-active has-borders no-icon validate-field"
            >
                <input
                    type="password"
                    class="form-control validate-text"
                    id="f3a"
                    value="1234&5678"
                    placeholder
                />
                <label for="f3a" class="color-blue-dark font-12"
                    >New Password</label
                >
                <i class="fa fa-times disabled invalid color-red-dark"></i>
                <i class="fa fa-check disabled valid color-green-dark"></i>
                <em>(required)</em>
            </div>
            <div
                class="input-style input-style-always-active has-borders no-icon validate-field"
            >
                <input
                    type="password"
                    class="form-control validate-text"
                    id="f3b"
                    value="1234&5678"
                    placeholder
                />
                <label for="f3b" class="color-blue-dark font-12"
                    >Confirm Password</label
                >
                <i class="fa fa-times disabled invalid color-red-dark"></i>
                <i class="fa fa-check disabled valid color-green-dark"></i>
                <em>(required)</em>
            </div>
            <a
                href="#"
                class="btn btn-full bg-highlight btn-m text-uppercase rounded-sm shadow-l mb-3 mt-4 font-900"
                >Update Password</a
            >
        </div>
    </div>

</div>
@endsection
