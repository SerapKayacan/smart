@extends('frontend.layouts.master')
@section('content')
    <!-- Carousel Start -->
<div class="container-fluid p-0 mb-5">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner">
            @foreach ($carousels as $index => $carousel)
                <div class="carousel-item @if($index == 0) active @endif">
                    
                    <img class="w-100" 
                         src="{{ $carousel->getFirstMediaUrl('banner') }}" 
                         alt="Image">

                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">

                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">
                                        {!! $carousel->title !!}
                                    </h1>
  <p>{!! $carousel->description !!}</p>
                                    @if($carousel->button_text)
                                        <a href="{{ $carousel->button_link ?? '#' }}" 
                                           class="btn btn-primary py-3 px-5 animated slideInDown">
                                            {{ $carousel->button_text }}
                                            <i class="fa fa-arrow-right ms-3"></i>
                                        </a>
                                    @endif
                                </div>

                               {{--  <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <img class="img-fluid" 
                                         src="{{ $carousel->getFirstMediaUrl('banner') }}" 
                                         alt="">
                                </div> --}}

                            </div>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev" aria-label="Önceki Slayt">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next" aria-label="Sonraki Slayt">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>

    </div>
</div>
    <!-- Carousel End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex py-5 px-4">
                        <i class="fa fa-certificate fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Kaliteli Hizmet</h5>
                            <p>Profesyonel ekibimizle en kaliteli güvenlik ve temizlik hizmetini sunuyoruz.</p>
                            <a class="text-secondary border-bottom" href="{{ route('services-category.index') }}">Devamını Oku</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="d-flex bg-light py-5 px-4">
                        <i class="fa fa-users-cog fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Uzman Kadro</h5>
                            <p>Alanında uzman ve deneyimli personelimizle güvenilir hizmet garantisi veriyoruz.</p>
                            <a class="text-secondary border-bottom" href="{{ route('about-us.index') }}">Devamını Oku</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="d-flex py-5 px-4">
                        <i class="fa fa-tools fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Modern Ekipman</h5>
                            <p>En son teknoloji ekipmanlarla hizmetlerimizi en yüksek standartta gerçekleştiriyoruz.</p>
                            <a class="text-secondary border-bottom" href="{{ route('services-category.index') }}">Devamını Oku</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 pt-4 about-img-container">
                    <div class="position-relative h-100 wow fadeIn" data-wow-delay="0.1s">
                        <div class="row g-2 h-100">
                            <div class="col-6">
                                <div class="position-relative h-100">
                                    <img class="img-fluid w-100 h-100 about-img-item" src="{{ asset('assets/frontend/img/about-us2.jpg') }}" alt="Güvenlik Hizmetleri">
                                    <div class="position-absolute bottom-0 start-0 w-100 p-2 text-center about-img-caption-blue">
                                        <span class="text-white fw-bold about-img-caption-text">GÜVENLİK</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="position-relative h-100">
                                    <img class="img-fluid w-100 h-100 about-img-item" src="{{ asset('assets/frontend/img/about-us.jpg') }}" alt="Temizlik Hizmetleri">
                                    <div class="position-absolute bottom-0 start-0 w-100 p-2 text-center about-img-caption-red">
                                        <span class="text-white fw-bold about-img-caption-text">TEMİZLİK</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="position-absolute top-0 end-0 mt-n4 me-n4 py-4 px-5 about-experience-box">
                            <h1 class="display-4 text-white mb-0">11 <span class="fs-4">Yıl</span></h1>
                            <h4 class="text-white">Deneyim</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="h6 text-primary text-uppercase">// Hakkımızda //</div>
                    <h1 class="mb-4"><span class="text-primary">Smart Grup</span> Güvenlik ve Temizlik Hizmetlerinde Doğru Adres</h1>
                    <p class="mb-4">11 yılı aşkın deneyimimizle güvenlik ve temizlik sektöründe güvenilir çözümler sunuyoruz. Uzman kadromuz ve modern ekipmanlarımızla müşterilerimize en yüksek kalitede hizmet vermeyi taahhüt ediyoruz.</p>
                    <div class="row g-4 mb-3 pb-3">
                        <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1 about-list-number-box">
                                    <span class="fw-bold text-secondary">01</span>
                                </div>
                                <div class="ps-3">
                                    <div class="h6">Profesyonel ve Uzman Ekip</div>
                                    <span>Alanında uzman, sertifikalı personelimizle güvenilir hizmet sunuyoruz.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1 about-list-number-box">
                                    <span class="fw-bold text-secondary">02</span>
                                </div>
                                <div class="ps-3">
                                    <div class="h6">Kalite Odaklı Hizmet Anlayışı</div>
                                    <span>Her projede en yüksek kalite standartlarını uyguluyoruz.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1 about-list-number-box">
                                    <span class="fw-bold text-secondary">03</span>
                                </div>
                                <div class="ps-3">
                                    <div class="h6">Ödüllü ve Güvenilir Firma</div>
                                    <span>Sektörde kazandığımız ödüller ve referanslarla fark yaratıyoruz.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('about-us.index') }}" class="btn btn-primary py-3 px-5">Daha Fazla<i class="fa fa-arrow-right ms-3"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
<section class="new-services-slider">
      <div class="recipe-container">
        <h1>HİZMETLERİMİZ</h1>
        <div class="swiper">
          <div class="swiper-wrapper">
            @foreach($services as $service)
            <div class="swiper-slide post">
              <img
                class="post-img"
                src="{{ $service->getFirstMediaUrl('banner', 'large') ?: asset('assets/frontend/img/about-us.jpg') }}"
                alt="{{ $service->title }}" />

              <div class="post-body">
                <div class="post-detail">
                  <h2 class="post-name">{{ $service->title }}</h2>
                </div>

                <div class="post-actions">
                  <a class="post-like" href="{{ route('services-detail.show', ['slug' => $service->slug]) }}" aria-label="{{ $service->title }} detaylarını gör">
                    <i class="fas fa-arrow-right" aria-hidden="true"></i>
                  </a>
                </div>
              </div>
            </div>
            @endforeach
          </div>
          <div class="swiper-scrollbar"></div>
        </div>
      </div>
    </section>

    <!-- Fact Start -->
    <div class="container-fluid fact bg-dark my-5 py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                    <i class="fa fa-check fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">11</h2>
                    <p class="text-white mb-0">Yıllık Deneyim</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                    <i class="fa fa-users-cog fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">1000</h2>
                    <p class="text-white mb-0">Uzman Personel</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-users fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">500</h2>
                    <p class="text-white mb-0">Memnun Müşteri</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                    <i class="fa fa-building fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">300</h2>
                    <p class="text-white mb-0">Tamamlanan Proje</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact End -->





    <!-- Custom Swiper Slider Start -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />



    <section class="custom-slider-section">
      <div class="content-container mb-4 mb-md-0">
        <span>KEŞFEDİN</span>
        <h1>Operasyonel Faaliyetlerimiz</h1>
        <hr>
        <p>Smart Grup olarak güvenlik ve temizlik alanlarında uzman kadromuzla, en yüksek kalitede profesyonel çözümler sunuyoruz.</p>
        <a href="{{ route('references.index') }}" class="btn-download">TÜM PROJELER</a>
      </div>
      <div class="swiper">
        <div class="swiper-wrapper">
          @foreach($tabPanels as $tab)
          <div class="swiper-slide custom-swiper-slide" style="background: linear-gradient(to top, rgba(11,33,84,0.9), rgba(11,33,84,0), rgba(11,33,84,0)), url('{{ $tab->getFirstMediaUrl('banner', 'large') ?: asset('assets/frontend/img/about-us.jpg') }}') no-repeat 50% 50% / cover;">
         
          <div class="slide-content">
            {{--   
              <h2>{{ $tab->title }}</h2>
              --}}
            </div>
          </div>
          
          @endforeach
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
      </div>
    </section>

    
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
      document.addEventListener('DOMContentLoaded', function () {
        var swiperOld = new Swiper(".custom-slider-section .swiper", {
          effect: "coverflow",
          grabCursor: true,
          centeredSlides: true,
          coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 100,
            modifier: 3,
            slideShadows: true
          },
          keyboard: {
            enabled: true
          },
          mousewheel: {
            thresholdDelta: 70
          },
          loop: true,
          pagination: {
            el: ".custom-slider-section .swiper-pagination",
            clickable: true
          },
          breakpoints: {
            640: { slidesPerView: 2 },
            768: { slidesPerView: 1 },
            1024: { slidesPerView: 2 },
            1560: { slidesPerView: 3 }
          }
        });

        var swiperNew = new Swiper(".new-services-slider .swiper", {
          grabCursor: true,
          speed: 400,
          mousewheel: { invert: false },
          scrollbar: { el: ".new-services-slider .swiper-scrollbar", draggable: true },
          slidesPerView: 1,
          spaceBetween: 15,
          breakpoints: {
            640: { slidesPerView: 2, spaceBetween: 20 },
            900: { slidesPerView: 2, spaceBetween: 25 },
            1200: { slidesPerView: 3, spaceBetween: 30 },
            1500: { slidesPerView: 4, spaceBetween: 30 },
          },
        });
      });
    </script>
    <!-- Custom Swiper Slider End -->
@endsection
