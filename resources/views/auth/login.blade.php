<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gumilang Snack - Login</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('template/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('template/css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body class="bg-gradient-warning">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">

                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block">
                                <img src="{{ asset('img/gumilang/gumilang-logo.jpg') }}" alt="" width="468" height="670.95">
                            </div>
                            <div class="col-lg-6">

                                <div class="text-right">
                                    <a href="{{ route('home') }}" type="button" class="btn btn-danger btn-lg ml-auto mt-1 mr-1 text-light"></i>X</a>
                                </div> 
                                                
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-1">Selamat Datang kembali! 🤩</h1>
                                        <h2 class="text-gray-900 mb-4 small">Silakan masukan informasi pengguna Anda.</h2 >
                                    </div>

                                    <hr>
                                    {{-- Menampilkan pesan ketika login salah --}}
                                    @if(session('error'))
                                    <div class="alert alert-danger">
                                        <b>Maaf!</b> {{session('error')}}
                                    </div>
                                    @endif

                                    <form class="" action="{{ route('actionlogin') }}" method="POST">
                                        @csrf

                                        {{-- Email --}}
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="email" name="email" aria-describedby="emailHelp"
                                                placeholder="Masukan alamat email..." required>
                                        </div>

                                        {{-- Password --}}
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="password" name="password" placeholder="Kata Sandi" required>
                                        </div>

                                        {{-- Remember --}}
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="Check">
                                                <label class="custom-control-label" for="Check">Ingat saya</label>
                                            </div>
                                        </div>

                                        {{-- Login --}}
                                        <button type="submit" class="btn btn-success btn-user btn-block">Masuk</button>
                                        <hr>
                                        {{-- Login Google --}}
                                        <a href="" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Masuk dengan Google
                                        </a>
                                        
                                        {{-- Login Facebook --}}
                                        <a href="" class="btn btn-facebook btn-user btn-block">
                                             Masuk dengan Facebook
                                        </a>
                                    </form>
                                    <hr>
                                    <div class="d-md-flex justify-content-between mt-4">
                                        <a class="small" href="{{ route('forgot') }}">lupa kata sandi Anda?</a>
                                        <a class="small" href="{{ route('register') }}">Buat sebuah akun!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('template/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('template/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('template/js/sb-admin-2.min.js') }}"></script>

</body>

</html>
