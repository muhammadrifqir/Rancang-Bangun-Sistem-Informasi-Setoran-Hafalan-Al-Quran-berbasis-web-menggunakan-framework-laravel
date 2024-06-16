<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('assets/icon.png') }}" type="image/x-icon">
    <title>Al-Ma'shum Mardiyah</title>
    {{-- Bootstrap CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    {{-- FontAwesome CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/vendor/fontawesome-free-5.14.0/css/all.min.css') }}">
    {{-- Font Google --}}
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        body {
            margin: 0;
            padding: 0;
        }

        a {
            text-decoration: none;
        }

        #header {
            height: 100vh;
            width: 100%;
            overflow: hidden;
            position: relative;
            z-index: 2.05;
        }
        
        .header-home {
            background-color: rgba(38, 149, 233, 0.459);
        }

        #header video {
            height: 112vh;
            object-fit: cover;
            position: absolute;
            margin-top: -5.7rem;
            margin-left: -3.5rem;
            top: 0;
            left: 0;
            z-index: -2;
        }

        .navbar .brand {
            float: right;
            line-height: 50px;
            text-align: center;
        }

        .navbar .brand img {
            width: 100px;
            vertical-align: middle;
        }

        .navbar .brand span {
            color: rgb(255, 255, 255);
            font-size: 26px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .navbar .my-nav {
            float: left;
            height: 60px;
            max-width: 600px;
            margin-right: -10rem;
        }

        .navbar .navbar-nav .nav-item a,
        .navbar .navbar-nav .nav-item a:focus {
            color: rgb(255, 255, 255);
            font-weight: 500;
            padding: 0 16px;
        }

        .navbar .navbar-nav .nav-item .active,
        .navbar .navbar-nav .nav-item a:active {
            color: rgb(41, 216, 18)
        }

        .my-carousel {
            color: rgb(255, 255, 255);
            width: 100% !important;
            margin-top: 3.5rem;
        }

        .my-carousel .carousel-inner .carousel-item .content {
            margin: 1.5rem 2rem 1rem 7.25rem;
            padding: 1rem 2rem;
            width: 75%;
            justify-content: center !important;
        }

        .content .content-header h2 {
            font-size: 3.815rem;
            font-weight: 900;
            letter-spacing: 3px;
            line-height: 75px;
            text-transform: uppercase;
        }

        .content .content-body {
            margin-top: 1rem;
        }

        .content .content-body .title {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .content .content-body .title .sub-title {
            padding: 1rem 0;
        }

        .content .content-body .title h5 {
            font-size: 1rem;
            font-weight: 700;
            letter-spacing: 2px;
        }

        .content-body .title .sub-title .first,
        .content-body .title .sub-title .second {
            font-size: .95rem;
            font-weight: 500;
            letter-spacing: 2px;
            margin-left: .7rem;
        }

        .content-body .title .sub-title .first {
            list-style: none;
            margin-left: -.5rem;
        }

        .content .btn {
            margin-top: 1rem;
        }

        .content .content-body .title table thead {
            font-size: 1rem;
            font-weight: 700;
            letter-spacing: 2px;
        }

        .content .content-body .title table tbody {
            font-size: .95rem;
            font-weight: 500;
            letter-spacing: 2px;
        }

        .sosmed-icons-beranda {
            margin-top: -28rem;
        }

        .sosmed-icons {
            z-index: 880;
            position: absolute;
            right: 30px;
            display: flex;
            flex-direction: column;
            transition: 0.5s ease;
        }

        .sosmed-icons a {
            color: #fff;
            font-size: 1.6em;
            transition: 0.3s ease;
        }

        .sosmed-icons a:not(:last-child) {
            margin-bottom: 20px;
        }

        .sosmed-icons a:hover {
            transform: scale(1.3);
        }
    </style>
</head>

<body>
    <header id="header" class="header-home">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <div class="brand">
                        <a href="#">
                            <img src="{{ asset('assets/icon.png') }}" alt="logo">
                            <span>Al-Ma'shum Mardiyah</span>
                        </a>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse my-nav" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ route('beranda') }}">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('monitoring') }}">Monitoring</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('tentang-kami') }}">Tentang Kami</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('info') }}">Info</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade my-carousel" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="content">
                        <div class="content-header">
                            <h2>Selamat Datang</h2>
                        </div>
                        <div class="content-body">
                            <ul class="title">
                                <li class="sub-title">
                                    <h5>Visi :</h5>
                                    <ol class="first">
                                        <li>
                                            Menjadi Pesantren Unggulan Pencetak Generasi Qur'ani.
                                        </li>
                                    </ol>
                                </li>
                                <li class="sub-title">
                                    <h5>Misi :</h5>
                                    <ol class="second">
                                        <li>
                                            Melibatkan Orang Tua atau Wali Santri dalam Mewujudkan Visi Yayasan.
                                        </li>
                                        <li>
                                            Melaksanakan Kurikulum Pendidikan Terpadu dengan Sistem Berasrama Selama 6
                                            Tahun (Tingkat Menengah Pertama dan Atas).
                                        </li>
                                        <li>
                                            Menanamkan Akhlak Karimah (Qur'ani) dalam Kehidupan Warga Pesantren.
                                        </li>
                                        <li>
                                            Mengembangkan Minat dan Bakat Santri.
                                        </li>
                                        <li>
                                            Membudayakan Kerja Inovatif.
                                        </li>
                                        <li>
                                            Mencapai Kemandirian Finansial.
                                        </li>
                                        <li>
                                            Menjadikan Lembaga Lebih Dikenal Masyarakat.
                                        </li>
                                    </ol>
                                </li>
                            </ul>
                        </div>
                        <a class="btn btn-light" href="#" role="button">Selengkapnya</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="content">
                        <div class="content-header">
                            <h2>Profil Yayasan</h2>
                        </div>
                        <div class="content-body">
                            <ul class="title">
                                <li>
                                    <table cellpadding="5" cellspacing="0" width="70%">
                                        <thead>
                                            <tr>
                                                <td align="center" colspan="3">
                                                    Susunan Organisasi Yayasan
                                                </td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Ketua Yayasan Al-Ma'shum Mardiyah</td>
                                                <td>:</td>
                                                <td>H. Muhammad Hernadi, SE., Ak.</td>
                                            </tr>
                                            <tr>
                                                <td>Penasihat Yayasan Al-Ma'shum Mardiyah</td>
                                                <td>:</td>
                                                <td>DR. K.H. Ahsin Sakho Muhammad, MA.</td>
                                            </tr>
                                            <tr>
                                                <td>Mudir Yayasan</td>
                                                <td>:</td>
                                                <td>H. Yasfi Nasution, Lc.</td>
                                            </tr>
                                            <tr>
                                                <td>Wakil Mudir Yayasan</td>
                                                <td>:</td>
                                                <td>H. Udjuh Juhandi, S.Sos.</td>
                                            </tr>
                                            <tr>
                                                <td>PHY Bidang Pendidikan</td>
                                                <td>:</td>
                                                <td>H. Dede Muharamsyah, S.Psi., M.Pd.</td>
                                            </tr>
                                            <tr>
                                                <td>PHY Bidang Keuangan</td>
                                                <td>:</td>
                                                <td>Sri Widodo, S.ag</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </li>
                            </ul>
                        </div>
                        <a class="btn btn-light" href="#" role="button">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="sosmed-icons sosmed-icons-beranda">
            <a href="https://www.facebook.com/ponpestmm/?locale=id_ID">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://www.instagram.com/almashum_mardiyah/">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://www.youtube.com/@almashum_mardiyah">
                <i class="fab fa-youtube"></i>
            </a>
            <a href="https://www.tiktok.com/@almashum_mardiyah">
                <i class="fab fa-tiktok"></i>
            </a>
            <a href="https://twitter.com/ponpesalmashum?lang=en">
                <i class="fab fa-twitter"></i>
            </a>
        </div>
        <video src="{{ asset('assets/video/video_hero.mp4') }}" autoplay muted loop></video>
    </header>

    {{-- Script JS --}}
    <script src="{{ asset('assets/vendor/popper/popper.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
</body>

</html>
