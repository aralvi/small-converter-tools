@extends('layouts.app')

@section('content')
<div class="jumbotron bg-light">
    <h2 class="text-capitalize text-center"><img src="{{asset('assets/icons/word-to-pdf.svg')}}" width="35px" alt="" srcset=""> {{str_replace('-',' ',$name)}}</h2>
        <p class="text-center">Quick and easy way to convert your PDF to <br> editable Word document</p>
        <div class="d-flex flex-column">
            <div class="w-25 m-auto">
                <label for="files" class="btn border form-control bg-537895 text-white"><img src="{{asset('assets/icons/desktop.svg')}}" alt="" srcset=""> Choose File</label>
                <input id="files" class="form-control" style="visibility:hidden;" type="file">
            </div>
            <div class="w-25 m-auto">
                <label for="files" class="btn border form-control"><img src="{{asset('assets/icons/dropbox.svg')}}" alt="" srcset=""> Dropbox</label>
                <input id="files" class="form-control" style="visibility:hidden;" type="file">
            </div>
            <div class="w-25 m-auto">
                <label for="files" class="btn border form-control"><img src="{{asset('assets/icons/drive.svg')}}" alt="" srcset=""> Google Drive</label>
                <input id="files" class="form-control" style="visibility:hidden;" type="file">
            </div>
        </div>
</div>


<div class="container my-5">
    <div class="row">
        <h4 class="text-center">How To Convert A PDF To Word Online:</h4>
        <div class="col-lg-12 m-auto d-flex justify-content-evenly align-items-center">
            <img src="{{asset('assets/icons/instructions.svg')}}" alt="" srcset="">
            <div >
                <p><strong>Step 1:</strong>&nbsp;&nbsp; these are the steps for conversion</p>
                <p><strong>Step 2:</strong>&nbsp;&nbsp; these are the steps for conversion</p>
                <p><strong>Step 3:</strong>&nbsp;&nbsp; these are the steps for conversion</p>
            </div>
        </div>
    </div>


        <div class="row text-center">
            <h2 class="my-3 fw0vold">Why Choose Small Convertrer Tools</h2>
            <div class="col-md-4 col-sm-6 mb-md-4">
                <img src="{{ asset('assets/icons/lock-filled.svg') }}" width="40" height="40" class="mb-3" alt="icon" srcset="">
                <p class="fw-bolder">Private Processing</p>
                <p>All processing is done on your device locally. No files are uploaded nor stored in the server.</p>
            </div>
            <div class="col-md-4 col-sm-6 mb-md-4">
                <img src="{{ asset('assets/icons/file-converter.svg') }}" width="40" height="40" class="mb-3" alt="icon" srcset="">
                <p class="fw-bolder">Quick and Easy</p>
                <p>No registration is needed to use our server. Convert and download your files within seconds.</p>
            </div>
            <div class="col-md-4 col-sm-6 mb-md-4">
                <img src="{{ asset('assets/icons/pc.svg') }}" width="40" height="40" class="mb-3" alt="icon" srcset="">
                <p class="fw-bolder">Platform Friendly</p>
                <p>Our service works on all devices - compatible with Mac, Windows, Linux, iOS, and Android</p>
            </div>
        </div>



    <h4 class="text-center">Frequently Asked Questions</h4>
    <div class="accordion mx-5" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        How to change JPG to PDF for free?
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body bg-light">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. In eaque iure, eos aperiam sunt tempora, nam ipsum laudantium aliquam provident voluptatum voluptas. Ullam corrupti vero harum dolorum est eius amet!
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        How to convert PDF to Word on Mac?
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body bg-light">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab voluptatum, ratione quam consequatur, reiciendis cum commodi perspiciatis eum atque delectus molestiae ad quidem numquam. Porro expedita nulla in maxime recusandae!
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        How to edit a PDF in word?
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body bg-light">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis totam nobis a harum laboriosam, quaerat iusto quod repellat, fuga minus quis facere officia deserunt earum reprehenderit ipsa asperiores corporis odit!
      </div>
    </div>
  </div>
</div>
</div>
@endsection
