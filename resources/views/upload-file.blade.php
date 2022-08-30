@extends('layouts.app')

@section('content')
<section class="bg-light" id="file-uploading-form-section">
  <div class="container  py-3 vh-75" id="file-uploading-form">
      <h2 class="text-center"><img src="{{asset('assets/icons/'.$image.'.svg')}}" width="35px" alt="" srcset=""> {{str_replace('-',' ',$name)}}</h2>
      {{-- <form action="{{route('change-image-format',['from'=>'png','to'=>'jpg'])}}" method="post" enctype="multipart/form-data"> --}}
      <form action="{{route('image-to-pdf')}}" method="post" enctype="multipart/form-data">
        @csrf
          <div id="file-selection">

              <p class="text-center">Quick and easy way to convert your PDF to <br> editable Word document</p>
              <div class="d-flex flex-column">
                  <div class=" m-auto col-sm-12 col-md-6 col-lg-3">
                      <label for="browse-file" class="btn btn-lg border form-control bg-537895 text-white"><img src="{{asset('assets/icons/desktop.svg')}}" alt="" srcset=""> Choose File</label>
                      <input id="browse-file" class="form-control" onchange="progressRun()" style="visibility:hidden;" type="file" name="images[]" multiple>
                  </div>
                  <div class=" m-auto col-sm-12 col-md-6 col-lg-3">
                      <label for="dropbox-file" class="btn btn-lg border form-control"><img src="{{asset('assets/icons/dropbox.svg')}}" alt="" srcset=""> Dropbox</label>
                      <input id="dropbox-file" class="form-control" style="visibility:hidden;" type="file">
                  </div>
                  <div class=" m-auto col-sm-12 col-md-6 col-lg-3">
                      <label for="drive-file" class="btn btn-lg border form-control"><img src="{{asset('assets/icons/drive.svg')}}" alt="" srcset=""> Google Drive</label>
                      <input id="drive-file" class="form-control" style="visibility:hidden;" type="file">
                  </div>
              </div>
          </div>
          <div class="row d-none " id="file-uploading">
              <p class="text-center">{{str_replace('-',' ',$name)}}</p>
              <div class="d-flex px-0 justify-content-center align-items-center flex-column border">
                  <div class="progressbar position-relative w-100">
                      <span class="progress position-absolute bg-537895"></span>
                  </div>
                  <img class="py-5" src="{{asset('assets/icons/pdf.svg')}}" alt="" srcset="">
                  <p>Uploading (<small class="counter">0</small>)</p>

              </div>
          </div>
          <div id="select-conversion"  class="d-none">
              <p class="text-center">Convert PDF file to Word file</p>
              <div class=" container">
                  <div class="row">
                      <div class="col-4 text-center bg-white py-5 border border-2 h-100">
                          <img src="{{asset('assets/icons/pdf.svg')}}" width="60" alt="" srcset="">
                          <p class="file-name"></p>
                      </div>
                      <div class="col-8 ">
                        <div class="row ms-0 bg-light h-100">
                          <div class="col-6 h-75 py-3">
                            <div class="form-check border h-75 bg-F9FDFF ps-5 pt-3">
                              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                              <label class="form-check-label" for="exampleRadios1">
                                Convert to Word
                              </label>
                            </div>
                          </div>
                          <div class="col-12 h-25">

                              <input type="submit" class="form-control bg-537895 text-white" value="Convert">
                          </div>
                        </div>
                      </div>
                  </div>
              </div>
          </div>
      </form>
  </div>

</section>



<div class="container my-5">
        <h4 class="text-center">How To Convert A PDF To Word Online:</h4>
        <div class="m-auto d-flex justify-content-evenly align-items-center">
            <img src="{{asset('assets/icons/instructions.svg')}}" alt="" srcset="">
            <div>
                <p><strong>Step 1:</strong>&nbsp;&nbsp; these are the steps for conversion</p>
                <p><strong>Step 2:</strong>&nbsp;&nbsp; these are the steps for conversion</p>
                <p><strong>Step 3:</strong>&nbsp;&nbsp; these are the steps for conversion</p>
            </div>
        </div>


        <div class="row text-center">
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
@section('script')
<script>
    $(document).ready(function(){
        $('#file-uploading').hide()
    })

    var progress = $('.progressbar .progress')
    function counterInit( fValue, lValue ) {
        var counter_value = parseInt( $('.counter').text() );
        counter_value++;
        if( counter_value >= fValue && counter_value <= lValue ) {
            $('.counter').text( counter_value + '%' );
            progress.css({ 'width': counter_value + '%' });
            setTimeout( function() {
                counterInit( fValue, lValue );
            }, 10 );
        }else{
            setTimeout( function() {
                $('#file-uploading').removeClass('d-flex').addClass('d-none')
                $file_name = $('#browse-file').val().split('\\')[$('#browse-file').val().split('\\').length -1];
                $('#select-conversion').removeClass('d-none')
                $('.file-name').text($file_name)
            }, 1000 );

        }
    }

    function progressRun() {
        $('#file-selection').hide()
        $('#file-uploading').addClass('d-flex').removeClass('d-none')
        $('#file-uploading-form-section').removeClass('bg-light')
        counterInit( 0, 100 );

    }
</script>
@endsection
