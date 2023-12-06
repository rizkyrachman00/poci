<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>{{$title}}</title>
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

<body class="authentication-bg">

    <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5 position-relative">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-8 col-lg-10">
                    <div class="card overflow-hidden bg-opacity-25">
                        <div class="row g-0">
                           
                            <div class="col-lg-6">
                                <div class="d-flex flex-column h-100">
                                    
                                    <div class="p-4 my-auto">
                                        <h4 class="fs-20">Registasi Akun</h4>
                                        <p class="text-muted mb-3">Masukkan Akun dan Password.</p>
                                     {{--  --}}
                                     @if(Session::has('danger'))
                                     <div class="alert alert-danger" role="alert">
                                         {{ Session::get('danger') }}
                                     </div>
                                 @endif
                                 
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
                                        <!-- form -->
                                        <!-- form -->
<form action="{{ route('create') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="fullname" class="form-label">Full Name</label>
        <input class="form-control" type="text" name="name" placeholder="Masukkan nama lengkap">
        @error('name')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="emailaddress" class="form-label">Email address</label>
        <input class="form-control" type="email" id="email" placeholder="Masukkan email" name="email">
        @error('email')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input class="form-control" type="password" id="password" placeholder="Masukkan Password" name="password">
        @error('password')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
        <input class="form-control" type="password" id="password_confirmation" placeholder="Konfirmasi Password" name="password_confirmation">
        @error('password_confirmation')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="input-group mb-3">
        <label class="input-group-text" for="gambar">Upload Gambar</label>
        <input type="file" class="form-control" id="gambar" name="gambar">
        @error('gambar')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-0 d-grid text-center">
        <button class="btn btn-primary fw-semibold" type="submit">Registrasi</button>
    </div>
</form>
                                        <!-- end form-->
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <p class="text-dark-emphasis">Sudah punya akun? <a href="{{ url('/login') }}"
                            class="text-dark fw-bold ms-1 link-offset-3 text-decoration-underline"><b>Log In</b></a>
                    </p>
                </div>
                
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <footer class="footer footer-alt fw-medium">
        <span class="text-dark-emphasis">
            <script>document.write(new Date().getFullYear())</script> © Kelompok 9
        </span>
    </footer>

    <!-- Vendor js -->
    <script src="assets/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>

</body>

</html>