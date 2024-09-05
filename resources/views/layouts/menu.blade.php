    <a href="{{route('home')}}" class={{ Request::routeIs('home') ? "active-nav" : " "}}><i class="fa fa-home active-nav"></i><span>Home</span></a>
    <a href="#"><i class="fa fa-search"></i><span>Search</span></a>
    <a href="{{route('order.index')}}" class={{ Request::routeIs('order.index') ? "active-nav" : " "}}><i class="fa fa-star"></i><span>Order</span></a>
    <a href="{{route('profile.index')}}" class={{ Request::routeIs('profile.index') ? "active-nav" : " "}}><i class="fa fa-user"></i><span>Profile</span></a>

    {{-- <a href="#" data-menu="menu-settings"><i class="fa fa-cog"></i><span>Setting</span></a> --}}
