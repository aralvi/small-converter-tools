<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Laravel</title>
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
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">
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
            <div class="container">
                <div class="jumbotron bg-secondary my-4 h-169 d-flex justify-content-center align-items-center">Advertisement</div>
                <h1 class="cl-537895 text-center fw-bolder">File Converter</h1>
                <p class="text-center">Convert your files to any format</p>
                <p class="text-center">We have converted <b class="cl-537895">1,545,407,398</b> with a total size of <b class="cl-537895">30,750</b> TB</p>
                <h2 class="text-center fw-bold mt-5">Converter tools</h2>
                <div class="row justify-content-around my-5">
                    <div class="card bg-537895 text-light w-15 my-2 cursor-pointer stretched-link" data-target="#converToPDF">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">Convert To PDF</h5>
                            <img src="{{asset('assets/icons/convert-to-pdf.svg')}}" alt="" srcset="" />
                            <p class="card-text">Easily convert your PDF files into easy to edit DOC and DOCX documents. The converted document is almost 100% accurate.</p>
                        </div>
                    </div>
                    <div class="card bg-537895 text-light w-15 my-2">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">Convert From PDF</h5>
                            <img src="{{asset('assets/icons/convert-from-pdf.svg')}}" alt="" srcset="" />
                            <p class="card-text">Easily convert your PDF files into easy to edit DOC and DOCX documents. The converted document is almost 100% accurate.</p>
                        </div>
                    </div>
                    <div class="card bg-537895 text-light w-15 my-2">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">Convert To Image</h5>
                            <img src="{{asset('assets/icons/convert-to-img.svg')}}" alt="" srcset="" />
                            <p class="card-text">Easily convert your PDF files into easy to edit DOC and DOCX documents. The converted document is almost 100% accurate.</p>
                        </div>
                    </div>
                    <div class="card bg-537895 text-light w-15 my-2">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">Convert From Image</h5>
                            <img src="{{asset('assets/icons/convert-from-img.svg')}}" alt="" srcset="" />
                            <p class="card-text">Easily convert your PDF files into easy to edit DOC and DOCX documents. The converted document is almost 100% accurate.</p>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="container">
            {{-- /* ----------------------------- convert to pdf start ----------------------------- */ --}}
            <h2 class="text-center fw-bold">Convert To PDF</h2>
            <div class="row d-flex justify-content-around" id="converToPDF">
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

            <h2 class="text-center fw-bold">Convert From PDF</h2>
            <div class="row d-flex justify-content-around" id="converFromPDF">
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
            <h2 class="text-center fw-bold">Convert To Image</h2>
            <div class="row d-flex justify-content-around" id="convertToImage">
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
            <h2 class="text-center fw-bold">Convert From Image</h2>
            <div class="row d-flex justify-content-around" id="convertFromImage">
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

        <script src="{{ asset('assets/bootstrap-5.2.0-dist/js/bootstrap.min.js') }}"></script>
    </body>
</html>
