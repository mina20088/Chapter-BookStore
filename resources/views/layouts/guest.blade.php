
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-100">
<header>
    <nav class="navbar navbar-expand-lg py-lg-0">
        <div class="Home-navbar-container container-fluid py-lg-3">

            <a href=""><img class="logo" src="{{ \Illuminate\Support\Facades\Vite::asset("/resources/images/logo-colored.png") }}" alt="logo"></a>

            @include('partials._login-cart-sidebar-section')
       

            <div class="offcanvas offcanvas-start" tabindex="-1" id="sidebar">
                <div class="offcanvas-header d-flex justify-content-center p-lg-0">
                    <a class="d-lg-none" href=""><img class="sidebar-logo" src="{{ \Illuminate\Support\Facades\Vite::asset("/resources/images/logo-colored.png") }}"></a>
                </div>
                <div class="offcanvas-body">
                    <ul class="Home-side-bar navbar-nav d-flex justify-content-sm-center d-lg-flex align-items-lg-center">
                        <li class="nav-item text-sm-center d-flex align-items-sm-center justify-content-sm-center">
                            <i class="fa-solid fa-house fs-4 d-lg-none"></i>
                            <a href="#" class="nav-link ms-sm-2">Home</a>
                        </li>
                        <li class="nav-item text-sm-center d-flex justify-content-sm-center align-items-sm-center">
                            <i class="fa-solid fa-book fs-4 d-lg-none"></i>
                            <a href="#" class="nav-link  ms-sm-2">Books</a>
                        </li>
                        <li class="nav-item text-sm-center d-flex justify-content-sm-center align-items-sm-center">
                            <i class="fa-solid fa-circle-info text-white fs-4 d-lg-none"></i>
                            <a href="#" class="nav-link   ms-sm-2">About</a>
                        </li>
                        <li class="nav-item text-sm-center d-flex justify-content-sm-center align-items-sm-center ms-sm-3 ms-lg-0">
                            <i class="fa-solid fa-circle-question fs-4 d-lg-none"></i>
                            <a href="#" class="nav-link  ms-sm-2">Contact</a>
                        </li>
                    </ul>
                    <ul class="Home-side-bar-login navbar-nav d-sm-none d-lg-flex justify-content-lg-end align-items-lg-center">
                        <li class="nav-item text-sm-center d-flex justify-content-sm-center align-items-sm-center">
                            <a href="#" class="btn btn-link"><img src="{{ \Illuminate\Support\Facades\Vite::asset('/resources/images/login.png') }}"></a>
                        </li>
                        <li class="nav-item text-sm-center d-flex justify-content-sm-center align-items-sm-center ms-3">
                            <a href="" class="btn btn-link"><img src="{{ \Illuminate\Support\Facades\Vite::asset('/resources/images/bag.png') }}"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>
<main>
    @yield('content')
</main>
<footer>
    @yield('footer')
</footer>
</body>
</html>
