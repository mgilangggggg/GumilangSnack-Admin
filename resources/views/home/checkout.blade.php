<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>gumilang snack | Checkout</title>

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('template1/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('template1/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('template1/css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('template1/css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('template1/css/jquery-ui.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('template1/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('template1/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('template1/css/style.css') }}" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href=""><img src="{{ asset('template/img/logo.png') }}" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href=""><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href=""><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <ul>
                <div class="header__top__right__auth">
                    <a href="{{ route('login') }}"><i class="fa fa-user"></i>Masuk</a>
                </div>
            </ul>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="https://wa.me/6283861293196?text=Hallo,%20Saya%20Maun%20Orderrr"><i class="fa fa-whatsapp"></i></a>
            <a href="https://www.instagram.com/gumilangsnack/"><i class="fa fa-instagram"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> gumilangsnackk.com</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href=""><img src="{{ asset('template1/img/logo.png') }}" alt="logo.png"></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('toko') }}">Toko</a></li>
                            <li class="active"><a href="#">Halaman</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="{{ route('shopingcart') }}">Shoping Cart</a></li>
                                    <li><a href="{{ route('checkout') }}">Check Out</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('blog') }}">Blog</a></li>
                            <li><a href="{{ route('kontak') }}">Kontak</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                        </ul>
                        <ul>
                            <div class="header__top__right__auth">
                                <a href="{{ route('login') }}"><i class="fa fa-user"></i>Masuk</a>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Semua Kategori</span>
                        </div>
                        <ul>
                            <li><a href="">Keripik</a></li>
                            <li><a href="">kacang-kacanganan</a></li>
                            <li><a href="">Biskuit</a></li>
                            <li><a href="">permen dan coklat</a></li>
                            <li><a href="">Popcorn</a></li>
                            <li><a href="">Oleh - Oleh Khas Daerah</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="">
                                <input type="text" placeholder="Apa yang kamu butuhkan?">
                                <button type="submit" class="site-btn">TELUSURI</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-whatsapp"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <a href="https://wa.me/6283861293196?text=Hallo,%20Saya%20Mautanya%20Produknyaa."><h5>+62 83861293196</h5></a>
                                <span>online 24 jam</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('img/banner-toko.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2 class="text-dark">Toko Gumilang Snack</h2>
                        <div class="breadcrumb__option">
                            <a href="{{ route('home') }}" class="text-success" >Home</a>
                            <span class="text-dark">Check Out</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6><span class="icon_tag_alt"></span> Punya kupon? <a href="">Klik di sini</a> untuk memasukkan kode Anda
                    </h6>
                </div>
            </div>
            <div class="checkout__form">
                <h4>Detail Penagihan</h4>
                <form action="#">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Nama Depan<span>*</span></p>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Nama Belakang<span>*</span></p>
                                        <input type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Negara<span>*</span></p>
                                <input type="text">
                            </div>
                            <div class="checkout__input">
                                <p>Alamat<span>*</span></p>
                                <input type="text" placeholder="Alamat jalan" class="checkout__input__add">
                                <input type="text" placeholder="No, RT/RW, Gg. (optinal)">
                            </div>
                            <div class="checkout__input">
                                <p>Kota<span>*</span></p>
                                <input type="text">
                            </div>
                            <div class="checkout__input">
                                <p>Negara Bagian<span>*</span></p>
                                <input type="text">
                            </div>
                            <div class="checkout__input">
                                <p>Kode Pos<span>*</span></p>
                                <input type="text">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Telepon<span>*</span></p>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input__checkbox">
                                <label for="acc">
                                    Buat akun?
                                    <input type="checkbox" id="acc">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <p>Buat akun dengan memasukkan informasi di bawah ini. Jika Anda adalah pelanggan yang kembali, silakan login di bagian atas halaman</p>
                            <div class="checkout__input">
                                <p>Kata Sandi<span>*</span></p>
                                <input type="text">
                            </div>
                            <div class="checkout__input__checkbox">
                                <label for="diff-acc">
                                    Kirim ke alamat lain?
                                    <input type="checkbox" id="diff-acc">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="checkout__input">
                                <p>Catatan pesanan<span>*</span></p>
                                <input type="text"
                                    placeholder="Catatan tentang pesanan Anda, mis. catatan khusus untuk pengiriman.">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4>Pesanan Anda</h4>
                                <div class="checkout__order__products">Produk <span>Total</span></div>
                                <ul>
                                    <li>Keripik Singkong Original <span>15.000</span></li>
                                    <li>Keciput <span>15.000</span></li>
                                    <li>Basreng <span>10.000</span></li>
                                </ul>
                                <div class="checkout__order__subtotal">Subtotal <span>40.000</span></div>
                                <div class="checkout__order__total">Total <span>40.000</span></div>
                                <div class="checkout__input__checkbox">
                                    <label for="acc-or">
                                        Buat akun?
                                        <input type="checkbox" id="acc-or">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="payment">
                                        Periksa Pembayaran
                                        <input type="checkbox" id="payment">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="dana">
                                        Dana
                                        <input type="checkbox" id="dana">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <button type="submit" class="site-btn">TEMPAT PESANAN</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->

    <!-- Footer Section Begin -->
    @include('home.footer')
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{ asset('template1/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('template1/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('template1/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('template1/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('template1/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('template1/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('template1/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('template1/js/main.js') }}"></script>

 

</body>

</html>