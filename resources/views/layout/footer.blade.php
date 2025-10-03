<footer id="footer" class="footer dark-background">
    <div class="container footer-top">
        <div class="row gy-4">
            <div class="col-lg-4 col-md-6 footer-about">
                <a href="{{ url('/') }}" class="logo d-flex align-items-center">
                    <span class="sitename">Warom Indonesia</span>
                </a>
                <p>Powered by PT. Sahabat Energi Persada</p>
                <div class="footer-contact pt-3">
                    <p>Jl. Macem, RT.002/RW.001, Cikiwul, Kec. Bantar Gebang</p>
                    <p>Kota Bks, Jawa Barat 17152</p>
                    <p class="mt-3">
                        <strong>Phone:</strong> 
                        <a href="https://wa.me/6285281456966" target="_blank">+6285281456966</a>
                    </p>
                    <p>
                        <strong>Email:</strong> 
                        <a href="mailto:admin@sep-santi.com">admin@sep-santi.com</a>
                    </p>
                </div>
                <div class="social-links d-flex mt-4">
                    <a href="#"><i class="bi bi-twitter-x"></i></a>
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 footer-links">
                <h4>Menu Index</h4>
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                    <li><a href="{{ url('/about_us') }}">About Us</a></li>
                    <!-- <li><a href="{{ url('/services') }}">Services</a></li>
                    <li><a href="#">Terms of service</a></li>
                    <li><a href="#">Privacy policy</a></li> -->
                </ul>
            </div>

            <!-- <div class="col-lg-2 col-md-3 footer-links">
                <h4>Our Services</h4>
                <ul>
                    <li><a href="#">Web Design</a></li>
                    <li><a href="#">Web Development</a></li>
                    <li><a href="#">Product Management</a></li>
                    <li><a href="#">Marketing</a></li>
                    <li><a href="#">Graphic Design</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-md-3 footer-links">
                <h4>Hic solutasetp</h4>
                <ul>
                    <li><a href="#">Molestiae accusamus iure</a></li>
                    <li><a href="#">Excepturi dignissimos</a></li>
                    <li><a href="#">Suscipit distinctio</a></li>
                    <li><a href="#">Dilecta</a></li>
                    <li><a href="#">Sit quas consectetur</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-md-3 footer-links">
                <h4>Nobis illum</h4>
                <ul>
                    <li><a href="#">Ipsam</a></li>
                    <li><a href="#">Laudantium dolorum</a></li>
                    <li><a href="#">Dinera</a></li>
                    <li><a href="#">Trodelas</a></li>
                    <li><a href="#">Flexo</a></li>
                </ul>
            </div> -->
        </div>
    </div>

    <div class="container copyright text-center mt-4">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">PT. Sahabat Energi Persada</strong> <span>All Rights Reserved</span></p>
        <!-- <div class="credits">
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div> -->
    </div>
</footer>

{{-- Scroll Top --}}
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
</a>

{{-- Preloader --}}
<div id="preloader"></div>

{{-- Vendor JS Files --}}
<script src="{{ asset('template_sep/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('template_sep/assets/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('template_sep/assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('template_sep/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('template_sep/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('template_sep/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('template_sep/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('template_sep/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>

{{-- Main JS File --}}
<script src="{{ asset('template_sep/assets/js/main.js') }}"></script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-1CJNW65P1X"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-1CJNW65P1X');
</script>
