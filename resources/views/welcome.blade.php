<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>{{env('APP_NAME')}}</title>
        <link rel="shortcut icon" href="{{asset('assets/icons/favicon.png')}}" type="image/x-icon">
        <link rel="stylesheet" href="{{ asset('assets/bootstrap-5.2.0-dist/css/bootstrap.min.css') }}" />
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('assets/style/custom.css') }}" />

        <style>
            body {
                font-family: "Nunito", sans-serif;
            }
        </style>
    </head>

    <body class="antialiased">
        <nav class="navbar sticky-top navbar-expand-lg bg-light">
            <div class="container">
                <a class="navbar-brand" href="{{route('/')}}">
                    <img src="{{ asset('assets/icons/logo.svg') }}" alt="" width="300" height="24" class="d-inline-block align-text-top" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item mx-3">
                            <a class="nav-link active" aria-current="page" href="#"><img src="{{ asset('assets/icons/tools.svg') }}" alt="" srcset="" /> Tools</a>
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
                            <a class="nav-link" type="button" class="btn btn-outline-success" aria-current="page" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link btn btn-outline-success rounded-pill" type="button" aria-current="page" href="{{ route('register') }}">Sign Up</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        {{--
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <!-- @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif -->
        </div>
        --}}
        <header class="bg-light h-35">
            <div class="container pt-5">
                <div class="jumbotron bg-secondary mb-5 h-169 d-flex justify-content-center align-items-center">Advertisement</div>
                <h1 class="cl-537895 text-center fw-bolder">File Converter</h1>
                <p class="text-center">Convert your files to any format</p>
                <p class="text-center">We have converted <b class="cl-537895">1,545,407,398</b> with a total size of <b class="cl-537895">30,750</b> TB</p>
                <h2 class="text-center fw-bold mt-5">Converter tools</h2>
                <div class="row justify-content-around my-5">
                    <div class="card bg-537895 text-light w-15 my-2">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">Convert To PDF</h5>
                            <img src="{{asset('assets/icons/convert-to-pdf.svg')}}" alt="" srcset="" />
                            <p class="card-text">Easily convert your PDF files into easy to edit DOC and DOCX documents. The converted document is almost 100% accurate.</p>
                            <a href="#convertToPDF" class="stretched-link"></a>
                        </div>
                    </div>
                    <div class="card bg-537895 text-light w-15 my-2">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">Convert From PDF</h5>
                            <img src="{{asset('assets/icons/convert-from-pdf.svg')}}" alt="" srcset="" />
                            <p class="card-text">Easily convert your PDF files into easy to edit DOC and DOCX documents. The converted document is almost 100% accurate.</p>
                            <a href="#convertFromPDF" class="stretched-link"></a>
                        </div>
                    </div>
                    <div class="card bg-537895 text-light w-15 my-2">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">Convert To Image</h5>
                            <img src="{{asset('assets/icons/convert-to-img.svg')}}" alt="" srcset="" />
                            <p class="card-text">Easily convert your PDF files into easy to edit DOC and DOCX documents. The converted document is almost 100% accurate.</p>
                            <a href="#convertToImage" class="stretched-link"></a>
                        </div>
                    </div>
                    <div class="card bg-537895 text-light w-15 my-2">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">Convert From Image</h5>
                            <img src="{{asset('assets/icons/convert-from-img.svg')}}" alt="" srcset="" />
                            <p class="card-text">Easily convert your PDF files into easy to edit DOC and DOCX documents. The converted document is almost 100% accurate.</p>
                            <a href="#convertFromImage" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="container">
            {{-- /* ----------------------------- convert to pdf start ----------------------------- */ --}}
            <h2 class="text-center fw-bold mt-5" id="convertToPDF">Convert To PDF</h2>
            <div class="row d-flex justify-content-around" >
                <div class="card bg-F9FDFF border border-info w-18 my-3">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Word to PDF</h5>
                        <hr class="border border-info" />
                        <p class="card-text">
                            Quick and easy way <br />
                            to convert your <br />
                            Word to PDF file
                        </p>
                        <div class="d-flex justify-content-end align-items-center">
                            <img src="{{asset('assets/icons/word-to-pdf.svg')}}" alt="" srcset="" />
                        </div>
                    </div>
                </div>
                <div class="card bg-F6FFFA border border-success w-18 my-3">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Excel To PDF</h5>
                        <hr class="border border-success" />
                        <p class="card-text">
                            Quick and easy way <br />
                            to convert your <br />
                            Excel file to editable <br />
                            PDF file
                        </p>
                        <div class="d-flex justify-content-end align-items-center">
                            <img src="{{asset('assets/icons/excel-to-pdf.svg')}}" alt="" srcset="" />
                        </div>
                    </div>
                </div>
                <div class="card bg-FFF9F5 border border-danger w-18 my-3">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Power Point To PDF</h5>
                        <hr class="border border-danger" />
                        <p class="card-text">
                            Quick and easy way <br />
                            to convert your <br />
                            Power point to PDF <br />
                            file
                        </p>
                        <div class="d-flex justify-content-end align-items-center">
                            <img src="{{asset('assets/icons/ppt-to-pdf.svg')}}" alt="" srcset="" />
                        </div>
                    </div>
                </div>
                <div class="card bg-FFEDDE border border-danger w-18 my-3">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">eBooks To PDF</h5>
                        <hr class="border border-warning" />
                        <p class="card-text">
                            Quick and easy way <br />
                            to convert your <br />
                            eBooksto to PDF <br />
                            file
                        </p>
                        <div class="d-flex justify-content-end align-items-center">
                            <img src="{{asset('assets/icons/ebooks-to-pdf.svg')}}" alt="" srcset="" />
                        </div>
                    </div>
                </div>
                <div class="card bg-F9F9F9 border border-dark w-18 my-3">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">iWork To PDF</h5>
                        <hr class="border border-dark" />
                        <p class="card-text">
                            Quick and easy way <br />
                            to convert your <br />
                            iWork to PDF file
                        </p>
                        <div class="d-flex justify-content-end align-items-center">
                            <img src="{{asset('assets/icons/iwork-to-pdf.svg')}}" alt="" srcset="" />
                        </div>
                    </div>
                </div>
            </div>
            {{-- /* ----------------------------- convert to pdf ends ----------------------------- */ --}} {{-- /* ---------------------------- convert from pdf start ---------------------------- */ --}}

            <h2 class="text-center fw-bold mt-5" id="convertFromPDF">Convert From PDF</h2>
            <div class="row d-flex justify-content-around" >
                <div class="card bg-F9FDFF border border-info w-18 my-3">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">PDF to Word</h5>
                        <hr class="border border-info" />
                        <p class="card-text">
                            Quick and easy way <br />
                            to convert your <br />
                            Word to PDF file
                        </p>
                        <div class="d-flex justify-content-end align-items-center">
                            <img src="{{asset('assets/icons/pdf-to-word.svg')}}" alt="" srcset="" />
                        </div>
                    </div>
                </div>
                <div class="card bg-F6FFFA border border-success w-18 my-3">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">PDF To Excel</h5>
                        <hr class="border border-success" />
                        <p class="card-text">
                            Quick and easy way <br />
                            to convert your <br />
                            Excel file to editable <br />
                            PDF file
                        </p>
                        <div class="d-flex justify-content-end align-items-center">
                            <img src="{{asset('assets/icons/pdf-to-excel.svg')}}" alt="" srcset="" />
                        </div>
                    </div>
                </div>
                <div class="card bg-FFF9F5 border border-danger w-18 my-3">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">PDF To Power Point</h5>
                        <hr class="border border-danger" />
                        <p class="card-text">
                            Quick and easy way <br />
                            to convert your <br />
                            Power point to PDF <br />
                            file
                        </p>
                        <div class="d-flex justify-content-end align-items-center">
                            <img src="{{asset('assets/icons/pdf-to-ppt.svg')}}" alt="" srcset="" />
                        </div>
                    </div>
                </div>
            </div>
            {{-- /* -------------------------- convert from pdf ends ------------------------- */ --}} {{-- /* ---------------------------- convert to image start ---------------------------- */ --}}
            <h2 class="text-center fw-bold mt-5" id="convertToImage">Convert To Image</h2>
            <div class="row d-flex justify-content-around" >
                <div class="card bg-FCF6FF border border-info w-18 my-3">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">PDF to JPG</h5>
                        <hr class="border border-info" />
                        <p class="card-text">
                            Quick and easy way <br />
                            to convert your <br />
                            Word to PDF file
                        </p>
                        <div class="d-flex justify-content-end align-items-center">
                            <img src="{{asset('assets/icons/pdf-to-img.svg')}}" alt="" srcset="" />
                        </div>
                    </div>
                </div>
                <div class="card bg-FCF6FF border border-success w-18 my-3">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">PDF To PNG</h5>
                        <hr class="border border-success" />
                        <p class="card-text">
                            Quick and easy way <br />
                            to convert your <br />
                            Excel file to editable <br />
                            PDF file
                        </p>
                        <div class="d-flex justify-content-end align-items-center">
                            <img src="{{asset('assets/icons/pdf-to-img.svg')}}" alt="" srcset="" />
                        </div>
                    </div>
                </div>
            </div>
            {{-- /* -------------------------- convert to image ends ------------------------- */ --}} {{-- /* ---------------------------- convert from image start ---------------------------- */ --}}
            <h2 class="text-center fw-bold mt-5" id="convertFromImage">Convert From Image</h2>
            <div class="row d-flex justify-content-around" >
                <div class="card bg-FCF6FF border border-info w-18 my-3">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">JPG to PDF</h5>
                        <hr class="border border-info" />
                        <p class="card-text">
                            Quick and easy way <br />
                            to convert your <br />
                            Word to PDF file
                        </p>
                        <div class="d-flex justify-content-end align-items-center">
                            <img src="{{asset('assets/icons/img-to-pdf.svg')}}" alt="" srcset="" />
                        </div>
                    </div>
                </div>
                <div class="card bg-FCF6FF border border-success w-18 my-3">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">PNG To PDF</h5>
                        <hr class="border border-success" />
                        <p class="card-text">
                            Quick and easy way <br />
                            to convert your <br />
                            Excel file to editable <br />
                            PDF file
                        </p>
                        <div class="d-flex justify-content-end align-items-center">
                            <img src="{{asset('assets/icons/img-to-pdf.svg')}}" alt="" srcset="" />
                        </div>
                    </div>
                </div>
            </div>
            {{-- /* -------------------------- convert to image ends ------------------------- */ --}}
        </div>
        <section class="bg-light">
            <div class="container">
                <div class="row text-center bg-light my-5">
                    <h2 class="my-3 fw0vold">Why Choose Small Convertrer Tools</h2>
                    <div class="col-md-4 col-sm-6 mb-md-4">
                        <img src="{{asset('assets/icons/bulb.svg')}}" class="mb-3" alt="icon" srcset="">
                        <p class="fw-bolder">Quick and easy conversion</p>
                        <p>With just a simple drag-and-drop, you can convert text or image to any format within seconds. There’s no file size limit nor even the need to register to use our service.</p>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-md-4">
                        <img src="{{asset('assets/icons/badge.svg')}}" class="mb-3" alt="icon" srcset="">
                        <p class="fw-bolder">We keep your files safe!</p>
                        <p>We care about privacy. All files will be deleted from our servers forever after one hour. To know more about how much we care, read our privacy policy.</p>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-md-4">
                        <img src="{{asset('assets/icons/thumb.svg')}}" class="mb-3" alt="icon" srcset="">
                        <p class="fw-bolder">All platforms are welcome!</p>
                        <p>Our small converter works on all computers - no matter if you use Mac, Windows or Linux.</p>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-md-4">
                        <img src="{{asset('assets/icons/lock.svg')}}" class="mb-3" alt="icon" srcset="">
                        <p class="fw-bolder">PDF to image in the best quality</p>
                        <p>PDF to image conversion is hard. To bring you the very best quality to convert your PDF files, we have partnered with Solid Documents - the best solution provider on the market.</p>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-md-4">
                        <img src="{{asset('assets/icons/converter.svg')}}" class="mb-3" alt="icon" srcset="">
                        <p class="fw-bolder">Convert a PDF to a DOC in seconds</p>
                        <p>It is seriously ridiculously easy with our tool to convert files online. Try it and you will love it.</p>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-md-4">
                        <img src="{{asset('assets/icons/tree.svg')}}" class="mb-3" alt="icon" srcset="">
                        <p class="fw-bolder">Magic conversion in the cloud</p>
                        <p>We have many servers in the cloud which do nothing else than converting PDF to Image files or text. So, lean back and let them do the work.</p>
                    </div>
                </div>
            </div>
        </section>

        <div class="container text-center ">
            <img src="{{asset('assets/icons/open-email.svg')}}" alt="" srcset="">
            <small class="d-block my-2">Subscribe to our newsletter and stay updated</small>
            <form action="" method="post" class="my-4">
                <div class="input-group w-50 m-auto">
                    <input type="email" name="email" class="form-control w-50 m-auto" placeholder="Enter Your Email address">
                    <img src="{{asset('assets/icons/subscribe-btn.svg')}}" alt="" srcset="">
                </div>
            </form>
            <img src="{{asset('assets/icons/newsletter.svg')}}" class="w-75" alt="" srcset="">
        </div>
        <footer class="bg-light">
            <div class="container">
                <div class="row py-5 mt-5">
                    <div class="col-md-4 col-sm-12 text-center">
                        <img src="{{ asset('assets/icons/logo.svg') }}" alt="" width="300" height="24" class="d-inline-block align-text-top" />
                        <div class="d-flex mt-2 justify-content-center">
                            <a href="javascript::void(0)"><img src="{{asset('assets/icons/social-icons/twitter.svg')}}" alt=""></a>
                            <a href="javascript::void(0)"><img src="{{asset('assets/icons/social-icons/instagram.svg')}}" alt=""></a>
                            <a href="javascript::void(0)"><img src="{{asset('assets/icons/social-icons/linkedin.svg')}}" alt=""></a>
                            <a href="javascript::void(0)"><img src="{{asset('assets/icons/social-icons/facebook.svg')}}" alt=""></a>
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
                    <p>&copy;	{{\Carbon\Carbon::now()->year}} Small Converter Tools</p>
                </div>
            </div>
        </footer>
        <script src="{{ asset('assets/bootstrap-5.2.0-dist/js/bootstrap.min.js') }}"></script>
    </body>
</html>
