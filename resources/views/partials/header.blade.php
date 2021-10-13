<header>
    <div class="header-inner">
        <div style="background-image: url({{ asset('assets/images/header-bg.png') }});" class="header-top">
            <div class="header-left">
                <div class="hamburger">
                    <div class="line line1"></div>
                    <div class="line line2"></div>
                    <div class="line line3"></div>
                </div>
            </div>
            <div class="header-center">
                <a href="{{ route('home') }}"><h3 style="color: white">TEST APP</h3></a>
            </div>
            <div class="header-right d-flex flex-wrap align-items-center justify-content-end">
                <a href="{{ route('reset-email') }}" class="icc-btn icc-btn-white ml-3">Reset Email</a>
                <a href="{{ route('logout') }}" class="icc-btn icc-btn-white ml-3">Logout</a>
            </div>
        </div>
    </div>
</header>
