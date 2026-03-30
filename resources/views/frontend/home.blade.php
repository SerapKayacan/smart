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
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
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
                <div class="col-lg-6 pt-4" style="min-height: 400px;">
                    <div class="position-relative h-100 wow fadeIn" data-wow-delay="0.1s">
                        <div class="row g-2 h-100">
                            <div class="col-6">
                                <div class="position-relative h-100">
                                    <img class="img-fluid w-100 h-100" src="{{ asset('assets/frontend/img/about-us.jpg') }}" style="object-fit: cover; border-radius: 8px;" alt="Güvenlik Hizmetleri">
                                    <div class="position-absolute bottom-0 start-0 w-100 p-2 text-center" style="background:rgba(11,33,84,0.75); border-radius: 0 0 8px 8px;">
                                        <span class="text-white fw-bold" style="font-size:0.85rem; letter-spacing:1px;">GÜVENLİK</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="position-relative h-100">
                                    <img class="img-fluid w-100 h-100" src="{{ asset('assets/frontend/img/about-us2.jpg') }}" style="object-fit: cover; border-radius: 8px;" alt="Temizlik Hizmetleri">
                                    <div class="position-absolute bottom-0 start-0 w-100 p-2 text-center" style="background:rgba(216,19,36,0.75); border-radius: 0 0 8px 8px;">
                                        <span class="text-white fw-bold" style="font-size:0.85rem; letter-spacing:1px;">TEMİZLİK</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="position-absolute top-0 end-0 mt-n4 me-n4 py-4 px-5" style="background: rgba(0, 0, 0, .08);">
                            <h1 class="display-4 text-white mb-0">11 <span class="fs-4">Yıl</span></h1>
                            <h4 class="text-white">Deneyim</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h6 class="text-primary text-uppercase">// Hakkımızda //</h6>
                    <h1 class="mb-4"><span class="text-primary">Smart Grup</span> Güvenlik ve Temizlik Hizmetlerinde Doğru Adres</h1>
                    <p class="mb-4">11 yılı aşkın deneyimimizle güvenlik ve temizlik sektöründe güvenilir çözümler sunuyoruz. Uzman kadromuz ve modern ekipmanlarımızla müşterilerimize en yüksek kalitede hizmet vermeyi taahhüt ediyoruz.</p>
                    <div class="row g-4 mb-3 pb-3">
                        <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">01</span>
                                </div>
                                <div class="ps-3">
                                    <h6>Profesyonel ve Uzman Ekip</h6>
                                    <span>Alanında uzman, sertifikalı personelimizle güvenilir hizmet sunuyoruz.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">02</span>
                                </div>
                                <div class="ps-3">
                                    <h6>Kalite Odaklı Hizmet Anlayışı</h6>
                                    <span>Her projede en yüksek kalite standartlarını uyguluyoruz.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">03</span>
                                </div>
                                <div class="ps-3">
                                    <h6>Ödüllü ve Güvenilir Firma</h6>
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


    <!-- Service Start -->
    <div class="container-xxl service py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">// Hizmetlerimiz //</h6>
                <h1 class="mb-5">Hizmetlerimizi Keşfedin</h1>
            </div>

            <!-- Tab Buttons Row -->
            <div class="nav d-flex flex-wrap gap-3 justify-content-center mb-4 wow fadeInUp" data-wow-delay="0.2s" id="service-tab-nav" role="tablist">
                @foreach($tabPanels as $i => $tab)
                @php $color = $i % 2 === 0 ? '#0B2154' : '#D81324'; @endphp
                        <button class="btn d-flex align-items-center gap-2 px-4 py-3 {{ $i === 0 ? 'active' : '' }}"
                        data-bs-toggle="pill"
                        data-bs-target="#tab-pane-{{ $tab->id }}"
                        type="button"
                        role="tab"
                        aria-controls="tab-pane-{{ $tab->id }}"
                        aria-selected="{{ $i === 0 ? 'true' : 'false' }}"
                        data-color="{{ $color }}"
                        style="border:2px solid {{ $color }};border-radius:10px;font-weight:600;color:{{ $i === 0 ? '#fff' : $color }};background:{{ $i === 0 ? $color : 'transparent' }};">
                    {{ $tab->nav_button_text }}
                </button>
                @endforeach
            </div>

            <!-- Tab Content -->
            <div class="tab-content wow fadeInUp" data-wow-delay="0.3s">
                @foreach($tabPanels as $i => $tab)
                @php $color = $i % 2 === 0 ? '#0B2154' : '#D81324'; @endphp
                <div class="tab-pane fade {{ $i === 0 ? 'show active' : '' }}" id="tab-pane-{{ $tab->id }}">
                    <div class="row g-4 align-items-center">
                        <div class="col-md-5" style="min-height:320px;">
                            <div class="position-relative h-100" style="min-height:320px;">
                                @if($tab->hasMedia('banner'))
                                    <img class="position-absolute img-fluid w-100 h-100" src="{{ $tab->getFirstMediaUrl('banner','large') }}" style="object-fit:cover;border-radius:12px;" alt="{{ $tab->nav_button_text }}">
                                @else
                                    <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('assets/frontend/img/service-' . min($i+1, 4) . '.jpg') }}" style="object-fit:cover;border-radius:12px;" alt="{{ $tab->nav_button_text }}">
                                @endif
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h3 class="mb-3" style="color:{{ $color }};">{!! $tab->title !!}</h3>
                            <p class="mb-4 text-muted">{!! $tab->description !!}</p>
                            @if($tab->bullet_1)<p class="mb-2"><i class="fa fa-check me-3" style="color:{{ $color }};"></i>{{ $tab->bullet_1 }}</p>@endif
                            @if($tab->bullet_2)<p class="mb-2"><i class="fa fa-check me-3" style="color:{{ $color }};"></i>{{ $tab->bullet_2 }}</p>@endif
                            @if($tab->bullet_3)<p class="mb-4"><i class="fa fa-check me-3" style="color:{{ $color }};"></i>{{ $tab->bullet_3 }}</p>@endif
                            <a href="{{ $tab->button_link ?? route('services-category.index') }}"
                               class="btn text-white py-3 px-5" style="background:{{ $color }};border-radius:8px;">
                                {{ $tab->button_text ?? 'Devamını Oku' }}<i class="fa fa-arrow-right ms-3"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Service End -->

    <script>
        (function () {
            var buttons = document.querySelectorAll('#service-tab-nav [data-color]');
            function setColors() {
                buttons.forEach(function(btn) {
                    var color = btn.getAttribute('data-color');
                    if (btn.classList.contains('active')) {
                        btn.style.backgroundColor = color;
                        btn.style.color = '#fff';
                    } else {
                        btn.style.backgroundColor = 'transparent';
                        btn.style.color = color;
                    }
                });
            }
            setColors();
            buttons.forEach(function(btn) {
                btn.addEventListener('click', function() { setTimeout(setColors, 10); });
            });
        })();
    </script>


@endsection
