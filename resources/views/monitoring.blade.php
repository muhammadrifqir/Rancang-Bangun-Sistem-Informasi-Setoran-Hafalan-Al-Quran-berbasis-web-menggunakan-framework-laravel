@extends('layouts.landing.app')
@section('header')
    <header id="header" class="header-monitoring">
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
                                <a class="nav-link" href="{{ route('beranda') }}">
                                    Beranda
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ route('monitoring') }}">
                                    Monitoring
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('tentang-kami') }}">
                                    Tentang Kami
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('info') }}">
                                    Info
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="hero">
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
                <div class="hero-btn">
                    <a class="btn btn-transparant" href="#" role="button">
                        Lihat Perkembangan Santri
                    </a>
                    <a class="btn btn-transparant" href="{{ route('filament.admin.auth.login') }}" role="button">
                        Login atau Daftar
                    </a>
                </div>
            </div>
        </div>
        <div class="sosmed-icons sosmed-icons-monitoring">
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
    <section class="humas">
        <div class="humas-header">
            <h3 class="title">8 Jalur Hubungan Manusia</h3>
            <p class="deskripsi">
                Dalam islam terdapat 8 (delapan) jalur hubungan yang patut dan harus kita laksanakan sebagai
                perantara kita bahagia dunia akhirat, baik hubungan kita secara vertikal serta horizontal, di
                antaranya; Beribadah kepada Allah SWT., Taat kepada Rasulullah saw, Berbakti kepada Ibu dan Bapak,
                Memuliakan guru dan Ulama, menghormati orang yang lebih tua, menghargai sesama, menyayangi yang
                lebih muda, memelihara lingkungan hidup.
            </p>
        </div>
        <div class="humas-body">
            <div class="row">
                <div class="col-sm-3 col-card mb-3 mb-sm-0">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Beribadah kepada Allah</h5>
                            <p class="card-text">
                                Al-qur'an memerintahkan kepada kita agar kita hanya menyembah dan mentauhidkan
                                asma-Nya. Allah SWT yang telah menciptakan seluruh makhluknya dengan tujuan dan
                                amanah beribadah kepada-Nya. dalam surat (adz-dzariyat (51) : 56 ) tidak ada yang
                                pantas untuk di sembah kecuali hanyalah Allah yang memiliki asma Al-khaliq, tidak
                                ada sekutu baginya. oleh karenanya Allah berpesan kepada kita semua, untuk tidak
                                beribadah dan memohon pertolongan kepada selain Allah (syirik).
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-card mb-3 mb-sm-0">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Taat kepada Rosul Allah</h5>
                            <p class="card-text">
                                Allah mengutus seorang rasull di antara umat umatnya untuk menyapaikan ajaran agama
                                sehingga barang siapa yang menyeru kepada kebenaran dan beriman kepada hari Akhir
                                hendaklah ia mentaati Allah (al-qur'an) serta mentaati rasul-Nya (sunnah-
                                an-nabawiyah) (Qs. 4 (an-nisaa') : 59). lalu bagimana cara mentaati Rasulullah saw.
                                kita selaku umat islam yang mengaku dirinya sebagi muslim, yaitu dengan melakukan
                                perintah yang berada dalam hadits-hadits nabi. baik secara fi'li, qauli, maupun
                                takhriri, atau sebuah cita-cita beliau.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-card mb-3 mb-sm-0">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Berbakti kepada Ibu Bapak</h5>
                            <p class="card-text">
                                Kita selaku umat muslim siapa yang tidak kenal dengan kebaktiannya uwais al-qarni
                                kepada ibunya dikala bapaknya telah wafat dan ibunya sudah tua renta. kebaktiannya
                                di mulai ia sejak kecil dan dikala sudah dewasa dan ibunya sudah tua renta, dikala
                                ibunya mau makan, ia harus memasak, dikala ibunya mau mandi beliau memandikannya,
                                dikala ibunya mau buang hajat beliau yang membersihkan dan mensucikan dari hadas.
                                sampai samapi pada suatu ketika musim haji ibunya di gendong dengan melakukan
                                perjalanan yang sangat jauh bahkan di tempuh lebih dalam satu bulan.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-card mb-3 mb-sm-0">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Memuliakan <br> Guru</h5>
                            <p class="card-text">
                                Dalam hadits, rasulullah bersabda 'Ulama warasatul anbiya , kita ingat ketika kita
                                sekolah dasar, kita sering mendengar guru tanpa tanda jasa. memang jasa guru tidak
                                terlihat akan tetapi sangat membekas dalam kehidupan kita. Allah mengingatkan kita
                                dala al-qur'an surat an-nahl ayat (16) :78 ; bahwa manusia dilahirkan dalam keadaan
                                tidak tau apa-apa. kita kenal sahabat Rasulullah yang paling cerdas Ali bin abi
                                thalib berkata barang siapa yang mengajarkan satu huruf kepada ku maka saya rela
                                menjadi budak baginya
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-card mb-3 mb-sm-0">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Menghormati yang Lebih Tua</h5>
                            <p class="card-text">
                                Degredasi moral saat ini sangatlah marak dilakukan oleh kaum muda, salah satu
                                diantaranya adalah tidak lagi saling menghormati yang lebih muda kepada yang lebih
                                tua, menghargai sesama malah menjadikanya permusuhan dan perdebatan karena
                                perbeda.an pendapat menjadikan perpecahan antar pribadi, kelompok bahkan komunitas
                                tertentu. orang-orang yang lebih tua diantara mereka menyiksa dan menjadikan babu
                                pembantu bagi kaum mudanya. oleh karenanya kita harus memperbaiki sikap dan sifat
                                kita untuk berinteraksi, menuju lebih baik.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-card mb-3 mb-sm-0">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Menghargai Sesama</h5>
                            <p class="card-text">
                                Degredasi moral saat ini sangatlah marak dilakukan oleh kaum muda, salah satu
                                diantaranya adalah tidak lagi saling menghormati yang lebih muda kepada yang lebih
                                tua, menghargai sesama malah menjadikanya permusuhan dan perdebatan karena
                                perbeda.an pendapat menjadikan perpecahan antar pribadi, kelompok bahkan komunitas
                                tertentu. orang-orang yang lebih tua diantara mereka menyiksa dan menjadikan babu
                                pembantu bagi kaum mudanya. oleh karenanya kita harus memperbaiki sikap dan sifat
                                kita untuk berinteraksi, menuju lebih baik.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-card mb-3 mb-sm-0">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Menyayangi yang lebih muda</h5>
                            <p class="card-text">
                                Degredasi moral saat ini sangatlah marak dilakukan oleh kaum muda, salah satu
                                diantaranya adalah tidak lagi saling menghormati yang lebih muda kepada yang lebih
                                tua, menghargai sesama malah menjadikanya permusuhan dan perdebatan karena
                                perbeda.an pendapat menjadikan perpecahan antar pribadi, kelompok bahkan komunitas
                                tertentu. orang-orang yang lebih tua diantara mereka menyiksa dan menjadikan babu
                                pembantu bagi kaum mudanya. oleh karenanya kita harus memperbaiki sikap dan sifat
                                kita untuk berinteraksi, menuju lebih baik.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-card mb-3 mb-sm-0">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Memelihara Lingkungan</h5>
                            <p class="card-text">
                                Banyak musibah yang menimpa negeri kita, mulai dari gempa, air pasang, tsunami,
                                angin puting beliung, seningga membuat kerusakan-kerusan. tiada lain dan tiada bukan
                                di balik setiap musibah tersebut adalah perbuatan manusia itu sendiri, sehingga kita
                                terkena akibatnya sendiri. jika kita ingin menerima balasan yang baik maka kita
                                harus berbuat baik, (QS. Al-Baqarah 205). Terjemahnya: Dan janganlah kamu membuat
                                kerusakan di muka bumi, sesudah (Allah) memperbaikinya dan Berdoalah kepada-Nya
                                dengan rasa takut (tidak akan diterima) dan harapan (akan dikabulkan).
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="wisuda">
        <div class="wisuda-header">
            <h3 class="title">Wisuda Tahfidz</h3>
            <p class="deskripsi">
                Wisuda tahfidz Quran merupakan puncak dari proses pembelajaran alquran yang dimulai dari kegiatan
                ziyadah, murojaah setiap harinya. Sebelum diputuskan sebagai peserta wisuda setiap murid harus
                melewati beberapa tahapan, salah satunya lulus dalam ujian Tasmik dihadapan tim penguji tasmi' yaitu
                dewan Asatidz.
            </p>
        </div>
        <div class="wisuda-body">
            <img src="{{ asset('assets/img/wisuda/wisuda1.JPG') }}" class="mx-auto d-block" alt="wisuda">
            <div class="alas-image"></div>
        </div>
    </section>
    <section class="gallery">
        <div class="gallery-header">
            <h3 class="title">Lomba Hari Nasional & Hari Raya Islami</h3>
            <p class="deskripsi">
                Pesantren Takhassus Tahfidz Al Ma'shum Mardiyah selalu mengadakan kegiatan dalam menyambut hari-hari
                nasional dan hari raya islami dan memfasilitasi santri dalam lomba-lomba beserta ajangnya. Dengan
                adanya kegiatan tersebut santri bisa mengekspresikan diri mereka dalam banyak kegiatan yang akan
                dijalani setelah lulus.
            </p>
            <p class="desc-plus">
                Juga Akan Mendapat Sertifikat Atas Prestasi-Prestasinya.
            </p>
        </div>
        <div class="gallery-body">
            <div class="row">
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <img src="{{ asset('assets/img/lomba/lomba1.jpg') }}" class="img-thumbnail" alt="lomba">
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <img src="{{ asset('assets/img/lomba/lomba2.jpg') }}" class="img-thumbnail" alt="lomba">
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <img src="{{ asset('assets/img/lomba/lomba3.jpg') }}" class="img-thumbnail" alt="lomba">
                </div>
            </div>
        </div>
    </section>
    <section class="gallery">
        <div class="gallery-header">
            <h3 class="title">Hadrah dan Shalawat</h3>
            <p class="deskripsi">
                Hadroh adalah merupakan kesenian rebana yang mengakar pada kebudayaan Islam yang sering disebut
                sebagai kegiatan syiar lewat syair. Di Indonesia Hadroh identik sebagai kesenian milik pesantren
                khususnya di tanah Jawa. Oleh karena Pesantren Takhassus Tahfidz Al Ma'shum Mardiyah memfasilitasi
                santri dengan diadakannya ekstrakurikuler Hadrah dan Shalawat.
            </p>
        </div>
        <div class="gallery-body">
            <div class="row">
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <img src="{{ asset('assets/img/hadrah/hadrah1.jpg') }}" class="img-thumbnail" alt="hadrah">
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <img src="{{ asset('assets/img/hadrah/hadrah2.jpg') }}" class="img-thumbnail" alt="hadrah">
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <img src="{{ asset('assets/img/hadrah/hadrah3.jpg') }}" class="img-thumbnail" alt="hadrah">
                </div>
            </div>
        </div>
    </section>
    <section class="base">
        <img src="{{ asset('assets/img/blue.png') }}" class="img-base" alt="base">
    </section>
    <section class="hadist">
        <div class="hadist-header">
            <h3 class="title">
                <div class="rtl">
                    ... خَيْرُكُمْ مَنْ تَعَلَّمَ الْقُرْآنَ وَعَلَّمَهُ ...
                </div>
            </h3>
            <p class="deskripsi">
                <span class="double-quote">&rdquo;</span>... Orang yang paling baik di antara kalian adalah seorang
                yang belajar Al-Qur'an dan mengajarkannya. ...<span class="double-quote">&ldquo;</span>
            </p>
            <p class="desc-plus">
                (H.R. Bukhari)
            </p>
        </div>
    </section>
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
