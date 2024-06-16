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

        .header-monitoring {
            background-image: linear-gradient(rgba(4, 9, 30, 0.5), rgba(4, 9, 30, 0.5)), url('{{ asset('assets/img/poster/poster2.jpg') }}');
            background-size: cover;
        }
        
        .header-about {
            background-image: linear-gradient(rgba(4, 9, 30, 0.5), rgba(4, 9, 30, 0.5)), url('{{ asset('assets/img/santri/santri3.jpg') }}');
            background-size: cover;
        }
        
        .header-info {
            background-image: linear-gradient(rgba(4, 9, 30, 0.5), rgba(4, 9, 30, 0.5)), url('{{ asset('assets/img/poster/poster2.jpg') }}');
            background-size: cover;
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
            font-size: 1.95rem;
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
            font-size: 4rem;
            font-weight: 900;
            letter-spacing: 3px;
            line-height: 75px;
            text-transform: uppercase;
        }

        .content .content-body {
            margin-top: 2rem;
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

        .hero {
            width: 100%;
            margin-top: 10%;
        }

        .hero .content-hero {
            width: 60%;
            color: rgb(255, 255, 255);
            align-items: center;
            justify-content: center;
            padding: 2% 5%;
            margin: 1.5% 3% 1% 19%;
        }

        .hero .content-hero .hero-header h2 {
            font-size: 1.95rem;
            font-weight: 700;
            text-align: center;
            letter-spacing: 1px;
            text-transform: uppercase;
            line-height: 45px;
        }

        .hero .content-hero .hero-body p {
            font-size: 1rem;
            font-weight: 500;
            text-align: center;
        }

        .hero .content-hero .hero-btn {
            align-items: center;
            justify-content: center;
            text-align: center;
            display: flex;
            flex-direction: column;
        }

        .hero .content-hero .hero-btn .btn {
            font-size: 1rem;
            font-weight: 500;
            color: rgb(255, 255, 255);
            border: solid rgb(255, 255, 255) 2px;
            margin: 1rem 0;
        }

        .hero .content-hero .hero-btn .btn:hover {
            color: rgb(0, 0, 0)
        }

        .hero-about {
            width: 100%;
            margin-top: 13.5%;
        }

        .hero-about .content-hero {
            width: 60%;
            color: rgb(255, 255, 255);
            align-items: center;
            justify-content: center;
            padding: 2% 5%;
            margin: 1.5% 3% 1% 19%;
        }

        .hero-about .content-hero .hero-header h2 {
            font-size: 3.05rem;
            font-weight: 700;
            text-align: center;
            letter-spacing: 1px;
            text-transform: uppercase;
            line-height: 45px;
        }

        .hero-about .content-hero .hero-body p {
            font-size: .90rem;
            font-weight: 500;
            text-align: center;
            margin-top: 2.5rem;
        }

        .hero-info {
            width: 100%;
            margin-top: 13.5%;
        }

        .hero-info .content-hero {
            width: 60%;
            color: rgb(255, 255, 255);
            align-items: center;
            justify-content: center;
            padding: 2% 5%;
            margin: 1.5% 3% 1% 19%;
        }

        .hero-info .content-hero .hero-header h2 {
            font-size: 3.05rem;
            font-weight: 700;
            text-align: center;
            letter-spacing: 1px;
            text-transform: uppercase;
            line-height: 45px;
        }

        .hero-info .content-hero .hero-body p {
            font-size: .90rem;
            font-weight: 500;
            text-align: center;
            margin-top: 2.5rem;
        }

        .sosmed-icons-beranda {
            margin-top: -28rem;
        }

        .sosmed-icons-monitoring {
            margin-top: -24rem;
        }

        .sosmed-icons-about {
            margin-top: -19rem;
        }

        .sosmed-icons-info {
            margin-top: -20rem;
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

        #main {
            width: 100%;
            background-color: rgb(255, 255, 255);
            padding: 3%;
        }

        #main .humas {
            width: 100%;
            padding: 1% 3.5%;
            text-align: center;
        }

        #main .humas .humas-header {
            padding: 2% 3% 1% 3%;
        }

        #main .humas .humas-header .title {
            border-radius: 10px;
            color: rgb(0, 0, 0);
        }

        #main .humas .humas-header .deskripsi {
            font-size: .95rem;
            font-weight: 500;
            color: rgb(119, 119, 119);
        }

        #main .humas .humas-body {
            padding: 1% 3% 2% 3%;
        }

        #main .humas .humas-body .col-card {
            width: 25%;
        }

        #main .humas .humas-body .col-card .card {
            flex-basis: 22%;
            height: 620px;
            margin: 5% 0;
            padding: 5%;
            background-color: #fff3f3;
        }

        #main .humas .humas-body .col-card .card:hover {
            box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.2);
        }

        .humas .humas-body .col-card .card .card-title {
            font-size: 1.56rem;
            font-weight: 500;
            color: rgb(0, 0, 0);
            padding: 1%;
            margin-bottom: 1rem;
        }

        .humas .humas-body .col-card .card .card-text {
            font-size: .9rem;
            color: rgb(119, 119, 119);
            padding: 1%;
        }

        #main .wisuda {
            width: 100%;
            padding: 1% 3.5%;
            text-align: center;
        }

        #main .wisuda .wisuda-header {
            padding: 2% 3% 1% 3%;
        }

        #main .wisuda .wisuda-header .title {
            font-size: 1.95rem;
            font-weight: 700;
            color: rgb(0, 0, 0);
        }

        #main .wisuda .wisuda-header .deskripsi {
            font-size: .95rem;
            font-weight: 500;
            color: rgb(119, 119, 119);
        }

        #main .wisuda .wisuda-body {
            padding: 1% 3% 2% 3%;
        }

        #main .wisuda .wisuda-body img {
            width: 80%;
            text-align: center;
            align-items: center;
            justify-content: center;
            border: solid rgba(4, 175, 78, 0.2) 12px;
            border-radius: 10px;
        }

        #main .wisuda .wisuda-body .alas-image {
            width: 100%;
            height: 2px;
            padding: 10px;
            background-color: rgba(4, 175, 78, 0.2);
            border: solid rgba(4, 175, 78, 0.2) 5px;
            margin-top: 1rem;
        }

        #main .gallery {
            width: 100%;
            padding: 1% 3.5%;
            text-align: center;
        }

        #main .gallery .gallery-header {
            padding: 2% 3% 1% 3%;
        }

        #main .gallery .gallery-header .title {
            font-size: 1.95rem;
            font-weight: 700;
            color: rgb(0, 0, 0);
        }

        #main .gallery .gallery-header .deskripsi {
            font-size: .95rem;
            font-weight: 500;
            color: rgb(119, 119, 119);
        }

        #main .gallery .gallery-header .desc-plus {
            font-size: .95rem;
            font-weight: 700;
            color: rgb(119, 119, 119);
        }

        #main .gallery .gallery-body {
            padding: 1% 3% 2% 3%;
        }

        #main .base {
            width: 100%;
            text-align: center;
        }

        #main .base .img-base {
            width: 100%;
            height: 100px;
        }

        #main .hadist {
            width: 100%;
            padding: 1% 3.5%;
            text-align: center;
        }

        #main .hadist .hadist-header {
            padding: 2% 3% 1% 3%;
        }

        #main .hadist .hadist-header .title {
            font-size: 1.95rem;
            font-weight: 700;
            color: rgb(0, 0, 0);
        }

        #main .hadist .hadist-header .title .rtl {
            direction: rtl;
        }

        #main .hadist .hadist-header .deskripsi {
            font-size: .95rem;
            font-weight: 500;
            color: rgb(119, 119, 119);
            padding: 1% 25%;
        }

        #main .hadist .hadist-header .deskripsi .double-quote {
            font-weight: 900;
        }

        #main .hadist .hadist-header .desc-plus {
            font-size: .95rem;
            font-weight: 700;
            color: rgb(119, 119, 119);
            margin-top: -2%;
        }

        #main .contact {
            width: 100%;
            padding: 1% 3.5%;
            text-align: center;
        }

        #main .contact .contact-card {
            width: 94%;
            height: 60vh;
            margin: 3% 3% 2% 3%;
            background-image: linear-gradient(rgba(4, 9, 30, 0.7), rgba(4, 9, 30, 0.7)), url('{{ asset('assets/img/wisuda/wisuda3.JPG') }}');
            background-size: cover;
            border-radius: 10px;
        }

        #main .contact .contact-card .contact-header {
            width: 60%;
            color: rgb(255, 255, 255);
            align-items: center;
            justify-content: center;
            padding: 12% 5% 3% 5%;
            margin: 1.5% 3% 1% 19%;
        }

        #main .contact .contact-card .contact-header .title {
            font-size: 1.9rem;
            font-weight: 700;
            text-align: center;
            letter-spacing: 1px;
            line-height: 30px;
        }

        #main .contact .contact-card .contact-header .sub-title {
            font-size: 1.3rem;
            font-weight: 500;
            text-align: center;
        }

        #main .contact .contact-card .contact-header .btn {
            font-size: 1rem;
            font-weight: 500;
            color: rgb(255, 255, 255);
            border: solid rgb(255, 255, 255) 2px;
            margin: 2rem 0;
        }

        #main .contact .contact-card .contact-header .btn:hover {
            color: rgb(0, 0, 0);
        }

        #main .sejarah-yayasan {
            width: 100%;
            padding: 2% 3.5%;
            text-align: center;
            color: #1c1c6b;
        }

        #main .sejarah-yayasan .sejarah-header {
            background-color: rgba(4, 175, 78, 0.2);
            padding: 1% 3% 1% 3%;
            margin: .5rem;
            border: 3px solid rgba(4, 175, 78, 0.2);
        }

        #main .sejarah-yayasan .sejarah-header .title {
            font-size: 1.9rem;
            font-weight: 700;
        }

        #main .sejarah-yayasan .sejarah-body {
            background-color: rgba(4, 175, 78, 0.2);
            padding: 2%;
            margin: .5rem;
            border: 3px solid rgba(4, 175, 78, 0.2);
        }

        #main .sejarah-yayasan .sejarah-body .title {
            font-size: 1.2rem;
            font-weight: 700;
        }

        #main .sejarah-yayasan .sejarah-body .deskripsi {
            font-size: .65rem;
            text-align: justify;
        }

        #main .row {
            width: 100%;
            margin-left: .05%;
        }

        #main .profil-yayasan {
            width: 50%;
            padding: 2% 3.5%;
            text-align: center;
            color: #1c1c6b;
        }

        #main .profil-yayasan .profil-header {
            background-color: rgba(4, 175, 78, 0.2);
            padding: 1% 3% 1% 3%;
            margin: .5rem;
            border: 3px solid rgba(4, 175, 78, 0.2);
        }

        #main .profil-yayasan .profil-header .title {
            font-size: 1.9rem;
            font-weight: 700;
        }

        #main .profil-yayasan .profil-body {
            background-color: rgba(4, 175, 78, 0.2);
            padding: 2%;
            margin: .5rem;
            border: 3px solid rgba(4, 175, 78, 0.2);
        }

        #main .unggulan {
            width: 50%;
            padding: 2% 3.5%;
            text-align: center;
            color: #1c1c6b;
        }

        #main .unggulan .unggulan-body {
            background-color: rgba(4, 175, 78, 0.2);
            padding: 2%;
            margin: .5rem .5rem 0 .5rem;
            border: 3px solid rgba(4, 175, 78, 0.2);
        }

        #main .unggulan .unggulan-body .title {
            font-size: 1.9rem;
            font-weight: 700;
        }

        #main .unggulan .unggulan-body .accordion {
            --bs-accordion-btn-icon: url("{{ asset('assets/img/icon/arrow-right.svg') }}");
            --bs-accordion-btn-icon-transform: rotate(360deg);
            --bs-accordion-btn-active-icon: url("{{ asset('assets/img/icon/arrow-down.svg') }}");
            --bs-accordion-btn-icon-width: 1rem;
        }

        #main .unggulan .unggulan-body .accordion .accordion-item {
            background-color: rgba(4, 175, 78, 0.2);
            margin: .5rem 0;
            border: solid green 1px;
            border-radius: .2rem;
            overflow: hidden;
        }

        #main .unggulan .unggulan-body .accordion .accordion-item .accordion-header .accordion-button {
            background-color: rgba(4, 175, 78, 0.2);
            font-size: .9rem;
            font-weight: 500;
            color: #1c1c6b;
        }

        #main .unggulan .unggulan-body .accordion .accordion-item .accordion-body .deskripsi {
            font-size: .75rem;
            font-weight: 500;
            text-align: justify;
            color: #1c1c6b;
        }

        #main .anggota {
            width: 100%;
            padding: 2% 3.5%;
            text-align: center;
            color: #04af4e;
        }

        #main .anggota .anggota-header {
            background-color: #CAFFDE;
            padding: .5% 3%;
            margin: .5rem 20%;
            border: 3px solid rgba(4, 175, 78, 0.2);
            border-radius: 10px;
        }

        #main .anggota .anggota-header .title {
            font-size: 1.9rem;
            font-weight: 700;
        }

        #main .anggota .anggota-body {
            padding: 1% 0 2% 0;
        }

        #main .anggota .anggota-body .col-card {
            width: 16.6666667%;
        }

        #main .anggota .anggota-body .col-card .card {
            flex-basis: 22%;
            height: 350px;
            background-color: #CAFFDE;
            border: 3px solid rgba(4, 175, 78, 0.2);
            border-radius: 10px;
        }

        #main .anggota .anggota-body .col-card .card .card-body {
            color: #04af4e;
        }

        #main .anggota .anggota-body .col-card .card .card-body .card-title {
            font-size: 1.5rem;
            font-weight: 700;
        }

        #main .anggota .anggota-body .col-card .card .card-body .img-card {
            width: 100%;
            height: 190px;
            border: 3px solid #04af4e;
            border-radius: 50%;
            margin: .5rem 0;
        }

        #main .anggota .anggota-body .col-card .card .card-body .card-text {
            font-size: 1rem;
            font-weight: 500;
        }
    </style>
</head>

<body>
    @yield('header')

    <main id="main">
        @yield('content-main')
    </main>

    {{-- Script JS --}}
    <script src="{{ asset('assets/vendor/popper/popper.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
</body>

</html>
