@extends('layout.app')
@section('title', 'Warom Indonesia - Home')
@section('content')
{{-- Kosong dulu sesuai request --}}
<main class="main">

    <section id="hero" class="hero section dark-background">

        <div class="info d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-6 text-center">
                        <h2>Welcome to</br>Warom Indonesia</h2>
                        <p>
                            Driven by innovation and excellence, we’re continuously enhancing our products and services—on a mission to lead Indonesia’s Electrical and Instrumentation System industry.
                        </p>
                        <!-- <a href="#get-started" class="btn-get-started">Get Started</a> -->
                    </div>
                </div>
            </div>
        </div>

        <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

            <div class="carousel-item">
                <img src="{{ asset('template_sep/assets/img/hero-carousel/plant-oil2.webp') }}" alt="">
            </div>

            <div class="carousel-item active">
                <img src="{{ asset('template_sep/assets/img/hero-carousel/refinery-adalah.webp') }}" alt="">
            </div>

            <div class="carousel-item">
                <img src="{{ asset('template_sep/assets/img/hero-carousel/hero-carousel-3.jpg') }}" alt="">
            </div>

            <div class="carousel-item">
                <img src="{{ asset('template_sep/assets/img/hero-carousel/hero-carousel-4.jpg') }}" alt="">
            </div>

            <div class="carousel-item">
                <img src="{{ asset('template_sep/assets/img/hero-carousel/hero-carousel-5.jpg') }}" alt="">
            </div>

            <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>

    </section>

    <br>
    <br>
    <!-- Constructions Section -->
    <section id="constructions" class="constructions section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Warom Indonesia</h2>
            <p>Leading the Explosion-Proof Industry Since 1987</p>
        </div><!-- End Section Title -->

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg"><img src="{{ asset('template_sep/assets/img/warom-images/warom_1.jpg') }}" alt=""></div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">Oil And Gas</h4>
                                    <p>Warom delivers globally certified explosion-proof electrical solutions, helping petrochemical industries optimize operations safely, efficiently, and reliably, while maximizing productivity without compromising safety.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg"><img src="{{ asset('template_sep/assets/img/warom-images/warom_mining.jpg') }}" alt=""></div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">Mining</h4>
                                    <p>Warom provides internationally certified explosion-proof electrical equipment for the mining sector, engineered to prevent fire and explosion risks in hazardous areas, backed by an A-grade laboratory and hundreds of global certifications to ensure your operational safety and reliability.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg"><img src="{{ asset('template_sep/assets/img/warom-images/warom_offshore.jpg') }}" alt=""></div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">Offshore</h4>
                                    <p>Warom delivers high-quality corrosion-resistant explosion-proof electrical protection for offshore facilities, engineered to withstand extreme marine environments, backed by an A-grade laboratory and hundreds of global certifications to ensure your safety and optimal performance.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg"><img src="{{ asset('template_sep/assets/img/warom-images/warom_food.jpg') }}" alt=""></div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">Food</h4>
                                    <p>Warom provides explosion-proof electrical solutions with high corrosion resistance that meet the strictest hygiene standards for food processing industries, ensuring safety in areas with explosive materials, backed by an A-grade laboratory and hundreds of global certifications for reliable operations.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg"><img src="{{ asset('template_sep/assets/img/warom-images/warom_farmasi.jpg') }}" alt=""></div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">Pharmaceutical</h4>
                                    <p>Warom provides explosion-proof electrical solutions with high corrosion resistance that meet the strictest hygiene standards for food processing industries, ensuring safety in areas with explosive materials, backed by an A-grade laboratory and hundreds of global certifications for reliable operations.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg"><img src="{{ asset('template_sep/assets/img/warom-images/warom_chemical.jpg') }}" alt=""></div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">Chemical</h4>
                                    <p>Warom provides internationally certified explosion-proof electrical solutions for the chemical industry, engineered to prevent fire and explosion risks from hazardous materials, backed by an A-grade laboratory and hundreds of global certifications to ensure your safety and operational continuity.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg"><img src="{{ asset('template_sep/assets/img/warom-images/warom_other_industries.jpg') }}" alt=""></div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">Other Industries</h4>
                                    <p>As one of only two explosion-proof equipment manufacturers in the IECEx Mark Committees, Warom has become a trusted partner to many renowned petrochemical companies, earning multiple awards and global certifications that guarantee quality, safety, and reliability in every product.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->
            </div>
        </div>

    </section><!-- /Constructions Section -->
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
</main>
@endsection