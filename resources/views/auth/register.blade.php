@extends('layouts.app')

@section('content')
<!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <!-- Login Page Start Here -->
    <div class="login-page-wrap">
        <div class="login-page-content">
            <div class="login-box">
                <div class="item-logo">
                    <img src="{{asset('/public/admin/img/logo2.png') }}" alt="logo">
                </div>
                <form  class="login-form" action="{{ route('register') }}" method="post">
                    @csrf
                  <div class="form-group ">
                        <label>Name</label>
                        <input type="text" placeholder="Enter Full Name" class="form-control @error('name') is-invalid @enderror"  name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        <i class="far fa-user"></i>
                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>


                    <div class="form-group">
                        <label>{{ __('E-Mail Address') }}</label>
                        <input type="email" placeholder="Enter usrename" class="form-control @error('email') is-invalid @enderror"  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        <i class="far fa-envelope"></i>
                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>

                    <div class="form-group ">
                    <label >{{ __('Role') }}</label>
                    <select name="cars" class="select2" required>
                    <option disabled selected value> select Role</option>
                
                    <option value="3">Teacher</option>
                    <option value="2">Student</option>
                  </select>

                </div>


                    <div class="form-group">
                        <label>Password</label>
                        <input type="Password" placeholder="Enter password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        <i class="fas fa-lock"></i>
                         @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
 <div class="form-group">
                            <label>{{ __('Confirm Password') }}</label>

                            
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                                <i class="fas fa-lock"></i>
                            </div>
                      

                    <div class="form-group d-flex align-items-center justify-content-between">
                        <div class="form-check">

                               <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                        </div>

                        @if (Route::has('password.request'))
                                    <a class="forgot-btn" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                        
                    </div>
                    <div class="form-group">
                        <button type="submit" class="login-btn">Register</button>
                    </div>
                </form>
                
            </div>
            
        </div>
   
@endsection
