<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Lupa Password</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully responsive admin theme which can be used to build CRM, CMS,ERP etc." name="description" />
    <meta content="Techzaa" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Theme Config Js -->
    <script src="assets/js/config.js"></script>

    <!-- App css -->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
</head>

<body class="authentication-bg position-relative">
    <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5 position-relative">
        <div class="container">
           
            <div class="row justify-content-center">
                <div class="col-xxl-8 col-lg-10">
                    <div class="card overflow-hidden">
                        <div class="row g-0">
                            
                            <div class="col-lg-6">
                                <div class="d-flex flex-column h-100">
                                    <div class="auth-brand p-4">
                                        <a href="" class="logo-light">
                                            <img src="assets/images/logo1.png" alt="logo" height="22">
                                        </a>
                                        <a href="" class="logo-dark">
                                            <img src="assets/images/logo-teh-dark.png" alt="dark logo" height="22">
                                        </a>
                                    </div>
                                    <div class="p-4 my-auto">
                                         {{--  --}}
            @if(Session::get('success'))
            <div class="alert alert-success" role="alert">
               <ul>
                <li>{{Session::get('success')}}</li>
               </ul>
              </div>
            @endif
                        {{--  --}}
                        {{--  --}}
                                        <h4 class="fs-20">Lupa Password Anda</h4>
                                        <p class="text-muted mb-3">Masukkan Email Anda.
                                        </p>
                                        @if(Session::has('danger'))
    <div class="alert alert-danger" role="alert">
        {{ Session::get('danger') }}
    </div>
@endif


                                        <!-- form -->
                                        <form action="{{route('auth.password')}}" method="POST">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="emailaddress" class="form-label">Email Anda</label>
                                                <input class="form-control" type="email" id="emailaddress" name="email" name="email">
                                                @error('email')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                            </div>
                                            
                                           {{--  --}}
                                            <div class="mb-0 text-start">
                                                <button class="btn btn-soft-primary w-100" type="submit"><i
                                                        class="ri-login-circle-fill me-1"></i> <span class="fw-bold">Lupa Password</span> </button>
                                            </div>

                                            
                                        </form>
                                        {{--  --}}
                                        <div class="col-12 text-center">
                                            <p class="text-dark-emphasis">Kembali ke manu <a href="{{ url('/login') }}"
                                                    class="text-dark fw-bold ms-1 link-offset-3 text-decoration-underline"><b>Log In</b></a>
                                            </p>
                                        </div> <!-- end col -->
                                        <!-- end form-->
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
          
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <footer class="footer footer-alt fw-medium">
        <span class="text-dark">
            <script>document.write(new Date().getFullYear())</script> © Kelompok 9
        </span>
    </footer>
    <!-- Vendor js -->
    <script src="assets/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>

</body>

</html>