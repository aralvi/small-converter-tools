@extends('layouts.app')

@section('content')




<div class="container mt-5">
    <div class="card w-50 m-auto">

         <div class="card-header bg-537895 text-white text-center py-3">
                    <h3>Create a New Password</h3>
                    <p>Type and confirm a secure new password for the account.</p>
                    <img src="{{asset('assets/icons/reset.svg')}}" width="100px" alt="" srcset="">
                </div>
        <div class="card-body pb-5">
             @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
            <div class="w-75 m-auto">
                <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
                    <div class="form-floating my-3">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}"  required   id="floatingInputGrid" placeholder="name@example.com" >
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

                    <input type="submit" class="form-control form-control-lg bg-537895 text-white" value="{{ __('Reset Password') }}">
                </form>

            </div>


        </div>
    </div>
</div>

@endsection
