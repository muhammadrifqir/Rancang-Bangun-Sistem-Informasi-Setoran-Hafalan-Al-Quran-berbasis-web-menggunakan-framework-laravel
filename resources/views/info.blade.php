@extends('layouts.landing.app')
@section('header')
    <header id="header" class="header-info">
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
                                <a class="nav-link" href="{{ route('beranda') }}">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('monitoring') }}">Monitoring</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('tentang-kami') }}">Tentang Kami</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ route('info') }}">Info</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="hero-info">
            <div class="content-hero">
                <div class="hero-header">
                    <h2>Pesantren Takhassus Tahfidz Al Ma'shum Mardiyah</h2>
                </div>
                <div class="hero-body">
                    <p>
                        Pesantren Takhassus Tahfidz Al Ma'shum Mardiyah adalah Pondok Penghafal Qur'an.
                        Visi Misi Kami adalah Menciptakan Generasi Qur'ani yang taat Akidah, Akhlaq, dan berlandasakan 8
                        Jalur Hubungan Manusia.
                    </p>
                </div>
            </div>
        </div>
        <div class="sosmed-icons sosmed-icons-info">
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
    </header>
@endsection
@section('content-main')
    <section class="contact">
        <div class="contact-card">
            <div class="contact-header">
                <h3 class="title">Kontak Komunitas Santri</h3>
                <h5 class="sub-title">
                    Organisasi Santri Takhassus Tahfidz Al-Ma'shum Mardiyah (OSTTA)
                </h5>
                <a class="btn btn-transparant" href="#" role="button">Hubungi Kami</a>
            </div>
        </div>
    </section>
@endsection
