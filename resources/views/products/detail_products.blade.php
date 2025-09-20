@extends('layout.app')

@section('title', 'Warom Indonesia - Detail Products')

@section('content')
    <style>
        .page-title-about-us {
            background-image: url("/template_sep/assets/img/warom-images/back-warom.png");
            background-size: cover;
            background-position: top 25% center !important;
            min-height: 50vh;
            display: flex;
            align-items: center;
        }
        .features-image {
            position: relative;
            max-height: 400px;
        }
    </style>

    <main class="main">
        <!-- Page Title -->
        <div class="page-title dark-background page-title-about-us">
            <div class="container position-relative">
                <h1>Detail Products</h1>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/products') }}">Products</a></li>
                        <li class="current">Detail Products</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Alt Services Section -->
        <section id="alt-services" class="alt-services section">

            {{-- Hidden Input untuk Product ID --}}
            <input id="idData" type="text" class="form-control input-border-bottom" style="display: none;" value="{{ $id }}">

            <!-- Loading Spinner -->
            <div id="loading" style="display: none; justify-content: center; align-items: center; min-height: 100vh;">
                <img src="{{ asset('template_sep/assets/img/loading.svg') }}" alt="Loading..." />
            </div>

            <div class="container" id="section_products" style="display: none;">
                <div class="row justify-content-around gy-4">

                    <div class="features-image col-lg-6 d-flex flex-column" data-aos="fade-up" data-aos-delay="100">
                        <img src="#" alt="Detail Product Image" id="product_image" class="img-fluid mb-3">
                        
                        <button type="button" class="btn btn-primary" style="margin-top: 420px;" id="btn_download">Download Product Document</button>
                    </div>

                    <div class="col-lg-5 d-flex flex-column justify-content-center"  data-aos-delay="100">
                        <h3  id="product_name" >Enim quis est voluptatibus aliquid consequatur fugiat</h3>
                        <p id="description">
                            Esse voluptas cumque vel exercitationem. Reiciendis est hic accusamus. Non ipsam et sed
                            minima temporibus laudantium. Soluta voluptate sed facere corporis dolores excepturi
                        </p>

                        <h4><a href="#" class="">Spesifikasi : </a></h4>
                        <div id="icon_box">
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Alt Services Section -->
    </main>
@endsection

@push('js')
    @include('products.js.product_detail_js')
@endpush
