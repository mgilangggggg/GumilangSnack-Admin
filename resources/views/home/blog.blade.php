<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>gumilang snack | blog</title>

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
                            <li><a href="#">Halaman</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="{{ route('shopingcart') }}">Shoping Cart</a></li>
                                    <li><a href="{{ route('checkout') }}">Check Out</a></li>
                                </ul>
                            </li>
                            <li class="active"><a href="{{ route('blog') }}">Blog</a></li>
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
                            <span class="text-dark">Blog</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5">
                    <div class="blog__sidebar">
                        <div class="blog__sidebar__search">
                            <form action="#">
                                <input type="text" placeholder="Cari...">
                                <button type="submit"><span class="icon_search"></span></button>
                            </form>
                        </div>
                        <div class="blog__sidebar__item">
                            <h4>Berita Baru</h4>
                            <div class="blog__sidebar__recent">
                                <a href="#" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img src="img/blog/sidebar/sr-1.jpg" alt="">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h6>Diskon<br /> Keripik Singkong Balado</h6>
                                        <span>DES 08, 2023</span>
                                    </div>
                                </a>
                                <a href="#" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img src="img/blog/sidebar/sr-2.jpg" alt="">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h6>Daftar<br /> Cemilan Terbaru</h6>
                                        <span>DES 08, 2023</span>
                                    </div>
                                </a>
                                <a href="#" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img src="img/blog/sidebar/sr-3.jpg" alt="">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h6>Resep Membuat<br /> Keripik Singkong Renyah</h6>
                                        <span>DES 08, 2023</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="blog__sidebar__item">
                            <h4>Cari Berdasarkan</h4>
                            <div class="blog__sidebar__item__tags">
                                <a href="#">Cemilan</a>
                                <a href="#">Keripik</a>
                                <a href="#">Makanan Ringan Viral</a>
                                <a href="#">Cemilan Pedas</a>
                                <a href="#">Oleh - Oleh</a>
                                <a href="#">Kue</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="img/blog/blog-2.jpg" alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> Des 08, 2023</li>
                                        <li><i class="fa fa-comment-o"></i> 5</li>
                                    </ul>
                                    <h5><a href="#">Keripik Singkong Balado</a></h5>
                                    <p>Keripik singkong balado adalah camilan yang terbuat dari singkong yang dipotongtipis, digoreng, </p>
                                    <a href="#" class="blog__btn">BACA SELENGKAPNYA <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="img/blog/blog-3.jpg" alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> Des 08, 2023</li>
                                        <li><i class="fa fa-comment-o"></i> 5</li>
                                    </ul>
                                    <h5><a href="#">Makaroni Usus</a></h5>
                                    <p>Makaroni usus adalah camilan yang terbuat dari campuran makaroni yang digoreng kering dan usus ayam atau daging yang diisi ke dalam makaroni.</p>
                                    <a href="#" class="blog__btn">BACA SELENGKAPNYA <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="img/blog/blog-1.jpg" alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> Des 08, 2023</li>
                                        <li><i class="fa fa-comment-o"></i> 5</li>
                                    </ul>
                                    <h5><a href="#">Mie Lidi</a></h5>
                                    <p>Mie lidi adalah camilan yang terbuat dari mie yang diolah menjadi bentuk lidi dan kemudian digoreng hingga crispy.</p>
                                    <a href="#" class="blog__btn">BACA SELENGKAPNYA <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="img/blog/blog-4.jpg" alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> Des 08, 2023</li>
                                        <li><i class="fa fa-comment-o"></i> 5</li>
                                    </ul>
                                    <h5><a href="#">Gemlong Pedas</a></h5>
                                    <p>Gemblong pedas adalah cemilan yang biasanya terbuat dari bahan dasar singkong  </p>
                                    <a href="#" class="blog__btn">BACA SELENGKAPNYA <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="product__pagination blog__pagination">
                                <a href="#">1</a>
                                <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

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