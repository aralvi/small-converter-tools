@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="card w-50 m-auto">
         <div class="card-header bg-537895 text-white text-center py-3">
                    <h3>Login to Small Converter Tools</h3>
                    <p>Hey, enter your detail to get login to your account.</p>
                    <img src="{{asset('assets/icons/profile.svg')}}" width="100px" alt="" srcset="">
                </div>
        <div class="card-body pb-5">
            <div class="w-75 m-auto">
                <a class="btn border border-danger text-danger" type="button" ><img src="{{asset('assets/icons/social-icons/google.svg')}}" alt="" srcset=""> Login with Google</a>&nbsp; &nbsp;
                <a class="btn border border-primary text-primary" type="button" ><img src="{{asset('assets/icons/social-icons/fb.svg')}}" alt="" srcset=""> Login with Facebook</a>
                <form action="{{route('login')}}" method="post">
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
                    <div class="form-floating ">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="current-password"  id="floatingInputGrid" placeholder="*******" >
                        <label for="floatingInputGrid">Password</label>
                        <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    @if (Route::has('password.request'))
                        <a class=" btn-link float-end mb-3 cl-537895 text-decoration-none" href="{{ route('password.request') }}">
                            {{ __('Forgot  Password?') }}
                        </a>
                    @endif
                    <input type="submit" class="form-control form-control-lg bg-537895 text-white" value="Login">
                    <small>Don't have an account? <a href="{{route('register')}}" class="cl-537895 text-decoration-none">Sign Up</a></small>
                </form>

            </div>


        </div>
    </div>
</div>

@endsection
