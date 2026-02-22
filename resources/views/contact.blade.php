@extends('layout.app')
@section('title', 'Warom Indonesia - Contact Us')
@section('content')
{{-- Kosong dulu sesuai request --}}
<style>
.page-title-contact {
    background-image: url("/template_sep/assets/img/page-title-bg.jpg");
}
.section-separator {
    height: 2px;
    background: #feb900;
    margin: 60px 0;
}
</style>
<main class="main">
    <!-- Page Title -->
    <div class="page-title dark-background page-title-contact">
        <div class="container position-relative">
            <h1>Contact</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="current">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- End Page Title -->

    <section id="contact" class="contact section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">
                <div class="col-lg-6">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center h-100"
                        data-aos="fade-up" data-aos-delay="200">
                        <i class="bi bi-geo-alt"></i>
                        <h3>Workshop Address</h3>
                        <p style="text-align: center;">Jl. Macem, RT.002/RW.001, Cikiwul, Kec. Bantar Gebang<br>Kota Bks, Jawa Barat 17152.</p>
                    </div>
                </div><!-- End Info Item -->
                <div class="col-lg-3 col-md-6">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center h-100"
                        data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-telephone"></i>
                        <h3>Call Us</h3>
                        <p class="mt-3">
                        <strong>Whatsapp:</strong> 
                        <a href="https://wa.me/6285281456966" target="_blank">+62 21-259-81681</a><br>
                        <strong>Phone:</strong> 
                        <a href="" target="_blank">+62 21-259-81681</a>
                    </p>
                    </div>
                </div><!-- End Info Item -->
                <div class="col-lg-3 col-md-6">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center h-100"
                        data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-envelope"></i>
                        <h3>Email Us</h3>
                        <p>
                            <strong>Email:</strong> 
                            <a href="mailto:admin@sep-santi.com">admin@sep-santi.com</a>
                        </p>
                    </div>
                </div><!-- End Info Item -->
            </div>

            <div class="row gy-4 mt-1">
                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d126893.79718759339!2d106.998258!3d-6.338159!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e699382ac1d079f%3A0x33ee837ecd105932!2sWorkshop%20Santi%20Group!5e0!3m2!1sen!2sus!4v1755074322527!5m2!1sen!2sus"
                        frameborder="0" style="border:0; width: 100%; height: 400px;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div><!-- End Google Maps -->
            </div>

        </div>

        <!-- bikinin separator disini -->
        <div class="container">
            <div class="section-separator"></div>
        </div>

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">
                <div class="col-lg-6">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center h-100"
                        data-aos="fade-up" data-aos-delay="200">
                        <i class="bi bi-geo-alt"></i>
                        <h3>Head Office Address</h3>
                        <p style="text-align: center;">Jl. Prof. DR. Satrio No.7, RT.3/RW.3, Karet Semanggi, Kecamatan Setiabudi, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12930, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12950.</p>
                    </div>
                </div><!-- End Info Item -->
                <div class="col-lg-3 col-md-6">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center h-100"
                        data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-telephone"></i>
                        <h3>Call Us</h3>
                        <p class="mt-3">
                        <strong>Whatsapp:</strong> 
                        <a href="https://wa.me/6285281456966" target="_blank">+62 8528-1456-966</a><br>
                        <strong>Phone:</strong> 
                        <a href="" target="_blank">+62 21-8259-7857</a>
                    </p>
                    </div>
                </div><!-- End Info Item -->
                <div class="col-lg-3 col-md-6">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center h-100"
                        data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-envelope"></i>
                        <h3>Email Us</h3>
                        <p>
                            <strong>Email:</strong> 
                            <a href="mailto:admin@sep-santi.com">admin@sep-santi.com</a>
                        </p>
                    </div>
                </div><!-- End Info Item -->
            </div>

            <div class="row gy-4 mt-1">
                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.3222763756357!2d106.8195532!3d-6.221166199999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f39a7320dd25%3A0x92a61a52c0082dc4!2sThe%20Office%20Tower%20%40%20Ciputra%20World%202%20Jakarta!5e0!3m2!1sen!2sid!4v1771777377457!5m2!1sen!2sid"
                        frameborder="0" style="border:0; width: 100%; height: 400px;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div><!-- End Google Maps -->

            </div>

        </div>

    </section><!-- /Contact Section -->
</main>
@endsection