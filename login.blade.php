<!DOCTYPE html>
<html lang="en">

<style>
    * {
    font-family: "Signika";
    }
    
    body{
    background-color: #aed4f3;
    margin: -25px;
    background: linear-gradient(to top,#2ab4d6 0, #aed4f3 60%, #eeeff0 100%);
    }

    h1{
    font-family: "Fredoka One", "cursive";
    color: #2E7A9F;
    font-weight: 100px;
    font-size: 100px;
    }

    .h6 {
        font-family: "Signika";
        font-weight: 100px;
    font-size: 100px;
    }
    footer{
        padding: 30px;
        margin: 0;
        color: #2E7A9F;
    }
</style>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('asset/img/home.svg')}}">
    <title>Login | Manajemen KosanKu</title> <!-- Custom fonts for this template-->
    <link href="{{ asset('asset/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Freckle+Face&family=Fredericka+the+Great&family=Fredoka+One&family=Fresca&family=Indie+Flower&family=Nerko+One&family=Nunito:wght@300&family=Poppins:wght@100;200;300;400;600&family=Signika:wght@300;500&family=Titan+One&display=swap" rel="stylesheet">
    <link href="{{ asset('asset/css/sb-admin-2.min.css')}}" rel="stylesheet">
</head>

<body>
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="center">
                            <div class="col-lg-6 d-none d-lg-block "></div>
                            <div class="col-lg-20">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4  mb-4">Login Form<br> <br><img src="{{ asset('asset/img/logokosan.png')}}" width="160"></h1>
                                        <h1 class="h6  mb-2">------------ Sign In ------------</h1><br>
                                    </div>
                                    <form method="POST" action="{{ route('login') }}"> 
                                        @csrf 
                                        <div class="form-group ">
                                            <label for="email" class="col-md-12 col-form-label text-md-left text-dark"><strong>Email :<strong></label>
                                            <div class="col-md-12">
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror " name="email" value="{{ old('email') }}"  placeholder="Masukan Email" required oninvalid="this.setCustomValidity('Harap masukan Email dan password anda')" autocomplete="email" autofocus>
                                                
                                                @if ($errors->has('email'))
                                                    <span class="h6 text-danger help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                                </div>
                                        </div>

                                        <div class="form-group ">
                                            <label for="password" class="col-md-12 col-form-label text-md-left text-dark"><strong>Password :<strong></label>
                                            <div class="col-md-12">
                                                <input id="password" type="password" class="form-control @error('email') is-invalid @enderror" name="password" placeholder="Masukan Password" required oninvalid="this.setCustomValidity('Harap masukan Email dan password anda')" autocomplete="current-password" >
                                                @if ($errors->has('password'))
                                                    <span class="h6 text-danger help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12 offset-md-12">
                                                <div class="form-check"> <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> <label class="form-check-label" for="remember"> {{ __('Remember Me') }} </label> </div>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-0">
                                            <div class="col-md-12 offset-md-12"> <button type="submit" class="btn btn-info"> {{ __('Login') }} </button> @if (Route::has('password.request')) <a class="btn btn-link" href="{{ route('password.request') }}"> {{ __('Forgot Your Password?') }} </a> @endif </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('asset/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('asset/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script> <!-- Core plugin JavaScript-->
    <script src="{{ asset('asset/vendor/jquery-easing/jquery.easing.min.js')}}"></script> <!-- Custom scripts for all pages-->
    <script src="{{ asset('asset/js/sb-admin-2.min.js')}}"></script>
</body>
<footer >
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                    <span>Create By: rkive2<br>Copyright &copy; Sistem Informasi Kosan 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->