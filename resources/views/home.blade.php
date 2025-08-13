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
                    <img src="{{ asset('template_sep/assets/img/hero-carousel/hero-carousel-1.jpg') }}" alt="">
                </div>

                <div class="carousel-item active">
                    <img src="{{ asset('template_sep/assets/img/hero-carousel/hero-carousel-2.jpg') }}" alt="">
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
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <h1>Welcome to the Home Page</h1>
        <p>This is the home page content.</p>
    </div>
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