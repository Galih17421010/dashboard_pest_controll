@extends('layouts.master')
@section('navhead')
@section('title','Favorite')
<div class="header header-fixed header-logo-center">
    @include('layouts.navhead')
</div>
@endsection
@section('content')
    <div class="page-content header-clear-medium">
        <div class="content mt-2 mb-n3">
            <div class="row">
                <div class="col-6 pe-2">
                    <a
                        href="#"
                        class="card card-style mx-0 mb-3"
                        data-menu="menu-product"
                    >
                        <div class="card-top m-2">
                            <span
                                class="bg-blue-dark font-11 px-2 py-1 font-700 rounded-xs shadow-xxl"
                                >15% OFF</span
                            >
                        </div>
                        <img
                            src="assets/images/food/full/5s.jpg"
                            alt="img"
                            width="100"
                            class="mx-auto"
                        />
                        <div class="p-2">
                            <h4 class="mb-0">Fresh Oranges</h4>
                            <p class="mb-0 font-11 mt-n1">Imported from Europe</p>
                        </div>
                        <div class="divider mb-0"></div>
                        <h5 class="p-2 font-12">
                            $5.40 / pack
                            <span
                                class="float-end font-400 font-11 color-green-dark"
                                >In Stock</span
                            >
                        </h5>
                    </a>
                </div>
                <div class="col-6 ps-2">
                    <a
                        href="#"
                        class="card card-style mx-0 mb-3"
                        data-menu="menu-product"
                    >
                        <div class="card-top m-2">
                            <span
                                class="bg-blue-dark font-11 px-2 py-1 font-700 rounded-xs shadow-xxl"
                                >25% OFF</span
                            >
                        </div>
                        <img
                            src="assets/images/food/full/2s.jpg"
                            alt="img"
                            width="100"
                            class="mx-auto"
                        />
                        <div class="p-2">
                            <h4 class="mb-0">Iceberg Salad</h4>
                            <p class="mb-0 font-11 mt-n1">Local Farm Imported</p>
                        </div>
                        <div class="divider mb-0"></div>
                        <h5 class="p-2 font-12">
                            $3.20 / pack
                            <span
                                class="float-end font-400 font-11 color-yellow-dark"
                                >Low Stock</span
                            >
                        </h5>
                    </a>
                </div>
                <div class="col-6 pe-2">
                    <a
                        href="#"
                        class="card card-style mx-0 mb-3"
                        data-menu="menu-product"
                    >
                        <div class="card-top m-2">
                            <span
                                class="bg-blue-dark font-11 px-2 py-1 font-700 rounded-xs shadow-xxl"
                                >5% OFF</span
                            >
                        </div>
                        <img
                            src="assets/images/food/full/1s.jpg"
                            alt="img"
                            width="100"
                            class="mx-auto"
                        />
                        <div class="p-2">
                            <h4 class="mb-0">Strawberries</h4>
                            <p class="mb-0 font-11 mt-n1">
                                Imported from Australia
                            </p>
                        </div>
                        <div class="divider mb-0"></div>
                        <h5 class="p-2 font-12">
                            $7.30 / pack
                            <span class="float-end font-400 font-11 color-red-dark"
                                >Out of Stock</span
                            >
                        </h5>
                    </a>
                </div>
                <div class="col-6 ps-2">
                    <a
                        href="#"
                        class="card card-style mx-0 mb-3"
                        data-menu="menu-product"
                    >
                        <div class="card-top m-2">
                            <span
                                class="bg-blue-dark font-11 px-2 py-1 font-700 rounded-xs shadow-xxl"
                                >35% OFF</span
                            >
                        </div>
                        <img
                            src="assets/images/food/full/8s.jpg"
                            alt="img"
                            width="100"
                            class="mx-auto"
                        />
                        <div class="p-2">
                            <h4 class="mb-0">Bananas</h4>
                            <p class="mb-0 font-11 mt-n1">Local Farm Imported</p>
                        </div>
                        <div class="divider mb-0"></div>
                        <h5 class="p-2 font-12">
                            $9.50 / pack
                            <span class="float-end font-400 font-11 color-blue-dark"
                                >Order Now</span
                            >
                        </h5>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
