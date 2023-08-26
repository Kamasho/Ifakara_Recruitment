{{-- 

<!DOCTYPE html>
<html>

<head>
    @include('user.include.head')

</head>

<body>
    <div class="container my-3" id="container">
        <div class="card">
            @include('layouts.welcome.header')
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-6 col-xl-6">
                    <div class="card bg-pattern"
                        style="box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 5px 0px, rgba(0, 0, 0, 0.1) 0px 0px 1px 0px;">
                        <div class="card-body p-4">

                            <div class="text-center w-75 m-auto">
                                <div class="auth-logo">


                                    <a href="/" class="logo logo-light text-center">
                                        <span class="logo-lg">
                                            <img src="{{ asset('assets/images/login.jpeg') }}" alt=""
                                                height="40%" width="35%" style="border-radius:50%">
                                            <H3 class="text-black mt-3">PORTAL | SIGN UP</H3>
                                        </span>
                                    </a>
                                </div>
                                <p class="text-muted mb-4 mt-3">To create an account and application of a job it take a minute.</p>
                            </div>


                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                
                                <div class="mb-3">
                                    <label for="Firstname" class="form-label text-black">{{ __('Name') }}</label>
                                    <input class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"type="text" id="fullname" placeholder="Enter your name" required>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                
                                <div class="mb-3 mt-3">
                                    <label for="emailaddress" class="form-label text-black">{{ __('Email Address') }}</label>
                                    <input class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" type="email" id="emailaddress" required placeholder="Enter your email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label text-black">{{ __('Password') }}</label>
                                    <div class="input-group input-group-merge">
                                        <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password"placeholder="Enter your password">
                                        <div class="input-group-text" data-password="false">
                                            <span class="password-eye"></span>
                
                                        </div>
                                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label text-black"> {{ __('Confirm Password') }} </label>
                                    <div class="input-group input-group-merge">
                                        <input type="password" id="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Enter your password">
                                        <div class="input-group-text" data-password="false">
                                            <span class="password-eye"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="checkbox-signup">
                                        <label class="form-check-label" for="checkbox-signup">I accept <a href="javascript: void(0);" class="text-dark">Terms and Conditions</a></label>
                                    </div>
                                </div>
                                <div class="text-center d-grid">
                                    <button class="btn btn-primary" type="submit"> {{ __('Register') }}</button>
                                </div>
                
                            </form>


                        </div>
                        <div class="row mt-3">
                            
                            <div class="col-md-12 col-sm-12  text-center">
                                <p> Do you have account please <a href="{{ route('login') }}"
                                        class="text-primary fw-bold"> Login</a>

                                </p>
                            </div>
                        </div>

                    </div>


                </div>
            </div>


            @include('layouts.welcome.footer') --}}
@include('layouts.welcome.header')

<div class="intro-section single-cover" id="home-section" style="background-color: #fff">

    <div class="slide-1 " data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="row justify-content-center align-items-center text-center">
                        <div class="col-lg-6">
                            <h1 data-aos="fade-up" data-aos-delay="0" style="color: black">Account Registration </h1>
                          
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-5">
                <div style="box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;">
                    <form  action="{{ route('login') }}" method="post" class="form-box">
                        @csrf
                        <h3 class="h4 text-black text-center" style="font-weight: 900;">Register Here
                        </h3>
                        <div class="mt-5">
                            <div class="form-group">
                                <label for="name" style="font-size: 15px;">{{ __('Name') }}</label>
                                <input type="name" class="form-control  @error('email') is-invalid @enderror"
                                    placeholder="Enter your fill name" required name="name">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email" style="font-size: 15px;">{{ __('Email Address') }}</label>
                                <input type="email" class="form-control  @error('email') is-invalid @enderror"
                                    placeholder="Enter your email addresss" required name="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email" style="font-size: 15px;">{{ __('Email Address') }}</label>
                                <input type="email" class="form-control  @error('email') is-invalid @enderror"
                                    placeholder="Enter your email addresss" required name="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password" style="font-size: 15px;"> {{ __('Confirm Password') }}</label>
                                <input type="password" class="form-control  @error('email') is-invalid @enderror"
                                    placeholder="confirm your password" required name="password_confirmation">
                                    @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
    
                            <div class="form-check">
                               
                                <label class="form-check-label" for="flexCheckDefault" style="font-size: 15px">
                                    <input class="form-check-input mt-1" name="remember" type="checkbox" value=""  id="flexCheckDefault"> I accept Terms and Conditions
                                </label>
                            </div>
    
                        </div>
    
                        <button class="btn btn-primary btn-block btn-pill mt-3" type="submit">{{ __('Register') }}</button>
                    </form>

                </div>
                


            </div>
        
           
        </div>
    </div>
</div>




@include('layouts.welcome.footer')
