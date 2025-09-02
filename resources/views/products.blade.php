@extends('layout.app')

@section('title', 'Warom Indonesia - About Us')

@section('content')
{{-- Kosong dulu sesuai request --}}
<style>
    .page-title-about-us {
        background-image: url("/template_sep/assets/img/warom-images/back-warom.png");
        background-size: cover;
        background-position: top 25% center !important;
        min-height: 50vh;
        display: flex;
        align-items: center;
    }
</style>

<main class="main">
    <!-- Page Title -->
    <div class="page-title dark-background page-title-about-us">
        <div class="container position-relative">
            <h1>Products</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="current">Products</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- Testimonials Section -->
<section id="testimonials" class="testimonials section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Products</h2>
        <p>Our Product Page is under construction</p>
        <p>Please download our Newest Products Cataloge</p>
        </br>
        <a href="{{ asset('template_sep/assets/file_uploads/GeneralCatalogue_compressed.pdf') }}" 
            download="GeneralCatalogue_compressed.pdf">
            <button type="button" class="btn btn-outline-success">
                <i class="bi bi-download"></i> Download Catalogue
            </button>
        </a>

        </br></br></br>
        

        <embed src="{{ asset('template_sep/assets/file_uploads/GeneralCatalogue_compressed.pdf') }}" width="900px" height="2100px" />
    </div><!-- End Section Title -->

</section><!-- /Testimonials Section -->


</main>

@endsection