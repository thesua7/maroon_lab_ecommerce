<div class="topbar-mobile">
    <div class="row align-items-center">
        <div class="col-md-12">
            <div class="mobile-logobar">
                <a href="/" class="mobile-logo"><img src="{{asset('images/logo.svg')}}" class="img-fluid" alt="logo"></a>
            </div>
            <div class="mobile-togglebar">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <div class="topbar-toggle-icon">
                            <a class="topbar-toggle-hamburger" href="javascript:void(0);">
                                <img src="{{asset('images/svg-icon/horizontal.svg')}}" class="img-fluid menu-hamburger-horizontal" alt="horizontal">
                                <img src="{{asset('images/svg-icon/verticle.svg')}}" class="img-fluid menu-hamburger-vertical" alt="verticle">
                            </a>
                        </div>
                    </li>
                    <li class="list-inline-item">
                        <div class="menubar">
                            <a class="menu-hamburger" href="javascript:void(0);">
                                <img src="{{asset('images/svg-icon/collapse.svg')}}" class="img-fluid menu-hamburger-collapse" alt="collapse">
                                <img src="{{asset('images/svg-icon/close.svg')}}" class="img-fluid menu-hamburger-close" alt="close">
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Start Topbar -->
<div class="topbar m-b-45">
    <!-- Start row -->
    <div class="row align-items-center">
        <!-- Start col -->
        <div class="col-md-12 align-self-center">
            <div class="togglebar">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <div class="menubar">
                            <a class="menu-hamburger" href="javascript:void(0);">
                                <img src="{{asset('images/svg-icon/collapse.svg')}}" class="img-fluid menu-hamburger-collapse" alt="collapse">
                                <img src="{{asset('images/svg-icon/close.svg')}}" class="img-fluid menu-hamburger-close" alt="close">
                            </a>
                        </div>
                    </li>
                    <li class="list-inline-item">
                        <div class="searchbar">
                            <form>
                                <div class="input-group">
                                    <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                                    <div class="input-group-append">
                                        <button class="btn" type="submit" id="button-addon2"><img src="{{asset('images/svg-icon/search.svg')}}" class="img-fluid" alt="search"></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="infobar">
                <ul class="list-inline mb-0">
                @guest
                    <li class="list-inline-item">
                        <a class="nav-link btn-outline-primary btn-sm" href="{{ route('login') }}">
                            {{ strtoupper(__('Login')) }}
                        </a>
                    </li>
                    @if (Route::has('register'))
                        <li class="list-inline-item">
                            <a class="nav-link  btn-outline-primary btn-sm" href="{{ route('register') }}">{{ strtoupper(__('Register')) }}</a>
                        </li>
                    @endif
                @else
                    <li class="list-inline-item">
                        <div class="settingbar">
                            <a href="javascript:void(0)" id="infobar-settings-open" class="infobar-icon">
                                <img src="{{asset('images/svg-icon/settings.svg')}}" class="img-fluid" alt="settings">
                            </a>
                        </div>
                    </li>
                    <li class="list-inline-item">
                        @include('partials.partials-notifications')
                    </li>
{{--                    <li class="list-inline-item">--}}
{{--                        @include('partials.partials-language')--}}
{{--                    </li>--}}
                    <li class="list-inline-item">
                        @include('partials.partials-profile-bar')
                    </li>
                @endguest
                </ul>
            </div>
        </div>
        <!-- End col -->
    </div>
    <!-- End row -->
</div>
