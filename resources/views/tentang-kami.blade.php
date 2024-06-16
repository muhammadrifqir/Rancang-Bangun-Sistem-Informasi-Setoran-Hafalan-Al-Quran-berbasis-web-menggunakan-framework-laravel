@extends('layouts.landing.app')
@section('header')
    <header id="header" class="header-about">
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
                                <a class="nav-link active" aria-current="page" href="{{ route('tentang-kami') }}">Tentang Kami</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('info') }}">Info</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="hero-about">
            <div class="content-hero">
                <div class="hero-header">
                    <h2>Tentang Kami</h2>
                </div>
                <div class="hero-body">
                    <p>
                        Yayasan Al-Ma'shum Mardiyah memiliki 6 Unit (Pondok Pesantren Terpadu, SMP Terpadu, SMA Terpadu,
                        SMP, SMK, dan Takhassus Tahfidz) dalam membentuk generasi Indonesia yang berakhlak mulia dan
                        cinta damai
                        dengan dukungan berbagai fasilitas dan sarana untuk membantu kegiatan belajar mengajar (KBM)
                        agar santri mendapat hasil yang terbaik, prestasi, serta ilmu yang bermafaat bagi masa depan
                        Agama, Nusa,
                        dan Bangsa.
                    </p>
                </div>
            </div>
        </div>
        <div class="sosmed-icons sosmed-icons-about">
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
    <section class="sejarah-yayasan">
        <div class="sejarah-header card card-body">
            <h2 class="title">Sejarah Singkat Yayasan Al Ma'shum Mardiyah</h2>
        </div>
        <div class="sejarah-body card card-body">
            <h4 class="title">
                Berdirinya Yayasan Al Ma'shum Mardiyah Di Desa Galudra
            </h4>
            <p class="deskripsi">
                Bulan September 1997, dikala awal kali Bunda serta Bapak Loet Affandi memijakkan kaki di
                Dusun Galudra, mereka telah jatuh cinta pada dusun itu. Di mata mereka, Dusun Galudra amat
                bagus, walaupun pastinya dikala itu Dusun Galudra tercantum dusun terabaikan, hutan bambu
                dimana- mana, telepon serta listrik yang terbatas, jalur masuk yang amat kurang baik,
                berjalan di atas batu, sampai membuat ekspedisi terasa jauh. Dusun Galudra merupakan salah satu
                dusun di Kecamatan Cugenang yang mempunyai pangkal energi
                alam berbentuk hasil bumi sayur mayur yang lumayan banyak. Terdapat di lereng Gunung Besar
                dengan ketinggian± 1. 100– 1. 400 m di atas dataran laut. Situasi tanahnya amat produktif
                dengan tanah tidak sangat susah dijangkau, dimana jalur yang mengarah area Galudra merupakan
                jalur nasional yang mengaitkan Bunda Kota Jakarta mengarah Bandung serta terlatak cuma± 3KM
                dari jalur nadi pokok itu. Dusun Galudra sesungguhnya amat potensial buat dibesarkan. Masyarakat
                Dusun Galudra biasanya orang tani serta amat agamis dangan kerangka balik agama
                Islam. Dalam kehidupan tiap harinya Dusun Galudra kurang termotivasi buat lebih meningktkan
                bagian hidupnya. Biasanya warga sudah merasa lumayan dengan terpenuhinya keinginan pakaian
                pangan serta kediaman tiap hari.
            </p>
            <p class="deskripsi">
                Dalam memasak Pembelajaran, Alat ataupun Infrastruktur Pembelajaran yang dipunyai Dusun
                Galudra serta sekelilingnya terbatas kurang ataupun apalagi tidak memenuhi tahapan
                pembelajaran, yang cuma hingga tingkatan Sekolah Dasar ataupun Madrasah Ibtidaiyah, sekolah
                buntut yang terdapat jaraknya jauh dari Dusun Galudra. Dengan cara sebentar bisa
                diperkirakan kanak- kanak alumnus Sekolah Dasar ataupun Madrasah Ibtidaiyah banyak yang
                tidak meneruskan sekolahnya, mereka cuma menolong orang tuanya di ladang ataupun menganggur.
                Beberapa kanak-kanak itu amat suka bila memandang Bunda serta Bapak Loet Affandi tiba ke
                ladang, mereka berlari menyongsong kedatangannya, mereka menolong apa saja, memacul,,
                mengoyos, serta turut panen, mereka mengharap balasan tidak seberapa dari hasil kegiatan
                mereka. Sesuatu kala Bunda bawa novel narasi buat mereka baca, sehabis berakhir membacanya,
                mereka tidak bisa menggambarkan kembali. Bunda serta Bapak dapati pula di dusun itu dikala
                itu kanak- kanak wanita umur 15 tahun telah jadi janda. Nyatanya mereka menikah damai umur
                amat belia± 12 tahun. Pernikahan, mereka kira pemecahan dari permasalahan ekonomi yang
                mereka hadapi, sementara itu sesungguhnya menaikkan jauh kaitan kekurangan. Kedua perihal
                itu di atas membuat kalian prihatin serta pilu, jarak cuma± 100 Kilometer dari Jakarta,
                sedang terdapat anak yang tidak berpelajaran serta berbaur belia. Cerminan miskin jadi bebal, bebal
                jadi miskin yang terus menjadi jauh nyata di depan mata.
                Kaitan ini wajib dipupus ialah dengan pembelajaran. Semenjak dikala itu, Bunda serta Bapak
                mulai menolong membenarkan degung SD Kawan kerja Abdi yang lokasinya berdampingan dengan
                ladang, kemudian membuat rumah biro gurunya supaya penataran bisa berjalan dengan bagus.
                Setelah itu mencuat hasrat simpel buat membuat SMP 3 lokal saja, serta dikisahkan pada Umay,
                guru ngaji sekalian anak asuhnya yang telah mempunyai Pesantren di Jampangkulon Sukabumi. Terlebih
                kala Bunda serta Bapak mendatangi ajakan peresmian Masji Darul‘ Kebaikan di
                pesantren itu, menaikkan agama kalau pembelajaran merupakan pemecahan terbaik untuk
                memutuskan mata kaitan kebegoan serta kekurangan di atas, serasa berbicara” Bunda heran
                serta cemburu, Pa Umay yang sedang belia telah mempertimbangkan pemeluk serta telah
                berkreasi, Bunda pingin semacam Pak Umay”. Sehabis beranggar pikiran serta melaksanakan
                survei ke posisi, hingga persisnya pada bertepatan pada 7 Desember 1998, dibuat Yayasan Al-
                Ma’ shum Mardiyah dengan notaris Saymsul Akbar.
            </p>
            <p class="deskripsi">
                Dengan penuh tanggungjawab dan berserah diri pada Allah, Pak Umay mulai melaksanakan
                penjejakan sekalian pendekatan pada warga dekat pada kegiatan shalat Jum’ at di sebagian
                langgar serta puncaknya pada kegiatan buka puasa bersama di Villa kepunyaan bunda serta
                bapak itu. Hasil survei simpel dikenal kalau dari 7 SDN serta 1 MI di area Kecamatan Cugenang,
                Cianjur yang jumlah pada umumnya anak didik kategori enamnya 30 anak, yang meneruskan ke SMP pada
                umumnya cuma 3 orang serta 27 orangnya lagi mencukupkan pembelajaran hingga dengan tingkatan
                SD. Kala dicari pangkal permasalahannya, dikenal:
            </p>
            <ol class="deskripsi">
                <li>
                    SMP yang sangat dekat terdapatnya di Cipanas, dari desa Haregem, Nyalindung, Galudra
                    wajib naik ojek yang ongkosnya PP Rp. 4. 000,-/ hari, sesuatu jumlah yang lumayan besar
                    untuk mayoritas mereka pada durasi itu( Tahun 1999).
                </li>
                <li>
                    Pemahaman warga mengenai urgensinya pembelajaran putra- putri mereka bagaikan pemodalan
                    dunia- akhirat sedang amat kecil.
                </li>
                <li>
                    Kanak-kanak umur sekolah dasar serta menengah telah dilibatkan dalam profesi orang
                    tuanya bagaikan pegawai bercocok tanam, serta untuk anak wanita lekas dinikahkan.
                </li>
            </ol>
            <p class="deskripsi">
                Hasil pendekatan dengan warga di atas, terjaringlah 66 anak didik baru bagaikan anak didik
                angkatan awal SMP Terstruktur Al- Ma’ shum Mardiyah Tahun Pembelajaran 1999/ 2000 yang baru
                dibuat dengan bayaran free. Sekolah ini memakai sistem boarding school dengan nama Pesantren
                Terpadu Al-Ma’shum Mardiyah.
            </p>
        </div>
    </section>
    <section class="row">
        <section class="col-sm-6 profil-yayasan">
            <div class="profil-header card card-body">
                <h2 class="title">Profil Lengkap</h2>
            </div>
            <div class="profil-body card card-body">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/wHI7WsZ9F8Y?si=KuZvdhXcqmTplpio"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
        </section>
        <section class="col-sm-6 unggulan">
            <div class="unggulan-body card card-body">
                <h2 class="title">Keunggulan Pendidikan</h2>
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                Pondok Pesantren Al Ma'shum Mardiyah
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <ol class="deskripsi">
                                    <li>
                                        Kurikulum kepesantrenan dengan keunggulan Tahfimul Qur'an (TQ) serta
                                        pembelajaran
                                        Nahwu Sharaf dengan metode Al-Miftah Lil Ulum.
                                    </li>
                                    <li>
                                        Pembentukan karakter Santri :
                                        <ul>
                                            <li>
                                                Kuat 'aqidah (iman mantap dan tauhidnya bersiih dari syirik).
                                            </li>
                                            <li>
                                                Ta'at syari'ah ibadah (shalat berjama'ah di awal waktu, menjaga
                                                sholat
                                                sunnah rowatib, tahajud dan witir, puasa sunnah senin-kamis, dan
                                                tiada
                                                hari
                                                tanpa membaca al-qur'an).
                                            </li>
                                            <li>
                                                Ta'at syari'ah sosial (gemar bersedekah/berinfaq).
                                            </li>
                                            <li>
                                                Mulia akhlaq (ikhlas, tendah hati dan jujur).
                                            </li>
                                            <li>
                                                Unggul dalam pengetahuan dan teknologi.
                                            </li>
                                        </ul>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                SMP Terpadu Al Ma'shum Mardiyah
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <ol class="deskripsi">
                                    <li>
                                        Pembelajaran jenjang Sekolah Menengah Pertama (SMP) berdasarkan Dinas
                                        Kependidikan
                                        Nasional yang dipadukan dengan pendidikaan kepesantrenan.
                                    </li>
                                    <li>
                                        Berbasis Kurikulum Merdeka dengan metode yang mudah dipahami oleh peserta
                                        didik.
                                    </li>
                                    <li>
                                        Kurikulum kepesantrenan terpadu dengan keunggulan Tafhimul Qur'an (TQ) dan
                                        pembelajaran Nahwu sharaf ddengan metode Al-Miftah Lil Ulum.
                                    </li>
                                    <li>
                                        Fasilitas gedung pendidikan yang memadai serta laboratorium pendidikan yang
                                        menunjang seperti laboratorium komputer, laboratorium kimia, fisika dan
                                        biologi
                                        serta laboratorium musik.
                                    </li>
                                    <li>
                                        Ekstrakurikuler, peserta didik mendapatkan kemampuan tambahan dalam berbagai
                                        bidang
                                        olah raga seperti futsal, basket ball, dan voli serta bidang keorganisasian
                                        pramuka
                                        dan bidang kesenian Hadroh.
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                SMA Terpadu Al Ma'shum Mardiyah
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <ol class="deskripsi">
                                    <li>
                                        Pembelajaran jenjang Sekolah Menengah Atas (SMA) berdasarkan Dinas
                                        Kependidikan Nasional yang dipadukan dengan pendidikaan kepesantrenan.
                                    </li>
                                    <li>
                                        Berbasis Kurikulum Merdeka dengan metode yang mudah difahami oleh peserta
                                        didik.
                                    </li>
                                    <li>
                                        Kurikulum kepesantrenan terpadu dengan keunggulan Tafhimul Qur'an (TQ) dan
                                        pembelajaran Nahwu sharaf dengan metode Al-Miftah Lil Ulum.
                                    </li>
                                    <li>
                                        Fasilitas gedung pendidikan yang memadai serta laboratorium pendidikan yang
                                        menunjang seperti laboratorium komputer, laboratorium kimia, fisika dan
                                        biologi serta laboratorium musik.
                                    </li>
                                    <li>
                                        Ekstrakurikuler, peserta didik mendapatkan kemampuan tambahan dalam berbagai
                                        bidang olah raga seperti futsal, basket ball, dan voli, bidang
                                        keorganisasian pramuka, bidang kesenian Hadroh dan Multimedia.
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseFour" aria-expanded="false"
                                aria-controls="flush-collapseFour">
                                SMP Al Ma'shum Mardiyah
                            </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <ol class="deskripsi">
                                    <li>
                                        Jenjang pendidikan Sekolah Menengah Pertama (SMP) menginduk kepada
                                        Kemendikbudristek.
                                    </li>
                                    <li>
                                        Mengimplementasikan Kurikulum Merdeka dengan tambahan pelajaran muatan lokal
                                        kepesantrenan Fikih Sunnah, Tafhim Al Qur'an, Tahfidz dan Ta'lim Al
                                        muta'alim. Serta muatan ekstrakurikuler Pramuka, Teknologi Gigital, English
                                        Club, Jurnalistik, Tilawah, Kitab kuning dan olah raga.
                                    </li>
                                    <li>
                                        Pembelajaran dilaksanakan 6 hari (Senin s.d. Sabtu) dengan muatan 44 jam
                                        pelajaran per Minggu.
                                    </li>
                                    <li>
                                        Fasilitas pendidikan meliputi ruang kelas, kantor, guru, Lab. IPA, ruang
                                        multimedia, ruang UKS, perpustakaan dan ruang ekstrakurikuler.
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseFive" aria-expanded="false"
                                aria-controls="flush-collapseFive">
                                SMK Al Ma'shum Mardiyah
                            </button>
                        </h2>
                        <div id="flush-collapseFive" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <ol class="deskripsi">
                                    <li>
                                        Implementasi Kurikulum Merdeka dengan muatan lokal: Tafhimul Qur’an, Syariah
                                        Ibadah, dan Ta’lim Muta’lim.
                                    </li>
                                    <li>
                                        Ekstrakurikuler: Pramuka, Podcast, Volly Ball, Bahasa Inggris, Bahasa
                                        Jepang, dan Kelas Sastra.
                                    </li>
                                    <li>
                                        Penyerapan lulusan keluar negeri (Jepang, Inggris, Malaysia) yang terlatih.
                                    </li>
                                    <li>
                                        Kemandirian siswa/siswi dalam berwirausaha sebagai bagian dari program SPW.
                                    </li>
                                    <li>
                                        Sekolah Berwawasan Lingkungan.
                                    </li>
                                    <li>
                                        Kerjasama dengan DU/DI yang linier dengan program jurusan sebagai wujud
                                        kemitraan dan dunia bisnis.
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <section class="anggota">
        <div class="anggota-header">
            <h2 class="title">Anggota Kepala Unit Al Ma'shum Mardiyah</h2>
        </div>
        <div class="anggota-body">
            <div class="row">
                <div class="col-sm-2 col-card mb-3 mb-sm-0">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Takhassus Tahfidz</h5>
                            <img src="{{ asset('assets/img/profile.png') }}" class="img-card" alt="">
                            <p class="card-text">H. Taufik Hidayatullah S.Pdi</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2 col-card mb-3 mb-sm-0">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">SMP Terpadu</h5>
                            <img src="{{ asset('assets/img/profile.png') }}" class="img-card" alt="">
                            <p class="card-text">H. Endi Rustandi M.Pd</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2 col-card mb-3 mb-sm-0">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">SMA Terpadu</h5>
                            <img src="{{ asset('assets/img/profile.png') }}" class="img-card" alt="">
                            <p class="card-text">Nana Mulyana S.Pd</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2 col-card mb-3 mb-sm-0">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">SMP Al-Ma'shum</h5>
                            <img src="{{ asset('assets/img/profile.png') }}" class="img-card" alt="">
                            <p class="card-text">H. Dadang Aliyudin S.Si</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2 col-card mb-3 mb-sm-0">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">SMK Al-Ma'shum</h5>
                            <img src="{{ asset('assets/img/profile.png') }}" class="img-card" alt="">
                            <p class="card-text">Fahri Irwan S.Si</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2 col-card mb-3 mb-sm-0">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Pesantren Terpadu</h5>
                            <img src="{{ asset('assets/img/profile.png') }}" class="img-card" alt="">
                            <p class="card-text">Asep Rudiansyah Lc., M.Ag</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
