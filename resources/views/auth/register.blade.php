@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card w-50 m-auto">
         <div class="card-header bg-537895 text-white text-center py-3">
                    <h3>Login to Small Converter Tools</h3>
                    <p>Hey, enter your detail to get login to your account.</p>
                    <img src="{{asset('assets/icons/profile.svg')}}" width="100px" alt="" srcset="">
                </div>
        <div class="card-body">
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

















<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
