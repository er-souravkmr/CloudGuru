<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Spotlyf">
    <meta name="keywords" content="">
    <meta name="author" content="spotlyf">
    <title>Martvalley | Admin</title>
    <link rel="apple-touch-icon" src="{{asset('admin-assets/app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" src="{{asset('app-assets/images/ico/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/app-assets/vendors/css/vendors.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset ('admin-assets/app-assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset ('admin-assets/app-assets/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset ('admin-assets/app-assets/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset ('admin-assets/app-assets/css/components.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset ('admin-assets/app-assets/css/themes/dark-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset ('admin-assets/app-assets/css/themes/bordered-layout.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/app-assets/css/plugins/forms/form-validation.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/app-assets/css/pages/page-auth.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/app-assets/css/custom-style.css')}}">

</head>

<body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">

    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="auth-wrapper auth-v2">
                    <div class="auth-inner row m-0">
                     
                        <a class="brand-logo" href="{{route('home')}}">

                            <h2 class="brand-text text-primary ml-1">Admin Dashboard</h2>
                        </a>
                      
                        <div class="d-none d-lg-flex col-lg-8 align-items-center p-5">
                            <div class="w-100 d-lg-flex align-items-center justify-content-center px-5"><img class="img-fluid" src="{{asset('admin-assets/app-assets/images/pages/login-v2.svg')}}" alt="Login V2" /></div>
                        </div>
                    
                        
                        <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
                            <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                                <h4 class="card-title mb-1">Login to access Admin Panel! 👋</h4>
                                <p class="card-text mb-2">Please sign-in to your account and start the adventure</p>
                                <form class="auth-login-form mt-2" method="POST" action="{{ route('signin') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label class="form-label" for="email">Email</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                     
                                        <div class="input-group input-group-merge form-password-toggle">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                            <div class="input-group-append"><span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span></div>
                                        </div>
                                    </div>
                                    {{-- <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember-me" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="remember-me"> Remember Me</label>
                                        </div>
                                    </div> --}}

                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" name="remember" id="remember-me">
                                            <label class="custom-control-label" for="remember-me"> Remember Me</label>
                                        </div>
                                    </div>

                                    <button class="btn btn-primary btn-block" tabindex="4">Sign in</button>
                                </form>


                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    


    
    <script src="{{asset('admin-assets/app-assets/vendors/js/vendors.min.js')}}"></script>

    
    <script src="{{asset('admin-assets/app-assets/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>

    
    <script src="{{asset('admin-assets/app-assets/js/core/app-menu.js')}}"></script>
    <script src="{{asset('admin-assets/app-assets/js/core/app.js')}}"></script>

    
    <script src="{{asset('admin-assets/app-assets/js/scripts/pages/page-auth-login.js')}}"></script>

    
    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
</body>


</html>