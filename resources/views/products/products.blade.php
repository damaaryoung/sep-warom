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

        /* biar input search mepet kanan dan full lebar sisa space */
        #div_search_navbar {
            border-radius: 20px;
            padding: 10px 20px;
            border: #feb900;
            background-color: #000000;
        }

        #search_navbar ul .search-wrapper {
            flex: 1;
        }

        #search_navbar ul .search-wrapper input {
            width: 100%;
        }

        .text_custom {
            color: white;
            margin-left: 20px;
        }
        #filter {
            display: flex;
            flex-wrap: wrap; /* biar kalau kepanjangan bisa turun */
            gap: 10px;       /* jarak antar item */
        }

        .filter-item {
            display: flex;
            align-items: center; /* ini bikin teks & icon sejajar vertikal */
            gap: 5px;            /* jarak antara teks dan icon */
        }

        .text_custom {
            margin: 0; /* hapus margin bawaan p */
        }

        #loading {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5); /* Semitransparent black background */
            z-index: 9999;
            display: flex;
            justify-content: center;
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

        <!-- Loading Spinner -->
        <div id="loading" style="display: none; justify-content: center; align-items: center; min-height: 100vh;">
            <img src="{{ asset('template_sep/assets/img/loading.svg') }}" alt="Loading..." />
        </div>

        <section id="testimonials" class="testimonials section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Products</h2>

                <!-- <p>Our Product Page is under constructions</p>
            <p>Please download our Newest Products Cataloge</p>
            </br>
            <a href="{{ asset('template_sep/assets/file_uploads/GeneralCatalogue_compressed.pdf') }}" 
                download="GeneralCatalogue_compressed.pdf">
                <button type="button" class="btn btn-outline-success">
                    <i class="bi bi-download"></i> Download Catalogue
                </button>
            </a> -->

                <!-- </br></br></br> -->


                <!-- <embed src="{{ asset('template_sep/assets/file_uploads/GeneralCatalogue_compressed.pdf') }}" width="900px" height="2100px" /> -->
            </div>
            <!-- End Section Title -->

            <div class="container" id="div_search_navbar" data-aos="fade-up">
                <nav id="search_navbar" class="navmenu">
                    <ul>
                        <li class="dropdown" id="categories_dropdown"><a href="javascript:void(0)"><span>Choose Categories</span> <i
                                    class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul id="categories_list">
                            </ul>
                        </li>
                        <li class="dropdown" id="sub_categories_dropdown" style="display: none;"><a href="javascript:void(0)"><span>Choose Sub Categories</span> <i
                                    class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul id="sub_categories_list">
                            </ul>
                        </li>
                        <div class="search-wrapper">
                            <input id="formInputSearch" type="text" name="search-items" class="form-control" placeholder="Search Products" required="">
                        </div>
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>

                <div id="filter" style="display: none;">
                    <div class="filter-item">
                        <p class="text_custom">Filter :</p>
                    </div>
                    <div id="filter_category" class="filter-item" style="display: none;">
                        <p id="choosen_category" class="text_custom">Category</p>
                        <i class="fa-solid fa-circle-xmark" style="color: white" id="deleteCategory"></i>
                    </div>
                    <div id="filter_sub_category" class="filter-item" style="display: none;">
                        <p id="choosen_sub_category" class="text_custom">Sub Category</p>
                        <i class="fa-solid fa-circle-xmark" style="color: white" id="deleteSubCategory"></i>
                    </div>
                </div>
            </div>
            
            <input id="searchCategoryId" type="text" class="form-control input-border-bottom" style="display: none;">
            <input id="seerchSubCategoryId" type="text" class="form-control input-border-bottom" style="display: none;">
            <input id="selectedPage" type="text" class="form-control input-border-bottom" style="display: none;">
            <input id="selectedPageSearch" type="text" class="form-control input-border-bottom" style="display: none;">

        <!-- Services Section -->
        <section id="product_sections" class="services section ">
            <div class="container" id="product_cotainer">
                <div class="row gy-4" id="product_table">

                </div>
            </div>
        </section><!-- /Services Section -->

        <div class="container section-title" data-aos="fade-up" style="display:none; margin-top: 50px;" id="fail_load">
            <h2 id="fail_msg">Pesan error</h2>
        </div>

        <nav aria-label="Page navigation example" id="nav_pagination_all" style="display:none;">
            <ul class="pagination justify-content-center" id="ul_pagination_all">
            </ul>
        </nav>

        <nav aria-label="Page navigation example" id="nav_pagination_search" style="display:none;">
            <ul class="pagination justify-content-center" id="ul_pagination_search">
            </ul>
        </nav>

        </section>
        
    </main>

@endsection

@push('js')
    @include('products.js.main_js')
@endpush