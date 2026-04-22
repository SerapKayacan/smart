<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {!! SEO::generate() !!}
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Favicon -->
    <link href="{{ asset('assets/frontend/img/favicon.png') }}" rel="icon" type="image/png">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/lib/animate/animate.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/frontend/lib/owlcarousel/assets/owl.carousel.min.css') }}">

    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/frontend/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}">

    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/frontend/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/home.css') }}" rel="stylesheet" type="text/css">

    <!-- Removed duplicate bootstrap JS to prevent dropdown conflicts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Cleaned up duplicate stylesheets -->

    @if(env('GOOGLE_TAG_ID'))
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ env('GOOGLE_TAG_ID') }}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', '{{ env('GOOGLE_TAG_ID') }}');
    </script>
    @endif
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex flex-column align-items-center justify-content-center" style="background:linear-gradient(160deg,#060d1f 0%,#0b1a3a 60%,#0f1f45 100%);z-index:99999;">

        <!-- Spinning arc + logo -->
        <div class="position-relative d-flex align-items-center justify-content-center mb-5" style="width:200px;height:200px;">
            <svg class="position-absolute" width="200" height="200" style="animation:spinCW 1.4s linear infinite;">
                <circle cx="100" cy="100" r="93" fill="none" stroke="rgba(216,19,36,0.15)" stroke-width="2"/>
                <circle cx="100" cy="100" r="93" fill="none" stroke="#D81324" stroke-width="3"
                    stroke-dasharray="90 490" stroke-linecap="round"/>
            </svg>
            <svg class="position-absolute" width="200" height="200" style="animation:spinCCW 2s linear infinite;">
                <circle cx="100" cy="100" r="76" fill="none" stroke="rgba(255,255,255,0.05)" stroke-width="1.5"/>
                <circle cx="100" cy="100" r="76" fill="none" stroke="rgba(255,255,255,0.2)" stroke-width="1.5"
                    stroke-dasharray="50 430" stroke-linecap="round"/>
            </svg>
            <!-- Logo -->
            <div class="rounded-circle overflow-hidden d-flex align-items-center justify-content-center" style="width:130px;height:130px;background:#0b1a3a;border:1px solid rgba(216,19,36,0.25);">
                <img src="{{ asset('assets/frontend/img/logo.png') }}" alt="Smart Grup" style="width:110px;height:110px;object-fit:contain;">
            </div>
        </div>

        <!-- Divider line -->
        <div class="d-flex align-items-center gap-3 mb-3" style="width:200px;">
            <div style="flex:1;height:1px;background:rgba(216,19,36,0.3);"></div>
            <div style="width:5px;height:5px;background:#D81324;border-radius:50%;"></div>
            <div style="flex:1;height:1px;background:rgba(216,19,36,0.3);"></div>
        </div>

        <p style="color:rgba(255,255,255,0.95);font-size:1rem;letter-spacing:2px;text-align:center;margin:0;">Güvenli ve Temiz Bir Yaşam İçin Hoş Geldiniz</p>
    </div>
    <style>
        @keyframes spinCW  { to { transform: rotate(360deg); } }
        @keyframes spinCCW { to { transform: rotate(-360deg); } }
        #spinner.show { opacity: 1 !important; visibility: visible !important; }
    </style>
    <script>
        setTimeout(function () {
            var s = document.getElementById('spinner');
            s.style.transition = 'opacity 0.6s ease';
            s.style.opacity = '0';
            setTimeout(function(){ s.classList.remove('show'); s.style.opacity=''; }, 600);
        }, 1400);
    </script>
    <!-- Spinner End -->

 <!-- Topbar Start -->
    <div class="container-fluid bg-light p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>Ataköy 7-8-9-10 Kısım Mahallesi Bakırköy/İstanbul</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-envelope text-primary me-2"></small>
                    <small>bilgi@smartozelguvenlik.com</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>0212 474 20 35</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-0" href="https://www.instagram.com/smartgrup34/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="{{ route('home') }}" class="navbar-brand d-flex px-3 px-lg-3 ms-2 ">
            <img src="{{ asset('assets/frontend/img/logo.png') }}" alt="Smart Group Logo" class="img-fluid w-auto mt-2" height="120">
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ route('home') }}" class="nav-item nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}">ANA SAYFA</a>
                <a href="{{ route('about-us.index') }}" class="nav-item nav-link {{ Route::currentRouteName() == 'about-us.index' ? 'active' : '' }}">HAKKIMIZDA</a>
               
               <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle {{ in_array(Route::currentRouteName(), ['services-category.index', 'services.byCategory', 'home.services.show']) ? 'active' : '' }}" data-bs-toggle="dropdown" aria-expanded="false">HİZMETLERİMİZ</a>
                    <ul class="dropdown-menu m-0 border-0 shadow-sm" style="border-radius: 12px;">
                        <li><a class="dropdown-item fw-semibold {{ Route::currentRouteName() == 'services-category.index' ? 'active' : '' }}" href="{{ route('services-category.index') }}">Tüm Hizmetler</a></li>
                        <li><hr class="dropdown-divider"></li>
                        @if(!empty($serviceCategories))
                        @foreach ($serviceCategories as $serviceCategory)
                            <li>
                                <a class="dropdown-item {{ (Route::currentRouteName() == 'services.byCategory' && request()->route('slug') == $serviceCategory->slug) ? 'active' : '' }}" href="{{ route('services.byCategory', ['slug' => $serviceCategory->slug]) }}">
                                    {{ $serviceCategory->title }}
                                </a>
                            </li>
                        @endforeach
                        @endif
                    </ul>
                </div>        
                <a href="{{ route('contact.index') }}" class="nav-item nav-link {{ Route::currentRouteName() == 'contact.index' ? 'active' : '' }}">İLETİŞİM</a>
                <!-- Mobil İçin Referanslar Butonu / Sadece mobilde görünür -->
                <a href="{{ route('references.index') }}" class="nav-item nav-link d-lg-none {{ Route::currentRouteName() == 'references.index' ? 'active' : 'text-primary' }} fw-bold">REFERANSLARIMIZ</a>
            </div>
            <!-- Masaüstü İçin Referanslar Butonu / Sadece geniş ekranda görünür -->
            <a href="{{ route('references.index') }}" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">REFERANSLARIMIZ<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->
