@extends('layout.app')
@section('title', 'Warom Indonesia - Home')
@section('content')
{{-- Kosong dulu sesuai request --}}

<style>
.page-title-clinets {
    background-image: url("/template_sep/assets/img/clients.png");
    background-size: cover;
    background-position: top 15% center !important;
    min-height: 70vh;
    display: flex;
    align-items: center;
}
</style>
<main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background page-title-clinets">
        <div class="container position-relative">
            <h1>Clients</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="current">Clients</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- Projects Section -->
    <section id="projects" class="projects section">

        <div class="container">

            <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">
                    <div class="portfolio-content h-100 d-flex justify-content-center align-items-center">
                        <img src="{{ asset('template_sep/assets/img/clients/PGAS.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                        <h4>PT Perusahaan Gas Negara</h4>
                        <p>PT Perusahaan Gas Negara</p>
                        <a href="{{ asset('template_sep/assets/img/clients/PGAS.jpg') }}" title="PT Perusahaan Gas Negara" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">
                    <div class="portfolio-content h-100 d-flex justify-content-center align-items-center">
                        <img src="{{ asset('template_sep/assets/img/clients/pertamina_patra_niaga.png') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                        <h4>Pertamina Patra Niaga</h4>
                        <p>Pertamina Patra Niaga</p>
                        <a href="{{ asset('template_sep/assets/img/clients/pertamina_patra_niaga.png') }}" title="Pertamina Patra Niaga" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">
                    <div class="portfolio-content h-100 d-flex justify-content-center align-items-center">
                        <img src="{{ asset('template_sep/assets/img/clients/logo-kpi-warna-besar.png') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                        <h4>PT Kilang Pertamina Internasional</h4>
                        <p>PT Kilang Pertamina Internasional</p>
                        <a href="{{ asset('template_sep/assets/img/clients/logo-kpi-warna-besar.png') }}" title="PT Kilang Pertamina Internasional" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">
                    <div class="portfolio-content h-100 d-flex justify-content-center align-items-center">
                        <img src="{{ asset('template_sep/assets/img/clients/unilever.png') }}" class="img-fluid w-50" alt="">
                        <div class="portfolio-info">
                        <h4>Unilever</h4>
                        <p>Unilever</p>
                        <a href="{{ asset('template_sep/assets/img/clients/unilever.png') }}" title="Unilever" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">
                    <div class="portfolio-content h-100 d-flex justify-content-center align-items-center">
                        <img src="{{ asset('template_sep/assets/img/clients/jadestone.png') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                        <h4>Jadestone Energy</h4>
                        <p>Jadestone Energy</p>
                        <a href="{{ asset('template_sep/assets/img/clients/jadestone.png') }}" title="Jadestone Energy" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">
                    <div class="portfolio-content h-100 d-flex justify-content-center align-items-center">
                        <img src="{{ asset('template_sep/assets/img/clients/eco_oils.webp') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                        <h4>Eco Oils Energy</h4>
                        <p>Eco Oils Energy</p>
                        <a href="{{ asset('template_sep/assets/img/clients/eco_oils.webp') }}" title="Eco Oils Energy" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">
                    <div class="portfolio-content h-100 d-flex justify-content-center align-items-center">
                        <img src="{{ asset('template_sep/assets/img/clients/medco_energy.png') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                        <h4>Medco Energi</h4>
                        <p>Medco Energi</p>
                        <a href="{{ asset('template_sep/assets/img/clients/medco_energy.png') }}" title="Medco Energi" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">
                    <div class="portfolio-content h-100 d-flex justify-content-center align-items-center">
                        <img src="{{ asset('template_sep/assets/img/clients/Logo_Bio_Farma.png') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                        <h4>Biofarma</h4>
                        <p>Biofarma</p>
                        <a href="{{ asset('template_sep/assets/img/clients/Logo_Bio_Farma.png') }}" title="Biofarma" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">
                    <div class="portfolio-content h-100 d-flex justify-content-center align-items-center">
                        <img src="{{ asset('template_sep/assets/img/clients/sika.webp') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                        <h4>Sika Indonesia</h4>
                        <p>Sika Indonesia</p>
                        <a href="{{ asset('template_sep/assets/img/clients/sika.webp') }}" title="Sika Indonesia" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">
                    <div class="portfolio-content h-100 d-flex justify-content-center align-items-center">
                        <img src="{{ asset('template_sep/assets/img/clients/rapp.jpeg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                        <h4>PT Riau Andalan Pulp & Paper</h4>
                        <p>PT Riau Andalan Pulp & Paper</p>
                        <a href="{{ asset('template_sep/assets/img/clients/rapp.jpeg') }}" title="PT Riau Andalan Pulp & Paper" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">
                    <div class="portfolio-content h-100 d-flex justify-content-center align-items-center">
                        <img src="{{ asset('template_sep/assets/img/clients/vopak.png') }}" class="img-fluid w-75" alt="">
                        <div class="portfolio-info">
                        <h4>Vopak</h4>
                        <p>Vopak</p>
                        <a href="{{ asset('template_sep/assets/img/clients/vopak.png') }}" title="Vopak" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End Portfolio Item -->

            </div>

        </div>

    </section>

</main>

@endsection