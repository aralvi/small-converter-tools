<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>{{ env('APP_NAME') }}</title>
    <link rel="shortcut icon" href="{{ asset('assets/icons/favicon.svg') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-5.2.0-dist/css/bootstrap.min.css') }}" />
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('assets/plugins/owl/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/owl/css/owl.theme.css') }}">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('assets/style/custom.css') }}" />
</head>

<style type="text/css">
.navbar .megamenu{ padding: 1rem; }
/* ============ desktop view ============ */
@media all and (min-width: 992px) {

	.navbar .has-megamenu{position:static!important;}
	.navbar .megamenu{left:10px;right: 10px; width:90%; margin-top:-1px;  }

}
/* ============ desktop view .end// ============ */


/* ============ mobile view ============ */
@media(max-width: 991px){
	.navbar.fixed-top .navbar-collapse, .navbar.sticky-top .navbar-collapse{
		overflow-y: auto;
	    max-height: 90vh;
	    margin-top:10px;
	}
}
/* ============ mobile view .end// ============ */
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
                        <a class="nav-link " href="#" data-bs-toggle="dropdown"><img src="{{ asset('assets/icons/tools.svg') }}" alt="" srcset="" /> Tools</a>

                        <div class="dropdown-menu megamenu m-auto" role="menu">
                        <div class="row g-3 ">
                            <div class="col-lg-3 col-6">
                                <div class="col-megamenu">
                                    <h6 class="title">Convert to PDF</h6>
                                    <ul class="list-unstyled">
                                        <li class="mt-2"><img width="25px" src="{{asset('assets/icons/word-to-pdf.svg')}}" />&nbsp;&nbsp;<a href="#" class="stretched-linkh text-dark text-decoration-none"> Word to PDF</a></li>
                                        <li class="mt-2"><img width="25px" src="{{asset('assets/icons/excel-to-pdf.svg')}}" />&nbsp;&nbsp;<a href="#" class="stretched-linkh text-dark text-decoration-none"> Excel to PDF</a></li>
                                        <li class="mt-2"><img width="25px" src="{{asset('assets/icons/ppt-to-pdf.svg')}}" />&nbsp;&nbsp;<a href="#" class="stretched-linkh text-dark text-decoration-none"> Power Point to PDF</a></li>
                                        <li class="mt-2"><img width="25px" src="{{asset('assets/icons/ebooks-to-pdf.svg')}}" />&nbsp;&nbsp;<a href="#" class="stretched-linkh text-dark text-decoration-none"> eBooks to PDF</a></li>
                                        <li class="mt-2"><img width="25px" src="{{asset('assets/icons/iwork-to-pdf.svg')}}" />&nbsp;&nbsp;<a href="#" class="stretched-linkh text-dark text-decoration-none"> iWork to PDF</a></li>
                                    </ul>
                                </div>  <!-- col-megamenu.// -->
                            </div><!-- end col-3 -->
                            <div class="col-lg-3 col-6">
                                <div class="col-megamenu">
                                    <h6 class="title">Convert From PDF</h6>
                                    <ul class="list-unstyled">
                                        <li class="mt-2"><img width="25px" src="{{asset('assets/icons/pdf-to-word.svg')}}" />&nbsp;&nbsp;<a href="#" class="stretched-linkh text-dark text-decoration-none"> PDF to Word</a></li>
                                        <li class="mt-2"><img width="25px" src="{{asset('assets/icons/pdf-to-excel.svg')}}" />&nbsp;&nbsp;<a href="#" class="stretched-linkh text-dark text-decoration-none"> PDF to Excel</a></li>
                                        <li class="mt-2"><img width="25px" src="{{asset('assets/icons/pdf-to-ppt.svg')}}" />&nbsp;&nbsp;<a href="#" class="stretched-linkh text-dark text-decoration-none"> PDF to Power Point</a></li>
                                    </ul>
                                </div>  <!-- col-megamenu.// -->
                            </div><!-- end col-3 -->
                            <div class="col-lg-3 col-6">
                                <div class="col-megamenu">
                                    <h6 class="title">Convert To Image</h6>
                                    <ul class="list-unstyled">
                                        <li class="mt-2"><img width="25px" src="{{asset('assets/icons/pdf-to-img.svg')}}" />&nbsp;&nbsp;<a href="#" class="stretched-linkh text-dark text-decoration-none"> PDF to JPG</a></li>
                                        <li class="mt-2"><img width="25px" src="{{asset('assets/icons/pdf-to-img.svg')}}" />&nbsp;&nbsp;<a href="#" class="stretched-linkh text-dark text-decoration-none"> PDF to PNG</a></li>
                                    </ul>
                                </div>  <!-- col-megamenu.// -->
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="col-megamenu">
                                    <h6 class="title">Convert From Image</h6>
                                    <ul class="list-unstyled">
                                        <li class="mt-2"><img width="25px" src="{{asset('assets/icons/img-to-pdf.svg')}}" />&nbsp;&nbsp;<a href="#" class="stretched-linkh text-dark text-decoration-none"> JPG to PDF</a></li>
                                        <li class="mt-2"><img width="25px" src="{{asset('assets/icons/img-to-pdf.svg')}}" />&nbsp;&nbsp;<a href="#" class="stretched-linkh text-dark text-decoration-none"> PNG to PDF</a></li>
                                    </ul>
                                </div>  <!-- col-megamenu.// -->
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

    {{-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
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
        </div> --}}

    {{-- /* -------------------------- advertisement section starts ------------------------- */ --}}

    <section class="bg-light" id="advertisement">
        <div class="container">
            <div class=" jumbotron bg-secondary h-169 d-flex justify-content-center align-items-center">Advertisement
            </div>
        </div>
    </section>
    {{-- /* -------------------------- advertisement section ends ------------------------- */ --}}
    
    <header class="bg-light h-35">
        <div class="container pt-5">
            <h1 class="cl-537895 text-center fw-bolder">File Converter</h1>
            <p class="text-center">Convert your files to any format</p>
            <p class="text-center">We have converted <b class="cl-537895">1,545,407,398</b> with a total size of <b
                    class="cl-537895">30,750</b> TB</p>
            <h2 class="text-center fw-bold mt-5">Converter tools</h2>
            <div class="row justify-content-around my-5">
                <div class="card bg-537895 text-light w-15 my-2">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Convert To PDF</h5>
                        <img src="{{ asset('assets/icons/convert-to-pdf.svg') }}" alt="" srcset="" />
                        <p class="card-text">Easily convert your PDF files into easy to edit DOC and DOCX documents. The
                            converted document is almost 100% accurate.</p>
                        <a href="#convertToPDF" class="stretched-link"></a>
                    </div>
                </div>
                <div class="card bg-537895 text-light w-15 my-2">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Convert From PDF</h5>
                        <img src="{{ asset('assets/icons/convert-from-pdf.svg') }}" alt="" srcset="" />
                        <p class="card-text">Easily convert your PDF files into easy to edit DOC and DOCX documents. The
                            converted document is almost 100% accurate.</p>
                        <a href="#convertFromPDF" class="stretched-link"></a>
                    </div>
                </div>
                <div class="card bg-537895 text-light w-15 my-2">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Convert To Image</h5>
                        <img src="{{ asset('assets/icons/convert-to-img.svg') }}" alt="" srcset="" />
                        <p class="card-text">Easily convert your PDF files into easy to edit DOC and DOCX documents. The
                            converted document is almost 100% accurate.</p>
                        <a href="#convertToImage" class="stretched-link"></a>
                    </div>
                </div>
                <div class="card bg-537895 text-light w-15 my-2">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Convert From Image</h5>
                        <img src="{{ asset('assets/icons/convert-from-img.svg') }}" alt="" srcset="" />
                        <p class="card-text">Easily convert your PDF files into easy to edit DOC and DOCX documents.
                            The converted document is almost 100% accurate.</p>
                        <a href="#convertFromImage" class="stretched-link"></a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    {{-- /* ------------------------------ tools started ----------------------------- */ --}}
    <div class="container" id="toolsToConvert">
        {{-- /* ----------------------------- convert to pdf start ----------------------------- */ --}}
        <div class="row d-flex justify-content-around" id="convertToPDF">
            <h2 class="text-center fw-bold mt-5" >Convert To PDF</h2>
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
                        <img src="{{ asset('assets/icons/word-to-pdf.svg') }}" alt="" srcset="" />
                        <a href="javascript::void(0)" class="stretched-link"></a>
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
                        <img src="{{ asset('assets/icons/excel-to-pdf.svg') }}" alt="" srcset="" />
                        <a href="javascript::void(0)" class="stretched-link"></a>
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
                        <img src="{{ asset('assets/icons/ppt-to-pdf.svg') }}" alt="" srcset="" />
                        <a href="javascript::void(0)" class="stretched-link"></a>
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
                        <img src="{{ asset('assets/icons/ebooks-to-pdf.svg') }}" alt="" srcset="" />
                        <a href="javascript::void(0)" class="stretched-link"></a>
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
                        <img src="{{ asset('assets/icons/iwork-to-pdf.svg') }}" alt="" srcset="" />
                        <a href="javascript::void(0)" class="stretched-link"></a>
                    </div>
                </div>
            </div>
        </div>
        {{-- /* ----------------------------- convert to pdf ends ----------------------------- */ --}} {{-- /* ---------------------------- convert from pdf start ---------------------------- */ --}}

        <div class="row d-flex justify-content-around" id="convertFromPDF">
            <h2 class="text-center fw-bold mt-5" >Convert From PDF</h2>
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
                        <img src="{{ asset('assets/icons/pdf-to-word.svg') }}" alt="" srcset="" />
                        <a href="javascript::void(0)" class="stretched-link"></a>
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
                        <img src="{{ asset('assets/icons/pdf-to-excel.svg') }}" alt="" srcset="" />
                        <a href="javascript::void(0)" class="stretched-link"></a>
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
                        <img src="{{ asset('assets/icons/pdf-to-ppt.svg') }}" alt="" srcset="" />
                        <a href="javascript::void(0)" class="stretched-link"></a>
                    </div>
                </div>
            </div>
        </div>
        {{-- /* -------------------------- convert from pdf ends ------------------------- */ --}} {{-- /* ---------------------------- convert to image start ---------------------------- */ --}}
        <div class="row d-flex justify-content-around" id="convertToImage">
            <h2 class="text-center fw-bold mt-5" >Convert To Image</h2>
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
                        <img src="{{ asset('assets/icons/pdf-to-img.svg') }}" alt="" srcset="" />
                        <a href="javascript::void(0)" class="stretched-link"></a>
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
                        <img src="{{ asset('assets/icons/pdf-to-img.svg') }}" alt="" srcset="" />
                        <a href="javascript::void(0)" class="stretched-link"></a>
                    </div>
                </div>
            </div>
        </div>
        {{-- /* -------------------------- convert to image ends ------------------------- */ --}} {{-- /* ---------------------------- convert from image start ---------------------------- */ --}}
        <div class="row d-flex justify-content-around" id="convertFromImage">
            <h2 class="text-center fw-bold mt-5" >Convert From Image</h2>
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
                        <img src="{{ asset('assets/icons/img-to-pdf.svg') }}" alt="" srcset="" />
                        <a href="javascript::void(0)" class="stretched-link"></a>
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
                        <img src="{{ asset('assets/icons/img-to-pdf.svg') }}" alt="" srcset="" />
                        <a href="javascript::void(0)" class="stretched-link"></a>
                    </div>
                </div>
            </div>
        </div>
        {{-- /* -------------------------- convert to image ends ------------------------- */ --}}
    </div>
    {{-- /* ------------------------------- tools ends ------------------------------- */ --}}
    {{-- /* -------------------------- why we choose starts -------------------------- */ --}}
    <svg viewBox="0 60 500 50" class="rotate-x-180">
        <path d="M0,80 C150,150 300,30 500,100 L500,00 L0,0 Z" style="stroke: none; fill:#f8f9fa;"></path>
    </svg>
    <section class="bg-light">

        <div class="container">
            <div class="row text-center bg-light">
                <h2 class="my-3 fw0vold">Why Choose Small Convertrer Tools</h2>
                <div class="col-md-4 col-sm-6 mb-md-4">
                    <img src="{{ asset('assets/icons/bulb.svg') }}" class="mb-3" alt="icon" srcset="">
                    <p class="fw-bolder">Quick and easy conversion</p>
                    <p>With just a simple drag-and-drop, you can convert text or image to any format within seconds.
                        There’s no file size limit nor even the need to register to use our service.</p>
                </div>
                <div class="col-md-4 col-sm-6 mb-md-4">
                    <img src="{{ asset('assets/icons/badge.svg') }}" class="mb-3" alt="icon" srcset="">
                    <p class="fw-bolder">We keep your files safe!</p>
                    <p>We care about privacy. All files will be deleted from our servers forever after one hour. To know
                        more about how much we care, read our privacy policy.</p>
                </div>
                <div class="col-md-4 col-sm-6 mb-md-4">
                    <img src="{{ asset('assets/icons/thumb.svg') }}" class="mb-3" alt="icon" srcset="">
                    <p class="fw-bolder">All platforms are welcome!</p>
                    <p>Our small converter works on all computers - no matter if you use Mac, Windows or Linux.</p>
                </div>
                <div class="col-md-4 col-sm-6 mb-md-4">
                    <img src="{{ asset('assets/icons/lock.svg') }}" class="mb-3" alt="icon" srcset="">
                    <p class="fw-bolder">PDF to image in the best quality</p>
                    <p>PDF to image conversion is hard. To bring you the very best quality to convert your PDF files, we
                        have partnered with Solid Documents - the best solution provider on the market.</p>
                </div>
                <div class="col-md-4 col-sm-6 mb-md-4">
                    <img src="{{ asset('assets/icons/converter.svg') }}" class="mb-3" alt="icon"
                        srcset="">
                    <p class="fw-bolder">Convert a PDF to a DOC in seconds</p>
                    <p>It is seriously ridiculously easy with our tool to convert files online. Try it and you will love
                        it.</p>
                </div>
                <div class="col-md-4 col-sm-6 mb-md-4">
                    <img src="{{ asset('assets/icons/tree.svg') }}" class="mb-3" alt="icon" srcset="">
                    <p class="fw-bolder">Magic conversion in the cloud</p>
                    <p>We have many servers in the cloud which do nothing else than converting PDF to Image files or
                        text. So, lean back and let them do the work.</p>
                </div>
            </div>
        </div>
    </section>
    <svg viewBox="0 60 500 50" class="rotate-y-180">
        <path d="M0,80 C150,150 300,30 500,100 L500,00 L0,0 Z" style="stroke: none; fill:#f8f9fa;"></path>
    </svg>
    {{-- /* -------------------------- why we choose ends -------------------------- */ --}}
    {{-- /* -------------------------- testomonials starts -------------------------- */ --}}
    <div class="container">
        <h2 class="text-center fw-bold">Ratings and Reviews</h2>
        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, illo hic. Aperiam
            voluptatem </p>
        <p class="text-center text-muted"><b class="fw-bold text-warning">4.9</b> out of 5 — <small>23 Ratings</small>
        </p>
        <div class="bg-537895 position-relative rounded" style="height: 400px;">
            <div class="position-absolute rounded-circle bg-537895 p-3 top-30 left-50 border border-white">
                <img src="{{ asset('assets/icons/quote.svg') }}" width="50px" alt="">

            </div>
            <div class="ml-135">
                <div id="owl-demo" class="owl-carousel owl-theme">

                    <div class="item">
                        <div class="card bg-F9FDFF border border-info w-18 my-3">
                            <div class="card-body">
                                <small class="bg-537895 p-2 rounded-circle">
                                    <img class="card-title" src="{{ asset('assets/icons/quote.svg') }}"
                                        width="20px" alt="" srcset="">
                                </small>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga eum laboriosam ratione
                                    eos consectetur esse ad odit at iste, velit dolorum? Corrupti, necessitatibus
                                    perspiciatis. Laboriosam qui necessitatibus temporibus magnam consequuntur.
                                </p>
                                <p class="fw-bolder mb-0">Nancy Roy</p>
                                <div class="d-flex justify-content-between align-items-center text-muted">
                                    <div class="d-flex">
                                        @for ($i = 0; $i < 3; $i++)
                                            <img src="{{ asset('assets/icons/star-yellow.svg') }}" width="15px"
                                                alt="" srcset="">
                                        @endfor
                                        <img src="{{ asset('assets/icons/star-grey.svg') }}" width="15px"
                                            alt="" srcset="">
                                        <img src="{{ asset('assets/icons/star-grey.svg') }}" width="15px"
                                            alt="" srcset="">
                                    </div>
                                    <p class="mb-0">{{ \Carbon\Carbon::now()->toFormattedDateString() }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card bg-F9FDFF border border-info w-18 my-3">
                            <div class="card-body">
                                <small class="bg-537895 p-2 rounded-circle">
                                    <img class="card-title" src="{{ asset('assets/icons/quote.svg') }}"
                                        width="20px" alt="" srcset="">
                                </small>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga eum laboriosam ratione
                                    eos consectetur esse ad odit at iste, velit dolorum? Corrupti, necessitatibus
                                    perspiciatis. Laboriosam qui necessitatibus temporibus magnam consequuntur.
                                </p>
                                <p class="fw-bolder mb-0">Nancy Roy</p>
                                <div class="d-flex justify-content-between align-items-center text-muted">
                                    <div class="d-flex">
                                        @for ($i = 0; $i < 3; $i++)
                                            <img src="{{ asset('assets/icons/star-yellow.svg') }}" width="15px"
                                                alt="" srcset="">
                                        @endfor
                                        <img src="{{ asset('assets/icons/star-grey.svg') }}" width="15px"
                                            alt="" srcset="">
                                        <img src="{{ asset('assets/icons/star-grey.svg') }}" width="15px"
                                            alt="" srcset="">
                                    </div>
                                    <p class="mb-0">{{ \Carbon\Carbon::now()->toFormattedDateString() }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card bg-F9FDFF border border-info w-18 my-3">
                            <div class="card-body">
                                <small class="bg-537895 p-2 rounded-circle">
                                    <img class="card-title" src="{{ asset('assets/icons/quote.svg') }}"
                                        width="20px" alt="" srcset="">
                                </small>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga eum laboriosam ratione
                                    eos consectetur esse ad odit at iste, velit dolorum? Corrupti, necessitatibus
                                    perspiciatis. Laboriosam qui necessitatibus temporibus magnam consequuntur.
                                </p>
                                <p class="fw-bolder mb-0">Nancy Roy</p>
                                <div class="d-flex justify-content-between align-items-center text-muted">
                                    <div class="d-flex">
                                        @for ($i = 0; $i < 3; $i++)
                                            <img src="{{ asset('assets/icons/star-yellow.svg') }}" width="15px"
                                                alt="" srcset="">
                                        @endfor
                                        <img src="{{ asset('assets/icons/star-grey.svg') }}" width="15px"
                                            alt="" srcset="">
                                        <img src="{{ asset('assets/icons/star-grey.svg') }}" width="15px"
                                            alt="" srcset="">
                                    </div>
                                    <p class="mb-0">{{ \Carbon\Carbon::now()->toFormattedDateString() }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card bg-F9FDFF border border-info w-18 my-3">
                            <div class="card-body">
                                <small class="bg-537895 p-2 rounded-circle">
                                    <img class="card-title" src="{{ asset('assets/icons/quote.svg') }}"
                                        width="20px" alt="" srcset="">
                                </small>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga eum laboriosam ratione
                                    eos consectetur esse ad odit at iste, velit dolorum? Corrupti, necessitatibus
                                    perspiciatis. Laboriosam qui necessitatibus temporibus magnam consequuntur.
                                </p>
                                <p class="fw-bolder mb-0">Nancy Roy</p>
                                <div class="d-flex justify-content-between align-items-center text-muted">
                                    <div class="d-flex">
                                        @for ($i = 0; $i < 3; $i++)
                                            <img src="{{ asset('assets/icons/star-yellow.svg') }}" width="15px"
                                                alt="" srcset="">
                                        @endfor
                                        <img src="{{ asset('assets/icons/star-grey.svg') }}" width="15px"
                                            alt="" srcset="">
                                        <img src="{{ asset('assets/icons/star-grey.svg') }}" width="15px"
                                            alt="" srcset="">
                                    </div>
                                    <p class="mb-0">{{ \Carbon\Carbon::now()->toFormattedDateString() }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card bg-F9FDFF border border-info w-18 my-3">
                            <div class="card-body">
                                <small class="bg-537895 p-2 rounded-circle">
                                    <img class="card-title" src="{{ asset('assets/icons/quote.svg') }}"
                                        width="20px" alt="" srcset="">
                                </small>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga eum laboriosam ratione
                                    eos consectetur esse ad odit at iste, velit dolorum? Corrupti, necessitatibus
                                    perspiciatis. Laboriosam qui necessitatibus temporibus magnam consequuntur.
                                </p>
                                <p class="fw-bolder mb-0">Nancy Roy</p>
                                <div class="d-flex justify-content-between align-items-center text-muted">
                                    <div class="d-flex">
                                        @for ($i = 0; $i < 3; $i++)
                                            <img src="{{ asset('assets/icons/star-yellow.svg') }}" width="15px"
                                                alt="" srcset="">
                                        @endfor
                                        <img src="{{ asset('assets/icons/star-grey.svg') }}" width="15px"
                                            alt="" srcset="">
                                        <img src="{{ asset('assets/icons/star-grey.svg') }}" width="15px"
                                            alt="" srcset="">
                                    </div>
                                    <p class="mb-0">{{ \Carbon\Carbon::now()->toFormattedDateString() }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card bg-F9FDFF border border-info w-18 my-3">
                            <div class="card-body">
                                <small class="bg-537895 p-2 rounded-circle">
                                    <img class="card-title" src="{{ asset('assets/icons/quote.svg') }}"
                                        width="20px" alt="" srcset="">
                                </small>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga eum laboriosam ratione
                                    eos consectetur esse ad odit at iste, velit dolorum? Corrupti, necessitatibus
                                    perspiciatis. Laboriosam qui necessitatibus temporibus magnam consequuntur.
                                </p>
                                <p class="fw-bolder mb-0">Nancy Roy</p>
                                <div class="d-flex justify-content-between align-items-center text-muted">
                                    <div class="d-flex">
                                        @for ($i = 0; $i < 3; $i++)
                                            <img src="{{ asset('assets/icons/star-yellow.svg') }}" width="15px"
                                                alt="" srcset="">
                                        @endfor
                                        <img src="{{ asset('assets/icons/star-grey.svg') }}" width="15px"
                                            alt="" srcset="">
                                        <img src="{{ asset('assets/icons/star-grey.svg') }}" width="15px"
                                            alt="" srcset="">
                                    </div>
                                    <p class="mb-0">{{ \Carbon\Carbon::now()->toFormattedDateString() }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card bg-F9FDFF border border-info w-18 my-3">
                            <div class="card-body">
                                <small class="bg-537895 p-2 rounded-circle">
                                    <img class="card-title" src="{{ asset('assets/icons/quote.svg') }}"
                                        width="20px" alt="" srcset="">
                                </small>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga eum laboriosam ratione
                                    eos consectetur esse ad odit at iste, velit dolorum? Corrupti, necessitatibus
                                    perspiciatis. Laboriosam qui necessitatibus temporibus magnam consequuntur.
                                </p>
                                <p class="fw-bolder mb-0">Nancy Roy</p>
                                <div class="d-flex justify-content-between align-items-center text-muted">
                                    <div class="d-flex">
                                        @for ($i = 0; $i < 3; $i++)
                                            <img src="{{ asset('assets/icons/star-yellow.svg') }}" width="15px"
                                                alt="" srcset="">
                                        @endfor
                                        <img src="{{ asset('assets/icons/star-grey.svg') }}" width="15px"
                                            alt="" srcset="">
                                        <img src="{{ asset('assets/icons/star-grey.svg') }}" width="15px"
                                            alt="" srcset="">
                                    </div>
                                    <p class="mb-0">{{ \Carbon\Carbon::now()->toFormattedDateString() }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card bg-F9FDFF border border-info w-18 my-3">
                            <div class="card-body">
                                <small class="bg-537895 p-2 rounded-circle">
                                    <img class="card-title" src="{{ asset('assets/icons/quote.svg') }}"
                                        width="20px" alt="" srcset="">
                                </small>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga eum laboriosam ratione
                                    eos consectetur esse ad odit at iste, velit dolorum? Corrupti, necessitatibus
                                    perspiciatis. Laboriosam qui necessitatibus temporibus magnam consequuntur.
                                </p>
                                <p class="fw-bolder mb-0">Nancy Roy</p>
                                <div class="d-flex justify-content-between align-items-center text-muted">
                                    <div class="d-flex">
                                        @for ($i = 0; $i < 3; $i++)
                                            <img src="{{ asset('assets/icons/star-yellow.svg') }}" width="15px"
                                                alt="" srcset="">
                                        @endfor
                                        <img src="{{ asset('assets/icons/star-grey.svg') }}" width="15px"
                                            alt="" srcset="">
                                        <img src="{{ asset('assets/icons/star-grey.svg') }}" width="15px"
                                            alt="" srcset="">
                                    </div>
                                    <p class="mb-0">{{ \Carbon\Carbon::now()->toFormattedDateString() }}</p>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>








        </div>
    </div>
    {{-- /* -------------------------- testomonials ends -------------------------- */ --}}
    {{-- /* -------------------------- newsletter starts -------------------------- */ --}}
    <div class="container text-center  mt-5">
        <img src="{{ asset('assets/icons/open-email.svg') }}" width="100px" alt="" srcset="">
        <small class="d-block my-2">Subscribe to our newsletter and stay updated</small>
        <form action="" method="post" class="my-4">
            <div class="input-group w-50 m-auto">
                <input type="email" name="email" class="form-control w-50 m-auto"
                    placeholder="Enter Your Email address">
                <img src="{{ asset('assets/icons/subscribe-btn.svg') }}" alt="" srcset="">
            </div>
        </form>
        <img src="{{ asset('assets/icons/newsletter.svg') }}" class="w-75" alt="" srcset="">
    </div>
    {{-- /* -------------------------- newsletter ends -------------------------- */ --}}
    {{-- /* -------------------------- footer starts -------------------------- */ --}}
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('assets/plugins/bootstrap-5.2.0-dist/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-5.2.0-dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/owl/js/owl.carousel.js') }}"></script>
    <script>
        $(document).ready(function() {

            $("#owl-demo").owlCarousel({

                autoPlay: 3000, //Set AutoPlay to 3 seconds
                navigation: true,
                navigationText: ["<", ">"],
                items: 3,
                itemsDesktop: [1199, 2],
                itemsDesktopMedium: [979, 1],
                itemsDesktopSmall: [767, 1]

            });

        });
    </script>
</body>

</html>
