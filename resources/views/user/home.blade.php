<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rental Sepeda</title>
        <link rel="icon" href="{{asset('templates')}}/img/logo-mini.png" type="image/png">
    <link rel="stylesheet" href="{{asset('templates')}}/vendors/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('templates')}}/vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="{{asset('templates')}}/vendors/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="{{asset('templates')}}/vendors/linericon/style.css">
    <link rel="stylesheet" href="{{asset('templates')}}/vendors/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{asset('templates')}}/vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('templates')}}/vendors/flat-icon/font/flaticon.css">
    <link rel="stylesheet" href="{{asset('templates')}}/vendors/nice-select/nice-select.css">
    <link rel="stylesheet" href="{{asset('templates')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('templates')}}/css/style-soul.css">
</head>
<body class="bg-shape">
<!--================ Header Menu Area start =================-->
<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container box_1620">
            <a class="navbar-brand logo_h" href="#"><img src="{{asset('templates')}}/img/logo-sepeda.png" alt="logo sepeda"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                <ul class="nav navbar-nav menu_nav justify-content-end">
                <li class="nav-item"><a class="nav-link" href="#home">Home</a></li> 
                <li class="nav-item"><a class="nav-link" href="#sepeda">Sepeda</a></li>  
                <li class="nav-item"><a class="nav-link" href="#services">Layanan</a></li>
                <li class="nav-item"><a class="nav-link" href="#lokasi">Lokasi</a></li> 
                <li class="nav-item"><a class="nav-link" href="#contact">Hubungi Kami</a></li>
                </ul>
                <div class="nav-right text-center text-lg-right py-4 py-lg-0">
                <a class="button" href="#">Rent Now</a>
                </div>
            </div> 
            </div>
        </nav>
        </div>
    </header>
    <!--================Header Menu Area =================-->

    <!--================Hero Banner Area Start =================-->
    <section class="hero-banner magic-ball">
        <div class="container" id="home">
        <div class="row align-items-center text-center text-md-left">
            <div class="col-md-6 col-lg-5 mb-5 mb-md-0">
            <h1>Hindari Kemacetan Dengan Bersepeda</h1>
            <p>Hidup ini seperti bersepeda, jika Kamu ingin menjaga keseimbanganmu maka teruslah bergerak maju.</p>
            <a class="button button-hero mt-4" href="#">Rent Now</a>
            </div>
            <div class="col-md-6 col-lg-7 col-xl-6 offset-xl-1">
            <img class="img-fluid" src="{{asset('templates')}}/img/home/2.png" alt="">
            </div>
        </div>
        </div>
    </section>
    <!--================Hero Banner Area End =================-->


    <!--================Service Area Start =================-->
    <section class="section-margin section-padding" id="services">
        <div class="container">
        <div class="section-intro text-center pb-90px">
            <img class="section-intro-img" src="{{asset('templates')}}/img/logo-mini.png" alt="">
            <h2>Pelayanan Kami</h2>
            <p>Kepuasan pelanggan adalah prioritas kami. Berikut beberapa kenyamanan yang akan Kamu dapatkan jika menyewa sepeda di Rental Sepeda</p>
        </div>

        <div class="row">
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="service-card text-center">
                <div class="service-card-img">
                <img class="img-fluid" src="{{asset('templates')}}/img/home/surat-jaminan.png" alt="surat jaminan">
                </div>
                <div class="service-card-body">
                <h3>Syarat Mudah</h3>
                <p>Hanya mengisi form data diri Kamu serta foto KTP asli. Jika belum mempunyai KTP, kamu bisa mengirim ID kamu yang lain.</p>
                </div>
            </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="service-card text-center">
                <div class="service-card-img">
                <img class="img-fluid" src="{{asset('templates')}}/img/home/perlengkapan-sepeda.png" alt="fasilitas sewa">
                </div>
                <div class="service-card-body">
                <h3>Fasilitas Sewa</h3>
                <p>Kamu akan diberi alat pengaman dan perlengkapan dalam bersepeda seperti helm SNI, kunci gembok pengaman, dan pelayanan jika terjadi kerusakan pada sepeda.</p>
                </div>
            </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="service-card text-center">
                <div class="service-card-img">
                <img class="img-fluid" src="{{asset('templates')}}/img/home/sepeda-berkualitas.png" alt="sepeda berkualitas">
                </div>
                <div class="service-card-body">
                <h3>Sepeda Yang Berkualitas</h3>
                <p>Rental Sepeda menyewakan berbagai macam merek sepeda yang berkualitas seperti Polygon, Pacific dan menyediakan berbagai jenis dari merek tersebut.</p>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>
    <!--================Service Area End =================-->


    <!--================About Area Start =================-->
    <section class="bg-gray magic-ball-about">
        <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-6 mb-4 mb-md-0">
            <div class="about-img">
                <img class="img-fluid" src="{{asset('templates')}}/img/home/6.png" alt="">
            </div>
            </div>
            <div class="col-lg-5 col-md-6 align-self-center about-content">
            <h2>Sehat Ga Harus Mahal,<br class="d-none d-xl-block">Bersepeda Salah Satunya.</h2>
            <p>Apapun sepedamu tak jadi masalah. Yang penting kamu masih ingat cara bersepeda. Mau rutin bersepeda tiap hari, cuma pas akhir pekan, sebulan sekali atau setahun sekali pun tidak apa-apa. Lagipula intinya kan tetap bersepeda.</p>
            <a class="button" href="#">Yuk Bersepeda</a>
            </div>
        </div>
        </div>
    </section>

    <!--================About Area End =================-->
    <section class="section-margin section-padding" id="sepeda">
        <div class="container">
    <div class="section-intro text-center pb-90px">
            <img class="section-intro-img" src="{{asset('templates')}}/img/logo-mini.png" alt="">
            <h2>Rental Sepeda</h2>
            <p class="mt-2">Berbagai merek dan jenis sepeda <br> yang dapat kamu pilih sesuai yang diinginkan!</p>
        </div>
    <div class="row">
    
        </div>
        </div>
        </section>

    <!--================Lokasi Area Start =================-->
    <section class="bg-gray section-padding magic-ball magic-ball-testimonial" id="lokasi">
        <div class="container">
        <div class="section-intro text-center pb-90px">
            <img class="section-intro-img" src="{{asset('templates')}}/img/logo-mini.png" alt="">
            <h2>Lokasi Kami</h2>
            <p>Temukan kami melalui Google Maps!</p>
        </div>
        <div class="row">
            <div class="col-lg-7 col-md-6 mb-4 mb-md-0">
            <div class="about-img">
                <img class="img-fluid" src="{{asset('templates')}}/img/home/maps.png">
            </div>
            </div>
            <div class="col-lg-5 col-md-6 align-self-center about-content">
            <h2>Lokasi Tempat Rental Sepeda</h2>
            <p>Bagi Kamu yang ingin datang langsung ketempat kami, silakan temukan Rental Sepeda di Google Maps.</p>
            <a class="button" href="https://www.google.co.id/maps/place/Universitas+Gunadarma+Kampus+G/@-6.3547442,106.8413345,17z/data=!3m1!4b1!4m5!3m4!1s0x2e69ec472dc3632d:0x54e22c8101252fa4!8m2!3d-6.3547442!4d106.8435286">Let's Find Us</a>
            </div>
        </div>
        </div>
    </section>

    <!--================Blog section Start =================-->
    <section class="section-padding bg-gray" id="contact">
        <div class="container">
        <div class="section-intro text-center pb-90px">
            <img class="section-intro-img" src="{{asset('templates')}}/img/logo-mini.png" alt="">
            <h2>Hubungi Kami</h2>
            <p>Jika kamu punya pertanyaan atau keluhan silakan hubungi kami melalui media dibawah ini</p>
        </div>

        <div class="row">
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="card-blog">
                <img class="card-img rounded-0" src="{{asset('templates')}}/img/home/wa.png" alt="">
                <div class="card-blog-body">
                <a href="#">
                    <h4>Whatsapp: 081237323737</h4>
                </a>
                </div>
            </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="card-blog">
                <img class="card-img rounded-0" src="{{asset('templates')}}/img/home/ig.png" alt="">
                <div class="card-blog-body">
                <a href="#">
                    <h4>Instagram: @RentalSepeda</h4>
                </a>
                </div>
            </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="card-blog">
                <img class="card-img rounded-0" src="{{asset('templates')}}/img/home/fb.png" alt="">
                <div class="card-blog-body">
                <a href="#">
                    <h4>Facebook: Rental Sepeda</h4>
                </a>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>
    <!--================Blog section End =================-->





    <!-- ================ start footer Area ================= -->
    <footer class="footer-area">
        <div class="container">
        <div class="row">
            <div class="col-lg-5  col-md-6 col-sm-6">
            <div class="single-footer-widget">
                <h6>Rental Sepeda</h6>
                <p>
                Rental Sepeda merupakan website yang dibuat oleh Irvan Fauzi, Mahmud Yusuf, dan Ridho Alamsyah yang menyediakan layanan rental sepeda secara online dengan berbagai jenis sepeda yang diinginkan. 
            </p>
            </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
            </div>							
            <div class="col-lg-4  col-md-6 col-sm-6">
            <div class="single-footer-widget">
                <h6>Navigation Links</h6>
                <div class="row">
                <div class="col">
                    <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#sepeda">Sepeda</a></li>
                    <li><a href="#services">Layanan</a></li>
                    </ul>
                </div>
                <div class="col">
                    <ul>
                    <li><a href="#lokasi">Lokasi</a></li>
                    <li><a href="#contact">Hubungi Kami</a></li>
                    <li><a href="#">Sewa Sepeda</a></li>
                    </ul>
                </div>										
                </div>							
            </div>
            </div>
            <div class="col-lg-3  col-md-6 col-sm-6">	
        </div>
        </div>
        <div class="footer-bottom">
            <div class="row align-items-center">
            <p class="col-lg-8 col-sm-12 footer-text m-0 text-center text-lg-left"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <a href="https://colorlib.com" target="_blank">Rental Sepeda</a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            <div class="col-lg-4 col-sm-12 footer-social text-center text-lg-right">
                <a href="#"><i class="fab fa-whatsapp"></i></a>  
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
            </div>
        </div>
    </div>
</footer>
<!-- ================ End footer Area ================= -->


    <script src="{{asset('templates')}}/vendors/jquery/jquery-3.2.1.min.js"></script>
    <script src="{{asset('templates')}}/vendors/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="{{asset('templates')}}/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="{{asset('templates')}}/vendors/nice-select/jquery.nice-select.min.js"></script>
    <script src="{{asset('templates')}}/js/jquery.ajaxchimp.min.js"></script>
    <script src="{{asset('templates')}}/js/mail-script.js"></script>
    <script src="{{asset('templates')}}/js/skrollr.min.js"></script>
    <script src="{{asset('templates')}}/js/main.js"></script>
</body>
</html>

