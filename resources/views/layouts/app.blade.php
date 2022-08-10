<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>{{ env('APP_NAME') }}</title>
    <link rel="shortcut icon" href="{{ asset('assets/icons/favicon.svg') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-5.2.0-dist/css/bootstrap.min.css') }}" />
    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/owl/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/owl/css/owl.theme.css') }}">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('assets/style/custom.css') }}" />
</head>

<style type="text/css">

</style>

<body>
    <nav class="navbar sticky-top navbar-expand-lg bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ route('/') }}">
                <img src="{{ asset('assets/icons/logo.svg') }}" alt="" width="300"
                    class="d-inline-block align-text-top" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown has-megamenu">
                        <a class="nav-link " href="javascript::coid(0);" data-bs-toggle="dropdown"><img
                                src="{{ asset('assets/icons/tools.svg') }}" alt="" srcset="" /> Tools</a>

                        <div class="dropdown-menu megamenu m-auto" role="menu">
                            <div class="row g-3 ">
                                <div class="col-lg-3 col-6">
                                    <div class="col-megamenu">
                                        <h6 class="title">Convert to PDF</h6>
                                        <ul class="list-unstyled">
                                            <li class="mt-2"><img width="25px"
                                                    src="{{ asset('assets/icons/word-to-pdf.svg') }}" />&nbsp;&nbsp;<a
                                                    href="javascript::coid(0);"
                                                    class="stretched-linkh text-dark text-decoration-none"> Word to
                                                    PDF</a></li>
                                            <li class="mt-2"><img width="25px"
                                                    src="{{ asset('assets/icons/excel-to-pdf.svg') }}" />&nbsp;&nbsp;<a
                                                    href="javascript::coid(0);"
                                                    class="stretched-linkh text-dark text-decoration-none"> Excel to
                                                    PDF</a></li>
                                            <li class="mt-2"><img width="25px"
                                                    src="{{ asset('assets/icons/ppt-to-pdf.svg') }}" />&nbsp;&nbsp;<a
                                                    href="javascript::coid(0);"
                                                    class="stretched-linkh text-dark text-decoration-none"> Power Point
                                                    to PDF</a></li>
                                            <li class="mt-2"><img width="25px"
                                                    src="{{ asset('assets/icons/ebooks-to-pdf.svg') }}" />&nbsp;&nbsp;<a
                                                    href="javascript::coid(0);"
                                                    class="stretched-linkh text-dark text-decoration-none"> eBooks to
                                                    PDF</a></li>
                                            <li class="mt-2"><img width="25px"
                                                    src="{{ asset('assets/icons/iwork-to-pdf.svg') }}" />&nbsp;&nbsp;<a
                                                    href="javascript::coid(0);"
                                                    class="stretched-linkh text-dark text-decoration-none"> iWork to
                                                    PDF</a></li>
                                        </ul>
                                    </div> <!-- col-megamenu.// -->
                                </div><!-- end col-3 -->
                                <div class="col-lg-3 col-6">
                                    <div class="col-megamenu">
                                        <h6 class="title">Convert From PDF</h6>
                                        <ul class="list-unstyled">
                                            <li class="mt-2"><img width="25px"
                                                    src="{{ asset('assets/icons/pdf-to-word.svg') }}" />&nbsp;&nbsp;<a
                                                    href="javascript::coid(0);"
                                                    class="stretched-linkh text-dark text-decoration-none"> PDF to
                                                    Word</a></li>
                                            <li class="mt-2"><img width="25px"
                                                    src="{{ asset('assets/icons/pdf-to-excel.svg') }}" />&nbsp;&nbsp;<a
                                                    href="javascript::coid(0);"
                                                    class="stretched-linkh text-dark text-decoration-none"> PDF to
                                                    Excel</a></li>
                                            <li class="mt-2"><img width="25px"
                                                    src="{{ asset('assets/icons/pdf-to-ppt.svg') }}" />&nbsp;&nbsp;<a
                                                    href="javascript::coid(0);"
                                                    class="stretched-linkh text-dark text-decoration-none"> PDF to Power
                                                    Point</a></li>
                                        </ul>
                                    </div> <!-- col-megamenu.// -->
                                </div><!-- end col-3 -->
                                <div class="col-lg-3 col-6">
                                    <div class="col-megamenu">
                                        <h6 class="title">Convert To Image</h6>
                                        <ul class="list-unstyled">
                                            <li class="mt-2"><img width="25px"
                                                    src="{{ asset('assets/icons/pdf-to-img.svg') }}" />&nbsp;&nbsp;<a
                                                    href="javascript::coid(0);"
                                                    class="stretched-linkh text-dark text-decoration-none"> PDF to
                                                    JPG</a></li>
                                            <li class="mt-2"><img width="25px"
                                                    src="{{ asset('assets/icons/pdf-to-img.svg') }}" />&nbsp;&nbsp;<a
                                                    href="javascript::coid(0);"
                                                    class="stretched-linkh text-dark text-decoration-none"> PDF to
                                                    PNG</a></li>
                                        </ul>
                                    </div> <!-- col-megamenu.// -->
                                </div>
                                <div class="col-lg-3 col-6">
                                    <div class="col-megamenu">
                                        <h6 class="title">Convert From Image</h6>
                                        <ul class="list-unstyled">
                                            <li class="mt-2"><img width="25px"
                                                    src="{{ asset('assets/icons/img-to-pdf.svg') }}" />&nbsp;&nbsp;<a
                                                    href="javascript::coid(0);"
                                                    class="stretched-linkh text-dark text-decoration-none"> JPG to
                                                    PDF</a></li>
                                            <li class="mt-2"><img width="25px"
                                                    src="{{ asset('assets/icons/img-to-pdf.svg') }}" />&nbsp;&nbsp;<a
                                                    href="javascript::coid(0);"
                                                    class="stretched-linkh text-dark text-decoration-none"> PNG to
                                                    PDF</a></li>
                                        </ul>
                                    </div> <!-- col-megamenu.// -->
                                </div><!-- end col-3 -->
                            </div><!-- end row -->
                        </div>

                    </li>
                    {{-- @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                            @auth
                            <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                            @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                            @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                            @endif @endauth
                        </div>
                        @endif --}}
                    <li class="nav-item mx-3">
                        <a class="nav-link" type="button" class="btn btn-outline-success" aria-current="page"
                            href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link btn btn-outline-success rounded-pill" type="button" aria-current="page"
                            href="{{ route('register') }}">Sign Up</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- <div id="app"> --}}
        {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="javascript::coid(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> --}}

        {{-- <main class="py-4"> --}}
            @yield('content')
        {{-- </main> --}}
    {{-- </div> --}}

    {{-- /* -------------------------- footer starts -------------------------- */ --}}
    @guest
    <footer class="bg-light">
        <div class="container">
            <div class="row py-5 mt-5">
                <div class="col-md-4 col-sm-12 ">
                    <img src="{{ asset('assets/icons/logo.svg') }}" alt="" width="300"
                        class="d-inline-block align-text-top" />
                    <div class="d-flex mt-2 justify-content-center">
                        <a href="javascript::void(0)"><img src="{{ asset('assets/icons/social-icons/twitter.svg') }}"
                                alt=""></a>
                        <a href="javascript::void(0)"><img
                                src="{{ asset('assets/icons/social-icons/instagram.svg') }}" alt=""></a>
                        <a href="javascript::void(0)"><img
                                src="{{ asset('assets/icons/social-icons/linkedin.svg') }}" alt=""></a>
                        <a href="javascript::void(0)"><img
                                src="{{ asset('assets/icons/social-icons/facebook.svg') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-md-2 col-sm-12">
                    <ul class="list-unstyled">
                        <li class="mb-2 fw-bolder">Member Area</li>
                        <li class="mb-2">Sign Up</li>
                        <li class="mb-2">Login</li>
                        <li class="mb-2">Forget Password</li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-12">
                    <ul class="list-unstyled">
                        <li class="mb-2 fw-bolder">Small Converter</li>
                        <li class="mb-2 ">Blog</li>
                        <li class="mb-2 ">Testominals</li>
                        <li class="mb-2 ">Contact Us</li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-12">
                    <ul class="list-unstyled">
                        <li class="mb-2 fw-bolder">Company</li>
                        <li class="mb-2">Terms & Conditions</li>
                        <li class="mb-2">Privacy</li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-12">
                    <ul class="list-unstyled">
                        <li class="mb-2 fw-bolder">Support</li>
                        <li class="mb-2">Help</li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="row">
                <p>&copy; {{ \Carbon\Carbon::now()->year }} Small Converter Tools</p>
            </div>
        </div>
    </footer>
    {{-- /* -------------------------- footer starts -------------------------- */ --}}
    @endguest
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('assets/plugins/bootstrap-5.2.0-dist/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-5.2.0-dist/js/bootstrap.min.js') }}"></script>
    @yield('script')
</body>
</html>
