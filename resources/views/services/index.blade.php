<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        EnyaShoeCare - {{ $pageTitle }}
    </title>

    @vite([
    'resources/css/app.css',
    'resources/css/services.css',
    'resources/js/app.js'
    ])

</head>


<body>


    <nav>

        <div class="logo">
            Enya<span>ShoeCare</span>
        </div>


        <ul>

            <li>
                <a href="{{ route('home') }}">
                    Home
                </a>
            </li>


            <li>
                <a href="{{ route('services.index') }}">
                    Layanan
                </a>
            </li>


            <li>
                <a href="{{ route('about') }}">
                    Tentang Kami
                </a>
            </li>


            <li>
                <a href="{{ route('contact') }}">
                    Kontak
                </a>
            </li>


        </ul>

    </nav>



    @if ($page === 'home')


    <section class="hero-home">

        <div class="hero-text">
            <span class="hero-eyebrow">Premium Shoe Care</span>

            <h1>
                Sepatu Bersih,
                <br>
                <span>Tampil Lebih Percaya Diri</span>
            </h1>

            <p>
                EnyaShoeCare menyediakan layanan perawatan sepatu profesional
                mulai dari cleaning, treatment hingga repaint dengan hasil terbaik.
            </p>

            <div class="hero-actions">
                <a href="{{ route('services.index') }}" class="btn">
                    Lihat Layanan
                </a>
                <a href="{{ route('contact') }}" class="hero-secondary-link">
                    Konsultasi Sekarang <span aria-hidden="true">↗</span>
                </a>
            </div>

            <div class="hero-trust">
                <span>Teliti di setiap detail</span>
                <span>Perawatan sesuai material</span>
                <span>Layanan ramah dan profesional</span>
            </div>
        </div>

        <div class="hero-image">
            <img
                src="{{ asset('images/services/deep-clean.jpg') }}"
                alt="Sepatu untuk ilustrasi layanan perawatan EnyaShoeCare"
                fetchpriority="high"
                decoding="async">
            <div class="hero-image-caption">
                <span>ENYASHOECARE</span>
                <strong>Perawatan sepatu dengan perhatian pada detail.</strong>
            </div>
            <div class="hero-image-mark" aria-hidden="true">CARE<br>WITH<br>DETAIL</div>
        </div>

    </section>

    <section class="home-gallery">
        <div class="home-gallery-heading">
            <span class="hero-eyebrow">Perawatan pilihan</span>
            <h2>Rawat setiap pasang sepatu dengan tepat.</h2>
            <p>Kenali beberapa layanan EnyaShoeCare untuk menjaga sepatu tetap bersih dan nyaman digunakan.</p>
        </div>

        <div class="home-gallery-grid">
            <article class="home-gallery-card home-gallery-card-featured">
                <img src="{{ asset('images/services/deep-clean.jpg') }}" alt="Ilustrasi layanan deep clean sepatu" loading="lazy" decoding="async">
                <div class="home-gallery-caption">
                    <span>01 / CLEANING</span>
                    <h3>Deep Clean</h3>
                    <p>Pembersihan menyeluruh dengan perhatian pada material sepatu.</p>
                </div>
            </article>

            <article class="home-gallery-card">
                <img src="{{ asset('images/services/repaint.jpg') }}" alt="Ilustrasi layanan repaint sepatu" loading="lazy" decoding="async">
                <div class="home-gallery-caption">
                    <span>02 / RESTORE</span>
                    <h3>Repaint</h3>
                    <p>Membantu menyegarkan kembali tampilan warna sepatu.</p>
                </div>
            </article>

            <article class="home-gallery-card">
                <img src="{{ asset('images/services/leather-care.jpg') }}" alt="Ilustrasi perawatan material kulit sepatu" loading="lazy" decoding="async">
                <div class="home-gallery-caption">
                    <span>03 / DETAIL CARE</span>
                    <h3>Material Care</h3>
                    <p>Perawatan yang disesuaikan dengan karakter bahan sepatu.</p>
                </div>
            </article>
        </div>

        <a href="{{ route('services.index') }}" class="home-gallery-link">
            Lihat semua layanan <span aria-hidden="true">→</span>
        </a>
    </section>



    @elseif ($page === 'services')


    <div class="container">


        <div class="section-title">

            <h2>
                Daftar Layanan
            </h2>


            <p>
                Pilih layanan sesuai kebutuhan sepatu kamu.
            </p>


        </div>



        <div class="services">


            @foreach ($services as $service)


            <div class="card">


                <img
                    src="{{ asset('images/'.$service->image) }}"
                    alt="{{ $service->name }}">



                <div class="card-body">


                    <h3>
                        {{ $service->name }}
                    </h3>


                    <span class="category">
                        {{ $service->category }}
                    </span>


                    <p>
                        {{ $service->description }}
                    </p>


                    <div class="price">

                        Rp {{ number_format($service->price,0,',','.') }}

                    </div>


                    <a href="{{ route('services.show',$service->id) }}"
                        class="btn">

                        Detail

                    </a>


                </div>


            </div>


            @endforeach


        </div>


    </div>

    @elseif ($page === 'about')

    <main class="info-page">
        <section class="inner-page-hero">
            <div class="inner-page-copy">
                <span class="hero-eyebrow">Cerita kami</span>
                <h1>Tentang EnyaShoeCare</h1>
                <p>
                    Kami membantu merawat sepatu agar tetap bersih, nyaman, dan siap menemani aktivitas Anda.
                    Setiap pasang ditangani dengan memperhatikan jenis bahan dan kebutuhan perawatannya.
                </p>
                <a href="{{ route('services.index') }}" class="inner-primary-button">
                    Kenali layanan kami <span aria-hidden="true">→</span>
                </a>
            </div>

            <div class="inner-page-image">
                <img src="{{ asset('images/services/leather-care.jpg') }}" alt="Sepatu kulit yang dirawat dengan teliti" loading="eager" fetchpriority="high" decoding="async">
                <div class="inner-image-note">
                    <span>ENYASHOECARE</span>
                    <strong>Dirawat dengan perhatian pada detail.</strong>
                </div>
            </div>
        </section>

        <section class="about-story">
            <div class="about-story-image">
                <img src="{{ asset('images/services/deep-clean.jpg') }}" alt="Sepatu sedang melalui proses pembersihan" loading="lazy" decoding="async">
            </div>
            <div class="about-story-copy">
                <span class="page-kicker">Lebih dari sekadar bersih</span>
                <h2>Perawatan yang tepat dimulai dengan memahami kebutuhan sepatu.</h2>
                <p>
                    Dari cleaning hingga treatment dan repaint, EnyaShoeCare menyediakan pilihan perawatan
                    untuk berbagai kebutuhan. Kami ingin membantu Anda menjaga tampilan sepatu tanpa
                    mengabaikan karakter materialnya.
                </p>
                <p>
                    Sebelum memilih layanan, Anda dapat berkonsultasi mengenai kondisi sepatu dan perawatan
                    yang sesuai.
                </p>
            </div>
        </section>

        <section class="about-values">
            <div class="about-values-heading">
                <span class="page-kicker">Cara kami merawat</span>
                <h2>Perhatian pada setiap detail.</h2>
            </div>
            <div class="about-value-grid">
                <article class="about-value-card">
                    <span>01</span>
                    <h3>Kenali material</h3>
                    <p>Jenis bahan dan kondisi sepatu menjadi pertimbangan dalam memilih perawatan.</p>
                </article>
                <article class="about-value-card">
                    <span>02</span>
                    <h3>Proses dengan teliti</h3>
                    <p>Setiap layanan dikerjakan dengan memperhatikan kebersihan dan detail sepatu.</p>
                </article>
                <article class="about-value-card">
                    <span>03</span>
                    <h3>Konsultasi yang jelas</h3>
                    <p>Anda dapat bertanya lebih dulu agar layanan yang dipilih sesuai kebutuhan.</p>
                </article>
            </div>
        </section>
    </main>



    @elseif ($page === 'contact')

    <main class="info-page">
        <section class="inner-page-hero contact-page-hero">
            <div class="inner-page-copy">
                <span class="hero-eyebrow">Kontak EnyaShoeCare</span>
                <h1>Mari rawat sepatu favorit Anda.</h1>
                <p>
                    Hubungi kami untuk bertanya tentang layanan, kebutuhan perawatan, atau kondisi sepatu Anda.
                    Kami siap membantu sebelum Anda memilih treatment.
                </p>
                <a href="#contact-info" class="inner-primary-button">
                    Lihat informasi kontak <span aria-hidden="true">↓</span>
                </a>
            </div>

            <div class="inner-page-image">
                <img src="{{ asset('images/services/fast-clean.jpg') }}" alt="Sepatu bersih sebagai ilustrasi layanan EnyaShoeCare" loading="eager" fetchpriority="high" decoding="async">
                <div class="inner-image-note">
                    <span>SIAP MEMBANTU</span>
                    <strong>Konsultasikan kebutuhan sepatu Anda.</strong>
                </div>
            </div>
        </section>

        <section class="contact-details" id="contact-info">
            <div class="contact-heading">
                <span class="page-kicker">Informasi kontak</span>
                <h2>Hubungi Kami</h2>
                <p>Pilih cara yang paling nyaman untuk menghubungi EnyaShoeCare.</p>
            </div>

            <div class="contact-grid">
                <article class="contact-card">
                    <span class="contact-card-index">01 / WHATSAPP</span>
                    <h3>Telepon & WhatsApp</h3>
                    <a href="tel:+6285770159694">0857 7015 9694</a>
                    <a href="https://wa.me/6285770159694" target="_blank" rel="noopener noreferrer" class="contact-action">
                        Chat via WhatsApp <span aria-hidden="true">↗</span>
                    </a>
                </article>

                <article class="contact-card">
                    <span class="contact-card-index">02 / EMAIL</span>
                    <h3>Email</h3>
                    <a href="mailto:enyashoecare@gmail.com">enyashoecare@gmail.com</a>
                    <p>Kirim pertanyaan atau konsultasi melalui email.</p>
                </article>

                <article class="contact-card">
                    <span class="contact-card-index">03 / LOKASI</span>
                    <h3>Alamat</h3>
                    <p>Jl. H. Maksum, RT.04/RW.02, Sawangan Baru, Kec. Sawangan, Kota Depok, Jawa Barat .</p>
                </article>

                <article class="contact-card">
                    <span class="contact-card-index">04 / JAM LAYANAN</span>
                    <h3>Jam Operasional</h3>
                    <p> Kami melayani perawatan sepatu setiap Senin - Sabtu,
                        pukul 09.00 - 17.00 WIB.
                        Silakan hubungi kami untuk konsultasi dan pemesanan layanan..</p>
                </article>
            </div>

            <div class="contact-service-area">
                <div>
                    <span class="page-kicker">Jangkauan layanan</span>
                    <h3>Area Layanan</h3>
                </div>
                <p>Melayani area sawangan dan sekitarnya dengan layanan
                    perawatan sepatu berkualitas serta kemudahan antar
                    jemput sepatu untuk pelanggan.</p>
            </div>
        </section>
    </main>



    @endif



    <footer>

        <p>
            © {{ date('Y') }} EnyaShoeCare
        </p>

    </footer>


</body>

</html>