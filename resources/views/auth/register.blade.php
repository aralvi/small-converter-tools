@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="card w-50 m-auto">
         <div class="card-header bg-537895 text-white text-center py-3">
                    <h3>Sign up to Small Converter Tools</h3>
                    <p>Hey, enter your detail to get sign up to your account.</p>
                    <img src="{{asset('assets/icons/profile.svg')}}" width="100px" alt="" srcset="">
                </div>
        <div class="card-body">
            <div class="w-75 m-auto">
                <a class="btn border border-danger text-danger" type="button" ><img src="{{asset('assets/icons/social-icons/google.svg')}}" alt="" srcset=""> Login with Google</a>&nbsp; &nbsp;
                <a class="btn border border-primary text-primary" type="button" ><img src="{{asset('assets/icons/social-icons/fb.svg')}}" alt="" srcset=""> Login with Facebook</a>
                <form action="{{route('register')}}" method="post">
                    @csrf
                    <div class="form-floating my-3">
                        <input type="first_name" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required   id="floatingInputGrid" placeholder="name@example.com" >
                        <label for="floatingInputGrid">First Name</label>
                        @error('first_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-floating my-3">
                        <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required   id="floatingInputGrid" placeholder="name@example.com" >
                        <label for="floatingInputGrid">Last Name</label>
                        @error('last_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
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
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-floating my-3">
                        <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" value="{{ old('password') }}" required autocomplete="current-password"  id="floatingInputGrid" placeholder="*******" >
                        <label for="floatingInputGrid">Confirm Password</label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                        <small class="form-check-label" for="flexCheckChecked">
                            By signing up, your are agree to our <a href="javascript:void(0)" class="cl-537895 text-decoration-none">Terms of Use </a> and <a href="javascript:void(0)" class="cl-537895 text-decoration-none">Privacy Policy </a>
                        </small>
                    </div>
                    <input type="submit" class="form-control form-control-lg bg-537895 text-white" value="Sign Up">
                    <small>Already have an account? <a href="{{route('login')}}" class="cl-537895 text-decoration-none">Login</a></small>
                </form>

            </div>


        </div>
    </div>
</div>

@endsection
