@extends('layouts.master')
@section('content')
<div class="page-content header-clear-small">

    <div class="search-page">
        <div class="search-box search-header bg-theme card-style me-3 ms-3">
            <i class="fa fa-search"></i>
            <input
                type="text"
                class="border-0"
                placeholder="What are you looking for? "
                data-search
            />
            <a href="#" class="clear-search disabled mt-0"
                ><i class="fa fa-times color-red-dark"></i
            ></a>
        </div>
        <div
            class="search-results disabled-search-list card card-style shadow-l"
        >
            <div class="content">
                <div
                    data-filter-item
                    data-filter-name="all products eazy mobile"
                    class="search-result-list"
                >
                    <img
                        class="shadow-l preload-img"
                        src="images/empty.png"
                        data-src="images/pictures/32s.jpg"
                        alt="img"
                    />
                    <h1>Eazy | Mobile Website</h1>
                    <p>
                        Eazy Mobile, a best seller and trending item, loved by
                        all.
                    </p>
                    <a href="#" class="bg-highlight">VIEW</a>
                </div>
                <div
                    data-filter-item
                    data-filter-name="all products eazy mobile"
                    class="search-result-list"
                >
                    <img
                        class="shadow-l preload-img"
                        src="images/empty.png"
                        data-src="images/pictures/29s.jpg"
                        alt="img"
                    />
                    <h1>Eazy | Cordova App</h1>
                    <p>
                        Eazy is also available as <br />
                        a Cordova & PhoneGap App.
                    </p>
                    <a href="#" class="bg-highlight">VIEW</a>
                </div>
                <div
                    data-filter-item
                    data-filter-name="all products mega mobile"
                    class="search-result-list"
                >
                    <img
                        class="shadow-l preload-img"
                        src="images/empty.png"
                        data-src="images/pictures/27s.jpg"
                        alt="img"
                    />
                    <h1>Mega | Mobile Website</h1>
                    <p>Mega Powerful, Mega Feature Filled, Easy to Use.</p>
                    <a href="#" class="bg-highlight">VIEW</a>
                </div>
                <div
                    data-filter-item
                    data-filter-name="all products mega mobile"
                    class="search-result-list"
                >
                    <img
                        class="shadow-l preload-img"
                        src="images/empty.png"
                        data-src="images/pictures/28s.jpg"
                        alt="img"
                    />
                    <h1>Mega | Cordova App</h1>
                    <p>
                        Mega is also available as <br />
                        a Cordova & PhoneGap App.
                    </p>
                    <a href="#" class="bg-highlight">VIEW</a>
                </div>
                <div
                    data-filter-item
                    data-filter-name="all products ultra mobile"
                    class="search-result-list"
                >
                    <img
                        class="shadow-l preload-img"
                        src="images/empty.png"
                        data-src="images/pictures/26s.jpg"
                        alt="img"
                    />
                    <h1>Ultra | Mobile Website</h1>
                    <p>
                        Ultra Powerful and Fast Mobile Website, an absolute best
                        seller.
                    </p>
                    <a href="#" class="bg-highlight">VIEW</a>
                </div>
                <div
                    data-filter-item
                    data-filter-name="all products ultra mobile"
                    class="search-result-list"
                >
                    <img
                        class="shadow-l preload-img"
                        src="images/empty.png"
                        data-src="images/pictures/25s.jpg"
                        alt="img"
                    />
                    <h1>Ultra | Cordova App</h1>
                    <p>
                        Ultra is also available as <br />
                        a Cordova & PhoneGap App.
                    </p>
                    <a href="#" class="bg-highlight">VIEW</a>
                </div>
                <div
                    data-filter-item
                    data-filter-name="all products kolor mobile"
                    class="search-result-list"
                >
                    <img
                        class="shadow-l preload-img"
                        src="images/empty.png"
                        data-src="images/pictures/24s.jpg"
                        alt="img"
                    />
                    <h1>Kolor | Mobile Website</h1>
                    <p>
                        Kolor is creative, beautiful, and offers beautiful
                        colors.
                    </p>
                    <a href="#" class="bg-highlight">VIEW</a>
                </div>
                <div
                    data-filter-item
                    data-filter-name="all products kolor mobile"
                    class="search-result-list"
                >
                    <img
                        class="shadow-l preload-img"
                        src="images/empty.png"
                        data-src="images/pictures/23s.jpg"
                        alt="img"
                    />
                    <h1>Kolor | Cordova App</h1>
                    <p>
                        Kolor is also available as <br />
                        a Cordova & PhoneGap App.
                    </p>
                    <a href="#" class="bg-highlight">VIEW</a>
                </div>
                <div
                    data-filter-item
                    data-filter-name="all products vinga mobile"
                    class="search-result-list"
                >
                    <img
                        class="shadow-l preload-img"
                        src="images/empty.png"
                        data-src="images/pictures/22s.jpg"
                        alt="img"
                    />
                    <h1>Vinga | Mobile Website</h1>
                    <p>
                        Simplicity and Elegance at it's best. Vinga is very
                        fast.
                    </p>
                    <a href="#" class="bg-highlight">VIEW</a>
                </div>
                <div
                    data-filter-item
                    data-filter-name="all products vinga mobile"
                    class="search-result-list"
                >
                    <img
                        class="shadow-l preload-img"
                        src="images/empty.png"
                        data-src="images/pictures/21s.jpg"
                        alt="img"
                    />
                    <h1>Vinga | Cordova App</h1>
                    <p>
                        Vinga is also available as <br />
                        a Cordova & PhoneGap App.
                    </p>
                    <a href="#" class="bg-highlight">VIEW</a>
                </div>
                <div class="search-no-results disabled">
                    <h3 class="bold top-10">Nothing found...</h3>
                    <span class="under-heading font-11 opacity-70 color-theme"
                        >There's nothing matching the description you're looking
                        for, try a different keyword.</span
                    >
                </div>
            </div>
        </div>
        <div class="search-trending card card-style">
            <div class="content mb-2">
                <h3>Trending Searches</h3>
                <p class="font-11 mt-n2">What others are Searching for.</p>
            </div>
            <div class="list-group list-custom-small me-3 ms-3">
                <a href="#">
                    <span class="font-400 color-blue-dark">All Products</span>
                    <i class="color-gray-dark fa fa-angle-right"></i>
                </a>
                <a href="#">
                    <span class="font-400 color-blue-dark">Eazy Mobile</span>
                    <i class="color-gray-dark fa fa-angle-right"></i>
                </a>
                <a href="#">
                    <span class="font-400 color-blue-dark">Mega Mobile</span>
                    <i class="color-gray-dark fa fa-angle-right"></i>
                </a>
                <a href="#">
                    <span class="font-400 color-blue-dark">Ultra Mobile</span>
                    <i class="color-gray-dark fa fa-angle-right"></i>
                </a>
                <a href="#">
                    <span class="font-400 color-blue-dark">Kolor Mobile</span>
                    <i class="color-gray-dark fa fa-angle-right"></i>
                </a>
                <a href="#" class="border-0">
                    <span class="font-400 color-blue-dark">Vinga Mobile</span>
                    <i class="color-gray-dark fa fa-angle-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
