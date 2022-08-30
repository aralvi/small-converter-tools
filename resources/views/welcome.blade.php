
@extends('layouts.app')
@section('content')

@include('components.advertisement')

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
                    <p class="card-text">Easily convert your PDF files into easy to edit DOC and DOCX documents.
                        The
                        converted document is almost 100% accurate.</p>
                    <a href="#convertToPDF" class="stretched-link"></a>
                </div>
            </div>
            <div class="card bg-537895 text-light w-15 my-2">
                <div class="card-body text-center">
                    <h5 class="card-title fw-bold">Convert From PDF</h5>
                    <img src="{{ asset('assets/icons/convert-from-pdf.svg') }}" alt="" srcset="" />
                    <p class="card-text">Easily convert your PDF files into easy to edit DOC and DOCX documents.
                        The
                        converted document is almost 100% accurate.</p>
                    <a href="#convertFromPDF" class="stretched-link"></a>
                </div>
            </div>
            <div class="card bg-537895 text-light w-15 my-2">
                <div class="card-body text-center">
                    <h5 class="card-title fw-bold">Convert To Image</h5>
                    <img src="{{ asset('assets/icons/convert-to-img.svg') }}" alt="" srcset="" />
                    <p class="card-text">Easily convert your PDF files into easy to edit DOC and DOCX documents.
                        The
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
        <h2 class="text-center fw-bold mt-5">Convert To PDF</h2>
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
                    <a href="{{route('tools','convert-word-to-pdf')}}" class="stretched-link"></a>
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
                    <a href="{{route('tools','convert-excel-to-pdf')}}" class="stretched-link"></a>
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
                    <a href="{{route('tools','convert-ppt-to-pdf')}}" class="stretched-link"></a>
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
                    <a href="{{route('tools','convert-ebooks-to-pdf')}}" class="stretched-link"></a>
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
                    <a href="{{route('tools','convert-iwork-to-pdf')}}" class="stretched-link"></a>
                </div>
            </div>
        </div>
    </div>
    {{-- /* ----------------------------- convert to pdf ends ----------------------------- */ --}} {{-- /* ---------------------------- convert from pdf start ---------------------------- */ --}}

    <div class="row d-flex justify-content-around" id="convertFromPDF">
        <h2 class="text-center fw-bold mt-5">Convert From PDF</h2>
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
                    <a href="{{route('tools','convert-pdf-to-word')}}" class="stretched-link"></a>
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
                    <a href="{{route('tools','convert-pdf-to-excel')}}" class="stretched-link"></a>
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
                    <a href="{{route('tools','convert-pdf-to-ppt')}}" class="stretched-link"></a>
                </div>
            </div>
        </div>
    </div>
    {{-- /* -------------------------- convert from pdf ends ------------------------- */ --}} {{-- /* ---------------------------- convert to image start ---------------------------- */ --}}
    <div class="row d-flex justify-content-around" id="convertToImage">
        <h2 class="text-center fw-bold mt-5">Convert To Image</h2>
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
                    <a href="{{route('tools','convert-pdf-to-jpg')}}" class="stretched-link"></a>
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
                    <a href="{{route('tools','convert-pdf-to-png')}}" class="stretched-link"></a>
                </div>
            </div>
        </div>
    </div>
    {{-- /* -------------------------- convert to image ends ------------------------- */ --}} {{-- /* ---------------------------- convert from image start ---------------------------- */ --}}
    <div class="row d-flex justify-content-around" id="convertFromImage">
        <h2 class="text-center fw-bold mt-5">Convert From Image</h2>
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
                    <a href="{{route('tools','convert-jpg-to-pdf')}}" class="stretched-link"></a>
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
                    <a href="{{route('tools','convert-png-to-pdf')}}" class="stretched-link"></a>
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
@include('components.testominals')
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


@endsection


