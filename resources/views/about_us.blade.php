@extends('layout.app')

@section('title', 'Warom Indonesia - About Us')

@section('content')
{{-- Kosong dulu sesuai request --}}
<style>
    .page-title-about-us {
        background-image: url("/template_sep/assets/img/warom-images/santi_ws.png");
        background-size: cover;
        background-position: top 15% center !important;
        min-height: 70vh;
        display: flex;
        align-items: center;
    }
</style>

<main class="main">
    <!-- Page Title -->
    <div class="page-title dark-background page-title-about-us">
        <div class="container position-relative">
            <h1>About Us</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="current">About Us</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- About Section -->
    <section id="about" class="about section">
        <div class="container">
            <div class="row position-relative">
                <div class="col-lg-7 about-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{ asset('template_sep/assets/img/hero-carousel/plant-oil2.webp') }}">
                </div>

                <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
                    <h2 class="inner-title">PT. Sahabat Energi Persada</h2>
                    <div class="our-story">
                        <h4>Est 2017</h4>
                        <h3>Our Story</h3>
                        <p>Sahabat Energi Persada (SEP) was established in 2017, as a member of Sahabat Nusantra Teknologi Inovasi (SANTI) Group.</p>
                        <p>Driven by innovation and excellence, we’re continuously enhancing our products and services—on a mission to lead Indonesia’s Electrical and Instrumentation System industry.</p>

                        <h4><b>Our Solutions</b></h4>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> <span>Electrical and instrument supply and service</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Panel and system design and fabrication</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Motor and compressor overhaul and service</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Electrical and Instrument Integrator</span></li>
                        </ul>

                        <p>With experienced staffs, adequate facilities, and reputable principals, we believe that we are now going to be a leader of Electrical, and Instrument System in Indonesia.</p>

                        <div class="watch-video d-flex align-items-center position-relative">
                            <i class="bi bi-play-circle"></i>
                            <a href="https://www.youtube.com/watch?v=wNWs2r56jl4&t=6s" class="glightbox stretched-link">Watch Video</a>
                        </div>

                        <div class="watch-video d-flex align-items-center position-relative">
                            <i class="bi bi-arrow-right-circle-fill"></i>
                            <a href="https://sep-santi.co.id/" target="_blank">Visit Our Main Website</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /About Section -->

    <section id="alt-services" class="alt-services section">
    <div class="container">
        <div class="row justify-content-around gy-4">
            <!-- Image Section -->
            <div class="features-image col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <img src="{{ asset('template_sep/assets/img/hero-carousel/refinery-adalah.webp') }}" alt="">
            </div>

            <!-- Text and Icon Boxes Section -->
            <div class="col-lg-5 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                <h3>Warom</h3>
                <p><b>Warom Technology Incorporated Company</b>（The former name is WAROM Group Co., Ltd.）IPO Company , 
                    founded in 1987. It is a diversified enterprise with explosion-proof industry as its leader, 
                    integrating product research anddevelopment, manufacturing and sales. Located in Jiading District, Shanghai, 
                    the registered capital is more than 300 million yuan.</p>

                <p>Warom Explosion-proof is specialized in Factory Explosion-proof,Nuclear Power Lighting,
                    Marine Engineering,National Defense, Safety and Fire Protection,  Monitoring and Communication,  
                    Waterproof and Dustproof and other products, the SCS Safety Software Intelligent Control system has been launched simultaneously, 
                    and the key technical indicators of related products have reached the international advanced and domestic leading technical level.</p>
            </div>
        </div>
    </div>
</section><!-- /Alt Services Section -->

</main>
@endsection
