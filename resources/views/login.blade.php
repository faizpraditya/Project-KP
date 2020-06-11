<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Login | Themesbrand</title>
        <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
        <meta content="Themesbrand" name="author" />
        @include('layout.css')
    </head>

    <body style="background-color:#1c2b21">
        <div class="account-pages my-3 pt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-pattern shadow-none">
                            <div class="card-body">
                                <div class="text-center mt-3">
                                    <div class="mb-3">
                                        <a href="#" class="logo"><img src="assets/images/logo-dark.png" height="100" alt="logo"></a>
                                    </div>
                                </div>
                                <div class="p-3"> 
                                    <p class="text-center mb-4">Silahkan login untuk melanjutkan ke halaman admin.</p>
                                    <form class="form-horizontal" action="/login">
                
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input type="text" class="form-control" id="username" placeholder="Enter username">
                                        </div>
                
                                        <div class="form-group">
                                            <label for="userpassword">Password</label>
                                            <input type="password" class="form-control" id="userpassword" placeholder="Enter password">
                                        </div>
                
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customControlInline">
                                            <label class="custom-control-label" for="customControlInline">Remember me</label>
                                        </div>
                                        
                                        <div class="mt-3">
                                            <button class="btn btn-dark btn-block waves-effect waves-light" style="background-color:#2F4A37" type="submit">Log In</button>
                                        </div>
                                    </form>
                
                                </div>
                    
                            </div>
                        </div>
                        <div class="mt-5 text-center text-white-50">
                            <p>Don't have an account ? <a href="/login/create" class="font-500 text-white"> Signup now </a> </p>
                            <p>© 2020 Lazis Baiturrahman</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        @include('layout.script')
        
    </body>

</html>