<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Login | Lazis Baiturrahman</title>
        <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
        <meta content="Themesbrand" name="author" />
        @include('layout.css')
    </head>

    <body style="background-color:#1c2b21">
        <div class="account-pages my-3 pt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-7 col-xl-6">
                        <div class="card bg-pattern shadow-none">
                            <div class="card-body">
                                <div class="text-center mt-3">
                                    <div class="mb-3">
                                        <a href="#" class="logo"><img src="assets/images/logo-dark.png" height="120" alt="logo"></a>
                                    </div>
                                </div>
                                <div class="p-3"> 
                                    <p class="text-muted text-center mb-4">Silakan {{ __('Login') }} untuk melanjutkan ke halaman admin.</p>
                                    <form method="POST" action="{{ route('login') }}" class="form-horizontal" action="/login">
                
                                        @csrf

                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                            <div class="col-md-7">
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter E-Mail">

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                
                                            <div class="col-md-7">
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter password">
                
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6 offset-md-4">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" name="remember" id="customControlInline" {{ old('remember') ? 'checked' : '' }}>
                
                                                    <label class="custom-control-label" for="customControlInline">
                                                        {{ __('Remember Me') }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="form-group row mb-0">
                                            <div class="col-md-8 offset-md-2">
                                                <div class="mt-3">
                                                    <button id="sa-success" class="btn btn-dark btn-block waves-effect waves-light" style="background-color:#2F4A37" type="submit">
                                                        {{ __('Login') }}
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="form-group row mb-0">
                                            <div class="col-md-9 offset-md-3">
                                                @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    <i class="mdi mdi-lock"></i>{{ __('Forgot Your Password?') }}
                                                </a>
                                                @endif
                                            </div>
                                        </div> --}}
                                    </form>
                
                                </div>
                    
                            </div>
                        </div>
                        <div class="mt-5 text-center text-white-50">
                            <p>Don't have an account ? <a href="/register" class="font-500 text-white"> Signup now </a> </p>
                            <p>© 2020 Lazis Baiturrahman</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        @include('layout.script')
        
    </body>

</html>