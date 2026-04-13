@extends('frontend.layouts.master')
@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5" style="background: linear-gradient(135deg, #0B2154, #1a3a7a) !important;">
        <div class="container py-3">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-white text-uppercase mb-3">// Hakkımızda //</h6>
                <h1 class="text-white mb-0">Smart Grup Kimdir?</h1>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Intro Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="row g-2">
                        <div class="col-6">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="{{ asset('assets/frontend/img/about-us2.jpg') }}" style="object-fit:cover; height:220px; border-radius:8px;" alt="Güvenlik">
                                <div class="position-absolute bottom-0 start-0 w-100 p-2 text-center" style="background:rgba(11,33,84,0.8);border-radius:0 0 8px 8px;">
                                    <span class="text-white fw-bold" style="letter-spacing:1px;">GÜVENLİK</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="{{ asset('assets/frontend/img/about-us.jpg') }}" style="object-fit:cover; height:220px; border-radius:8px;" alt="Temizlik">
                                <div class="position-absolute bottom-0 start-0 w-100 p-2 text-center" style="background:rgba(216,19,36,0.8);border-radius:0 0 8px 8px;">
                                    <span class="text-white fw-bold" style="letter-spacing:1px;">TEMİZLİK</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                    <h6 class="text-primary text-uppercase">// Genel Tanıtım //</h6>
                    <h2 class="mb-4">Smart Grup Hakkında</h2>
                    <p class="mb-4">Smart Grup olarak 2013 yılından bu yana güvenlik ve temizlik sektöründe faaliyet göstermekteyiz. İstanbul merkezli şirketimiz, kurumsal ve bireysel müşterilerimize profesyonel, güvenilir ve kaliteli hizmet sunmayı ilke edinmiştir. Uzman kadromuz ve modern ekipmanlarımızla sektörde fark yaratmaya devam ediyoruz.</p>
                    <div class="d-flex gap-4">
                        <div class="text-center">
                            <h3 class="text-primary fw-bold mb-0">11+</h3>
                            <small class="text-muted">Yıllık Deneyim</small>
                        </div>
                        <div class="text-center">
                            <h3 class="text-primary fw-bold mb-0">250+</h3>
                            <small class="text-muted">Uzman Personel</small>
                        </div>
                        <div class="text-center">
                            <h3 class="text-primary fw-bold mb-0">500+</h3>
                            <small class="text-muted">Memnun Müşteri</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Intro End -->

    <!-- Security Section Start -->
    <div class="container-fluid py-5" style="background:#f8f9fa;">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-uppercase mb-2" style="color:#0B2154; letter-spacing:2px;">// Güvenlik Hizmetleri //</h6>
                    <h2 class="mb-4">Profesyonel Özel Güvenlik</h2>
                    <p class="mb-4">Smart Grup Güvenlik birimi olarak; site, AVM, fabrika, şantiye, eğitim kurumları ve otel gibi farklı sektörlere özel güvenlik çözümleri sunuyoruz. Tüm personelimiz Özel Güvenlik Kimlik Kartı'na sahip, eğitimli ve deneyimli bireylerden oluşmaktadır.</p>
                    <div class="row g-3 mb-4">
                        <div class="col-12">
                            <div class="d-flex align-items-start gap-3">
                                <div class="d-flex align-items-center justify-content-center flex-shrink-0" style="width:45px;height:45px;background:#0B2154;border-radius:6px;">
                                    <i class="fa fa-shield-alt text-white"></i>
                                </div>
                                <div>
                                    <h6 class="mb-1">Sertifikalı Güvenlik Personeli</h6>
                                    <span class="text-muted small">Tüm personelimiz yasal zorunlulukları karşılayan sertifikalara sahiptir.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-start gap-3">
                                <div class="d-flex align-items-center justify-content-center flex-shrink-0" style="width:45px;height:45px;background:#0B2154;border-radius:6px;">
                                    <i class="fa fa-clock text-white"></i>
                                </div>
                                <div>
                                    <h6 class="mb-1">7/24 Kesintisiz Hizmet</h6>
                                    <span class="text-muted small">Gece gündüz kesintisiz güvenlik hizmeti ile tesislerinizi koruyoruz.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-start gap-3">
                                <div class="d-flex align-items-center justify-content-center flex-shrink-0" style="width:45px;height:45px;background:#0B2154;border-radius:6px;">
                                    <i class="fa fa-building text-white"></i>
                                </div>
                                <div>
                                    <h6 class="mb-1">Geniş Hizmet Yelpazesi</h6>
                                    <span class="text-muted small">Site, AVM, fabrika, şantiye, okul ve otel güvenliği alanlarında hizmet veriyoruz.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('services-category.index') }}" class="btn py-3 px-5 text-white" style="background:#0B2154;">
                        Güvenlik Hizmetleri<i class="fa fa-arrow-right ms-3"></i>
                    </a>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                    <img src="{{ asset('assets/frontend/img/about-us2.jpg') }}" class="img-fluid rounded" style="object-fit:cover; max-height:420px; width:100%;" alt="Güvenlik Hizmetleri">
                </div>
            </div>
        </div>
    </div>
    <!-- Security Section End -->

    <!-- Cleaning Section Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s" style="order: 2; order-lg: 1;">
                    <img src="{{ asset('assets/frontend/img/about-us.jpg') }}" class="img-fluid rounded" style="object-fit:cover; max-height:420px; width:100%;" alt="Temizlik Hizmetleri">
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s" style="order: 1; order-lg: 2;">
                    <h6 class="text-uppercase mb-2" style="color:#D81324; letter-spacing:2px;">// Temizlik Hizmetleri //</h6>
                    <h2 class="mb-4">Profesyonel Temizlik Çözümleri</h2>
                    <p class="mb-4">Smart Grup Temizlik birimi olarak; AVM, otel, hastane ve kurumsal alanlara yönelik kapsamlı temizlik hizmetleri sunuyoruz. Çevre dostu ürünler ve modern ekipmanlarla hijyenik, düzenli ve sağlıklı ortamlar oluşturuyoruz.</p>
                    <div class="row g-3 mb-4">
                        <div class="col-12">
                            <div class="d-flex align-items-start gap-3">
                                <div class="d-flex align-items-center justify-content-center flex-shrink-0" style="width:45px;height:45px;background:#D81324;border-radius:6px;">
                                    <i class="fa fa-broom text-white"></i>
                                </div>
                                <div>
                                    <h6 class="mb-1">Uzman Temizlik Ekibi</h6>
                                    <span class="text-muted small">Eğitimli ve deneyimli personelimizle profesyonel temizlik hizmeti sunuyoruz.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-start gap-3">
                                <div class="d-flex align-items-center justify-content-center flex-shrink-0" style="width:45px;height:45px;background:#D81324;border-radius:6px;">
                                    <i class="fa fa-leaf text-white"></i>
                                </div>
                                <div>
                                    <h6 class="mb-1">Çevre Dostu Ürünler</h6>
                                    <span class="text-muted small">İnsan ve çevre sağlığına duyarlı, sertifikalı temizlik ürünleri kullanıyoruz.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-start gap-3">
                                <div class="d-flex align-items-center justify-content-center flex-shrink-0" style="width:45px;height:45px;background:#D81324;border-radius:6px;">
                                    <i class="fa fa-hotel text-white"></i>
                                </div>
                                <div>
                                    <h6 class="mb-1">Geniş Hizmet Kapsamı</h6>
                                    <span class="text-muted small">Kat hizmetleri, steward, garson ve bulaşıkhane hizmetleri de sunuyoruz.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('services-category.index') }}" class="btn py-3 px-5 text-white" style="background:#D81324;">
                        Temizlik Hizmetleri<i class="fa fa-arrow-right ms-3"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Cleaning Section End -->

@endsection
