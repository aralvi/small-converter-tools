@extends('layouts.app')

@section('content')



<div class="container mt-5">
    <div class="card w-50 m-auto">

         <div class="card-header bg-537895 text-white text-center py-3">
                    <h3>Forgot Password</h3>
                    <p>Enter your email and you will get instructions to reset your password.</p>
                    <img src="{{asset('assets/icons/key.svg')}}" width="100px" alt="" srcset="">
                </div>
        <div class="card-body pb-5">
             @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
            <div class="w-75 m-auto">
                <form action="{{ route('password.email') }}" method="post">
                    @csrf
                    <div class="form-floating my-3">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required   id="floatingInputGrid" placeholder="name@example.com" >
                        <label for="floatingInputGrid">Email</label>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <input type="submit" class="form-control form-control-lg bg-537895 text-white" value="{{ __('Send Password Reset Link') }}">
                </form>

            </div>


        </div>
    </div>
</div>

@endsection
