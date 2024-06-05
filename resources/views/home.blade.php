<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Rapsodio</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-hexashop.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
       <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="assets/images/logo.png">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="{{ route('home') }}" class="active">Home</a></li>
                            <li><a href="{{ route('forum') }}">Forum</a></li>
                            <li><a href="{{ route('profile') }}">Profile</a></li>
                            <!-- <li class="scroll-to-section"><a href="#kids">Komika</a></li>
                            <li class="submenu">
                                <a href="javascript:;">More</a>
                                <ul>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="products.html">Talents</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:;">Job and Career </a>
                                <ul>
                                    <li><a href="daftarMitra.html">Daftar Mitra</a></li>
                                    <li><a href="caraPemesanan.html">Cara Pemesanan</a></li>
                                    <li><a href="komplain.html">Komplain</a></li>
                                </ul>
                            </li>
                            <li class="scroll-to-section"><a href="#explore">Explore</a></li> -->
                            <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" style="background:none;border:none;color:inherit;cursor:pointer;padding:0;">Logout</button>
                                </form>
                            </li>
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->


    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content">
                        <div class="thumb">
                            <div class="inner-content">
                                <h4>We Are Rapsodio!</h4>
                                <span>Kami hadir bergandengan dengan seniman Indonesia menuju karir yang lebih cerah.
                                </span>
                                <div class="main-border-button">
                                    <!--<a href="#">Purchase Now!</a>-->
                                </div>
                            </div>
                            <img src="assets/images/left-banner-image.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Penyanyi</h4>
                                            <span>Temukan Penyanyi untuk Kebutuhan Anda</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Penyanyi</h4>
                                                <p>Kami menggandeng talenta-talenta mahasiswa juga pengamen berbakat khusus untuk Anda.</p>
                                                <div class="main-border-button">
                                                    <!--<a href="#">Discover More</a>-->
                                                </div>
                                            </div>
                                        </div>
                                        <img src="assets/images/baner-right-image-01.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>MC</h4>
                                            <span>Temukan MC untuk acara Anda</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>MC</h4>
                                                <p>MC kami tentu memiliki kualifikasi yang ketat agar selalu sesuai dengan kebutuhan Anda.</p>
                                                <div class="main-border-button">
                                                    <!--<a href="#">Discover More</a>-->
                                                </div>
                                            </div>
                                        </div>
                                        <img src="assets/images/baner-right-image-02.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Komika</h4>
                                            <span>Temukan komika untuk hiburan Anda</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Komika</h4>
                                                <p>Mereka diciptakan khusus untuk membuat Anda tertawa.</p>
                                                <div class="main-border-button">
                                                    <!--<a href="#">Discover More</a>-->
                                                </div>
                                            </div>
                                        </div>
                                        <img src="assets/images/baner-right-image-03.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Badut</h4>
                                            <span>Teman terbaik ulang tahun anak Anda</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Badut</h4>
                                                <p>Mereka adalah orang lucu yang akan selalu dinantikan oleh anak-anak Anda.</p>
                                                <div class="main-border-button">
                                                    <!--<a href="#">Discover More</a>-->
                                                </div>
                                            </div>
                                        </div>
                                        <img src="assets/images/baner-right-image-04.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Men Area Starts ***** -->
    <section class="section" id="men">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Penyanyi</h2>
                        <span>Temukan penyanyi yang sedang hits akhir-akhir ini.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="men-item-carousel">
                        <div class="owl-men-item owl-carousel">
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="sekava.html"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="assets/images/sekava.jpg" alt="">
                                </div>
                                <div class="down-content">
                                    <style>
                                        /* Gaya yang sama dengan h4 */
                                        button {
                                            font-size: 1.5em;
                                            font-weight: bold;
                                            color: #333;
                                            background-color: transparent;
                                            border: none;
                                            padding: 0;
                                            margin: 0;
                                            cursor: pointer;
                                        }
                                    </style>
                                    
                                    <button onclick="window.location.href = 'sekava.html';">Sekava</button>
                                    <span>Rp500.000,00</span>
                                    <ul class="stars">
                                        <!-- <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li> -->
                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="rivanka.html"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="assets/images/rivanka.jpg" alt="">
                                </div>
                                <div class="down-content">
                                    <style>
                                        /* Gaya yang sama dengan h4 */
                                        button {
                                            font-size: 1.5em;
                                            font-weight: bold;
                                            color: #333;
                                            background-color: transparent;
                                            border: none;
                                            padding: 0;
                                            margin: 0;
                                            cursor: pointer;
                                        }
                                    </style>
                                    
                                    <button onclick="window.location.href = 'rivanka.html';">Rivanka</button>
                                    <span>Rp500.000,00</span>
                                    <ul class="stars">
                                        <!-- <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li> -->
                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="TBA.html"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="assets/images/penyanyi-comingSoon.jpg" alt="">
                                </div>
                                <div class="down-content">
                                   <style>
                                        /* Gaya yang sama dengan h4 */
                                        button {
                                            font-size: 1.5em;
                                            font-weight: bold;
                                            color: #333;
                                            background-color: transparent;
                                            border: none;
                                            padding: 0;
                                            margin: 0;
                                            cursor: pointer;
                                        }
                                    </style>
                                    
                                    <button onclick="window.location.href = 'TBA.html';">To Be Announced</button>
                                    <span>To Be Announced</span>

                                    <ul class="stars">
                                        <!-- <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li> -->
                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="TBA.html"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="assets/images/penyanyi-comingSoon.jpg" alt="">
                                </div>
                                <div class="down-content">
                                   <style>
                                        /* Gaya yang sama dengan h4 */
                                        button {
                                            font-size: 1.5em;
                                            font-weight: bold;
                                            color: #333;
                                            background-color: transparent;
                                            border: none;
                                            padding: 0;
                                            margin: 0;
                                            cursor: pointer;
                                        }
                                    </style>
                                    
                                    <button onclick="window.location.href = 'TBA.html';">To Be Announced</button>
                                    <span>To Be Announced</span>

                                    <ul class="stars">
                                        <!-- <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Men Area Ends ***** -->

    <!-- ***** Women Area Starts ***** -->
    <section class="section" id="women">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>MC</h2>
                        <span>Berkenalan dengan mereka untuk jaminan kelancaran acara Anda.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="women-item-carousel">
                        <div class="owl-women-item owl-carousel">
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="TBA.html"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="assets/images/mc-comingSoon.jpg" alt="">
                                </div>
                                <div class="down-content">
                                   <style>
                                        /* Gaya yang sama dengan h4 */
                                        button {
                                            font-size: 1.5em;
                                            font-weight: bold;
                                            color: #333;
                                            background-color: transparent;
                                            border: none;
                                            padding: 0;
                                            margin: 0;
                                            cursor: pointer;
                                        }
                                    </style>
                                    
                                    <button onclick="window.location.href = 'TBA.html';">To Be Announced</button>
                                    <span>To Be Announced</span>

                                    <ul class="stars">
                                        <!-- <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li> -->
                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="TBA.html"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="assets/images/mc-comingSoon.jpg" alt="">
                                </div>
                                <div class="down-content">
                                   <style>
                                        /* Gaya yang sama dengan h4 */
                                        button {
                                            font-size: 1.5em;
                                            font-weight: bold;
                                            color: #333;
                                            background-color: transparent;
                                            border: none;
                                            padding: 0;
                                            margin: 0;
                                            cursor: pointer;
                                        }
                                    </style>
                                    
                                    <button onclick="window.location.href = 'TBA.html';">To Be Announced</button>
                                    <span>To Be Announced</span>

                                    <ul class="stars">
                                        <!-- <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li> -->
                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="TBA.html"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="assets/images/mc-comingSoon.jpg" alt="">
                                </div>
                                <div class="down-content">
                                   <style>
                                        /* Gaya yang sama dengan h4 */
                                        button {
                                            font-size: 1.5em;
                                            font-weight: bold;
                                            color: #333;
                                            background-color: transparent;
                                            border: none;
                                            padding: 0;
                                            margin: 0;
                                            cursor: pointer;
                                        }
                                    </style>
                                    
                                    <button onclick="window.location.href = 'TBA.html';">To Be Announced</button>
                                    <span>To Be Announced</span>

                                    <ul class="stars">
                                        <!-- <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li> -->
                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="TBA.html"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="assets/images/mc-comingSoon.jpg" alt="">
                                </div>
                                <div class="down-content">
                                   <style>
                                        /* Gaya yang sama dengan h4 */
                                        button {
                                            font-size: 1.5em;
                                            font-weight: bold;
                                            color: #333;
                                            background-color: transparent;
                                            border: none;
                                            padding: 0;
                                            margin: 0;
                                            cursor: pointer;
                                        }
                                    </style>
                                    
                                    <button onclick="window.location.href = 'TBA.html';">To Be Announced</button>
                                    <span>To Be Announced</span>

                                    <ul class="stars">
                                        <!-- <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Women Area Ends ***** -->

    <!-- ***** Kids Area Starts ***** -->
    <section class="section" id="kids">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Komika</h2>
                        <span>Mature man still need some humour. Mereka ahlinya!.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="kid-item-carousel">
                        <div class="owl-kid-item owl-carousel">
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="TBA.html"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="assets/images/komika-comingSoon.jpg" alt="">
                                </div>
                                <div class="down-content">
                                   <style>
                                        /* Gaya yang sama dengan h4 */
                                        button {
                                            font-size: 1.5em;
                                            font-weight: bold;
                                            color: #333;
                                            background-color: transparent;
                                            border: none;
                                            padding: 0;
                                            margin: 0;
                                            cursor: pointer;
                                        }
                                    </style>
                                    
                                    <button onclick="window.location.href = 'TBA.html';">To Be Announced</button>
                                    <span>To Be Announced</span>

                                    <ul class="stars">
                                        <!-- <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li> -->
                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="TBA.html"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="assets/images/komika-comingSoon.jpg" alt="">
                                </div>
                                <div class="down-content">
                                   <style>
                                        /* Gaya yang sama dengan h4 */
                                        button {
                                            font-size: 1.5em;
                                            font-weight: bold;
                                            color: #333;
                                            background-color: transparent;
                                            border: none;
                                            padding: 0;
                                            margin: 0;
                                            cursor: pointer;
                                        }
                                    </style>
                                    
                                    <button onclick="window.location.href = 'TBA.html';">To Be Announced</button>
                                    <span>To Be Announced</span>

                                    <ul class="stars">
                                        <!-- <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li> -->
                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="TBA.html"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="assets/images/komika-comingSoon.jpg" alt="">
                                </div>
                                <div class="down-content">
                                   <style>
                                        /* Gaya yang sama dengan h4 */
                                        button {
                                            font-size: 1.5em;
                                            font-weight: bold;
                                            color: #333;
                                            background-color: transparent;
                                            border: none;
                                            padding: 0;
                                            margin: 0;
                                            cursor: pointer;
                                        }
                                    </style>
                                    
                                    <button onclick="window.location.href = 'TBA.html';">To Be Announced</button>
                                    <span>To Be Announced</span>

                                    <ul class="stars">
                                        <!-- <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li> -->
                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="TBA.html"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="assets/images/komika-comingSoon.jpg" alt="">
                                </div>
                                <div class="down-content">
                                   <style>
                                        /* Gaya yang sama dengan h4 */
                                        button {
                                            font-size: 1.5em;
                                            font-weight: bold;
                                            color: #333;
                                            background-color: transparent;
                                            border: none;
                                            padding: 0;
                                            margin: 0;
                                            cursor: pointer;
                                        }
                                    </style>
                                    
                                    <button onclick="window.location.href = 'TBA.html';">To Be Announced</button>
                                    <span>To Be Announced</span>

                                    <ul class="stars">
                                        <!-- <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Kids Area Ends ***** -->

     <!-- ***** Services Area Starts ***** -->
     <section class="our-services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Keunggulan Kami</h2>
                        <span>Kami melihat masa depan, kami bertekad dengan spirit kami dan 100% dengan semangat yang kami bawa.</span>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-item">
                        <h4>Relasi dan Melamar dengan Mudah</h4>
                        <p>Anda hanya perlu portfolio untuk bergabung bersama kami.</p>
                        <img src="assets/images/keunggulan-01.png" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-item">
                        <h4>Future Ecosystem</h4>
                        <p>Tekat kami menjadikan Rapsodio sebagai ekosistem penghubung talent-talent dengan industri FnB di Indonesia.</p>
                        <img src="assets/images/keunggulan-02.png" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-item">
                        <h4>Pelatihan Gratis</h4>
                        <p>Kami mitra kami bervalue. Maka, kami sediakan berbagai macam course yang bisa anda akses secara gratis.</p>
                        <img src="assets/images/keunggulan-03.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Services Area Ends ***** -->

        <!-- ***** Subscribe Area Starts ***** 

    <!-- ***** Explore Area Starts ***** -->
    <section class="section" id="explore">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content">
                        <h2>Mengapa Kami Berdiri?</h2>
                        <span>Berawal dari keresahan kami semenjak banyaknya pengamen di sisi-sisi Bandung, tak kadang perjalanan kami terdisrubsi. Di hari yang sama, kami mengunjungi cafe di daerah Dago dan kami melihat suatu potensi yang bisa kami kembangkan, sebuah ide besar...</span>
                        <div class="quote">
                            <i class="fa fa-quote-left"></i><p>"Ini adalah ide besar, spirit kalian untuk menyejahterakan mereka itu kami suka, keep it up!</p>
                        </div>
                        <p>Ide ini telah menjuarai lebih dari 5 kompetisi business plan dan menjadi indikasi bahwa ide kami divalidasi bahkan oleh experts.</p>
                        <p>Kita bisa sejahterakan mereka, mereka sangat layak untuk mendapat penghasilan yang lebih baik. <a rel="nofollow" href="wa.me/082269850831" target="_blank">Support kami</a> agar api spirit kami tetap menyala. Thank you.</p>
                        <div class="main-border-button">
                            <a href="products.html">Discover More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="leather">
                                    <h4>Berawal di Dago, Bandung, Indonesia</h4>
                                    <span>Kami siap mewujudkan impian pengamen seluruh Indonesia</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="first-image">
                                    <img src="assets/images/explore-image-01.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="second-image">
                                    <img src="assets/images/explore-image-02.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="types">
                                    <h4>Kami telah bersiap dengan mobile apps</h4>
                                    <span>Nantikan mobile apps kami di Playstore</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Explore Area Ends ***** -->

    <!-- ***** Social Area Starts ***** -->
    <section class="section" id="social">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Social Media</h2>
                        <span>Follow kami di Instagram.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row images">
                <div class="col-2">
                    <div class="thumb">
                        <div class="icon">
                            <a href="https://www.instagram.com/p/C0eWwluv2Rf/">
                                <h6>Rivanka</h6>
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                        <img src="assets/images/ig 1.png" alt="">
                    </div>
                </div>
                <div class="col-2">
                    <div class="thumb">
                        <div class="icon">
                            <a href="https://www.instagram.com/p/C0HFY8KPNff/">
                                <h6>Rapsodio</h6>
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                        <img src="assets/images/ig 4.png" alt="">
                    </div>
                </div>
                <div class="col-2">
                    <div class="thumb">
                        <div class="icon">
                            <a href="https://www.instagram.com/p/C0ji7r9yOf3/">
                                <h6>Sekava</h6>
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                        <img src="assets/images/ig 2.png" alt="">
                    </div>
                </div>
                <div class="col-2">
                    <div class="thumb">
                        <div class="icon">
                            <a href="https://www.instagram.com/p/C0HF68XvwH0/">
                                <h6>Apa itu Rapsodio?</h6>
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                        <img src="assets/images/ig 3.png" alt="">
                    </div>
                </div>
                <div class="col-2">
                    <div class="thumb">
                        <div class="icon">
                            <a href="https://www.instagram.com/p/C0HEQDEv5Rx/">
                                <h6>Logo</h6>
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                        <img src="assets/images/ig 5.png" alt="">
                    </div>
                </div>
                <div class="col-2">
                    <div class="thumb">
                        <div class="icon">
                            <a href="https://www.instagram.com/p/C0HFDFRvquj/">
                                <h6>Bisnis Model Kami</h6>
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                        <img src="assets/images/ig 6.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Social Area Ends ***** -->

    <!-- ***** Subscribe Area Starts ***** -->
    <div class="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-heading">
                        <h2>Want To Invest? Complain?</h2>
                        <span>We would love to hear from you</span>
                    </div>
                    <form id="subscribe" action="" method="get">
                        <div class="row">
                          <div class="col-lg-5">
                            <fieldset>
                              <input name="name" type="text" id="name" placeholder="Your Name" required="">
                            </fieldset>
                          </div>
                          <div class="col-lg-5">
                            <fieldset>
                              <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email Address" required="">
                            </fieldset>
                          </div>
                          <div class="col-lg-2">
                            <fieldset>
                              <button type="submit" id="form-submit" class="main-dark-button"><i class="fa fa-paper-plane"></i></button>
                            </fieldset>
                          </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-6">
                            <ul>
                                <li>Our Location:<br><span>Bandung Techno Park, Bandung, Indonesia</span></li>
                                <li>Phone:<br><span>0822-6985-0831</span></li>
                                <li>Office Location:<br><span>Bandung</span></li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul>
                                <li>Work Hours:<br><span>24 hours/day</span></li>
                                <li>Email:<br><span>rapsodio.id@gmail.com</span></li>
                                <li>Social Media:<br><span><a href="https://www.instagram.com/rapsodio_?igsh=d2E4b281MzhiZGs3">Instagram</a></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Subscribe Area Ends ***** -->
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="first-item">
                        <div class="logo">
                            <img src="assets/images/white-logo.png" alt="Rapsodio">
                        </div>
                        <ul>
                            <li><a href="#">Jl. Telekomunikasi No.1, Sukapura, Kec. Dayeuhkolot, Kabupaten Bandung, Jawa Barat 40257</a></li>
                            <li><a href="#">raspdio.id@gmail.com</a></li>
                            <li><a href="#">62-822-6985-0831</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h4>Talent &amp; Categories</h4>
                    <ul>
                        <li><a href="#">Penyanyi</a></li>
                            
                        <li><a href="#">Komika</a></li>
                        <li><a href="#">Badut</a></li>

                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Web Navigation</h4>
                    <ul>
                        <li><a href="#">Homepage</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Help &amp; Information</h4>
                    <ul>
                        <li><a href="https://wa.me/082269850831">Help</a></li>
                        <li><a href="https://wa.me/082269850831">FAQ's</a></li>
                        <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSeW4CnICjaZYSKKgsVCwAAqCTVHD06BC1CvEQsSlhYmB1jjog/viewform">Daftar Mitra</a></li>
                        <li><a href="https://forms.gle/2msBfhUyEyRbxVtc7">Pemesanan</a></li>
                    </ul>
                </div>
                <div class="col-lg-12">
                    <div class="under-footer">
                        <p>Copyright © 2024 C-House All Rights Reserved. </p>
                        <p>C-House Software House, Lantai 2 Gedung Selaru, Jl. Telekomunikasi No.1 Sukapura, Kec. Dayeuhkolot, Kabupaten Bandung, Jawa Barat 40257
                        </p>
                        <ul>
                            <li><a href="https://www.youtube.com/channel/UCe2yJdD7IArID5hZ-2u9MVg"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="https://www.instagram.com/rapsodio_?igsh=d2E4b281MzhiZGs3"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="https://wa.me/082269850831"><i class="fa fa-whatsapp"></i></a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>

  </body>
</html>